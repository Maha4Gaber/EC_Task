<?php

namespace App\Http\Controllers;

use Cart;
// use App\Models\Carts;
use App\Http\Requests\StoreCartsRequest;
use App\Http\Requests\UpdateCartsRequest;
use App\Models\Products;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "maha";
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $userId = auth()->user()->id; // or any string represents user identifier
        $product = Products::findOrFail($id);
        Cart::session($userId)->add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            // 'attributes' => array(),
            // 'associatedModel' => $Product
        ));
        // Cart::session($userId)->update(456, [
        //     'quantity' => 2,
        //     'price' => 98.67
        // ]);
        $items = Cart::getContent();
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {
        $userId = auth()->user()->id; // or any string represents user identifier
        $product = Products::findOrFail($id);
        Cart::session($userId)->add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            // 'attributes' => array(),
            // 'associatedModel' => $Product
        ));
        // Cart::session($userId)->update(456, [
        //     'quantity' => 2,
        //     'price' => 98.67
        // ]);
        $items = Cart::getContent();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Carts $carts,$id)
    {
        $userId = auth()->user()->id; // or any string represents user identifier
        $product = Products::findOrFail($id);
        Cart::session($userId)->add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            // 'attributes' => array(),
            // 'associatedModel' => $Product
        ));
        // Cart::session($userId)->update(456, [
        //     'quantity' => 2,
        //     'price' => 98.67
        // ]);
        $items = Cart::getContent();
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carts $carts, $id)
    {
        $userId = auth()->user()->id; // or any string represents user identifier
        $product = Products::findOrFail($id);
        Cart::session($userId)->add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            // 'attributes' => array(),
            // 'associatedModel' => $Product
        ));
        // Cart::session($userId)->update(456, [
        //     'quantity' => 2,
        //     'price' => 98.67
        // ]);
        $items = Cart::getContent();
        //


        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartsRequest $request, Carts $carts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carts $carts)
    {
        //
    }
    public function addtocart( $id )
    {

        # code...
    }
}