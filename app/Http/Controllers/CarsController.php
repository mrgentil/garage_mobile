<?php

namespace App\Http\Controllers;

use App\Car;
use App\Repositories\CarsRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * @var CarsRepository
     */
    private $CarsRepository;

    /**
     * PhoneController constructor.
     * @param CarsRepository $CarsRepository
     */
    public function __construct(CarsRepository $CarsRepository)
    {
        $this->CarsRepository = $CarsRepository;
    }

    public function index()
    {
        $cars = Car::query()->with('user','type')
            ->orderBy('id', 'desc')->paginate(9);

        return view('cars.index', compact('cars'));
    }

    public function show(string $slug)
    {
        $cars = Car::query()
            ->where('slug', $slug)
            ->firstOrFail();
        return view('cars.show', compact('cars'));
    }
}
