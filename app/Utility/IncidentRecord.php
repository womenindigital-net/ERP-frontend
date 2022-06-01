<?php 

namespace App\Utility;

use Illuminate\Support\Arr;

final class IncidentRecord{
    const SAME_AS_PRIVIOUS ="Same as previous";
    const NEW ="New";

    public static array $incidentType = [
        self::SAME_AS_PRIVIOUS => "Same as previous",
        self::NEW => "New",
    ];
}