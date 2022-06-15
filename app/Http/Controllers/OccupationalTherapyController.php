<?php

namespace App\Http\Controllers;

use App\Models\OccupationalTherapy;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\OccupationalTherapyRequest;
use App\Repositories\OccupationalTherapyRepository;
use App\Http\Requests\UpdateOccupationalTherapyRequest;

class OccupationalTherapyController extends Controller
{

    private OccupationalTherapyRepository $occupationalRepo;
    private StudentRepository $studentRepo;
    public $record;

    public function __construct(OccupationalTherapyRepository $occupationalRepo, UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->occupationalRepo = $occupationalRepo;
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
        return view('assessment.occupational-therapy.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOccupationalTherapyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OccupationalTherapyRequest $request)
    {
        $this->occupationalRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OccupationalTherapy  $occupationalTherapy
     * @return \Illuminate\Http\Response
     */
    public function show(OccupationalTherapy $occupationalTherapy)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $this->record = $occupationalTherapy,
        ];
        return view('assessment.occupational-therapy.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OccupationalTherapy  $occupationalTherapy
     * @return \Illuminate\Http\Response
     */
    public function edit(OccupationalTherapy $occupationalTherapy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOccupationalTherapyRequest  $request
     * @param  \App\Models\OccupationalTherapy  $occupationalTherapy
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOccupationalTherapyRequest $request, OccupationalTherapy $occupationalTherapy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OccupationalTherapy  $occupationalTherapy
     * @return \Illuminate\Http\Response
     */
    public function destroy(OccupationalTherapy $occupationalTherapy)
    {
        //
    }
}
