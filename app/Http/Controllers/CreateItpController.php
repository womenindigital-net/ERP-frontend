<?php

namespace App\Http\Controllers;

use App\Models\CreateItp;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use App\Http\Requests\StoreCreateItpRequest;
use App\Http\Requests\UpdateCreateItpRequest;
use App\Repositories\CreateItpRepository;

class CreateItpController extends Controller
{
    private CreateItpRepository $createitpRepo;
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    public $record;

    public function __construct(CreateItpRepository $createitpRepo, UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->userRepo    = $userRepository;
        $this->studentRepo = $studentRepository;
        $this->createitpRepo = $createitpRepo;
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

        return view('program.create-itp.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCreateItpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCreateItpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreateItp  $createItp
     * @return \Illuminate\Http\Response
     */
    public function show(CreateItp $createItp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateItp  $createItp
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateItp $createItp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreCreateItpRequest  $request
     * @param  \App\Models\CreateItp  $createItp
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCreateItpRequest $request, CreateItp $createItp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateItp  $createItp
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateItp $createItp)
    {
        //
    }
}
