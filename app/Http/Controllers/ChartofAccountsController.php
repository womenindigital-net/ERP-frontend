<?php

namespace App\Http\Controllers;

use App\Models\ChartofAccounts;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\ChartofAccountsRepository;
use App\Http\Requests\StoreChartofAccountsRequest;
use App\Http\Requests\UpdateChartofAccountsRequest;

class ChartofAccountsController extends Controller
{

    private StudentRepository $studentRepo;
    private ChartofAccountsRepository $chartofAccountRepo;

    public function __construct(StudentRepository $studentRepo, ChartofAccountsRepository $chartofAccountRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->chartofAccountRepo = $chartofAccountRepo;
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
            'projects' => $this->chartofAccountRepo->getData(),
        ];
        return view('setup.chart-of-accounts.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChartofAccountsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChartofAccountsRequest $request)
    {
        $this->chartofAccountRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChartofAccounts  $chartofAccounts
     * @return \Illuminate\Http\Response
     */
    public function show(ChartofAccounts $chartofAccounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChartofAccounts  $chartofAccounts
     * @return \Illuminate\Http\Response
     */
    public function edit(ChartofAccounts $chartof_accounts)
    {
        dd($chartof_accounts);
        $data = [
            // 'record' => $chart_of_accounts,
        ];
        return view('setup.chart-of-accounts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChartofAccountsRequest  $request
     * @param  \App\Models\ChartofAccounts  $chartofAccounts
     * @return \Illuminate\Http\Response
     */
    public function update(StoreChartofAccountsRequest $request, ChartofAccounts $chartofAccounts)
    {
        $this->chartofAccountRepo->update($chartofAccounts, $request->validated());
        Session::flash('success');
        return redirect()->route('chart-of-accounts.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChartofAccounts  $chartofAccounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChartofAccounts $chart_of_accounts)
    {
        //
    }
}
