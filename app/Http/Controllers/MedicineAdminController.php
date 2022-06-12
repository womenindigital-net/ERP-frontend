<?php

namespace App\Http\Controllers;

use App\Models\MedicineAdmin;
use App\Http\Requests\StoreMedicineAdminRequest;
use App\Http\Requests\UpdateMedicineAdminRequest;

class MedicineAdminController extends Controller
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
        return view('student.dairy.Medicine-Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedicineAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicineAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicineAdmin  $medicineAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineAdmin $medicineAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicineAdmin  $medicineAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineAdmin $medicineAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicineAdminRequest  $request
     * @param  \App\Models\MedicineAdmin  $medicineAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicineAdminRequest $request, MedicineAdmin $medicineAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicineAdmin  $medicineAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineAdmin $medicineAdmin)
    {
        //
    }
}
