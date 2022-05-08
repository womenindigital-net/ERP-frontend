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
                        <span>Income </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="accounting.income.student_income" >Student Income</a></li>
                        <li><a href="accounting.income.sale_voucher" >Sale Voucher</a></li>
                        <li><a href="accounting.income.received_payment" >Received Payment</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Purchase </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="accounting.purchase.requisition">Requisition</a></li>
                        <li><a href="accounting.purchase.purchase_order" >Purchase Order</a></li>
                        <li><a href="accounting.purchase.purchase_return" >Purchase Return</a></li>
                        <li><a href="accounting.purchase.supplier_payment" >Supplier Payment</a></li>
                        <li><a href="direct_payment" >Direct Payment</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Inventory Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="stock_assign" >Stock Assign</a></li>
                        <li><a href="stock_out" >Stock Out</a></li>
                        <li><a href="stock_hand_report" >Stock On Hand Report</a></li>
                        <li><a href="location_wise_product_report" >Location Wise Product Report</a></li>
                        <li><a href="stock_reorder_report" >Stock Reorder Report</a></li>
                        <li><a href="stock_receive_report" >Stock receive report</a></li>
                        <li><a href="product_analysis_report" >Report::Product Analysis</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Stock Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="stock_receive" >Stock Receive</a></li>
                        <li><a href="finished_goods">Finished Goods</a></li>
                        <li><a href="material_callects" >Material Collects</a></li>
                        <li><a href="stock_transfer" >Stock Transfer</a></li>
                        <li><a href="stock_count" >Stock Count</a></li>
                    </ul>
                </li>
                {{-- <li class="menu-title">Program Modules</li> --}}
                
                
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span >Student List</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="my_students" >My Students</a></li>
                        <li><a href="my-online-students" >My Online Students</a></li>
                        <li><a href="student-attendance-card-setup" >Student Attendance Card Setup</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Pre Admission</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="/case-histroy">Case History</a></li>
                        <li><a href="/referral-form">Referral form</a></li>
                        <li><a href="/care-needs-form">CARE needs form</a></li>
                        <li><a href="/medicine-admin">Medicine Admin</a></li>
                        <li><a href="/prescription">Prescription</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Admission</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="/student-payment">Student Payment</a></li>
                        <li><a href="/course-payment">Course Payment</a></li>
                    </ul>
                </li>
                <li>
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
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Program</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="/p-assign-task">Assign Task</a></li>
                        <li><a href="/p-create-itp">Create ITP</a></li>
                        <li><a href="/">Run MITP</a></li>
                        <li><a href="/p-notice-board">Notice Board</a></li>
                        <li><a href="/"> Assign Teacher</a></li>
                        <li><a href="/">Score Calculator </a></li>
                        <li><a href="/p-create-task">Create Task </a></li>
                        <li><a href="/p-admission-request">Admission Request </a></li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span >Multi_Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" >Level_1.1</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-level-1-2">@lang('translation.Level_1.2')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);" >Level_2.1</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);">Level_2.2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="menu-title">Settings</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Company Setup</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.company-setup">Company Setup</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Project Setup</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.project-setup">Project Setup</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Chart Of Accounts</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.chart-of-accounts">Chart Of Accounts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Bank Details Setup</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.bank-details-setup">Bank Details Setup</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Bank Reconcilation</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.bank-recncilation">Bank Reconcilation</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Vendor List</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.vendor-list">Vendor List</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Customer List</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.customer-list">Customer List</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Course and Admission</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.course-and-admission">Course and Admission</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Students details/ profile</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.students-details">Students details/ profile</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Vocational Marking</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.vocational-marking">Vocational Marking</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">HR & Admin Links</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.hr-and-admin-links">HR & Admin Links</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Payroll Management</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.payroll-management">Payroll Management</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Store Management</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.store-management">Store Management</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Accounting Mapping</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.accounting-mapping">Accounting Mapping</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Budget & Forecasting</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.budget-and-forecasting">Budget & Forecasting</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Year End Close</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.year-end-close">Year End Close</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Other Settings</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="settings.other-settings">Other Settings</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
