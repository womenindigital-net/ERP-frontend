<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMaterialCollectionRequest;
use App\Http\Requests\UpdateMaterialCollectionRequest;
use App\Models\MaterialCollection;

class MaterialCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stock-management.material_collects')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMaterialCollectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaterialCollectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaterialCollection  $materialCollection
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialCollection $materialCollection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaterialCollection  $materialCollection
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialCollection $materialCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterialCollectionRequest  $request
     * @param  \App\Models\MaterialCollection  $materialCollection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaterialCollectionRequest $request, MaterialCollection $materialCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaterialCollection  $materialCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialCollection $materialCollection)
    {
        //
    }
}
