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
                    <a href="accounting.journal" class="waves-effect">
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
                        <li><a href="accounting.income.student_income">Student Income</a></li>
                        <li><a href="accounting.income.sale_voucher">Sale Voucher</a></li>
                        <li><a href="accounting.income.received_payment">Donation And Other</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Payment </span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="accounting.purchase.requisition">Requisition</a></li>
                        <li><a href="accounting.purchase.purchase_order">Purchase Order</a></li>
                        <li><a href="accounting.purchase.purchase_return">Purchase Return</a></li>
                        <li><a href="accounting.purchase.supplier_payment">Supplier Payment</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Direct Payment</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="accounting.purchase.direct_payment.payment_add">Payment Add</a>
                                </li>
                                <li>
                                    <a href="accounting.purchase.direct_payment.cash_payment_list">Cash Payment List</a>
                                </li>
                                <li>
                                    <a href="accounting.purchase.direct_payment.advance_payment_list">Advance Payment
                                        List</a>
                                </li>
                                <li>
                                    <a href="accounting.purchase.direct_payment.bank_to_bank_list">Bank to Bank Transfer
                                        List</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Inventory Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="inventory-management.stock_assign">Stock Assign</a></li>
                        <li><a href="inventory-management.stock_out">Stock Out</a></li>
                        <li><a href="inventory-management.stock_hand_report">Stock On Hand Report</a></li>
                        <li><a href="inventory-management.location_wise_product_report">Location Wise Product Report</a>
                        </li>
                        <li><a href="inventory-management.stock_reorder_report">Stock Reorder Report</a></li>
                        {{-- <li><a href="inventory-management.stock_receive_report">Stock receive report</a></li> --}}
                        <li><a href="product_analysis_report">Report::Product Analysis</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Stock Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="stock-management.stock_receive">Stock Receive</a></li>
                        <li><a href="stock-management.finished_goods">Finished Goods</a></li>
                        <li><a href="stock-management.material_callects">Material Collects</a></li>
                        <li><a href="stock-management.stock_transfer">Stock Transfer</a></li>
                        <li><a href="stock-management.stock_count">Stock Count</a></li>
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
                        <li><a href="assessment.sensory-checklist-for-child">Sensory checklist for Child</a></li>
                        <li><a href="assessment.Social-Communication">Social Communication</a></li>
                        <li><a href="assessment.occupational-therapy">Occupational Therapy</a></li>
                        <li><a href="assessment.physiotherapy">Physiotherapy</a></li>
                        <li><a href="assessment.functional_communication_assessment">Functional Communication
                                Assessment</a></li>
                        <li><a href="assessment.functional_movement_skills">Fundamental Movement Skills</a></li>
                        <li><a href="assessment.executive_function_test">Executive Function test</a></li>
                        <li><a href="assessment.autism_behavior_checklist">Autism Behavior Checklist (ABC)</a></li>
                        <li><a href="assessment.sensory_checklist_for_young_adult">Sensory checklist for Young Adult</a>
                        </li>
                        <li><a href="assessment.individual_risk_assessment_form">Individual risk assessment form</a>
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
                            <a href="student.student_list">Students</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Dairy
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="student.dairy.trip-report-form">Trip report and Evaluation Form</a>
                                </li>
                                <li>
                                    <a href="student.dairy.gym-outing-evalution">Gym and Outing Evaluation (D3cDT)
                                    </a>
                                </li>
                                <li>
                                    <a href="student.dairy.ot-assessment">OT assessment in computer trainee</a>
                                </li>
                                <li>
                                    <a href="student.dairy.incident-record">Incident Record</a>
                                </li>
                                <li>
                                    <a href="student.dairy.medicine-admin">Medicine admin</a>
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
                                <li> <a href="student.co-curricular.drama-diary-evaluation">Drama Diary Evaluation</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Employment</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li> <a href="student.employment.staff_and_workplace_inspecation_tool">কর্মী ও কর্মস্থল
                                        পরিদর্শন টুল</a>
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
                                <li> <a href="setup.program-setup.tesk-create">Task create</a></li>
                                <li> <a href="setup.program-setup.tesk-weight-setup">Task Weight Setup</a></li>
                                <li> <a href="setup.program-setup.course-setup">Course Setup</a></li>
                                <li> <a href="setup.program-setup.attendence-card-setup">Attendence card setup</a></li>
                                <li> <a href="setup.program-setup.vocational-category-subcategory-setup">Vocational
                                        Category and subcategory setup</a></li>
                                <li> <a href="setup.program-setup.academic-calender-create">Academic Celender Create</a>
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
                                    <a href="setup.bank-details-setup">Bank Details Setup</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Bank Reconcilation</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="setup.bank-recncilation">Bank Reconcilation</a>
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
                                    <a href="setup.course-and-admission">Course and Admission</a>
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
                                    <a href="setup.vocational-marking">Vocational Marking</a>
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
                                    <a href="setup.store-management.warehouse_setup">Warehouse Setup</a>
                                </li>
                                <li>
                                    <a href="setup.store-management.measure-unit">Measure Unit Setup</a>
                                </li>
                                <li>
                                    <a href="setup.store-management.product-category">Product Category Setup</a>
                                </li>
                                <li>
                                    <a href="setup.store-management.warehouse_setup">Create Product</a>
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