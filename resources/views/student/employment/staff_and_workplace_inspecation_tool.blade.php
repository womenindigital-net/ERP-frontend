@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title') STUDENT QAS @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-6">
                        <h4 class="card-title">কর্মী ও কর্মস্থল পরিদর্শন টুল</h4>
                    </div>
                    <div class="col-6 text-end  mb-3">
                        <button type="button" class="btn btn-outline-info waves-effect waves-light"
                            data-bs-toggle="modal" data-bs-target=""><i class="fa fa-user"></i>Profile</button>
                        <button type="button" class="btn btn-outline-info waves-effect waves-light"
                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><i class="fa fa-plus"></i>
                            ADD</button>

                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive  w-100">
                        <thead>
                            <tr>
                                <th>Collection Date</th>
                                <th>Student Name</th>
                                <th>Collected By</th>
                                <th>Log</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2022-03-29</td>
                                <td>Ashfaq Sadi</td>
                                <td>Nurjahan Dipa</td>
                                <td>
                                    <small>
                                        <span>Create: Nurjahan Dipa @ 2022-03-29 16:04:41</span><br />
                                        <span>Update: Ohidul Hassan @ 2022-04-12 11:36:44</span>
                                    </small>
                                </td>
                                <td>
                                    <button type="button"
                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg">
                                        <i class=" fas fa-eye"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-toggle="modal"
                                        data-bs-target=".material-callects-modal-xl-view">
                                        <i class="fas fa-pen"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                            class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>
