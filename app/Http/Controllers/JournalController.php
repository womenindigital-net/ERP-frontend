<?php

namespace App\Http\Controllers;

use App\Http\Requests\JournalRequest;
use App\Http\Requests\UpdateJournalRequest;
use App\Models\Journal;
use App\Repositories\JournalRepository;
use App\Repositories\ProjectRepository;
use App\Services\JournalService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\RoutingServiceProvider;
use Illuminate\Support\Facades\Session;

class JournalController extends Controller
{
    private JournalService $service;
    private JournalRepository $repo;
    private ProjectRepository $projectRepo;

    public function __construct(JournalService $service, JournalRepository $journalRepository, ProjectRepository $projectRepository)
    {
        $this->service = $service;
        $this->repo = $journalRepository;
        $this->projectRepo = $projectRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
        ];

        return view('accounting.journal.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param JournalRequest $request
     *
     * @return RedirectResponse
     */
    public function store(JournalRequest $request)
    {
//        dd($request->all(), $request->validated());
        $this->service->store($request->validated());

        Session::flash('success');

        return redirect()->route('journal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Journal $journal
     *
     * @return Response
     */
    public function show(Journal $journal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Journal $journal
     *
     * @return Application|Factory|View
     */
    public function edit(Journal $journal)
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'record' => Journal::with('project', 'details')->whereId($journal->id)->first(),
        ];

        return view('accounting.journal.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateJournalRequest $request
     * @param Journal  $journal
     *
     * @return RedirectResponse
     */
    public function update(JournalRequest $request, Journal $journal): RedirectResponse
    {
        $this->service->update($journal, $request->validated());

        Session::flash('success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Journal  $journal
     *
     * @return Response
     */
    public function destroy(Journal $journal)
    {
        dd($journal);
    }
}
