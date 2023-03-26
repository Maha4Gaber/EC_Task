<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategorysRequest;
use App\Http\Requests\UpdateCategorysRequest;
use App\Models\Categorys;
use App\Models\Products;

class CategorysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Cats =Categorys::all();
        return view(
        'Admin.Cat.index', compact('Cats'));
        
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Cat.Create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategorysRequest $request)
    {
        Categorys::create(
            $request->all()
        );
        $Cats = Categorys::all();
        return view(
            'Admin.Cat.index',
            compact('Cats')
        );
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorys $categorys,$id)
    {
        $cat=Categorys::find($id);
        $products=Products::all();
        return view(
            'Admin.Cat.Cat_id',
            compact('cat','products')
        );
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorys $categorys)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategorysRequest $request, Categorys $categorys)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorys $categorys)
    {
        //
    }
}
