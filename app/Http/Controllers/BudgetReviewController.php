<?php

namespace App\Http\Controllers;

use App\Models\BudgetReview;
use App\Http\Requests\StoreBudgetReviewRequest;
use App\Http\Requests\UpdateBudgetReviewRequest;

class BudgetReviewController extends Controller
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
        return view('setup.budget-review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBudgetReviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBudgetReviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BudgetReview  $budgetReview
     * @return \Illuminate\Http\Response
     */
    public function show(BudgetReview $budgetReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BudgetReview  $budgetReview
     * @return \Illuminate\Http\Response
     */
    public function edit(BudgetReview $budgetReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBudgetReviewRequest  $request
     * @param  \App\Models\BudgetReview  $budgetReview
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBudgetReviewRequest $request, BudgetReview $budgetReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BudgetReview  $budgetReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(BudgetReview $budgetReview)
    {
      
    }
}
