<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Models\FunctionalMovementskill;
use App\Repositories\StudentRepository;
use App\Http\Requests\FunctionalMovementskillRequest;
use App\Repositories\FunctionalMovementSkillRepository;
use App\Http\Requests\UpdateFunctionalMovementskillRequest;

class FunctionalMovementskillController extends Controller
{

    private FunctionalMovementSkillRepository $funMoveSkillRepo;
    private StudentRepository $studentRepo;
    public $record;

    public function __construct(FunctionalMovementSkillRepository $funMoveSkillRepo, UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->funMoveSkillRepo = $funMoveSkillRepo;
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

        return view('assessment.functional-movement-skill.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\FunctionalMovementskillRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(FunctionalMovementskillRequest $request)
    {
        $this->funMoveSkillRepo->store($request->validated());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FunctionalMovementskill  $functionalMovementskill
     * @return \Illuminate\Http\Response
     */
    public function show(FunctionalMovementskill $functionalMovementskill)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $this->record = $functionalMovementskill,
        ];

        return view('assessment.functional-movement-skill.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FunctionalMovementskill  $functionalMovementskill
     * @return \Illuminate\Http\Response
     */
    public function edit(FunctionalMovementskill $functionalMovementskill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFunctionalMovementskillRequest  $request
     * @param  \App\Models\FunctionalMovementskill  $functionalMovementskill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFunctionalMovementskillRequest $request, FunctionalMovementskill $functionalMovementskill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FunctionalMovementskill  $functionalMovementskill
     * @return \Illuminate\Http\Response
     */
    public function destroy(FunctionalMovementskill $functionalMovementskill)
    {
        //
    }
}
