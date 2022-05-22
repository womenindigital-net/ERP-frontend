<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
    @include('layouts.head-css')
    @livewireStyles
    <link rel="stylesheet" href="{{asset('assets/libs/toastr/toastr.min.css')}}">
</head>

@section('body')
    <body data-sidebar="dark">
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('layouts.right-sidebar')
    <!-- /Right-bar -->

    <!-- JAVASCRIPT -->
    @include('layouts.vendor-scripts')
    @livewireScripts
<script src="{{asset('assets/libs/toastr/toastr.min.js')}}"></script>
<script src="{{asset('assets/js/pages/toastr.init.js')}}"></script>
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
        console.log(type, message)
        toastr[type](message)
    });
</script>
</body>

</html>
