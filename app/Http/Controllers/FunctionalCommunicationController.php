<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Models\FunctionalCommunication;
use App\Repositories\StudentRepository;
use App\Http\Requests\FunctionalCommunicationRequest;
use App\Repositories\FunctionalCommunicationRepository;
use App\Http\Requests\UpdateFunctionalCommunicationRequest;

class FunctionalCommunicationController extends Controller
{


    private FunctionalCommunicationRepository $fcomRepo;
    private StudentRepository $studentRepo;
    public $record;

    public function __construct(FunctionalCommunicationRepository $fcomRepo, UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->fcomRepo = $fcomRepo;
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

        return view('assessment.functional-communication.edit', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\FunctionalCommunicationRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(FunctionalCommunicationRequest $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FunctionalCommunication  $functionalCommunication
     * @return \Illuminate\Http\Response
     */
    public function show(FunctionalCommunication $functionalCommunication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FunctionalCommunication  $functionalCommunication
     * @return \Illuminate\Http\Response
     */
    public function edit(FunctionalCommunication $functionalCommunication)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFunctionalCommunicationRequest  $request
     * @param  \App\Models\FunctionalCommunication  $functionalCommunication
     * @return \Illuminate\Http\Response
     */
    public function update(FunctionalCommunicationRequest $request, FunctionalCommunication $functionalCommunication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FunctionalCommunication  $functionalCommunication
     * @return \Illuminate\Http\Response
     */
    public function destroy(FunctionalCommunication $functionalCommunication)
    {
        //
    }
}
