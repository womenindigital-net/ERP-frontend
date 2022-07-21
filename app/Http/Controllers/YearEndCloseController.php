<?php

namespace App\Http\Controllers;

use App\Models\YearEndClose;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\YearEndCloseRepository;
use App\Http\Requests\StoreYearEndCloseRequest;
use App\Http\Requests\UpdateYearEndCloseRequest;

class YearEndCloseController extends Controller
{
    private StudentRepository $studentRepo;
    private YearEndCloseRepository $yearEndCloseRepo;

    public function __construct(StudentRepository $studentRepo, YearEndCloseRepository $yearEndCloseRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->yearEndCloseRepo = $yearEndCloseRepo;
    }
    
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
             'projects' => $this->yearEndCloseRepo->getData(),
        ];
        return view('setup.year-end-close.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreYearEndCloseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreYearEndCloseRequest $request)
    {
         $this->yearEndCloseRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\YearEndClose  $yearEndClose
     * @return \Illuminate\Http\Response
     */
    public function show(YearEndClose $yearEndClose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\YearEndClose  $yearEndClose
     * @return \Illuminate\Http\Response
     */
    public function edit(YearEndClose $yearEndClose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateYearEndCloseRequest  $request
     * @param  \App\Models\YearEndClose  $yearEndClose
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateYearEndCloseRequest $request, YearEndClose $yearEndClose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\YearEndClose  $yearEndClose
     * @return \Illuminate\Http\Response
     */
    public function destroy(YearEndClose $yearEndClose)
    {
        //
    }
}
