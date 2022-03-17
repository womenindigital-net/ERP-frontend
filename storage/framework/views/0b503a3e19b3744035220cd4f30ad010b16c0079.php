<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="index" class="waves-effect active">
                        <i class="bx bx-home-circle"></i>
                        <span>Starter Page</span>
                    </a>
                </li>

                <li class="menu-title">Page</li>

                <li>
                    <a href="journal" class="waves-effect">
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
                        <li><a href="student_income" >Student Income</a></li>
                        <li><a href="sale_voucher" >Sale Voucher</a></li>
                        <li><a href="received_payment" >Received Payment</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Purchase </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="requisition" >Requisition</a></li>
                        <li><a href="purchase_order" >Purchase Order</a></li>
                        <li><a href="purchase_return" >Purchase Return</a></li>
                        <li><a href="payment_for_requisition" >Payment for requisition</a></li>
                        <li><a href="payment_for_requisition" >Direct Payment</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Accounting</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="" >1.1 Journal Entry</a></li>
                        <li><a href="" >1.2 Journal Approval</a></li>
                        <li><a href="" >1.3 Chart Of Account View</a></li>
                        <li><a href="" >1.4 Financial Year Closing</a></li>
                        <li><a href="" >1.5 Cash Flow</a></li>
                        <li><a href="" >1.6 Cheque Book  Setup</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span >Multi_Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" >Level_1.1</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-level-1-2"><?php echo app('translator')->get('translation.Level_1.2'); ?></a>
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
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH F:\github\ERP-frontend-wid\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>