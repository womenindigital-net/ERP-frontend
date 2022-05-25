<?php

namespace App\Utility;

final class ProjectConstants
{
    const PAYMENT_STUDENT_REGISTRATION = 'registration';
    const ADMISSION_AND_STUDENTS_FEE = 'admission_fee';

    public static $studentPayments = [
        self::PAYMENT_STUDENT_REGISTRATION => 'Registration',
        self::ADMISSION_AND_STUDENTS_FEE => 'Admission Fee',
    ];
}
