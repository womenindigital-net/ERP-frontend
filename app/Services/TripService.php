<?php

namespace App\Services;

use App\Models\Trip;
use App\Repositories\TripRepository;
use App\Utility\TripReport;

class TripService
{
    private TripRepository $repo;

    public function __construct(TripRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated): void
    {
        $data = $this->processInfo($validated);

        $this->repo->store($data);
    }

    public function update(Trip $trip, mixed $validated): void
    {
        $data = $this->processInfo($validated);

        $this->repo->update($trip, $data);
    }

    private function processInfo(array $validated): array
    {
        [$activitiesOfDailyLivingInfos, $data] = $this->collectActivitiesOfDailyLivingRecords($validated);
        [$onlyForStaffInfos, $data] = $this->collectOnlyForStaffRecords($data);

        return [
            'activities_of_daily_living' => $activitiesOfDailyLivingInfos,
            'only_for_staff' => $onlyForStaffInfos,
        ];
    }

    private function collectActivitiesOfDailyLivingRecords(mixed $validated): array
    {
        return extractNecessaryFieldsFromData($validated, TripReport::$columnCollections['activities_of_daily_living']);
    }

    private function collectOnlyForStaffRecords(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['only_for_staff']);
    }
}
