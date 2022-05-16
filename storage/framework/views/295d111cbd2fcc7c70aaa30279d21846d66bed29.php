

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Starter_Page'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Utility <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> student_payment <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    
    <div class="">
        <div class="">
            <div class="container-fluid">
                    <!-- start row  -->
                    <!-- start page title -->
                    <div class="row">
                        
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive  nowrap ">
                                        <thead>
                                        <tr>
                                            <th>ID </th>
                                            <th>Student ID</th>
                                            <th>Student name</th>
                                            <th>Last pay date</th>
                                            <th>Pay amount</th>
                                            <th>Father name</th>
                                            <th>Mother name</th>
                                            <th>Mother mobile</th>
                                            <th>Father mobile</th>
                                            <th>Address</th>

                                        </tr>
                                        </thead>


                                        <tbody>
                                        <tr>
                                            <td>121 </td>
                                            <td>12/04</td>
                                            <td>puja</td>
                                            <td>04</td>
                                            <td>5523 </td>
                                            <td>hillo</td>
                                            <td>hillo wife</td>
                                            <td>0172585</td>
                                            <td>0172585 </td>
                                            <td>Dhaka</td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row --> 
                    <!-- end row -->
                

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        
        
        <!-- End Page-content -->

        
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
 

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
<!-- Datatable init js -->
<script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>
<!-- jquery step -->
<script src="<?php echo e(URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js')); ?>"></script>

<!-- form wizard init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/form-wizard.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GITHUB\ERP-frontend-WID\resources\views/student-payment.blade.php ENDPATH**/ ?>