<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\TripRepository;
use App\Services\TripService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class TripReportList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'trip.destroy';

    private TripService $service;
    private TripRepository $repo;

    public function boot(TripService $service, TripRepository $repository)
    {
        $this->service = $service;
        $this->repo = $repository;
    }

    public function render(): Factory|View|Application
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.trip-report-list', $data);
    }
}
