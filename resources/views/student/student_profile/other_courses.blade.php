@extends('layouts.master')

@section('title') MATERIAL COLLECTS @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet"
    type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">

<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Sweet Alert-->
<link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<style>
    .content{
        text-align: center;
    }
    .content h2{
        font-weight: bold;
        color: #f46a6a; 
    }
    .single-item {
    display: flex;
    flex-direction: column;
    box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
    padding: 29px;
    border-radius: 6px;
    width: 237px;

    }
    .text h1{

    }
    .details{
        padding-top: 5px;
    }
    #more {display: none;}
    #myBtn{
        color: #f46a6a; 
    }
</style>
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') Student Profile @endslot
@endcomponent


@include('layouts.student_profile.header')


<div class="row">
    <div class="col-12">

        @include('layouts.student_profile.left_sidebar')

        <!-- Right Sidebar -->
        <div class="email-rightbar mb-3">
            <div class="card">
                <!-- course area start -->
                <div class="course_area">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 content pb-5">
                            <h2>Other Courses</h2>
                        </div>
                    </div>
                    <div class="row pb-5 ">
                        <div class="col-lg-4">
                        <div class="single-item">
                            <div class="text">
                                <h4 class="text-center">Bangla</h4>
                                <div class="details">
                                    <p class=""><b class="pe-2">Duration:</b><i class="fa-solid fa-clock-rotate-left"></i>2 hours</p>
                                    <p class=""><b class="pe-2">Teacher:</b>Mr.Habibullah</p>
                                    <span id="dots"></span>
                                    <span id="more">erisque enim ligula venenatis dolor.</span>
                                    <div onclick="myFunction()" id="myBtn">Read more</div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="single-item">
                            <div class="text p-0">
                                <h4 class="text-center">English</h4>
                                <div class="details">
                                    <p class=""><b class="pe-2">Duration:</b><i class="fa-solid fa-clock-rotate-left"></i>2 hours</p>
                                    <p class=""><b class="pe-2">Teacher:</b>  Mr.Habibullah</p>
                                    <span id="dots"></span>
                                    <span id="more">erisque enim ligula venenatis dolor.</span>
                                    <div onclick="myFunction()" id="myBtn">Read more</div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="single-item">
                            <div class="text">
                                <h4 class="text-center">Math</h4>
                                <div class="details">
                                    <p class=""><b class="pe-2">Duration:</b><i class="fa-solid fa-clock-rotate-left"></i>2 hours</p>
                                    <p class=""><b class="pe-2">Teacher:</b>  Mr.Habibullah</p>
                                    <span id="dots"></span>
                                    <span id="more">erisque enim ligula venenatis dolor.</span>
                                    <div onclick="myFunction()" id="myBtn">Read more</div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- course area end -->
            </div><!-- card -->
        </div>
    </div>

</div>

@endsection
@section('script')
<!-- form advanced init -->
<script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

<!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>


<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

<!-- Init js -->
<script src="{{ URL::asset('/assets/js/pages/table-responsive.init.js') }}"></script>

<!-- Table Editable plugin -->
<script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>

<!-- Sweet Alerts js -->
<script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ URL::asset('/assets/js/pages/sweet-alerts.init.js') }}"></script>

<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
<script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");
    
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
      }
    }
    </script>


@endsection