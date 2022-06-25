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
        [$activities, $data] = $this->collectActivities($data);
        [$securitySafety, $data] = $this->collectSecuritySafety($data);
        [$equipment, $data] = $this->collectEquipment($data);
        [$light, $data] = $this->collectLight($data);
        [$kitchen, $data] = $this->collectKitchen($data);
        [$bathroom, $data] = $this->collectBathroom($data);
        [$floor, $data] = $this->collectFloor($data);
        [$instrumentalActivitiesOfDaily, $data] = $this->collectInstrumentalActivitiesOfDaily($data);
        [$environmentalSafetyRelative, $data] = $this->collectEnvironmentalSafetyRelative($data);
        [$environmentalSafetyStep, $data] = $this->collectEnvironmentalSafetyStep($data);
        [$wokeUpInTheMorning, $data] = $this->collectWokeUpInTheMorning($data);
        [$readingWriting, $data] = $this->collectReadingWriting($data);
        [$dailyWork, $data] = $this->collectDailyWork($data);
        [$wonWork, $data] = $this->collectWonWork($data);
        [$lunchTime, $data] = $this->collectLunchTime($data);
        [$restTime, $data] = $this->collectRestTime($data);
        [$afternoon, $data] = $this->collectAfternoon($data);

        return [
            'activities_of_daily_living' => $activitiesOfDailyLivingInfos,
            'only_for_staff' => $onlyForStaffInfos,
            'activities' => $activities,
            'security_safety' => $securitySafety,
            'equipment' => $equipment,
            'light' => $light,
            'kitchen' => $kitchen,
            'bathroom' => $bathroom,
            'floor' => $floor,
            'instrumental_activities_of_daily' => $instrumentalActivitiesOfDaily,
            'environmental_safety_relative' => $environmentalSafetyRelative,
            'environmental_safety_step' => $environmentalSafetyStep,
            'woke_up_in_the_morning' => $wokeUpInTheMorning,
            'reading_writing' => $readingWriting,
            'daily_work' => $dailyWork,
            'won_work' => $wonWork,
            'lunch_time' => $lunchTime,
            'rest_time' => $restTime,
            'afternoon' => $afternoon,
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

    public function collectActivities(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['activities']);
    }

    public function collectSecuritySafety(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['security_safety']);
    }
    public function collectEquipment(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['equipment']);
    }
    public function collectLight(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['light']);
    }
    public function collectKitchen(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['kitchen']);
    }
    public function collectBathroom(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['bathroom']);
    }
    public function collectFloor(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['floor']);
    }
    public function collectInstrumentalActivitiesOfDaily(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['instrumental_activities_of_daily']);
    }
    public function collectEnvironmentalSafetyRelative(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['environmental_safety_relative']);
    }
    public function collectEnvironmentalSafetyStep(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['environmental_safety_step']);
    }
    public function collectWokeUpInTheMorning(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['woke_up_in_the_morning']);
    }
    public function collectReadingWriting(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['reading_writing']);
    }
    public function collectDailyWork(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['daily_work']);
    }
    public function collectWonWork(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['won_work']);
    }
    public function collectLunchTime(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['lunch_time']);
    }
    public function collectRestTime(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['rest_time']);
    }
    public function collectAfternoon(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['afternoon']);
    }
}
