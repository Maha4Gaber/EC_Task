<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Categorys;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Cats = Categorys::all();
        $products=Products::all();

        return view(
            'Admin.product.index',
            compact('Cats')
        );
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Cats = Categorys::all();

        return view(
            'Admin.product.Create',
            compact('Cats')
        );
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        $validatedate = $request->validated();
        // $category = Categoris::findOrFail($validatedate['categori_id']);

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/products/', $filename);

            $product = Products::create([
                'categori_id' => $validatedate['categori_id'],
                'name' => $validatedate['name'],
                'desc' => $validatedate['desc'],
                'img' => $filename,
                'price' => $validatedate['price'],
                'discount' => $validatedate['discount'],
                'quantity' => $validatedate['quantity'],
                'offer' => $validatedate['offer'],
            ]);
        } else {
            $product = Products::create(
                [
                'categori_id' => $request->categori_id,
                'name' => $request->name,
                'desc' => $request->desc,
                'img' => $request->img,
                'price' => $request->price,
                'discount' => $request->discount,
                'quantity' => $request->quantity,
                'offer' => $request->offer,
            ]
        );
        }
        // Products::create(
        //     $request->all()
        // );
        $Cats = Categorys::all();
        $products=Products::all();
        return view(
            'Admin.product.index',
            compact('Cats','products')
        );
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}