<?php

namespace App\Http\Controllers;

use App\Models\BudgetTemplate;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\BudgetTemplateRepository;
use App\Http\Requests\StoreBudgetTemplateRequest;
use App\Http\Requests\UpdateBudgetTemplateRequest;

class BudgetTemplateController extends Controller
{
        public function __construct(StudentRepository $studentRepo, BudgetTemplateRepository $budgetTemplateRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->budgetTemplateRepo = $budgetTemplateRepo;
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
            'project_id' => $this->budgetTemplateRepo->getData(),
            'budget_head' => $this->budgetTemplateRepo->getData(),
            'account_id' => $this->budgetTemplateRepo->getData(),
        ];
      return view('setup.Budget-Template-setup.create' ,$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBudgetTemplateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBudgetTemplateRequest $request)
    {
        $this->budgetTemplateRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BudgetTemplate  $budgetTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(BudgetTemplate $budgetTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BudgetTemplate  $budgetTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(BudgetTemplate $budgetTemplate)
    {
            $data = [
            'record' => $budgetTemplate,
        ];
        return view('setup.Budget-Template-setup.edit' ,$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBudgetTemplateRequest  $request
     * @param  \App\Models\BudgetTemplate  $budgetTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBudgetTemplateRequest $request, BudgetTemplate $budgetTemplate)
    {

        $this->budgetTemplateRepo->update($budgetTemplate, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BudgetTemplate  $budgetTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(BudgetTemplate $budgetTemplate)
    {
         return $budgetTemplate->delete();
    }
}
