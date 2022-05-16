

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Starter_Page'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Utility <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Online_Class_Report <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    

 

    <div class="row">
        <div class="col-12  text-center">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label">Student Name</label>
                        <div class="col-md-8">
                            <select class="form-select">
                                <option>Select</option>
                                <option>Hiya</option>
                                <option>Riya</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-date-input" class="col-md-4 col-form-label">Date</label>
                        <div class="col-md-8">
                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                        </div>
                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <tr>
                                <th>Assign Teacher</th>
                                <th>Given Attendance</th>
                                <th>Complete Scoring</th>
                            </tr>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- data table js -->
<script src="<?php echo e(URL::asset('assets/js/pages/datatables.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/datepicker/datepicker.min.js')); ?>"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GITHUB\ERP-frontend-WID\resources\views/report.blade.php ENDPATH**/ ?>