<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="vertical-example" class="vertical-wizard">
                    <!-- Seller Details -->
                    <h3>কর্মী ও কর্মস্থল পরিদর্শন টুল</h3>
                    <section>
                        <form>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-firstname-input">Collection Date:</label>
                                        <div class="input-group" id="datepicker2">
                                            <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                data-date-format="dd M, yyyy" data-date-container='#datepicker2'
                                                data-provide="datepicker" data-date-autoclose="true">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-calendar"></i></span>
                                        </div><!-- input-group -->
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-lastname-input">Teacher:</label>
                                        <select class="form-control select2 form-select">
                                            <option value="0">Select</option>
                                            <option value="1">abulhasnat</option>
                                            <option value="2">nila01</option>
                                            <option value="3">Airins</option>
                                            <option value="4">AmalRozareo</option>
                                            <option value="5">anasbin</option>
                                            <option value="6">arupmandal</option>
                                            <option value="7">asadzaman</option>
                                            <option value="8">Badshah</option>
                                            <option value="9">BijoyRozareo</option>
                                            <option value="10">Chandan</option>
                                            <option value="11">dolonbishwash</option>
                                            <option value="12">golamrabbani</option>
                                            <option value="13">jahinur</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>

                    <!-- Company Document -->
                    <h3>Common</h3>
                    <section>
                        <form>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5>পরিদর্শনকৃত স্থান / প্রতিষ্ঠান(ঠিকানা)</h5>
                                        <h5 class="mt-2">শিক্ষক এর মন্তব্য</h5>
                                        <textarea class="form-control" name="" id="" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5>পরিদর্শনকারীর নাম ও পদবী</h5>
                                        <textarea class="form-control" name="" id="" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">কর্মীর কর্মস্থলে যোগদানের তারিখ</h5>
                                        <textarea class="form-control" name="" id="" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">কর্মীর মাসিক বেতন</h5>
                                        <textarea class="form-control" name="" id="" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">কর্মীর সাপ্তাহিক ছুটি সম্পর্কে তথ্য</h5>
                                        <textarea class="form-control" name="" id="" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">লক্ষিত কর্মীকে দিনে কত ঘণ্টা কাজ করতে হয় ? সময় উল্লেখ করুন</h5>
                                        <textarea class="form-control" name="" id="" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">লক্ষিত কর্মীর পদবী কি বা সে এ প্রতিষ্ঠানে কি কি দায়িত্ব পালন
                                            করে ?</h5>
                                        <textarea class="form-control" name="" id="" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </form>
                    </section>

                    <!-- Bank Details -->
                    <h3>Check List</h3>
                    <section>
                        <form>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5>এ কর্ম ঘণ্টা কী তার সক্ষমতার প্রেক্ষিতে সঠিক ?</h5>
                                        <div class="form-check d-flex">
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> হ্যাঁ </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> না </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> প্রযোজ্য নয় </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5>লক্ষিত কর্মীর কি ডিউটির জন্য নির্ধারিত পোশাক আছে?</h5>
                                        <div class="form-check d-flex">
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> হ্যাঁ </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> না </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> প্রযোজ্য নয় </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">লক্ষিত কর্মী কি ডিউটির সময় নির্ধারিত পোশাক পরিধান করে আছে ?
                                        </h5>
                                        <div class="form-check d-flex">
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> হ্যাঁ </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> না </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> প্রযোজ্য নয় </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">লক্ষিত কর্মী কি যথেষ্ট পরিস্কার-পরিচ্ছন্ন ?</h5>
                                        <div class="form-check d-flex">
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> হ্যাঁ </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> না </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> প্রযোজ্য নয় </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">লক্ষিত কর্মী কি উপযুক্ত / প্রত্যাশিত বেতন-ভাতা বা মজুরী পাচ্ছে
                                            ?</h5>
                                        <div class="form-check d-flex">
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> হ্যাঁ </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> না </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> প্রযোজ্য নয় </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">লক্ষিত কর্মী ও নিয়োগকারী কর্তৃপক্ষের মাঝে কি নিয়মিত যোগাযোগ হয়
                                            ?</h5>
                                        <div class="form-check d-flex">
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> হ্যাঁ </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> না </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> প্রযোজ্য নয় </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">লক্ষিত কর্মীর প্রতি কর্মস্থলের সহকর্মীদের
                                            কথাবার্তা/মন্তব্য/আচরণ কেমন ?</h5>
                                        <div class="form-check d-flex">
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> হ্যাঁ </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> না </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> প্রযোজ্য নয় </label>
                                            </div>
                                        </div>
                                        <h5 class="mb-4">বিস্তারিত লিখুন</h5>
                                        <textarea name="" id="" rows="1" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">লক্ষিত কর্মীর প্রতি ক্লায়েন্টদের কথাবার্তা/মন্তব্য/আচরণ কেমন ?
                                        </h5>
                                        <div class="form-check d-flex">
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> হ্যাঁ </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> না </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> প্রযোজ্য নয় </label>
                                            </div>
                                        </div>
                                        <h5 class="mb-4">বিস্তারিত লিখুন</h5>
                                        <textarea name="" id="" rows="1" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">কর্মস্থলে মোটের উপর কাজের পরিবেশ কেমন ?</h5>
                                        <div class="form-check d-flex">
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> হ্যাঁ </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> না </label>
                                            </div>
                                            <div class="me-5 ">
                                                <input class="form-check-input" type="radio" name="">
                                                <label class="form-check-label"> প্রযোজ্য নয় </label>
                                            </div>
                                        </div>
                                        <h5 class="mb-4">বিস্তারিত লিখুন</h5>
                                        <textarea name="" id="" rows="1" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">মন্তব্য / সুপারিশ t(প্রয়োজনে অতিরিক্ত পাতা ব্যবহার করুন)</h5>
                                        <textarea name="" id="" rows="1" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">সাজেশন</h5>
                                        <textarea name="" id="" rows="1" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">পরিদর্শনকারীর স্বাক্ষর ও তারিখ</h5>
                                        <input type="file" name="" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">নাম এবং পদবী</h5>
                                        <textarea name="" id="" rows="1" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top py-2">
                                <div class="col-xl-12 col-sm-12">
                                    <div class="m-0">
                                        <h5 class="mb-4">তারিখ</h5>
                                        <input type="date" name="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </form>
                    </section>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('script')
<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>


<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>

{{-- Form --}}
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

@endsection