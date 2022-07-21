<?php

namespace App\Http\Controllers;

use App\Models\MeaseureUnit;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\MeasureUnitRepository;
use App\Http\Requests\StoreMeaseureUnitRequest;
use App\Http\Requests\UpdateMeaseureUnitRequest;
use App\Utility\MeasureUnitConstant;

class MeaseureUnitController extends Controller
{
    private StudentRepository $studentRepo;
    private MeasureUnitRepository $measureUnitRepo;
    public $record;

    public function __construct(StudentRepository $studentRepo, MeasureUnitRepository $measureUnitRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->measureUnitRepo = $measureUnitRepo;
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
        $data = [
            'small_unit' => MeasureUnitConstant::$SmallUnit,
        ];
        return view('setup.store-management.measure-unit.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMeaseureUnitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeaseureUnitRequest $request)
    {
        $this->measureUnitRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MeaseureUnit  $measeureUnit
     * @return \Illuminate\Http\Response
     */
    public function show(MeaseureUnit $measeureUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MeaseureUnit  $measeureUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(MeaseureUnit $measeureUnit)
    {
        $data = [
            'small_unit' => MeasureUnitConstant::$SmallUnit,
            'record' => $measeureUnit,
        ];
        return view('setup.store-management.measure-unit.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMeaseureUnitRequest  $request
     * @param  \App\Models\MeaseureUnit  $measeureUnit
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMeaseureUnitRequest $request, MeaseureUnit $measeureUnit)
    {
        $this->measureUnitRepo->update($measeureUnit, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MeaseureUnit  $measeureUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(MeaseureUnit $measeureUnit)
    {
        //
    }
}
