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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<style>
    .click{
        height: 10px;
        widows: 10px;
        }
    .tree {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .tree ul {
        margin: 0;
        padding: 0;
        list-style: none;
        margin-left: 1em;
        position: relative;
    }

    .tree ul ul {
        margin-left: 0.5em;
    }

    .tree ul:before {
        content: "";
        display: block;
        width: 0;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        border-left: 1px solid;
    }

    .tree ul li:before {
        content: "";
        display: block;
        width: 10px;
        height: 0;
        border-top: 1px solid;
        margin-top: -1px;
        position: absolute;
        top: 1em;
        left: 0;
    }

    .tree ul li:last-child:before {
        background: #fff;
        height: auto;
        top: 1em;
        bottom: 0;
    }

    .tree li {
        margin: 0;
        padding: 0 1em;
        line-height: 2em;
        color: #f46a6a;
        font-weight: 700;
        position: relative;
    }

    .tree li .expand {
        display: block;
    }

    .tree li .collapse {
        display: none;
    }

    .tree li a {
        text-decoration: none;
        color: #f46a6a;
    }

    .tree li button {
        text-decoration: none;
        color: #f46a6a;
        border: none;
        background: transparent;
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
        outline: 0;
    }

    .tree li button:active {
        text-decoration: none;
        color: #f46a6a;
        border: none;
        background: transparent;
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
        outline: 0;
    }

    .tree li button:focus {
        text-decoration: none;
        color: #f46a6a;
        border: none;
        background: transparent;
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
        outline: 0;
    }

    .indicator {
        margin-right: 5px;
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
                <ul id="tree1" class="tree">
                    <li><a href="#"><input type="checkbox" class="click text-danger">  Section E: Domain 01 - Physical development<i class="mdi mdi-eye" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"></i></a>
                        <ul>
                            <li><a href="#"><input type="checkbox" class="click">  Motor Planning <i class="mdi mdi-eye" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"></i></a>
                                <ul>
                                    <li><a href="#"><input type="checkbox" class="click">  Gross Motor Skills <i class="mdi mdi-eye" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"></i></a>
                                        <ul>
                                            <li><a href="#"><input type="checkbox" class="click">  Riding a tricycle</a></li>
                                            <li><a href="#"><input type="checkbox" class="click">  playing on swings</a></li>
                                            <li><a href="#"><input type="checkbox" class="click">  playing on monkey bars</a></li>
                                            <li><a href="#"><input type="checkbox" class="click">  Sit with support of pillow or chair</a></li>
                                            <li><a href="#"><input type="checkbox" class="click">  Uses arms to raise trunk from stomach position</a></li>
                                            <li><a href="#"><input type="checkbox" class="click">  Sit with support of pillow or chair</a></li>
                                            <li><a href="#"><input type="checkbox" class="click">  Bounce up & down in sitting position</a></li>
                                            <li><a href="#"><input type="checkbox" class="click">  Use simple hand movements to the side to show protective
                                                    behavior</a></li>
                                            <li><a href="#"><input type="checkbox" class="click">  Walk a specified distance pushing and pulling a wagon</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><input type="checkbox" class="click">  Employee Maint.</li>
                                </ul>
                            </li>
                            <li><input type="checkbox" class="click">  Human Resources</li>
                        </ul>
                    </li>
                </ul>
            </div><!-- card -->
        </div> <!-- end Col-9 -->
    </div>
</div>
<!--  mtp qa view Details modal example -->
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">MTP QA VIEW DETAILS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section>
                  <form>
                    <x-input-radio-or-check name="mitp" label="Is Occupational Assessment has completed?" :records="$mitpConstent::$yesNoEn">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="Is Physiotherapy assessment has completed?" :records="$mitpConstent::$yesNoEn">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="Is Fundamental Movement Skills has completed?" :records="$mitpConstent::$yesNoEn">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="Gross Motor Skills" type="checkbox" :records="$mitpConstent::$organization">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="Fine Motor Skills" type="checkbox" :records="$mitpConstent::$fine">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="চলাফেরার ক্ষেত্রে ভারসাম্য আছে কি?
                    (যেমন-হাটার সময় পড়ে যাওয়া, হাটার সময় শরীর দোলানো, থপ থপ জোরে হাটা, বেখাপ্পা ভাবে হাটা )" type="checkbox" :records="$mitpConstent::$yesNo">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="চুষে খেতে পারে কিনা ?" type="checkbox" :records="$mitpConstent::$yesNo">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="শক্ত খাবার খেতে পারে কিনা?" type="checkbox" :records="$mitpConstent::$yesNo">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="খাবার একবারে গিলে ফেলে কিনা?" type="checkbox" :records="$mitpConstent::$yesNo">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="চিবিয়ে খাবার খেতে কোন সমস্যা ছিল কিনা" type="checkbox" :records="$mitpConstent::$yesNo">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-text name="hh" value="কোন খাবার চিবিয়ে কায়না ।গিলে ফেলে ।" placeholder="বিস্তারিত লিখুন" label="বিস্তারিত লিখুন">
                    </x-input-text>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="তিন বা চার চাকার বাইসাইকেল চালানো শিখেছে ?" type="checkbox" :records="$mitpConstent::$yesNo">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="শিশু কি সাঁতার জানে ?" type="checkbox" :records="$mitpConstent::$yesNo">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="শিশু বাইরে খেলার উপকরন পছন্দ করে কিনা? (যেমন ফুটবল , ক্রিকেট )" type="checkbox" :records="$mitpConstent::$yesNo">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="খেলাধুলা করতে পছন্দ করে ?" type="checkbox" :records="$mitpConstent::$yesNo">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="মবিলিটি " type="checkbox" :records="$mitpConstent::$mobility">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="সোজা হয়ে বসতে পছন্দ করে কি?" type="checkbox" :records="$mitpConstent::$yesNo">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="বেমানান ভঙ্গিতে দৌঁড়ায়" type="checkbox" :records="$mitpConstent::$yesNo">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                    {{-- end row --}}
                    <x-input-radio-or-check name="mitp" label="কাজ এড়িয়ে চলতে চায়" type="checkbox" :records="$mitpConstent::$yesNo">
                    </x-input-radio-or-check>
                    {{-- end row --}}
                  </form>
                </section>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
@section('script')
<script>
    var tree = document.getElementById("tree1");
if(tree){
tree.querySelectorAll("ul").forEach(function(el,key,parent){
    var elm =  el.parentNode;
    elm.classList.add("branch");
    var x = document.createElement("i");
    x.classList.add("indicator");
    x.classList.add("bi-folder-plus");
    elm.insertBefore(x, elm.firstChild);
    el.classList.add("collapse");

    elm.addEventListener("click", function(event)
    {
        if (elm === event.target || elm === event.target.parentNode){

            if(el.classList.contains('collapse')){
                el.classList.add("expand");
                el.classList.remove("collapse");
                x.classList.remove("bi-folder-plus");
                x.classList.add("bi-folder-minus");
            }else{
                el.classList.add("collapse");
                el.classList.remove("expand");
                x.classList.remove("bi-folder-minus");
                x.classList.add("bi-folder-plus");
            }
        }
    },false);
});
}
</script>
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

<script src="{{ asset('assets/js/pages/table-editable.int.js') }}"></script>
<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>


@endsection
