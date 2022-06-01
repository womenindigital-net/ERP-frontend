<?php

namespace App\Utility;

final class ProjectConstants
{
    const DATA_PER_PAGE = 10;
    const YES = 'yes';
    const NO = 'no';

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

    public static array $yesNo = [
        self::YES => 'হ্যাঁ',
        self::NO  => 'না',
    ];
    
    public static array $yesNoEn = [
        self::YES => 'Yes',
        self::NO  => 'No',
    ];

    public static array $bloodGroups = [
        self::BLOOD_GROUP_A           => 'A',
        self::BLOOD_GROUP_A_POSITIVE  => 'A+',
        self::BLOOD_GROUP_B           => 'B',
        self::BLOOD_GROUP_B_POSITIVE  => 'B+',
        self::BLOOD_GROUP_O_POSITIVE  => 'O+',
        self::BLOOD_GROUP_O_NEGATIVE  => 'O-',
        self::BLOOD_GROUP_AB_POSITIVE => 'AB+',
        self::BLOOD_GROUP_AB_NEGATIVE => 'AB-',

    ];
    const NOTPRESENT = 'Not Present';
    const USESNOWORD = 'Uses NO Words (Gestures - Preverbal)';
    const USES1TO3WORDS = 'Uses 1-3 Words / sentences';
    const ABLETOCOMMUNICATION = 'Able to communicate/ express opinion';
    const USESCOMLESLANG = 'Uses Complex Language';

    public static array $socialCommunication = [
       self::NOTPRESENT => 'Not Present',
       self::USESNOWORD => 'Uses NO Words (Gestures - Preverbal)',
       self::USES1TO3WORDS => 'Uses 1-3 Words / sentences',
       self::ABLETOCOMMUNICATION => 'Able to communicate/ express opinion',
       self::USESCOMLESLANG => 'Uses Complex Language',
    ];

    // Autism Behavior Checklist
    const DO_REGULARLY = "Do regularly";
    const SOMETIME = "Sometimes";
    const IN_SPECIAL_OCCASION = "In special occasion";
    const DONT_DO_AT_ALL = "Don’t do at all";

    public static array $autismBehaviorCheck = [
        self::DO_REGULARLY => 'Do regularly',
        self::SOMETIME => 'Sometimes',
        self::IN_SPECIAL_OCCASION => 'In special occasion',
        self::DONT_DO_AT_ALL => 'Don’t do at all',
    ];
}
