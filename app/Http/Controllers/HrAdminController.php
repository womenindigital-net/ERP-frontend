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
    public function resultSetup()
    {
        return view('HR.result-setup.create');
    }
    public function instituteSetup()
    {
        return view('HR.Institute-setup.create');
    }
    public function organizationSetup()
    {
        return view('HR.organization-setup.create');
    }
    public function sectionSetup()
    {
        return view('HR.section-setup.create');
    }
    public function attendenceCreate()
    {
        return view('HR.attendence.create');
    }
    public function designationSetup()
    {
        return view('HR.designation-setup.create');
    }
    public function leaveApplication()
    {
        return view('HR.leave-application.create');
    }
    public function noticeTemplate()
    {
        return view('HR.notice-template-setup.create');
    }
    public function noticeBoard()
    {
        return view('HR.notice-board.create');
    }
    

}
