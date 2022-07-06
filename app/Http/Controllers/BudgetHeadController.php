<?php

namespace App\Http\Controllers;

use App\Models\BudgetHead;
use App\Http\Requests\StoreBudgetHeadRequest;
use App\Http\Requests\UpdateBudgetHeadRequest;

class BudgetHeadController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBudgetHeadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBudgetHeadRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BudgetHead  $budgetHead
     * @return \Illuminate\Http\Response
     */
    public function show(BudgetHead $budgetHead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BudgetHead  $budgetHead
     * @return \Illuminate\Http\Response
     */
    public function edit(BudgetHead $budgetHead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBudgetHeadRequest  $request
     * @param  \App\Models\BudgetHead  $budgetHead
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBudgetHeadRequest $request, BudgetHead $budgetHead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BudgetHead  $budgetHead
     * @return \Illuminate\Http\Response
     */
    public function destroy(BudgetHead $budgetHead)
    {
        //
    }
}
