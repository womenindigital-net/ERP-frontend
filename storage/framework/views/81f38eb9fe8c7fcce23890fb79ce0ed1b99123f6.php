<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/favicon.ico')); ?>">
    <?php echo $__env->make('layouts.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    @livewireStyles
    <link rel="stylesheet" href="<?php echo e(asset('assets/libs/toastr/toastr.min.css')); ?>">
</head>

<?php $__env->startSection('body'); ?>

<body data-sidebar="dark">
    <?php echo $__env->yieldSection(); ?>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php echo $__env->make('layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <?php echo $__env->make('layouts.right-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /Right-bar -->

    <!-- JAVASCRIPT -->
    <?php echo $__env->make('layouts.vendor-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    @livewireScripts
    <!-- jquery step -->
    <script src="<?php echo e(URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/toastr/toastr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/toastr.init.js')); ?>"></script>
    <script>
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": 300,
        "hideDuration": 1000,
        "timeOut": 5000,
        "extendedTimeOut": 1000,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    window.addEventListener('close-modal', event => {
        $(".btn-close").click();
    });

    window.addEventListener('reset-form', event => {
        document.getElementById(event.detail.formName).reset();
    });

    window.addEventListener('notify', event => {
        let type = !event.detail || !event.detail.type ? 'success' : event.detail.type;
        let message;

        switch (type) {
            case 'success':
                message = event.detail.message || 'Operation successful';
                break;
            case 'warning':
                message = event.detail.message || 'Warning';
                break;
            case 'error':
                message = event.detail.message || 'Danger';
                break;
            default:
                message = event.detail.message || 'Well done!';
        }
        toastr[type](message)
    });
    </script>
</body>

</html><?php /**PATH D:\GITHUB\ERP-frontend-WID\resources\views/layouts/master.blade.php ENDPATH**/ ?>