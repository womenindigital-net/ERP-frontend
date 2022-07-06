<?php

namespace App\Utility;


final class ProjectConstants
{
    const DATA_PER_PAGE = 10;
    const YES = 'yes';
    const NO = 'no';

    const USER_TYPE_TEACHER = 'teacher';
    const USER_TYPE_GENERAL = 'general';

    const STUDENT_TYPE_ONLINE = 'online';
    const STUDENT_TYPE_OFFLINE = 'offline';

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

    const NOTPRESENT = 'Not Present';
    const USESNOWORD = 'Uses NO Words (Gestures - Preverbal)';
    const USES1TO3WORDS = 'Uses 1-3 Words / sentences';
    const ABLETOCOMMUNICATION = 'Able to communicate/ express opinion';
    const USESCOMLESLANG = 'Uses Complex Language';

    // Autism Behavior Checklist
    const DO_REGULARLY = "Do regularly";
    const SOMETIME = "Sometimes";
    const IN_SPECIAL_OCCASION = "In special occasion";
    const DONT_DO_AT_ALL = "Don't do at all";

    const SWAL_CONFIRM_DELETE_TYPE = 'confirm';
    const SWAL_CONFIRM_DELETE_METHOD = 'delete';

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    public static array $statuses = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_INACTIVE => 'Inactive',
    ];

    public static array $swalConfirmDeleteEvents = [
        'type' => self::SWAL_CONFIRM_DELETE_TYPE,
        'method' => self::SWAL_CONFIRM_DELETE_METHOD,
    ];

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

    public static array $userTypes = [
        self::USER_TYPE_TEACHER => 'Teacher',
        self::USER_TYPE_GENERAL => 'General',
    ];

    public static array $studentTypes = [
        self::STUDENT_TYPE_ONLINE => 'Online',
        self::STUDENT_TYPE_OFFLINE => 'Offline',
    ];

    public static array $socialCommunication = [
        self::NOTPRESENT => 'Not Present',
        self::USESNOWORD => 'Uses NO Words (Gestures - Preverbal)',
        self::USES1TO3WORDS => 'Uses 1-3 Words / sentences',
        self::ABLETOCOMMUNICATION => 'Able to communicate/ express opinion',
        self::USESCOMLESLANG => 'Uses Complex Language',
    ];

    public static array $autismBehaviorCheck = [
        self::DO_REGULARLY => 'Do regularly',
        self::SOMETIME => 'Sometimes',
        self::IN_SPECIAL_OCCASION => 'In special occasion',
        self::DONT_DO_AT_ALL => "Don't do at all",
    ];

    // Salary Head Setup

    const OTHER_PAYMENT = 'Other Payment';
    const  SALARY_HEAD  = 'Salary head';

    public static array $salaryHead = [
        self::OTHER_PAYMENT => 'Other Payment',
        self::SALARY_HEAD  => 'Salary head',
    ];


    const ADDITIVE  = 'Additive';
    const DEDUCTIVE = 'Deductive';

    public static array $setup = [
        self::ADDITIVE  => 'Additive',
        self::DEDUCTIVE => 'Deductive',
    ];


    const HOURLY  = 'Hourly';
    const DAILY = ' Daily';
    const MONTHLY = 'Monthly';

    public static array $payType = [
        self::HOURLY  => 'Hourly',
        self::DAILY => 'Daily',
        self::MONTHLY => 'Monthly',
    ];

    const BASIC  = 'Basic';
    const GROSS = 'Gross';
    const NET_SALARY = 'Net Salary';

    public static array $deduct = [
        self::BASIC   => 'Basic',
        self::GROSS => 'Gross',
        self::NET_SALARY => 'Net Salary',
    ];
    //assign teacher
    const BOUTIQUE  = 'Boutique';
    const PAPERWORK = 'Paperwork';
    const ELEMENTRARY = 'Elementary';
    const MUSIC = 'Music';
    const TAILORING = 'Tailoring';
    const STARTER = 'Starter';
    const YOGA = 'Yoga';
    const DANCE = 'Dance';
    const ONLINECHESSCLASS = 'Online Chess class';
    const JEWELRY  = 'Jewelry';
    const RADIAL  = 'Radial';
    const PHYSICALEXERCISE = 'Physical Exercise(PE)';

    public static array $assignTeacher = [
        self::BOUTIQUE  => 'Boutique',
        self::PAPERWORK => 'Paperwork',
        self::ELEMENTRARY => 'Elementary',
        self::MUSIC => 'Music',
        self::TAILORING => 'Tailoring',
        self::STARTER => 'Starter',
        self::YOGA => 'Yoga',
        self::DANCE => 'Dance',
        self::ONLINECHESSCLASS => 'Online Chess class',
        self::JEWELRY  => 'Jewelry',
        self::RADIAL  => 'Radial',
        self::PHYSICALEXERCISE => 'Physical Exercise(PE)',
    ];

    // ====================
    // care Need Part 1
    // ====================

    // where you learned about us
    const DOCTORS  = 'Doctors ';
    const COUNSELOR  = 'Counselor';
    const PEDIATRICIAN  = 'Pediatrician ';
    const LEAFLET  = 'Leaflet';
    const NEWSPAPER  = 'News paper ';
    const FACEBOOK  = 'Facebook ';
    const WEBSITE  = 'Website';
    const SCHOOL  = 'School';
    const ORGANIZATION  = 'Organization';
    const PARENTS  = 'Parents';
    const OTHERS  = 'Others';

    public static array $learnAbout = [
        self::DOCTORS  => 'Doctors',
        self::COUNSELOR  => 'Counselor',
        self::PEDIATRICIAN  => 'Pediatrician',
        self::LEAFLET  => 'Leaflet',
        self::NEWSPAPER  => 'News',
        self::FACEBOOK  => 'Facebook',
        self::WEBSITE  => 'Website',
        self::SCHOOL  => 'School',
        self::ORGANIZATION  => 'Organization',
        self::PARENTS  => 'Parents',
        self::OTHERS  => 'Others',
    ];

    const DONTKNOW  = "Don't know";

    public static array $yesNoDontknow = [
        self::YES => 'Yes',
        self::NO  => 'No',
        self::DONTKNOW  => "Don't know",
    ];
    const WANTTODO  = 'Want to do';

    public static array $yesNoDontknow = [
        self::YES => 'Yes',
        self::NO  => 'No',
        self::WANTTODO  => 'Want to do',
    ];
    
}
