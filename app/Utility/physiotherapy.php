<?php

namespace App\Utility;

final class Physiotherapy
{
    const NORMAL = 'Normal';
    const HYPER = 'Hyper';
    const HYPO = 'Hypo';

    public static array $limbs = [
        self::NORMAL => 'Normal',
        self::HYPER => 'Hyper',
        self::HYPO => 'Hypo',
    ];

    const HYPER_TONE = 'Hyper Tone';
    const HYPO_TONE = 'Hypo Tone';

    public static array $limbsTone = [
        self::NORMAL => 'Normal',
        self::HYPER_TONE => 'Hyper Tone',
        self::HYPO_TONE => 'Hypo Tone',
    ];
}
