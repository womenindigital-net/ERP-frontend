<?php

namespace App\Http\Controllers;

use App\Models\CareNeed;
use App\Http\Requests\StoreCareNeedRequest;
use App\Http\Requests\UpdateCareNeedRequest;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CareNeedController extends Controller
{
    private UserRepository $userRepo;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('pre_admission.care-needs-form', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCareNeedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCareNeedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CareNeed  $careNeed
     * @return \Illuminate\Http\Response
     */
    public function show(CareNeed $careNeed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CareNeed  $careNeed
     * @return \Illuminate\Http\Response
     */
    public function edit(CareNeed $careNeed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCareNeedRequest  $request
     * @param  \App\Models\CareNeed  $careNeed
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCareNeedRequest $request, CareNeed $careNeed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CareNeed  $careNeed
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareNeed $careNeed)
    {
        //
    }
}
