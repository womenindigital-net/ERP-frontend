@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title')STUDENT QA @endslot
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
                            data-bs-toggle="modal" data-bs-target=""><i class="fa fa-user"></i> Profile</button>
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
                                <tr class="table-primary">
                                    <th>Collection Date
                                        <span>
                                            <i class="dripicons-arrow-thin-down"></i>
                                            <i class="dripicons-arrow-thin-up"></i>
                                        </span>
                                    </th>
                                    <th>Student Name</th>
                                    <th>Collected By</th>
                                    <th>Log</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2022-05-17</td>
                                    <td>Abdur Rahman Sajid</td>
                                    <td>Ohidul Hassan</td>
                                    <td>Create: Ohidul Hassan @ 2022-05-17 15:50:24</td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                                            <i class="mdi mdi-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="fas fa-check"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="fas fa-check"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-pencil" data-bs-toggle="modal"
                                                data-bs-target=".bs-example-modal-lg"></i>
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
{{-- Modal Code Start Here --}}
<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel"> Dairy > OT Assessment In Computer Trainee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="vertical-example" class="vertical-wizard">


                    <h3>Activities of Daily Living (ADLs) দৈনন্দিন কার্যাবলী</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="গোসল" :records="$tripReportConstants::$do"
                                secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}
                            {{-- end row --}}
                            <x-input-radio-or-check name="name" label="কাপড় পরা" :records="$tripReportConstants::$do"
                                secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}
                            {{-- end row --}}
                            <x-input-radio-or-check name="name" label="গ্রুমিং" :records="$tripReportConstants::$do"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}
                            {{-- end row --}}
                            <x-input-radio-or-check name="name" label="টয়লেট করা" :records="$tripReportConstants::$do"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}
                            {{-- end row --}}
                            <x-input-radio-or-check name="name" label="পুষ্টিকর খাদ্য খাওয়া"
                                :records="$tripReportConstants::$do" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}
                            {{-- end row --}}
                            <x-input-radio-or-check name="name" label="বিছানা থেকে ওঠা"
                                :records="$tripReportConstants::$do" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}
                            {{-- end row --}}
                            <x-input-radio-or-check name="name" label="চেয়ার থেকে ওঠা"
                                :records="$tripReportConstants::$do" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}
                            {{-- end row --}}
                            <x-input-radio-or-check name="name" label="হাটা" :records="$tripReportConstants::$do"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}
                            {{-- end row --}}
                        </form>
                    </section>


                    <h3>শুধু স্টাফ এর জন্য প্রযোজ্য</h3>
                    <section>
                        <form>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Instruction:</label>
                                <div class="input-group" id="datepicker2">
                                    <p>ট্রিপ পরিকল্পনা ও ট্রিপ সম্বন্ধে আপনার অভিজ্ঞতা লিখুন ও রেট করুনঃ</p>
                                </div><!-- input-group -->

                                <x-input-radio-or-check name="name" label="ট্রিপ উপকরণ ও প্রস্তুতি গ্রহণ"
                                    :records="$tripReportConstants::$observation" secondaryInputLabel="মতামত">
                                </x-input-radio-or-check>
                                {{-- end row --}}
                                {{-- end row --}}
                                <x-input-radio-or-check name="name" label="প্রশিক্ষণার্থীর সাথে যোগাযোগ করা হয়েছে কিনা"
                                    :records="$tripReportConstants::$observation" secondaryInputLabel="মতামত">
                                </x-input-radio-or-check>
                                {{-- end row --}}
                                {{-- end row --}}
                                <x-input-radio-or-check name="name" label="দলের অন্য সদস্যদের সঙ্গে যোগাযোগ"
                                    :records="$tripReportConstants::$observation" secondaryInputLabel="মতামত">
                                </x-input-radio-or-check>
                                {{-- end row --}}

                                <x-input-radio-or-check name="name" label="ট্যুর বা ভিজিট কোথায়"
                                    :records="$tripReportConstants::$observation" secondaryInputLabel="মতামত">
                                </x-input-radio-or-check>
                                {{-- end row --}}

                                <x-input-radio-or-check name="name"
                                    label="গাড়ি ড্রাইভিং বা অন্যান্য সহায়তাকারি যারা ছিলেন"
                                    :records="$tripReportConstants::$observation" secondaryInputLabel="মতামত">
                                </x-input-radio-or-check>
                                {{-- end row --}}

                                <x-input-radio-or-check name="name" label="অভারঅল / সার্বিক ট্যুর বা সফর কেমন ছিল"
                                    :records="$tripReportConstants::$observation" secondaryInputLabel="সাজেশন">
                                </x-input-radio-or-check>
                                {{-- end row --}}

                                <x-input-radio-or-check name="name" label="এই ট্রিপ"
                                    :records="$tripReportConstants::$expectation "
                                    secondaryInputLabel="বিস্তারিত লিখুন"></x-input-radio-or-check>
                                {{-- end row --}}

                                <x-input-radio-or-check name="name"
                                    label="পেশাদারী ভাবে ট্রিপ বা সফর উপস্থাপন ও পরিচালনা করা হয়েছিল কিনা?"
                                    :records="$constants::$yesNo" secondaryInputLabel="সাজেশনবিস্তারিত লিখুন">
                                </x-input-radio-or-check>
                                {{-- end row --}}

                                <x-input-radio-or-check name="name" label="টিচার একা গিয়েছিলেন নাকি দলে?"
                                    :records="$tripReportConstants::$situation"
                                    secondaryInputLabel="দলের তৈরির কথা কেন বিবেচনা করা হয়েছে?">
                                </x-input-radio-or-check>
                                {{-- end row --}}

                                <div class="mb-3">
                                    <label for="basicpill-firstname-input">ট্রিপ টির ব্যাপারে আপনার ধারনা, মতামত বা কেমন
                                        বোধ করছিলেন? ট্রিপের সাফল্যের জন্য আপনি কি সাজেশন দিবেন?</label>
                                    <div class="input-group" id="datepicker2">
                                        <x-input-text name="name" placeholder="">
                                        </x-input-text>
                                    </div><!-- input-group -->
                                </div>
                        </form>
                    </section>

                    <h3>বাড়ীর আসেসমেন্টের ওয়ার্কসিট > কার্যক্রম</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="বাসার পরিবেশ" :records="$constants::$yesNo"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="শিক্ষার্থীর জন্য আলাদা রুম"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="আলাদা বিছানা" :records="$constants::$yesNo"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="জামাকাপড় জন্য আলাদা আলমারি"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="জামাকাপড় পরিবর্তনের আলাদা জায়গা"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="সংযুক্ত বাথরুম" :records="$constants::$yesNo"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="সংযুক্ত ব্যালকনি / বারান্দা"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="আলাদা স্টাডি টেবিল, চেয়ার এবং বইয়ের তাক"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                        </form>
                    </section>

                    <h3>বাড়ীর আসেসমেন্টের ওয়ার্কসিট > নিরাপত্তা এবং সুরক্ষা</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="বাইরের দরজায় বড় লক / তালা"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="সামনের দরজা দরজার ফুটো/পিহোল"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="উইন্ডো বার/গ্রিল বা তালা"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name"
                                label="স্মোক এলার্ম ইনস্টল বা জরুরী ক্ষেত্রে অন্য কোন এলার্ম সিস্টেম"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="প্যাসেজ ওয়ে বা হাটার জায়গায় তার বা অন্য কোন বাধা"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">ছাত্রের যদি আলাদা রুম না থাকে তবে বিকল্প
                                    সমাধানঃ</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                        </form>
                    </section>



                    <h3>বাড়ীর আসেসমেন্টের ওয়ার্কসিট > সাজসরঞ্জাম</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="বিছানা এবং চেয়ার ব্যবহার করা সহজ"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="টেবিলের সঠিক উচ্চতা"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="সহজে বিছানায় নামা ও উঠা"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                        </form>
                    </section>

                    <h3>বাড়ীর আসেসমেন্টের ওয়ার্কসিট > আলো</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="সহজে লাইটের সুইচ অন অফ করা"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="পড়াশোনার জায়গায় যথেষ্ট আলো"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="প্যাসেজ ওয়েতে রাতে জালিয়ে রাখার লাইট আছে"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                        </form>
                    </section>

                    <h3>বাড়ীর আসেসমেন্টের ওয়ার্কসিট > রান্নাঘর</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="নাগালের মধ্যে বেসিনে ট্যাপ / হ্যান্ডল"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="নাগালের মধ্যে প্লেট র‍্যাক"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="প্রায়ই ব্যবহৃত আইটেম গুলি হাতের নাগালে"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="রান্নার ব্যবহৃত আইটেম গুলি হাতের নাগালের মধ্যে"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="স্টোরে সহজে যাওয়া যায়"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="নাগালের মধ্যে ফ্রিজ আছে কিনা"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="চুলার উপরে কোন কিছু আছে কিনা"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="পর্যাপ্ত আলো" :records="$constants::$yesNo"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}
                        </form>
                    </section>

                    <h3>বাড়ীর আসেসমেন্টের ওয়ার্কসিট > বাথরুম</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name"
                                label="টয়লেট, শাওয়ার বা বাথটাব এর পাশে ধরার মত স্ট্যান্ড আছে"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="পিছল-নিরোধী বাথরুম" :records="$constants::$yesNo"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="টয়লেটে এবং গোছলের জন্য হ্যান্ড শাওয়ার আছে"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="সাবান, শ্যাম্পু, ব্রাশ নাগালের মধ্যে"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                        </form>
                    </section>

                    <h3>বাড়ীর আসেসমেন্টের ওয়ার্কসিট > মেঝে</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="পিছল-নিরোধী মেঝে" :records="$constants::$yesNo"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="রাগ বা পাপোশে কোন আলগা ঝুল আছে কিনা"
                                :records="$constants::$yesNo" secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                        </form>
                    </section>

                    <h3> Instrumental Activities of Daily Living (IADLs)</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="টেলিফোন ব্যবহার/ ভিডিও কল"
                                :records="$tripReportConstants::$do" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সাজেশন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <x-input-radio-or-check name="name" label="টাকা ম্যানেজ করা /টাকার ব্যবহার"
                                :records="$tripReportConstants::$do" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সাজেশন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <x-input-radio-or-check name="name"
                                label="ব্যক্তিগত জিনিসপত্র কেনাকাটা/পছন্দের জিনিস কেনাকাটা"
                                :records="$tripReportConstants::$do" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সাজেশন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <x-input-radio-or-check name="name" label="পরিবহন ব্যবহার করা"
                                :records="$tripReportConstants::$do" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সাজেশন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>

                            <x-input-radio-or-check name="name"
                                label="লন্ড্রির কাজ করা / নোংরা কাপড় আলাদা করা / কাপড় শুকানোর হ্যাঙ্গারে ছোট কাপড় ঝুলানো"
                                :records="$tripReportConstants::$do" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সাজেশন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>

                            <x-input-radio-or-check name="name"
                                label="কাপড় ভাজ করা / ভাঁজ করা কাপড় ড্রয়ারে গুছিয়ে রাখবে।"
                                :records="$tripReportConstants::$do" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সাজেশন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>

                            <x-input-radio-or-check name="name"
                                label="ঘরের হালকা কাজ করা / নিজের খেলনা ও খেলার জায়গা গুছানো"
                                :records="$tripReportConstants::$do" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}


                            <x-input-radio-or-check name="name" label="খাবার প্রস্তুত করা/ নিজ হাতে খাবার খাওয়া"
                                :records="$tripReportConstants::$do" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name"
                                label="সবজি কাটা / সবজির ধরন অনুযায়ি আলাদা করে গুছিয়ে রাখা"
                                :records="$tripReportConstants::$do" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                        </form>
                    </section>

                    <h3>Environmental Safety > প্রতিবেশি</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="নিরাপত্তা"
                                :records="$tripReportConstants::$change" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="স্বাচ্ছন্দ্যদায়ক ব্যবস্থা"
                                :records="$tripReportConstants::$change" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="কাছাকাছি বন্ধু বা আত্মীয়দের অবস্থান"
                                :records="$tripReportConstants::$change" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                        </form>
                    </section>


                    <h3>Environmental Safety > সিঁড়ি</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="গোলমাল ও প্রতিবন্ধকতা মুক্ত"
                                :records="$tripReportConstants::$change" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="সিডির দু দিকেই হাতলে যথেষ্ট আলকিত"
                                :records="$tripReportConstants::$change" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="স্পষ্টভাবে চিহ্ন দেয়া"
                                :records="$tripReportConstants::$change" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <x-input-radio-or-check name="name" label="অন্যান্য (যদি থাকে)"
                                :records="$tripReportConstants::$change" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                        </form>
                    </section>


                    <h3>শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন > সকালে ঘুম থেকে উঠে</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="সকালে ঘুম থেকে উঠে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="বিছানা গুছানো"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}


                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <x-input-radio-or-check name="name" label="দাঁত ব্রাশ"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="হাত মুখ ধোওয়া"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="কাপড় পালটানো"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="চুল আঁচড়ানো"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="নাস্তা তৈরি করবে ও খাবে/ টেবিলে নাস্তা খাবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}



                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name"
                                label="প্লেট গ্লাস ধুয়ে পরিস্কার করবে/ প্লেট নিয়ে সিংকে /ধোয়ার জায়গায় রাখবে।"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="টেবিল পরিস্কার করা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                        </form>
                    </section>



                    <h3>শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন > লিখাপড়া</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="বই পড়া" :records="$tripReportConstants::$help"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>


                            <x-input-radio-or-check name="name" label="হাতের লিখা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>

                            <x-input-radio-or-check name="name" label="ছবি আঁকা /রঙ করা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>


                            <x-input-radio-or-check name="name" label="পেপার পড়া" :records="$tripReportConstants::$help"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}


                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="গান শোনা / গানের রেওয়াজ করা (গায়কদের ক্ষেত্রে)"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>


                            <x-input-radio-or-check name="name" label="কম্পিউটারে (কাজের) প্রাকটিস করবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>
                        </form>
                    </section>



                    <h3>শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন > দৈনন্দিন কাজ</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="বাজারের লিস্ট করা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="বাবার / মায়ের সাথে বাজারে যাওয়া"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}


                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>


                            <x-input-radio-or-check name="name"
                                label="মায়ের সাথে সবজি কাটা ও রান্নাতে সাহায্য করা / মায়ের সাথে সবজি আলাদা করতে সাহায্য করা/ সেদ্ধ আলু ,ডিম ছেলা/ডিম ফেটা, ডিম ভাঙ্গা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name"
                                label="খাবারের মেনু তৈরি করা / ছবি দেখে খাবার চিনতে পারা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                        </form>
                    </section>



                    <h3>শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন > নিজের কাজ</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="কাপড় ধোওয়া ও শুঁকাতে দেওয়া"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="নিজের রুম পরিস্কার করা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="কাপড় ভাজ করা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="ওয়ার্ডরোব বা কাপরের ড্রয়ার গুছানো"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="কাপড় ইস্ত্রি করা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="নখ কাটা" :records="$tripReportConstants::$help"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="চুল কাটা" :records="$tripReportConstants::$help"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="সেভ করা" :records="$tripReportConstants::$help"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                        </form>
                    </section>



                    <h3> শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন > দুপুরের খাবারের সময়</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="টেবিলে প্লেট গ্লাস দিবে / সহযোগিতা করবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="গ্লাসে পানি দিবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="রান্নাঘর থেকে টেবিলে খাবার নিয়ে আসবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="টেবিলে / মাদুরে বসে সবার সাথে খাবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="নিজের হাতে / চামচ দিয়ে খাবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>

                            <x-input-radio-or-check name="name" label="টেবিল / মাদুর পরিস্কার / সহযোগিতা করবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                        </form>
                    </section>

                    <h3>শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন > রেস্ট টাইম</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="শুয়ে রেস্ট নেওয়া"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>

                            <x-input-radio-or-check name="name" label="গল্প বই পরা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>

                            <x-input-radio-or-check name="name" label="গান শুনা" :records="$tripReportConstants::$help"
                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>

                            <x-input-radio-or-check name="name" label="ভিডিও গেমস খেলা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                        </form>
                    </section>



                    <h3>শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন > বিকেলে</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="বেড়াতে যাওয়া"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>

                            <x-input-radio-or-check name="name" label="ফুল গাছ / টবে পানি দেওয়া"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>

                            <x-input-radio-or-check name="name" label="মাঠে বা ছাদে খেলতে যাওয়া"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>

                            <x-input-radio-or-check name="name" label="পছন্দ অনুযায়ী খেলা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>

                            <x-input-radio-or-check name="name"
                                label="শপিং / আত্মীয় স্বজনের বাসায় / প্রতিবেশীর বাসায় বা প্রিয় জায়গায় ঘুরতে যাওয়া"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                        </form>
                    </section>


                    <h3>শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন > সন্ধ্যা</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="নিজের নাস্তা / চা/ শরবত বানাবে এবং সার্ভ করবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="অতিথি আপ্যায়ন"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>

                            <x-input-radio-or-check name="name" label="ভাইবোনদের সাথে সময় কাটানো"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                        </form>
                    </section>

                    <h3> শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন > গঠনমূলক কাজ</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="বই পরা ও হাতের লিখা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>

                            <x-input-radio-or-check name="name" label="গঠনমূলক কোন খেলা ( পাজল, লেগো, শেফ সর্টিং)"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="গঠনমূলক কোন খেলা ( পাজল, লেগো, শেফ সর্টিং)"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>

                            <x-input-radio-or-check name="name" label="কম্পিউটারে কাজের প্র্যাকটিস করবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="হোম ওয়ার্ক করা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>


                            <x-input-radio-or-check name="name" label="পরের দিনের কাজের জন্য ব্যাগ গুছানো"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>


                            <x-input-radio-or-check name="name" label="টিভি দেখা (সবার সাথে)"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>


                            <x-input-radio-or-check name="name" label="ডায়েরি লেখা"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>

                        </form>
                    </section>



                    <h3> শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন > রাতের খাবার</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="টেবিলে প্লেট গ্লাস দিবে / সহযোগিতা করবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="গ্লাসে পানি দিবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="রান্নাঘর থেকে টেবিলে খাবার নিয়ে আসবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="খাওয়ার আগে ও পরে সাবান দিয়ে হাত ধোয়া"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="টেবিলে বসে সবার সাথে খাবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="নিজের হাতে / চামচ দিয়ে খাবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                        </form>
                    </section>


                    <h3>শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন > রাতে শোবার আগে</h3>
                    <section>
                        <form>
                            <x-input-radio-or-check name="name" label="ঔষদ খাওয়া/ খাওয়ানো (যখন প্রয়োজন)"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="দাঁত ব্রাশ করবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="ড্রেস চেঞ্জ করবে/ রাতে শোবার ড্রেস পরবে"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="বিছানা করা/ করে দেওয়া"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="মশারি খাটানো/টাঙ্গানো"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>


                            <x-input-radio-or-check name="name" label="লাইট বন্ধ করে শুতে যাওয়া"
                                :records="$tripReportConstants::$help" secondaryInputLabel="সাজেশন">
                            </x-input-radio-or-check>
                            {{-- end row --}}

                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সময়</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                        </form>
                    </section>

                    <h3>Signature</h3>
                    <section>
                        <form>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Special Educator Team</label>
                                <div class="input-group" id="datepicker2">
                                    <input class="form-control" type="file" id="formFile">
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Special Educator Team Name</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Guardian</label>
                                <div class="input-group" id="datepicker2">
                                    <input class="form-control" type="file" id="formFile">
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Guardian Name</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Note, If any</label>
                                <div class="input-group" id="datepicker2">
                                    <input type="text" class="form-control" id="basicpill-firstname-input"
                                        placeholder="Enter Your First Name">
                                </div><!-- input-group -->
                            </div>
                        </form>
                    </section>


                    <h3>Trip Evaluation Signature</h3>
                    <section>
                        <form>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">স্বাক্ষর- টিচার</label>
                                <div class="input-group" id="datepicker2">
                                    <input class="form-control" type="file" id="formFile">
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">নাম এবং পদবী</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">সুপারভাইজার এর স্বাক্ষর</label>
                                <div class="input-group" id="datepicker2">
                                    <input class="form-control" type="file" id="formFile">
                                </div><!-- input-group -->
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">নাম এবং পদবী</label>
                                <div class="input-group" id="datepicker2">
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div><!-- input-group -->
                            </div>
                        </form>
                    </section>





                </div>
            </div>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
{{-- Modal Code Close Here --}}

@endsection

@section('script')
<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection