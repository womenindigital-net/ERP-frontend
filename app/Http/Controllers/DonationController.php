<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonationRequest;
use App\Models\Donation;
use App\Repositories\CustomerRepository;
use App\Repositories\DonationRepository;
use App\Repositories\ProjectRepository;
use App\Services\DonationService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class DonationController extends Controller
{
    private ProjectRepository $projectRepo;
    private CustomerRepository $customerRepo;
    private DonationService $service;
    private DonationRepository $repo;

    public function __construct(
        DonationService $service,
        ProjectRepository $projectRepository,
        CustomerRepository $customerRepository,
        DonationRepository $repository,
    )
    {
        $this->projectRepo = $projectRepository;
        $this->customerRepo = $customerRepository;
        $this->service = $service;
        $this->repo = $repository;
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
        $data = [
            'projects' => $this->projectRepo->getData(),
            'customers' => $this->customerRepo->getData(),
        ];

        return view('accounting.income.donation_and_other', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DonationRequest $request
     *
     * @return RedirectResponse
     */
    public function store(DonationRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param Donation $donation
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Donation $donation_and_other
     *
     * @return Application|Factory|View
     */
    public function edit(Donation $donation_and_other): View|Factory|Application
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'customers' => $this->customerRepo->getData(),
            'record' => $this->repo->getRelatedData($donation_and_other, ['income.history', 'customer', 'income.project']),
        ];

        return view('accounting.income.donation_and_other_edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param DonationRequest $request
     * @param Donation $donation_and_other
     *
     * @return RedirectResponse
     */
    public function update(DonationRequest $request, Donation $donation_and_other): RedirectResponse
    {
        $this->service->update($donation_and_other, $request->validated());

        Session::flash('success');

        return redirect()->route('donation-and-other.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Donation $donation_and_other
     *
     * @return bool
     */
    public function destroy(Donation $donation_and_other): bool
    {
        return $donation_and_other->delete();
    }
}
