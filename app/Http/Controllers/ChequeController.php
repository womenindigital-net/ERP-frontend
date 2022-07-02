<?php

namespace App\Http\Controllers;

use App\Models\Cheque;
use App\Services\ChequeService;
use App\Repositories\ChequeRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreChequeRequest;
use App\Http\Requests\UpdateChequeRequest;

class ChequeController extends Controller
{
    private ChequeRepository $repo;
    private ChequeService $service;

    public function __construct(ChequeRepository $repository, ChequeService $service)
    {
        $this->repo = $repository;
        $this->service = $service;
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
        return view('setup.manage-chequeBook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChequeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChequeRequest $request)
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cheque  $cheque
     * @return \Illuminate\Http\Response
     */
    public function show(Cheque $cheque)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cheque  $cheque
     * @return \Illuminate\Http\Response
     */
    public function edit(Cheque $cheque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChequeRequest  $request
     * @param  \App\Models\Cheque  $cheque
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChequeRequest $request, Cheque $cheque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cheque  $cheque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cheque $cheque)
    {
        return $cheque->delete();
    }
}
