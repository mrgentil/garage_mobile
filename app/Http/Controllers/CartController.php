<?php

namespace App\Http\Controllers;

use App\Car;
use App\Repositories\CartRepository;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * @var CartRepository
     */
    private $CartRepository;

    /**
     * CartController constructor.
     * @param CartRepository $CartRepository
     */
    public function __construct(CartRepository $CartRepository)
    {
        $this->middleware('auth');
        $this->CartRepository = $CartRepository;
    }

    public function index()
    {
        return view('cart.index');
    }

    public function add_to_cart(Request $request, Car $car)
    {
       $this->CartRepository->add($request,$car);

        flash('Voiture ajoutée au panier avec succès. <a class="alert-link" href="' . route('cart.index') . '"> Voir le contenu du panier</a>')->success();
        return redirect()->back();
    }

    public function remove_to_cart(string $id)
    {
        \Cart::session(auth()->user()->id)->remove($id);
        flash('Voiture retirée du panier avec succès')->success();
        return redirect()->back();
    }
}
