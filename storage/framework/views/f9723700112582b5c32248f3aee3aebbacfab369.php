

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
        <?php $__env->slot('title'); ?> STOCK RECORDER REPORT <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Recieved Date</th>
                                <th>Recieved Type</th>
                                <th>Item Code</th>
                                <th>Item Desc</th>
                                <th>Unit Name</th>
                                <th>Qnty</th>
                                <th>Expiry Date</th>
                                <th>Serial No</th>
                                <th>Store Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>12/04</td>
                                <td>puja</td>
                                <td>Hridoy</td>
                                <td>Office Store</td>
                                <td>12/04</td>
                                <td>puja</td>
                                <td>Hridoy</td>
                                <td>Hridoy</td>
                                <td>Hridoy</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row --> 
    <!-- end row -->
    
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-bottom'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\github\ERP-frontend-wid\resources\views/location_wise_product_report.blade.php ENDPATH**/ ?>