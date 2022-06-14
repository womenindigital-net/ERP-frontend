<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\StaffAndWorkplaceInspection;
use App\Http\Requests\StaffAndWorkplaceInspectionRequest;
use App\Repositories\StaffAndWorkplaceinspectionRepository;
use App\Http\Requests\UpdateStaffAndWorkplaceInspectionRequest;

class StaffAndWorkplaceInspectionController extends Controller
{
     private StaffAndWorkplaceinspectionRepository $stafAndWorkRepo;

    public function __construct(StaffAndWorkplaceinspectionRepository $stafAndWorkRepo)
    {
        $this->stafAndWorkRepo = $stafAndWorkRepo;
    }
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
        return view('student.employment.Staff-and-workplace-inspection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StaffAndWorkplaceInspectionRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StaffAndWorkplaceInspectionRequest $request)
    {
        //  $this->stafAndWorkRepo->store($request->validated());
        //  return redirect()->back();
        Session::flash('success');
         dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StaffAndWorkplaceInspection  $staffAndWorkplaceInspection
     * @return \Illuminate\Http\Response
     */
    public function show(StaffAndWorkplaceInspection $staffAndWorkplaceInspection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaffAndWorkplaceInspection  $staffAndWorkplaceInspection
     * @return \Illuminate\Http\Response
     */
    public function edit(StaffAndWorkplaceInspection $staffAndWorkplaceInspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStaffAndWorkplaceInspectionRequest  $request
     * @param  \App\Models\StaffAndWorkplaceInspection  $staffAndWorkplaceInspection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffAndWorkplaceInspectionRequest $request, StaffAndWorkplaceInspection $staffAndWorkplaceInspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaffAndWorkplaceInspection  $staffAndWorkplaceInspection
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaffAndWorkplaceInspection $staffAndWorkplaceInspection)
    {
        //
    }
}
