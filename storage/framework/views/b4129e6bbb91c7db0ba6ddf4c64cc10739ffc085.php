

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Starter_Page'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Utility <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Teacher Attendance <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="formCheck2" checked="">
        <label class="form-check-label" for="formCheck2">
            Attendance
        </label>
    </div>
    <div>
        <button type="submit" class="btn btn-primary w-md">Save</button>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Total Attendance</th>
                                    <th>Total Late</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">

                            <thead>
                                <tr>
                                    <th>Attendance Date</th>
                                    <th>Attendance Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2022-04-24</td>
                                    <td>13:01:25</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GITHUB\ERP-frontend-WID\resources\views/teacher-attendance.blade.php ENDPATH**/ ?>