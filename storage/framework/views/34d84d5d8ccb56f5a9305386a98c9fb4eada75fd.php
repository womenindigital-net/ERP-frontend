<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18"><?php echo e($pageHeader ?? ''); ?></h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <?php if(isset($base)): ?>
                    <li class="breadcrumb-item"><a href="javascript: void(0);"><a href="<?php echo e($base[key($base)]); ?>"></a><?php echo e(key($base)); ?></a></li>
                    <?php if(isset($sub)): ?>
                        <li class="breadcrumb-item active">
                            <?php $__currentLoopData = $sub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <a href="<?php echo e($val); ?>"><?php echo e($key); ?></a> /
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </li>
                    <?php endif; ?>
                    <?php endif; ?>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<?php /**PATH D:\GITHUB\ERP-frontend-WID\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>