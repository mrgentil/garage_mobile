<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * @var ServiceRepository
     */
    private $serviceRepository;

    /**
     * ServiceController constructor.
     * @param ServiceRepository $serviceRepository
     */
    public function __construct(ServiceRepository $serviceRepository)
    {
        $this->middleware('auth')->only(['order', 'post_order']);

        $this->serviceRepository = $serviceRepository;
    }

    public function index()
    {
        $services = $this->serviceRepository->getLatest();
        $counter = 1;
        return view('service.index', compact('services', 'counter'));
    }

    public function show(string $slug)
    {
        $service = $this->serviceRepository->getService($slug);

        return view('service.show', compact('service'));
    }

    public function order(string $slug)
    {
        $service = $this->serviceRepository->getService($slug);
        return view('service.order', compact('service'));
    }

    public function post_order(OrderRequest $request)
    {

        $this->serviceRepository->post_order(
            $request->service_id, $request->first_name,
            $request->last_name, $request->email, $request->phone,  $request->car_make,
            date('Y-m-d', date(strtotime($request->desired_date)))
            , $request->localization, $request->problem, $request->model,
            $request->fuel_type, $request->engine_size
        );
        flash('Commande est enregistrée avec succès');
        return redirect()->to(url()->previous() . '#order-form');
    }
}
