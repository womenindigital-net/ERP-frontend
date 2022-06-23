<?php

namespace App\Utility;

final class TripReport
{
    const SELFDOING = 'একা করছে';
    const LITTLEHELP = 'সামান্য সাহায্যে';
    const HUGEHELP = 'বেশী সাহায্যে';

    public static array $do = [
        self::SELFDOING => 'একা করছে',
        self::LITTLEHELP => 'সামান্য সাহায্যে',
        self::HUGEHELP => 'বেশী সাহায্যে',
    ];


    // ট্রিপ উপকরণ ও প্রস্তুতি গ্রহণ
    const BAD = 'খারাপ';
    const MEDIUM = 'মোটামুটি';
    const FINE = 'ভালো';
    const VERYFINE = 'খুব ভালো';


    public static array $observation = [
        self::BAD => 'খারাপ',
        self::MEDIUM => 'মোটামুটি',
        self::FINE => 'ভালো',
        self::VERYFINE => 'খুব ভালো',
    ];

    // এই ট্রিপ
    const EXPECTATION = 'প্রত্যাশা পূরণ করছে';
    const FAIL = ' ব্যর্থ হয়েছে ';
    const BETTER = 'প্রত্যাশার চেয়ে ভালো হয়েছে';


    public static array $expectation = [
        self::EXPECTATION => 'প্রত্যাশা পূরণ করছে',
        self::FAIL => ' ব্যর্থ হয়েছে ',
        self::BETTER => 'প্রত্যাশার চেয়ে ভালো হয়েছে',
    ];

    const ALONE = 'একা';
    const NOTALONE = ' দলে ';


    public static array $situation = [
        self::ALONE => 'একা',
        self::NOTALONE => 'দলে',
    ];

    const NOPROBLEM = 'সমস্যা নেই';
    const CHANGE = ' পরিবর্তন দরকার';


    public static array $change = [

        self::NOPROBLEM => 'সমস্যা নেই',
        self::CHANGE => 'পরিবর্তন দরকার',
    ];


    const HELP1 = 'পুরপুরি সাহায্য নিয়ে করা';
    const HELP2 = ' আংশিক সাহায্য নিয়ে করা';
    const HELP3 = 'ছবির মাধ্যমে/দেখে কাজ করা';
    const HELP4 = ' মৌখিক নির্দেশে কাজ করা';
    const HELP5 = ' নিজে থেকে কাজ করা';



    public static array $help = [

        self::HELP1 => 'সমস্যা নেই',
        self::HELP2 => 'পরিবর্তন দরকার',
        self::HELP3 => 'সমস্যা নেই',
        self::HELP4 => 'পরিবর্তন দরকার',
        self::HELP5 => 'পরিবর্তন দরকার',
    ];

    public static array $columnCollections = [
        'activities_of_daily_living' => [
            'bath',
            'bath_secondary',
            'wearing_cloth',
            'wearing_cloth_secondary',
            'wrooming',
            'wrooming_secondary',
            'do_toilet',
            'do_toilet_secondary',
            'eating_healthy_food',
            'eating_healthy_food_secondary',
            'wakeup_from_bed',
            'wakeup_from_bed_secondary',
            'get_up_from_the_chair',
            'get_up_from_the_chair_secondary',
            'walk',
            'walk_secondary',
        ],
        'only_for_staff'             => [
            'taking_trip_materials_and_preparation',
            'taking_trip_materials_and_preparation_secondary',
            'whether_the_trainee_has_been_contacted',
            'whether_the_trainee_has_been_contacted_secondary',
            'communicate_with_other_members_of_the_team',
            'communicate_with_other_members_of_the_team_secondary',
            'where_visits',
            'where_visits_secondary',
            'who_were_driving_cars_or_other_assistants',
            'who_were_driving_cars_or_other_assistants_secondary',
            'overall_tour_like',
            'overall_tour_like_secondary',
            'this_trip',
            'this_trip_secondary',
            'tour_presented_and_managed_professionally',
            'tour_presented_and_managed_professionally_secondary',
            'teacher_went_alone_or_in_the_team',
            'teacher_went_alone_or_in_the_team_secondary',
            'trip_description',
        ],
    ];

}
