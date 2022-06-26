<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrAdminController extends Controller
{
    public function warningNotice()
    {
        return view('HR.warning-notice.create');
    }

    public function showcaseNotice()
    {
        return view('HR.show-case-notice.create');
    }
    public function adviceLetter()
    {
        return view('HR.advice-letter.create');
    }
    public function employeeLeave()
    {
        return view('HR.employee-leave-status.create');
    }
    public function certificateSetup()
    {
        return view('HR.certificate-setup.create');
    }
    public function employeetypeSetup()
    {
        return view('HR.employee-type.create');
    }
    public function departmentsetup()
    {
        return view('HR.department.create');
    }
    public function weekendsetup()
    {
        return view('HR.weekend-package.create');
    }
    

}
