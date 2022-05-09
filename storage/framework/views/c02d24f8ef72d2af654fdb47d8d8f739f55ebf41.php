

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Starter_Page'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('/assets/libs/datepicker/datepicker.min.css')); ?>">
    
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive Table css -->
    <link href="<?php echo e(URL::asset('/assets/libs/rwd-table/rwd-table.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="<?php echo e(URL::asset('/assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Utility <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Cash Payment List <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable" class="table table-bordered dt-responsive w-100">
                                            <thead>
                                            <tr>
                                                <th>Purpose</th>
                                                <th>From Account</th>
                                                <th>To account</th>
                                                <th>Amount</th>
                                                <th>Check Book Name</th>
                                                <th>Check No</th>
                                                <th>Trans Date</th>
                                                <th>Is Sent For Approval</th>
                                                <th>Is Approved</th>
                                                <th>Approved By</th>
                                                <th>Approved Date</th>
                                                <th>Is Transfer Done</th>
                                                <th>Transfer Date</th>
                                                <th>Log</th>
                                                <th>Action</th>
                                                </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <tr>
                                                <td>Cash salary to be paid to the new staffs as 1. Jannatul Khuludh -Tk.5633/-, 2.Ms. Raksana Begum -7733/- 3. Sheyreen Binte Malek Tk.5200/-, 4. Bijoy Gharami Tk.10400/-, Md. Ridoy Hasan 7,467/-</td>
                                                <td>1050004-Bank-The City Bank Ltd (3101829023001)-Y</td>
                                                <td>7550001-Administration Staff Salary-N</td>
                                                <td>36433</td>
                                                <td>City Bank Book-3</td>
                                                <td>6446620</td>
                                                <td></td>
                                                <td>Y</td>
                                                <td>No</td>
                                                <td></td>
                                                <td></td>
                                                <td>N</td>
                                                <td></td>
                                                <td></td>
                                                <td><button type="button"
                                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light"> <i
                                                        class="fas fa-check"></i></button>
                                                <button type="button"
                                                class="btn btn-sm  m-1 btn-primary btn-rounded waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target=".cash-payment-view"> <i
                                                    class="fas fa-eye"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                                    data-bs-toggle="modal" data-bs-target=".journal-modal-xl-edit">
                                                    <i class="fas fa-pen"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light"> <i
                                                        class="fas fa-trash-alt"></i></button></td>
                                            </tr>
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>

                </div>
            </div>
        </div>
    </div>

         <!--  Extra Large modal example -->
         <div class="modal fade cash-payment-view" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary">Cash Payment View <i class=" fas fa-eye bx-tada"></i>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- journal form start -->
                            <div class="row">
                                <div class="col-md-12 my-3">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Project</label>
                                        <div class="col-sm-9">
                                          <input type="text" readonly class="form-control"  value="Administration">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">From Account</label>
                                        <div class="col-sm-9">
                                          <input type="text" readonly class="form-control"  value="1050004-Bank-The City Bank Ltd (3101829023001)">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">To Account</label>
                                        <div class="col-sm-9">
                                          <input type="text" readonly class="form-control"  value="1050001-Bank - Brac Bank (A/c # 1555204025093001)">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Amount</label>
                                        <div class="col-sm-9">
                                          <input type="number"  class="form-control"  value="21343">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Chequebook Name</label>
                                        <div class="col-sm-9">
                                          <input type="text" readonly class="form-control"  value="City Bank Book-3">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Cheque No</label>
                                        <div class="col-sm-9">
                                          <input type="text" readonly class="form-control"  value="6446552">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Amount</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" readonly rows="5">Amount as bank transfer from City bank (VTC A/C -3101829023001) to BRAC Bank (Angel Chef A/C-1555204025093001) for food sales by Angel chef to the parents for celebrating new year-2022 prog. because this amount deposited in the city bank a/c as subscriptions received from the parents.</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <h4>Approval History</h4>
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive table-responsive w-100">
                                        <thead>
                                            <tr class="table-primary nowrap">
                                                <th>Sl</th>
                                                <th>Approvar</th>
                                                <th>Status</th>
                                                <th>Comments</th>
                                                <th>Status Changed</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Sajida Rahman</td>
                                                <td>Approved</td>
                                                <td></td>
                                                <td>2022-01-25</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xl-12 my-4">
                                    <label for="">Comments</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Your Comment">
                                 </div>
                            </div>
                        <!-- journal form end -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn font-size-16 btn-success"><i class="bx bx-printer"></i> Print</button>
                        <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal"><i class="bx bx-exit"></i> Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- form advanced init -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/form-advanced.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/select2/select2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/datepicker/datepicker.min.js')); ?>"></script>

    <!-- form repeater js -->
    <script src="<?php echo e(URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/pages/form-repeater.int.js')); ?>"></script>

    

    <!-- Responsive Table js -->
    <script src="<?php echo e(URL::asset('/assets/libs/rwd-table/rwd-table.min.js')); ?>"></script>

    <!-- Init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/table-responsive.init.js')); ?>"></script>

    <!-- Table Editable plugin -->
    <script src="<?php echo e(URL::asset('/assets/libs/table-edits/table-edits.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/pages/table-editable.int.js')); ?>"></script>

    <!-- Required datatable js -->
    <script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
    <!-- Datatable init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>

    <!-- Plugins js -->
    <script src="<?php echo e(URL::asset('/assets/libs/dropzone/dropzone.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-bottom'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GITHUB\ERP-frontend-WID\resources\views/accounting/purchase/direct_payment/cash_payment_list.blade.php ENDPATH**/ ?>