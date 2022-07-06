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

    public static array $yesNoWantdo = [
        self::YES => 'Yes',
        self::NO  => 'No',
        self::WANTTODO  => 'Want to do',
    ];

    // Schooling
    const PSCHOOL  = 'Primary School';
    const HSCHOOL  = 'High School';
    const DC  = 'Day care ';
    const SSCHOOL  = 'Special School';
    const HSCHOOOL  = 'Home school';
    const COLLEGE  = 'College';
    const UNIVERSITY  = 'University';
    const OTHERINSTITUTE  = 'Other Institute';

    public static array $school = [
        self::PSCHOOL => 'Primary School',
        self::HSCHOOL => 'High School',
        self::DC => 'Day care',
        self::SSCHOOL => 'Special School',
        self::HSCHOOOL => 'Home school',
        self::COLLEGE => 'College',
        self::UNIVERSITY => 'University',
        self::OTHERINSTITUTE => 'Other Institute',
    ];

    const MID  = 'Mid';

    public static array $yesMidNo = [
        self::YES => 'Yes',
        self::NO  => 'No',
        self::MID  => 'Mid',
    ];

    const VERBAL  = 'Verbal';
    const SVERBAL  = 'Semi Verbal';
    const NVERBAL  = 'Non-Verbal';
    const SIGN  = 'Sign';
    const PECS  = 'PECs';
    const GESTURE  = 'Gesture';

    public static array $communicate = [
        self::VERBAL => 'Verbal',
        self::SVERBAL => 'Semi Verbal',
        self::NVERBAL => 'Non-Verbal',
        self::SIGN => 'Sign',
        self::PECS => 'PECs',
        self::GESTURE => 'Gesture',
    ];

    const FOOD  = 'Food';
    const NFOOD  = 'Non-Food';
    const CLOTHING  = 'Clothing';
    const EXPRESS  = 'Express ';
    const DEMANDING  = 'Demanding';
    const LOVE  = 'Love';
    const HATE  = 'Hate';
    const FAMILY  = 'Family';
    const FRIENDS  = 'Friends';
    const SHOPPING  = 'Shopping ';
    const GROCERIES  = 'Groceries';
    const BASICNEEDS  = 'Basic needs';
    const GAMES  = 'Games';
    const SAFETY  = 'Safety';
    const EMERGENCY  = 'Emergency';
    const ACCIDENT  = ' Accident ';
    const IMPORTANCE  = ' Importance ';
    const TRANSPORT  = 'Transport';
    const RIGHT  = 'Right';
    const WRONG  = 'Wrong';
    const GOOD  = 'Good';
    const BAD  = 'Bad';

    public static array $dailyLife = [
        self::FOOD => 'Food',
        self::NFOOD => 'Non',
        self::CLOTHING => 'Clothing',
        self::EXPRESS => 'Express',
        self::DEMANDING => 'Demanding',
        self::LOVE => 'Love',
        self::HATE => 'Hate',
        self::FAMILY => 'Family',
        self::FRIENDS => 'Friends',
        self::SHOPPING => 'Shopping',
        self::GROCERIES => 'Groceries',
        self::BASICNEEDS => 'Basic needs',
        self::GAMES => 'Games',
        self::SAFETY => 'Safety',
        self::EMERGENCY => 'Emergency',
        self::ACCIDENT => ' Accident',
        self::IMPORTANCE => ' Importance',
        self::TRANSPORT => 'Transport',
        self::RIGHT => 'Right',
        self::WRONG => 'Wrong',
        self::GOOD => 'Good',
        self::BAD => 'Bad',
    ];


    const REGULAR  = 'Regular';
    // const SOMETIMES  = 'Sometimes';
    // const ONEINS  = 'Follow One way instructions';
    // const BOTHINS  = 'Follow both way instructions';

    public static array $followInstruction = [
        self::YES => 'Yes',
        self::NO  => 'No',
        self::REGULAR  => 'Regular',
        self::SOMETIMES  => 'Sometimes',
        self::ONEINS  => 'Follow One way instructions',
        self::BOTHINS  => 'Follow both way instructions',
    ];

    // const REGULAR  = '5 mins';
    // const REGULAR  = '15 mins';
    const SOMETIMES  = '30 mins';
    const ONEINS  = 'Till targeted time';
    const BOTHINS  = 'Others';

    // public static array $followInstruction = [
    //     self::YES => 'Yes',
    //     self::NO  => 'No',
    //     self::REGULAR  => 'Regular',
    //     self::SOMETIMES  => 'Sometimes',
    //     self::ONEINS  => 'Follow One way instructions',
    //     self::BOTHINS  => 'Follow both way instructions',
    // ];
}
