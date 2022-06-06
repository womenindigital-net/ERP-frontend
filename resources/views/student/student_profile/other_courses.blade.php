@extends('layouts.master')

@section('title') MATERIAL COLLECTS @endsection

@section('css')

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
                                    <p class=""><b class="pe-2">Duration:</b><i class="far fa-clock"></i>  2 hours</p>
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
                                    <p class=""><b class="pe-2">Duration:</b><i class="far fa-clock"></i>  2 hours</p>
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
                                    <p class=""><b class="pe-2">Duration:</b><i class="far fa-clock"></i>  2 hours</p>
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
<script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");
    
      if (dots.style.display == "none") {
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