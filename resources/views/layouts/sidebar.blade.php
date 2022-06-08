<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                {{-- <li>
                    <a href="index" class="waves-effect active">
                        <i class="bx bx-home-circle"></i>
                        <span>Starter Page</span>
                    </a>
                </li> --}}
                <li>
                    <a href="/dashboard" class="waves-effect active">
                        <i class="bx bx-home-circle"></i>
                        <span>DashBoard</span>
                    </a>
                </li>

                <li class="menu-title">Accounting</li>

                <li>
                    <a href="{{route('journal')}}" class="waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Journal</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Income Receive </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('student.income') }}">Student Income</a></li>
                        <li><a href="{{route('sale-voucher')}}">Sale Voucher</a></li>
                        <li><a href="{{route('donation-and-other')}}">Donation And Other</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Payment </span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route('requisition')}}">Requisition</a></li>
                        <li><a href="{{route('purchase-order')}}">Purchase Order</a></li>
                        <li><a href="{{route('purchase-return')}}">Purchase Return</a></li>
                        <li><a href="{{route('payment-supplier')}}">Supplier Payment</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Direct Payment</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{route('direct-payment-add')}}">Payment Add</a>
                                </li>
                                <li>
                                    <a href="{{route('cash-payment-list')}}">Cash Payment List</a>
                                </li>
                                <li>
                                    <a href="{{ route('advance.payment.list') }}">Advance Payment
                                        List</a>
                                </li>
                                <li>
                                    <a href="{{ route('bank.to.bank.list') }}">Bank to Bank Transfer
                                        List</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Stock Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('stock-receive')}}">Stock Receive</a></li>
                        <li><a href="{{route('finished-goods')}}">Finished Goods</a></li>
                        <li><a href="{{route('material-collect')}}">Material Collects</a></li>
                        <li><a href="{{route('stock-transfer')}}">Stock Transfer</a></li>
                        <li><a href="{{route('stock-count')}}">Stock Count</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Inventory Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('stock-assign')}}">Stock Assign</a></li>
                        <li><a href="{{route('stock-out')}}">Stock Out</a></li>
                        <li><a href="{{route('stock-hand-report')}}">Stock On Hand Report</a></li>
                        <li><a href="{{route('stock-product-report')}}">Location Wise Product Report</a>
                        </li>
                        <li><a href="{{route('stock-reorder-report')}}">Stock Reorder Report</a></li>
                        {{-- <li><a href="inventory-management.stock_receive_report">Stock receive report</a></li> --}}
                        <li><a href="{{route('product-analysis-report')}}">Report::Product Analysis</a></li>
                    </ul>
                </li>

                <li class="menu-title">Program Modules</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Pre Admission</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('student.appointment')}}">Appointment</a></li>
                        <li><a href="{{route('student.case-history')}}">Case History</a></li>
                        <li><a href="{{ route('student.care-need-form') }}">Care Needs Form</a></li>
                        <li><a href="{{ route('student.referral-form') }}">Referral Form</a></li>
                        {{-- <li><a href="/medicine-admin">Medicine Admin</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a href="admission.add_student" class="waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Admission</span>
                    </a>
                    {{-- <a href="admission.add_student">Admission</a>
                </li> --}}
                {{-- <ul class="sub-menu" aria-expanded="true">
                    <li><a href="admission.add_student">Add Student</a></li>

                    <li><a href="/course-payment">Course Payment</a></li>
                </ul> --}}
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Assessment</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('sensory.checklist.for.child') }}">Sensory checklist for Child</a></li>
                        <li><a href="{{ route('social.communication') }}">Social Communication</a></li>
                        <li><a href="{{ route('occupational.therapy') }}">Occupational Therapy</a></li>
                        <li><a href="{{ route('physio.therapy') }}">Physiotherapy</a></li>
                        <li><a href="{{ route('functional.communication.assessment') }}">Functional Communication
                                Assessment</a></li>
                        <li><a href="{{ route('assessment.functional_movement_skills') }}">Fundamental Movement
                                Skills</a></li>
                        <li><a href="{{ route('executive.function.test') }}">Executive Function test</a></li>
                        <li><a href="{{ route('autism.behavior.checklist') }}">Autism Behavior Checklist (ABC)</a></li>
                        <li><a href="{{ route('sensory.checklist.for.young.adult') }}">Sensory checklist for Young
                                Adult</a>
                        </li>
                        <li><a href="{{ route('individual.risk.assessment.form') }}">Individual risk assessment form</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Students</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('student.list') }}">Students</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Dairy
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="{{ route('trip.report.form') }}">Trip report and Evaluation Form</a>
                                </li>
                                <li>
                                    <a href="{{ route('gym.outing.evaluation') }}">Gym and Outing Evaluation (D3cDT)
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('ot.assessment') }}">OT assessment in computer trainee</a>
                                </li>
                                <li>
                                    <a href="{{ route('student.dairy.incident-record') }}">Incident Record</a>
                                </li>
                                <li>
                                    <a href="{{ route('student.dairy.medicine-admin') }}">Medicine admin</a>
                                </li>
                                {{-- <li>
                                    <a href="student.dairy.score-calculation">Score Calculation</a>
                                </li>
                                <li>
                                    <a href="student.dairy.itp-evolution">ITP Evolution</a>
                                </li> --}}
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Co Curricular</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li> <a href="{{ route('student.co-curricular.drama-diary-evaluation') }}">Drama Diary
                                        Evaluation</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="student.student-attendence">Student Attendence</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Employment</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li> <a href="{{ route('student.employment.staff_and_workplace_inspecation_tool') }}">কর্মী
                                        ও কর্মস্থল পরিদর্শন টুল</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="student.vocational_evalution">Vocational Evalution</a></li>
                    </ul>

                </li>
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Online Class</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="/report">Report</a></li>
                        <li><a href="/create-task">Create Task</a></li>
                        <li><a href="/create-itp">Create ITP</a></li>
                        <li><a href="/assign-teacher">Assign Teacher</a></li>
                        <li><a href="/task-assign">Task Assign</a></li>
                        <li><a href="/create-homework">Create Homework</a></li>
                        <li><a href="/assign-homework">Assign Homework</a></li>
                        <li><a href="/create-tutorial">Create Tutorial</a></li>
                        <li><a href="/assign-tutorial">Assign Tutorial</a></li>
                        <li><a href="/class-lists">Class Lists</a></li>
                        <li><a href="/assign-class">Assign Class</a></li>
                        <li><a href="/weekly-task-plan">Weekly Task Plan</a></li>
                        <li><a href="/date-wise-teacher-ttendance">Date Wise Teacher Attendance</a></li>
                        <li><a href="/month-wise-teacher-attendance">Month Wise Teacher Attendance</a></li>
                        <li><a href="/teacher-attendance">Teacher Attendance</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Program</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="program.assign-task">Assign Task</a></li>
                        <li><a href="program.create-itp">Create ITP</a></li>
                        <li><a href="program.run-mitp">Run MITP</a></li>
                        <li><a href="program.notice-board">Notice Board</a></li>
                        <li><a href="program.assign-teacher"> Assign Teacher</a></li>
                        {{-- <li><a href="/">Score Calculator </a></li>
                        <li><a href="/p-create-task">Create Task </a></li>
                        <li><a href="/p-admission-request">Admission Request </a></li> --}}
                    </ul>
                </li>
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Multi_Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">Level_1.1</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-level-1-2">@lang('translation.Level_1.2')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);">Level_2.1</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);">Level_2.2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
                <li class="menu-title">Setup</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Company Setup</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li> <a href="setup.company-setup.company-setup">Company Setup</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Program Setup</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li> <a href="setup.program-setup.prescription">Prescription</a></li>
                                <li> <a href="setup.program-setup.activity-create">Activity create</a></li>
                                <li> <a href="{{ route('setup.program-setup.tesk-create') }}">Task create</a></li>
                                <li> <a href="setup.program-setup.tesk-weight-setup">Task Weight Setup</a></li>
                                <li> <a href="setup.program-setup.course-setup">Course Setup</a></li>
                                <li> <a href="{{ route('setup.program-setup.attendence-card-setup') }}">Attendence card setup</a></li>
                                <li> <a href="{{ route('setup.program-setup.vocational-category-subcategory-setup') }}">Vocational
                                        Category and subcategory setup</a></li>
                                <li> <a href="{{ route('setup.program-setup.academic-calender-create') }}">Academic Celender Create</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Project Setup</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.project-setup.project-setup">Project Setup</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Doctor Setup</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.doctor-setup">Doctor Setup</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Chart Of Accounts</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.chart-of-accounts">Chart Of Accounts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Bank Details Setup</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.account-details">Account Details</a>
                                </li>
                                <li>
                                    <a href="setup.manage-chequebook">Manage Chequebook</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Bank Reconcilation</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.bank-reconcilation-new">Bank Reconcilation New</a>
                                </li>
                                <li>
                                    <a href="setup.bank-reconcilation">Bank Reconcilation</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Vendor List</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.vendor-list.supplier-setup">Supplier Setup</a>
                                </li>
                                <li>
                                    <a href="setup.vendor-list.supplier-type-setup">Supplier Type Setup</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Customer List</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.customers-list.customer-reg">Customer Reg.</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Course and Admission</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.course-and-admission">Course </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Students details/ profile</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.students-details">Students details/ profile</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Vocational Marking</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.vocational-marking-category">Vocational Marking Category</a>
                                </li>
                                <li>
                                    <a href="setup.vocational-marking-subcategory">Vocational Marking Sub Category</a>
                                </li>
                                <li>
                                    <a href="setup.vocational-student-evolution">Vocational Student Evolution</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">HR & Admin Links</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.hr-and-admin-links">HR & Admin Links</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Payroll Management</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.payroll-management">Payroll Management</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Store Management</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="{{ route('warehouse.setup') }}">Warehouse Setup</a>
                                </li>
                                <li>
                                    <a href="{{ route('measure.unit.setup') }}">Measure Unit Setup</a>
                                </li>
                                <li>
                                    <a href="{{ route('product.category.setup') }}">Product Category Setup</a>
                                </li>
                                <li>
                                    <a href="{{ route('product.create') }}">Product Create</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Accounting Mapping</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.accounting-mapping">Accounting Mapping</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Budget & Forecasting</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.budget-and-forecasting">Budget & Forecasting</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Year End Close</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.year-end-close">Year End Close</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Other Settings</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.other-settings">Other Settings</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title">HR Admin</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>HR Admin</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="HR.warning-notice">Warning Notice</a></li>
                        <li><a href="HR.show-case-notice">Show Case Notice</a></li>
                        <li><a href="HR.advice-letter">Advice Letter</a></li>
                        <li><a href="HR.employee-leave-status">Employee Leave Status</a></li>
                        <li><a href="HR.certificate_setup">Certificate Setup</a></li>
                        <li><a href=""> </a></li>
                        <li><a href=""> </a></li>
                        <li><a href=""> </a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->