<?php

namespace App\Http\Controllers;

use App\Models\CareNeedPartOne;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\CareNeedPartOneRepository;
use App\Http\Requests\StoreCareNeedPartOneRequest;
use App\Http\Requests\UpdateCareNeedPartOneRequest;

class CareNeedPartOneController extends Controller
{
    private UserRepository $userRepo;
    private CareNeedPartOneRepository $careNeddpartOneRepo;
    private StudentRepository $studentRepo;

    public function __construct(StudentRepository $studentRepo, UserRepository $userRepository, CareNeedPartOneRepository $careNeddpartOneRepo)
    {
        $this->userRepo = $userRepository;
        $this->careNeddpartOneRepo = $careNeddpartOneRepo;
        $this->studentRepo = $studentRepo;
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
        return view('pre_admission.care-need-part-one.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCareNeedPartOneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCareNeedPartOneRequest $request)
    {
        $this->careNeddpartOneRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CareNeedPartOne  $careNeedPartOne
     * @return \Illuminate\Http\Response
     */
    public function show(CareNeedPartOne $careNeedPartOne)
    {
        $data = [
            'record' => $this->careNeedPartOne = $careNeedPartOne,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('pre_admission.care-need-part-one.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CareNeedPartOne  $careNeedPartOne
     * @return \Illuminate\Http\Response
     */
    public function edit(CareNeedPartOne $careNeedPartOne)
    {
        $data = [
            'record' => $this->careNeedPartOne = $careNeedPartOne,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('pre_admission.care-need-part-one.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCareNeedPartOneRequest  $request
     * @param  \App\Models\CareNeedPartOne  $careNeedPartOne
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCareNeedPartOneRequest $request, CareNeedPartOne $careNeedPartOne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CareNeedPartOne  $careNeedPartOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareNeedPartOne $careNeedPartOne)
    {
        //
    }
}
