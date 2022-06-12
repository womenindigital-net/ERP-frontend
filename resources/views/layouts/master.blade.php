<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- <title> @yield('title') | Skote - Admin & Dashboard Template</title> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    @include('layouts.head-css')
    @livewireStyles()
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/libs/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <title></title>
</head>
<body data-sidebar="dark">
<div id="layout-wrapper">
    @include('layouts.topbar')
    @include('layouts.sidebar')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                {{--                    @include('elements.breadcrumb')--}}
                @include('elements.errors')
                @include('elements.flash')
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </div>
</div>
@include('layouts.right-sidebar')
@include('layouts.vendor-scripts')
@livewireScripts()
<!-- jquery step -->
<script src="{{ asset('assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>
<script src="{{asset('assets/libs/toastr/toastr.min.js')}}"></script>
<script src="{{asset('assets/js/pages/toastr.init.js')}}"></script>
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
{{--<script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>--}}
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
