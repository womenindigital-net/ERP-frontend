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
    public function departmentSetup()
    {
        return view('HR.department.create');
    }
    public function weekendSetup()
    {
        return view('HR.weekend-package.create');
    }
    public function facilityPackage()
    {
        return view('HR.facility-package.create');
    }
    public function bonousPackage()
    {
        return view('HR.bonous-package.create');
    }
    public function currencySetup()
    {
        return view('HR.currency-setup.create');
    }
    

}
