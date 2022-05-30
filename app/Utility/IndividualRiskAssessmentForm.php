<?php

namespace App\Utility;

final class IndividualRiskAssessmentForm
{

    const ACCIDENT = 'Accident';
    const INCIDENT = 'Incident';

    public static array $accidentOrIncident = [
        self::ACCIDENT => 'Accident',
        self::INCIDENT => 'Incident',
    ];
}
