

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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Utility <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Starter Page <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between pb-3">
                        <div>
                            <h4 class="card-title">Journals list</h4>
                        </div>
                        <div class="">
                            <a href="journal" class="btn btn-primary">All Journals</a>
                        </div>
                    </div>

                    <table id="datatable-buttons"
                        class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Proj. id</th>
                                <th>Particulars</th>
                                <th>Trans. Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td class="text-center">
                                    <button type="button"
                                        class="btn btn-primary btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".bs-example-modal-x"> <i
                                            class="fas fa-eye"></i></button>
                                    <button type="button"
                                    class="btn btn-danger btn-rounded waves-effect waves-light"> <i
                                        class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

                        <!--  Extra Large modal example -->
                        <div class="modal fade bs-example-modal-x" tabindex="-1" role="dialog"
                        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-primary" id="myExtraLargeModalLabel">Journal voucher
                                        Approve Details
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- journal form start -->
                                    <!-- journal form start -->
                                    <div class="row">
                                        <table class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <strong>Project name: </strong>Lorem ipsum dolor sit amet.
                                                    </td>
                                                    <td><strong>Voucher Date: </strong>2022/4/4</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Transaction Amount: </strong>056456$</td>
                                                    <td><strong>Transaction Amount: </strong>056456$</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Particular: </strong>Lorem ipsum dolor sit amet.</td>
                                                    <td><strong>Reference: </strong>46</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary">Posting Transaction Details</h4>
                                                <div class="">
                                                    <table class="table table-striped mb-0 text-center">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Acc. Number</th>
                                                                <th style="width: 45%;">Acc. Particular</th>
                                                                <th>Credit</th>
                                                                <th>Dedit</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>AC545445</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Optio,
                                                                    quidem recusandae placeat enim repellat
                                                                    exercitationem error amet.
                                                                    Debitis, libero magni!</td>
                                                                <td>5000</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>AC545445</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Optio,
                                                                    quidem recusandae placeat enim repellat
                                                                    exercitationem error amet.
                                                                    Debitis, libero magni!</td>
                                                                <td></td>
                                                                <td>5000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
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


    <!-- Required datatable js -->
    <script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
    <!-- Datatable init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>

    <!-- Responsive Table js -->
    <script src="<?php echo e(URL::asset('/assets/libs/rwd-table/rwd-table.min.js')); ?>"></script>

    <!-- Init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/table-responsive.init.js')); ?>"></script>

    <!-- Table Editable plugin -->
    <script src="<?php echo e(URL::asset('/assets/libs/table-edits/table-edits.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/pages/table-editable.int.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\github\ERP-frontend-wid\resources\views/approved_journals_list.blade.php ENDPATH**/ ?>