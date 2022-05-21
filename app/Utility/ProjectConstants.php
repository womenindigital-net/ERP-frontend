<?php

namespace App\Utility;

final class ProjectConstants
{
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';
    const GENDER_OTHER = 'other';

    const BLOOD_GROUP_A_POSITIVE = 'A+';
    const BLOOD_GROUP_A = 'A';
    const BLOOD_GROUP_B = 'B';
    const BLOOD_GROUP_B_POSITIVE = 'B+';
    const BLOOD_GROUP_O_POSITIVE = 'O+';
    const BLOOD_GROUP_O_NEGATIVE = 'O-';
    const BLOOD_GROUP_AB_POSITIVE = 'AB+';
    const BLOOD_GROUP_AB_NEGATIVE = 'AB-';

    public static array $genders = [
        self::GENDER_MALE   => 'Male',
        self::GENDER_FEMALE => 'Female',
        self::GENDER_OTHER  => 'Other',
    ];

    public static array $bloodGroups = [
        self::BLOOD_GROUP_A => 'A',
        self::BLOOD_GROUP_A_POSITIVE => 'A+',
        self::BLOOD_GROUP_B => 'B',
        self::BLOOD_GROUP_B_POSITIVE => 'B+',
        self::BLOOD_GROUP_O_POSITIVE => 'O+',
        self::BLOOD_GROUP_O_NEGATIVE => 'O-',
        self::BLOOD_GROUP_AB_POSITIVE => 'AB+',
        self::BLOOD_GROUP_AB_NEGATIVE => 'AB-',

    ];
}
