<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoresublliersRequest;
use App\Http\Requests\UpdatesublliersRequest;
use App\Models\Categorys;
use App\Models\Products;
use App\Models\sublliers;

class SublliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subs =sublliers::all();
        return view(
        'Admin.Subl.index', compact('subs'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.Subl.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresublliersRequest $request)
    {
        sublliers::create(
            $request->all()
        );
        $subs = sublliers::all();
        return view(
            'Admin.Subl.index',
            compact('subs')
        );
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(sublliers $sublliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sublliers $sublliers,$id)
    {
        $subl = sublliers::findOrFail($id);
        return view(
            'Admin.subl.Update',
            compact('subl')
        );
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesublliersRequest $request, sublliers $sublliers,$id)
    {
        $subl = sublliers::findOrFail($id);
        $subl->update([
            'name' => $request->name,
            // 'desc' => $request->desc,
        ]);
        $subs = sublliers::all();
        $products = Products::all();

        return view(
            'Admin.index',
            compact('subs', 'products')
        );
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sublliers $sublliers,$id)
    {
        $subl = sublliers::findOrFail($id)->delete();
        $subls = sublliers::all();
        $Cats = Categorys::all();
        $products = Products::all();

        return view(
            'Admin.index',
            compact('Cats', 'products','subls')
        );;
        //
    }
}
