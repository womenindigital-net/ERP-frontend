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

}