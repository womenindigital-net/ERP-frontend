<?php

namespace App\Utility;

final class OccupationalTherapyConstants
{
    const VERVAL = 'Verbal';
    const NON_VERVAL = 'Non verbal';
    const DIFFICULTY = 'Difficulty';

    public static array $communication = [
        self::VERVAL => 'Verbal',
        self::NON_VERVAL => 'Non verbal',
        self::DIFFICULTY => 'Difficulty',
    ];

    const NORMAL = 'Normal';
    const HYPER = 'Hyper';
    const NO = 'No';

    public static array $separateHomeEquipment = [
        self::NORMAL => 'Normal',
        self::HYPER => 'Hyper',
        self::NO => 'No',
    ];

    const HYPO = 'Hypo';

    public static array $lowerLimbs = [
        self::NORMAL => 'Normal',
        self::HYPER => 'Hyper',
        self::HYPO => 'Hypo',
    ];

    const HYPER_TONE = 'Hyper Tone';
    const HYPE_TONE = 'Hype Tone';

    public static array $trunkNeck = [
        self::HYPER_TONE => 'Hyper Tone',
        self::HYPE_TONE => 'Hype Tone',
        self::NORMAL => 'Normal',
    ];
    
    public static array $lowerLimbsTone = [
        self::HYPER_TONE => 'Hyper Tone',
        self::HYPE_TONE => 'Hype Tone',
        self::NORMAL => 'Normal',
    ];
    
    const RESTRICTED = 'Restricted';
    
    public static array $upperLimbs = [
        self::RESTRICTED => 'Restricted',
        self::NORMAL => 'Normal',
    ];
    public static array $lowerLimbsRange = [
        self::RESTRICTED => 'Restricted',
        self::NORMAL => 'Normal',
    ];
    public static array $trunkNeckRange = [
        self::HYPER_TONE => 'Hyper Tone',
        self::HYPE_TONE => 'Hype Tone',
        self::NORMAL => 'Normal',
    ];
}
