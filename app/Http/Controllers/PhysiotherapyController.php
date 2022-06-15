<?php

namespace App\Http\Controllers;

use App\Models\Physiotherapy;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use App\Http\Requests\PhysiotherapyRequest;
use App\Repositories\PhysiotherapyRepository;
use App\Http\Requests\UpdatePhysiotherapyRequest;

class PhysiotherapyController extends Controller
{
    private PhysiotherapyRepository $phyRepo;
    private StudentRepository $studentRepo;
    public $record;

    public function __construct(PhysiotherapyRepository $phyRepo, UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->phyRepo = $phyRepo;
        $this->userRepo    = $userRepository;
        $this->studentRepo = $studentRepository;
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
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];

        return view('assessment.physiotherapy.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PhysiotherapyRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PhysiotherapyRequest $request)
    {
        $this->phyRepo->store($request->validated());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Physiotherapy  $physiotherapy
     * @return \Illuminate\Http\Response
     */
    public function show(Physiotherapy $physiotherapy)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $this->record = $physiotherapy,
        ];

        return view('assessment.executive-function.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Physiotherapy  $physiotherapy
     * @return \Illuminate\Http\Response
     */
    public function edit(Physiotherapy $physiotherapy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhysiotherapyRequest  $request
     * @param  \App\Models\Physiotherapy  $physiotherapy
     * @return \Illuminate\Http\Response
     */
    public function update(PhysiotherapyRequest $request, Physiotherapy $physiotherapy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Physiotherapy  $physiotherapy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Physiotherapy $physiotherapy)
    {
        //
    }
}
