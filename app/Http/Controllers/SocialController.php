<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Requests\SocialRequest;
use App\Repositories\UserRepository;
use Illuminate\Contracts\View\Factory;
use App\Repositories\StudentRepository;
use Illuminate\Contracts\Foundation\Application;

class SocialController extends Controller
{
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    public $record;

    public function __construct(UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->userRepo = $userRepository;
        $this->studentRepo = $studentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];

        return view('assessment.social-communication.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SocialRequest $request
     *
     * @return Response
     */
    public function store(SocialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Application|Factory|View
     */
    public function edit($id): View|Factory|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => [],
            'record' => collect(),
        ];

        return view('assessment.social-communication.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
