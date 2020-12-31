<?php


namespace App\Repositories;


use App\Car;
use Illuminate\Http\Request;


class CartRepository
{
    public function add(Request $request, Car $cars)
    {

        \Cart::session(auth()->user()->id)->add(array(
            'id' => uniqid(),
            'title' => $cars->title,
            'slug' => $cars->slug,
            'price' => empty($cars->price) && $cars->status === 'published' ? 'published' : $cars->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'id' => $cars->id,
                'slug_link' => $cars->slug_link,
            ),
            'associatedModel' => $cars
        ));
    }
}
