@extends('layouts.master')

@section('title')
    @lang('translation.Starter_Page')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            DashBoard
        @endslot
        @slot('title')
            STUDENT QAS
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Add</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="case-histroy" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Wizard container -->
                                    <div class="wizard-container">
                                        <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                            <div class="col-sm-3 col-md-3">
                                                <div id="wizard-navigation">
                                                    <ul class="wizard-navigation">
                                                        <li class="w-100"><a href="#Social_Communication"
                                                                data-toggle="tab">কর্মী ও কর্মস্থল পরিদর্শন টুল</a></li>
                                                        <li class="w-100"><a href="#Pragmatic_Objective"
                                                                data-toggle="tab">Common</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Outing" data-toggle="tab">Check
                                                                List</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9">
                                                <form>
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="Social_Communication">
                                                            <section>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-firstname-input">Collection
                                                                                Date:</label>
                                                                            <x-input-text name="collection_date" type="date"
                                                                                placeholder="mm/dd/yyyy">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-lastname-input">Teacher:</label>
                                                                            <x-input-select name="teacher_id"
                                                                                :records="[]" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Pragmatic_Objective">
                                                            <section>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5>পরিদর্শনকৃত স্থান / প্রতিষ্ঠান(ঠিকানা)</h5>
                                                                            <h5 class="mt-2">শিক্ষক এর মন্তব্য
                                                                            </h5>
                                                                            <x-input-text name="name"></x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5>পরিদর্শনকারীর নাম ও পদবী</h5>
                                                                            Reference
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">কর্মীর কর্মস্থলে
                                                                                যোগদানের তারিখ</h5>
                                                                            <x-input-text name="name"></x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">কর্মীর মাসিক বেতন
                                                                            </h5>
                                                                            <x-input-text name="name"></x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">কর্মীর সাপ্তাহিক ছুটি
                                                                                সম্পর্কে তথ্য</h5>
                                                                            <x-input-text name="name"></x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">লক্ষিত কর্মীকে দিনে
                                                                                কত ঘণ্টা কাজ করতে হয় ? সময়
                                                                                উল্লেখ করুন</h5>
                                                                            <x-input-text name="name"></x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">লক্ষিত কর্মীর পদবী কি
                                                                                বা সে এ প্রতিষ্ঠানে কি কি
                                                                                দায়িত্ব পালন
                                                                                করে ?</h5>
                                                                            <x-input-text name="name"></x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Outing">
                                                            <section>
                                                                <x-input-radio-or-check name="name"
                                                                    label="এ কর্ম ঘণ্টা কী তার সক্ষমতার প্রেক্ষিতে সঠিক ?"
                                                                    :records="$staffAndWork::$staffAndWorkplace"></x-input-radio-or-check>
                                                                <x-input-radio-or-check name="name"
                                                                    label="লক্ষিত কর্মীর কি ডিউটির জন্য নির্ধারিত পোশাক আছে?"
                                                                    :records="$staffAndWork::$staffAndWorkplace">
                                                                </x-input-radio-or-check>
                                                                <x-input-radio-or-check name="name"
                                                                    label="লক্ষিত কর্মী কি ডিউটির সময় নির্ধারিত পোশাক পরিধান করে আছে ?"
                                                                    :records="$staffAndWork::$staffAndWorkplace">
                                                                </x-input-radio-or-check>
                                                                <x-input-radio-or-check name="name"
                                                                    label="লক্ষিত কর্মী কি যথেষ্ট পরিস্কার-পরিচ্ছন্ন ?"
                                                                    :records="$staffAndWork::$staffAndWorkplace"></x-input-radio-or-check>
                                                                <x-input-radio-or-check name="name"
                                                                    label="লক্ষিত কর্মী কি উপযুক্ত / প্রত্যাশিত বেতন-ভাতা বা মজুরী পাচ্ছে"
                                                                    :records="$staffAndWork::$staffAndWorkplace"></x-input-radio-or-check>
                                                                <x-input-radio-or-check name="name"
                                                                    label="লক্ষিত কর্মী ও নিয়োগকারী কর্তৃপক্ষের মাঝে কি নিয়মিত যোগাযোগ হয়?"
                                                                    :records="$staffAndWork::$staffAndWorkplace"></x-input-radio-or-check>
                                                                <x-input-radio-or-check name="name"
                                                                    label="লক্ষিত কর্মী ও নিয়োগকারী কর্তৃপক্ষের মাঝে কি নিয়মিত যোগাযোগ হয়?"
                                                                    :records="$staffAndWork::$staffAndWorkplace"></x-input-radio-or-check>
                                                                <x-input-radio-or-check name="name"
                                                                    label="লক্ষিত কর্মীর প্রতি কর্মস্থলের সহকর্মীদের কথাবার্তা/মন্তব্য/আচরণ কেমন ?"
                                                                    :records="$staffAndWork::$staffAndWorkplace"></x-input-radio-or-check>
                                                                <x-input-radio-or-check name="name"
                                                                    label="কর্মস্থলে মোটের উপর কাজের পরিবেশ কেমন ?"
                                                                    :records="$staffAndWork::$staffAndWorkplace"></x-input-radio-or-check>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">বিস্তারিত লিখুন</h5>
                                                                            <x-input-text name="name"></x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">মন্তব্য / সুপারিশ
                                                                                t(প্রয়োজনে অতিরিক্ত পাতা ব্যবহার
                                                                                করুন)</h5>
                                                                            <x-input-text name="name"></x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">সাজেশন</h5>
                                                                            <x-input-text name="name"></x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">পরিদর্শনকারীর
                                                                                স্বাক্ষর ও তারিখ</h5>
                                                                            <x-input-text type="file" name="name">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">নাম এবং পদবী</h5>
                                                                            <x-input-text type="file" name="name">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">তারিখ</h5>
                                                                            <x-input-text type="date" name="name">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->

                                                            </section>
                                                        </div>
                                                    </div>
                                                    <div class="wizard-footer d-flex justify-content-between">
                                                        <div class="pull-left">
                                                            <input type='button'
                                                                class='btn btn-primary waves-effect waves-light btn-previous'
                                                                name='previous' value='Previous' />
                                                        </div>
                                                        <div class="pull-right">
                                                            <input type='button'
                                                                class='btn btn-primary waves-effect waves-light btn-next'
                                                                name='next' value='Next' />
                                                            <input type="submit" class='btn btn-finish btn-fill btn-danger'
                                                                wire:click='save' value='Finish' />
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- wizard container -->
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <div class="tab-pane " id="case-histroy_list" role="tabpanel">
                            <!-- form start -->
                            <<div class="row">
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
                                        <x-input-text type="search" name="search" />
                                    </label>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table w-100 table-bordered">
                                    <thead>
                                        <tr class="table-primary">
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
                                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target=".material-callects-modal-xl-view">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"><i
                                                        class="fas fa-check"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target=".material-callects-modal-xl-view">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="bx bx-dollar"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="fas fa-arrow-circle-right"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
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
                                                <a class="page-link" href="#">2 <span
                                                        class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
    <!-- form wizard init -->
    <script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection
