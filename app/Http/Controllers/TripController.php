<?php

namespace App\Http\Controllers;

use App\Http\Requests\TripRequest;
use App\Models\Trip;
use App\Repositories\TripRepository;
use App\Services\TripService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class TripController extends Controller
{
    private TripService $service;
    private TripRepository $repo;

    public function __construct(TripService $service, TripRepository $repository)
    {
        $this->service = $service;
        $this->repo    = $repository;
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
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('student.dairy.trip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TripRequest $request
     *
     * @return RedirectResponse
     */
    public function store(TripRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param Trip $trip
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Trip $trip
     *
     * @return Application|Factory|View
     */
    public function edit(Trip $trip): View|Factory|Application
    {
//        dd($trip->activities_of_daily_living);
        $data = [
            'record' => $trip,
            'activitiesOfDailyLiving' => $trip->activities_of_daily_living,
        ];
        return view('student.dairy.trip.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\TripRequest $request
     * @param Trip $trip
     *
     * @return RedirectResponse
     */
    public function update(TripRequest $request, Trip $trip): RedirectResponse
    {
        $this->service->update($trip, $request->validated());

        Session::flash('success');

        return redirect()->route('trip.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Trip $trip
     *
     * @return bool
     */
    public function destroy(Trip $trip): bool
    {
        return $trip->delete();
    }
}
