@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')

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
                        <h4 class="card-title">STUDENT QAS</h4>
                    </div>
                    <div class="col-6 text-end  mb-3">
                        <button type="button" class="btn btn-outline-info waves-effect waves-light"
                            data-bs-toggle="modal" data-bs-target=""><i class="fa fa-user"></i>Profile</button>
                        <button type="button" class="btn btn-outline-info waves-effect waves-light"
                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><i class="fa fa-plus"></i>
                            ADD</button>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label style="display: inline-flex;align-items: center;"> Show <select name="length"
                                    class="form-control form-control-sm form-select form-select-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries
                            </label>
                        </div>
                        <div class="col-sm-12 col-md-6 text-end">
                            <label style="display: inline-flex;align-items: center;">Search:
                                <input type="search" class="form-control form-control-sm" placeholder="">
                            </label>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered w-100">
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
                                            data-bs-target=".bs-example-modal-lg">
                                            <i class="fas fa-pen"></i></button>
                                        <button type="button"
                                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                                class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            Showing 1 to 2 of 2 entries
                        </div>
                        <div class="col-sm-12 col-md-6 text-end">
                            <nav>
                                <ul class="pagination" style="justify-content: end;">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
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
                <h5 class="modal-title" id="myLargeModalLabel">STUDENT QAS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="vertical-example" class="vertical-wizard">
                    <!-- Seller Details -->
                    <h3>Drama Diary Evaluation</h3>
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
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-phoneno-input">Candidate ID:</label>
                                        <select class="form-control select2 form-select">
                                            <option value="0">Select</option>
                                            <option value="1">Aalliyah Tehzeeb Ahmed</option>
                                            <option value="2">abdullah-al-nafi antor</option>
                                            <option value="3">Abdullahil Baki</option>
                                            <option value="4">Abdur Rahman Sajid</option>
                                            <option value="5">Abid Hossain Turjo</option>
                                            <option value="6">Abid Kabir Chowdhury</option>
                                            <option value="7">Abrar Ahosab Talha</option>
                                            <option value="8">Abrar Jawad Siam</option>
                                            <option value="9">Abu Sufiyan</option>
                                            <option value="10">Adib Akbar</option>
                                            <option value="11">Adiba Atiar</option>
                                            <option value="12">Adil Anaf</option>
                                            <option value="13">Aditya Chakraborty</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="verticalnav-phoneno-input">Description:</label>
                                        <p>Kashima Cultural Group ড্রামা / নাটক</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>

                    <!-- Company Document -->
                    <h3>বেসিক / ফাংশনাল এরিয়া</h3>
                    <section>
                        <form>
                            <!-- Start row -->
                            <x-input-radio-or-check name="" label="চরিত্র বুঝতে পারা"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="চরিত্র বুঝে অভিনয় করতে পারা"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="নিজের সম্পর্কে তিন লাইন স্পষ্ট করে বলবে"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="সাবলীল ভাবে উপস্থাপনা করতে পারবে"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="স্বরধনি স্পষ্ট করে উচ্চারণ করবে"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="মুখস্থ করতে পারা"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="মুখ খুলে কথা বলতে পারা"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="মুখ / জিহ্বার ব্যায়াম"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="১/২ মিনিটের গল্প বলতে পারা"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="কথায় Variation আনতে পারা"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="আঞ্চলিক টানে বা অন্য অচ্চারনে কথা বলতে পারা"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="সহশিল্পির ডায়লগ শুনে নিজের ডায়লগ দিবে"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="শারিরিক অঙ্গভঙ্গি ব্যবহার করে অভিনয় করবে"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="অভিনয়ে নিজের turn এর জন্য অপেক্ষা করবে"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="সহশিল্পিকে সাহায্য করবে"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="সহশিল্পীর প্রতি শ্রদ্ধাশীলতা"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <x-input-radio-or-check name="" label="সহশিল্পীর প্রতি শ্রদ্ধাশীলতা"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                            <!-- end row -->
                            <!-- end row -->
                        </form>
                    </section>

                    <!-- Bank Details -->
                    <h3>অন্যান এরিয়া</h3>
                    <section>
                      <form>
                        <!-- Start row -->
                        <x-input-radio-or-check name="" label="মনোযোগ ধরে রাখা"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                        <!-- end row -->
                        <x-input-radio-or-check name="" label="প্রেজেন্টেশান"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                        <!-- end row -->
                        <x-input-radio-or-check name="" label="সবার সাথে নাটকে অংশ নিবে"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                        <!-- end row -->
                        <x-input-radio-or-check name="" label="সবার সাথে নাটকে অংশ নিবে"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                        <!-- end row -->
                        <x-input-radio-or-check name="" label="ব্যক্তিগত অংশ স্বনির্ভর ভাবে করতে পারা"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
                        <!-- end row -->
                        <x-input-radio-or-check name="" label="অন্যান্য"
                            :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"></x-input-radio-or-check>
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
<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>

@endsection