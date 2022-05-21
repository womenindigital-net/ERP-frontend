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
@slot('title') Case History @endslot
@endcomponent

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">STUDENT QAS</h4>
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=".bs-example-modal-lg">ADD</button>
          </div>
        </div>
        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
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
                <span>Create: Nurjahan Dipa @ 2022-03-29 16:04:41</span>
                <span>Update: Ohidul Hassan @ 2022-04-12 11:36:44</span>
              </td>
              <td>
                <button type="button" class="btn btn-lg p-1 btn-primary btn-rounded waves-effect waves-light">
                  <i class="mdi mdi-trash-can-outline font-size-32 align-middle"></i></button>
              </td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div> <!-- end col -->
</div> <!-- end row -->

<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
          <h3>Case History</h3>
          <section>
            <form>
              <div class="row">
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-firstname-input">Collection Date:</label>
                    <div class="input-group" id="datepicker2">
                      <x-input-text name="collection_date" type="date" placeholder="mm/dd/yyyy">
                      </x-input-text>
                    </div><!-- input-group -->
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-lastname-input">Teacher:</label>
                    <x-input-select name="teacher_id" :records="$constants::$bloodGroups">
                    </x-input-select>
                    <select class="form-control select2-search-disable">
                      <option>Select</option>
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-phoneno-input">Candidate ID:</label>
                    <select class="form-control select2-search-disable">
                      <option>Select</option>
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="verticalnav-phoneno-input">Phone</label>
                    <input type="text" class="form-control" id="verticalnav-phoneno-input"
                      placeholder="Enter Your Phone No.">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="verticalnav-email-input">Email</label>
                    <input type="email" class="form-control" id="verticalnav-email-input"
                      placeholder="Enter Your Email ID">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label for="verticalnav-address-input">Address</label>
                    <textarea id="verticalnav-address-input" class="form-control" rows="2"
                      placeholder="Enter Your Address"></textarea>
                  </div>
                </div>
              </div>
            </form>
          </section>

          <!-- Company Document -->
          <h3>রেফারাল তথ্য</h3>
          <section>
            <form>
              <div class="row">
                <div class="col-lg-12">
                  <h3>Instruction:</h3>
                  <p>আপনার জানা তথ্য ও জ্ঞান অনুযায়ী নিচের তথ্যাবলী প্রেরণ করুন। সঠিক উত্তর না জানা থাকলে ‘জানি না’
                    লিখুন। উত্তরের জন্য প্রয়োজনীয় জায়গা না থাকলে আলাদা কাগজ ব্যবহার করে উত্তর বিস্তারিত ভাবে লিখুন।
                  <p>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>সমন্বয় দক্ষতা আছে কি?</h5>
                    <h5 class="mb-4">(Join Coordination এর মাধ্যমে কাজ করা যেমন- doe / আটা দিয়ে রুটি বানানো বলে জোড়ে কিক
                      দেয়া)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios" checked>
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>চলাফেরার ক্ষেত্রে ভারসাম্য আছে কি?</h5>
                    <h5 class="mb-4">(যেমন-হাটার সময় পড়ে যাওয়া, হাটার সময় শরীর দোলানো, থপ থপ জোরে হাটা, বেখাপ্পা ভাবে
                      হাটা)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios" checked>
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">সূক্ষ্ম যন্ত্রপাতি ব্যবহার করা সহ ফাইন মটরের দক্ষতা আছে কি?</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="">লিখার পদ্ধতি ঠিক আছে কিনাঃ</h5>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">
                        আকার, গঠন ঠিক আছে কিনা
                      </label>
                    </div>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">
                        আকৃতি আকৃতিঃ ঠিক আছে কিনা
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">
                        লিখা শেষ করার ধৈর্য : ঠিক আছে কিনা
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">পড়াশুনা সহ শিক্ষার বিষয়ের উদ্বেগ আছে কিনা&nbsp;<span
                        style="color: #3366ff;">(যেমন-পড়তে – লিখবে অনাগ্রহ / দেখে পড়া / সঠিক ভাবে দেখে লেখার
                        সমস্যা)</span></h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">স্বনির্ভরতার (নিজে নিজে কাজ করার ) দক্ষতা আছে কিনা (যেমন-বয়স অনুযায়ী নিজের কাজ করতে
                      পারা / রুটিন জানা)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">সামাজিক যোগাযোগ করতে পারে কিনা (যেমন-বয়স অনুযায়ী সামাজিক যোগাযোগ)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">খেলার মাধ্যমে যোগাযোগ করে কিনা? অন্যের সাথে মিলে মিশে খেলাধুলা করে কিনা? (যেমন-বয়স
                      অনুযায়ী খেলা / সঠিক ভাবে খেলা / খেলার প্রতি আগ্রহ / খেলার উপকরন চাওয়া)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="">শেখার প্রতিবন্ধকতা আছে কি? নীচের বিষয়গুলি সম্মন্ধে কোন ধারনা আছে কিনা? (যেমন-অক্ষর /
                      বর্ণ শব্দ বাক্য পড়তে লিখতে সমস্যা অস্বাভাবিক তা, অংক শিখতে না পারা, অংকে অনাগ্রহ, গ্রাফ / চিত্র
                      সম্পর্কে অনাগ্রহ)</h5>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">
                        ডিসলেক্সিয়া (এটি সঠিক ভাবে শব্দ বোঝার অসুবিধা এবং ভুল বানান করা এবং সব্দের সঠিক মানে বুঝতে পারে
                        না)
                      </label>
                    </div>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">
                        ডিসপ্রেক্সিয়া (এটি ভারসাম্য এবং অঙ্গবিন্যাস এর সমস্যা তৈরি করে, যাতে লিখতে বা কলম পেন্সিল ধরতে
                        অসুবিধা হয়)
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">
                        ডিসক্যাল্কুলিয়া (বিভিন্ন ধরনের গণিত বা অংক বিষয়ক সমস্যা তৈরি করে )
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">
                        ডিসগ্রাফিয়া (বানান ভুল করা, খারাপ হাতের লেখা এবং কাগজ সঠিক ভাবে গুছিয়ে না লিখতে পারার সমস্যা,
                        এটা ভাষা ভিত্তিক বা অ-ভাষা ভিত্তিক সমস্যা হতে পারে।)
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">শরীরের ওপর সাধারণ নিয়ন্ত্রন আছে কিনা?</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">কথা বলার সমস্যা আছে কিনাঃ</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                    <label for="basicpill-firstname-input">থাকলে উল্লেখ করুন</label>
                    <div class="input-group" id="datepicker2">
                      <input type="text" class="form-control">
                    </div><!-- input-group -->
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">ভাষা বুঝতে পারে কিনা (যেমন-অতীত – ভবিষ্যৎ কাল, এক বচন – বহুবচন, পুরুষ (আপনি, তুমি)
                      বুঝতে পারে )</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">ভাষার ব্যবহার পারে ?(যেমন- বাক্যে সঠিক শব্দের ব্যবহার)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">পারে</label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">পারেনা</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">সামান্য পারে</label>
                      </div>
                    </div>
                    <label for="basicpill-firstname-input">সমস্যা থাকলে উল্লেখ করুন</label>
                    <div class="input-group" id="datepicker2">
                      <input type="text" class="form-control">
                    </div><!-- input-group -->
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">অতীতে আপনার সন্তানের কোন স্পেশালিষ্ট এর মাধ্যমে অ্যাসেসমেন্ট হয়েছিল কিনা ?</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                    <label for="basicpill-firstname-input">স্পেশালিষ্ট এর পদবি ও বিস্তারিত লিখুন।</label>
                    <div class="input-group" id="datepicker2">
                      <input type="text" class="form-control">
                    </div>
                    <!-- input-->
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">লার্নিং ডিজাবিলিটি বা কোন কিছু শিখতে পারাতে কোন সমস্যা পরিবারে কারো ছিল কিনা?</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">সন্তানের মধ্যে অস্থিরতা আছে কিনা</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </section>

          <!-- Bank Details -->
          <h3>ক্রমউন্নয়নের ধারা</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">আপনি আপনার শিশুকে কি ভাবে বর্ণনা করবেন ?</h5>

                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">
                        বেশি কান্নাকাটি/ চিৎকার করে
                      </label>
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">
                        বেশি ডিমান্ডিং
                      </label>
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">
                        জেদি
                      </label>
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">
                        হাশি খুশী
                      </label>
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">
                        বেশি ঘুমায়
                      </label>
                    </div>
                    <label>স্পেশালিষ্ট এর পদবি ও বিস্তারিত লিখুন।</label>
                    <div class="input-group" id="datepicker2">
                      <input type="text" class="form-control">
                    </div>
                    <!-- input-->
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">ঘুমের প্যাটার্নে কোন সমস্যা আছে কিনা ?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                      <label>বিস্তারিত লিখুন</label>
                      <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                      </div>
                      <!-- input-->
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </section>

          <!-- Bank Details -->
          <h3>উন্নয়নের ইতিহাস</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">চুষে খেতে পারে কিনা ?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">শক্ত খাবার খেতে পারে কিনা?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">শ্বাস-প্রশ্বাস নিয়ন্ত্রন করতে পারে কিনা?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">খাবার একবারে গিলে ফেলে কিনা?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">খাবার খেতে লম্বা সময় নেয় কিনা?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">চিবিয়ে খাবার খেতে কোন সমস্যা ছিল কিনা</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                      <label for="basicpill-firstname-input">স্পেশালিষ্ট এর পদবি ও বিস্তারিত লিখুন।</label>
                      <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                      </div>
                      <!-- input-->
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">কোন বয়সে একা একা বসতে শিখেছে?</h5>
                      <div class="form-check">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">০-২ বছর- সংবেদন-সঞ্চালন স্তর</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ২-৪বছর- প্রাক সক্রিয়তার স্তর </label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ৪-৭ বছর- প্রাক সক্রিয়তার স্তর </label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ৭-৯ বছর -মূর্ত সক্রিয়তার স্তর </label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ৯-১১- মূর্ত সক্রিয়তার স্তর </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">কোন বয়সে চাবানো শিখেছে ?</h5>
                      <div class="form-check">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ০-২ বছর- সংবেদন-সঞ্চালন স্তর </label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ৩-৪ বছর- সংবেদন-সঞ্চালন স্তর </label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ৫-৭ বছর- প্রাক সক্রিয়তার স্তর </label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ৮-৯ বছর -মূর্ত সক্রিয়তার স্তর </label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ১০-১১- মূর্ত সক্রিয়তার স্তর </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">কোন বয়সে হামাগুরি দিতে শিখেছে ? পেছন দিক ছেঁচড়ে বা চার হাতপা ব্যবহার করে দিয়েছে</h5>
                      <div class="form-check">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">০-২ বছর- সংবেদন-সঞ্চালন স্তর</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ২-৪বছর- প্রাক সক্রিয়তার স্তর </label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ৪-৭ বছর- প্রাক সক্রিয়তার স্তর </label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ৭-৯ বছর -মূর্ত সক্রিয়তার স্তর </label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ৯-১১- মূর্ত সক্রিয়তার স্তর </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">কোন বয়সে নিজে নিজে একা হাটতে শিখেছে</h5>
                      <div class="form-check">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">০-২ বছর- সংবেদন-সঞ্চালন স্তর</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ২-৪বছর- প্রাক সক্রিয়তার স্তর </label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ৪-৭ বছর- প্রাক সক্রিয়তার স্তর </label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ৭-৯ বছর -মূর্ত সক্রিয়তার স্তর </label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ৯-১১- মূর্ত সক্রিয়তার স্তর </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">তিন বা চার চাকার বাইসাইকেল চালানো শিখেছে ?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">শিশু কি সাঁতার জানে ?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">শিশু বাইরে খেলার উপকরন পছন্দ করে কিনা? (যেমন ফুটবল , ক্রিকেট )</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">শিশু কি খুব সহজেই. ক্লান্ত হয়ে যায়?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                      <label for="basicpill-firstname-input">বিস্তারিত লিখুন</label>
                      <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                      </div>
                      <!-- input-->
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">ভারসাম্য হীনতা আছে কিনা?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">পেশী ব্যথা সব সময় থাকে কিনা?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </section>

          <!-- Bank Details -->
          <h3>ভাষার দক্ষতা</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">শিশুর কথা বলার প্রথম ভাষা কোনটি ?</h5>

                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">বাংলা</label>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">ইংরেজি</label>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">হিন্দি</label>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">ফ্রেঞ্চ</label>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">স্প্যানিশ</label>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">অন্য</label>
                    </div>
                    <label>অন্য ভাষা হলে তা লিখুন</label>
                    <div class="input-group">
                      <input type="text" class="form-control">
                    </div>
                    <!-- input-->
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">কোন বয়সে শিশু প্রথম শব্দ বলেছে ?</h5>

                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> ০-২ বছর- সংবেদন-সঞ্চালন স্তর </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> ২-৪ বছর </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> ৪-৭ বছর- প্রাক সক্রিয়তার স্তর </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> ৭-৯ বছর -মূর্ত সক্রিয়তার স্তর </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> ৭-৯ বছর -মূর্ত সক্রিয়তার স্তর </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">৯-১১- মূর্ত সক্রিয়তার স্তর</label>
                      </div>
                      <h5>অন্যান্য হলে তা লিখুন</h5>
                      <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">সহজ বাক্য বলতে পারে কি?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">কয় শব্দে বাক্য বলে?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">এক শব্দে</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> দুই শব্দে </label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> তিন শব্দে </label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> ততোধিক শব্দে </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">অন্য কোন ভাষায় কথা বলতে পারে কি ?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">অন্য কোন ভাষা বলতে পারে?</h5>

                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">
                        বাংলা
                      </label>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">
                        ইংরেজি
                      </label>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">
                        হিন্দি
                      </label>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">
                        ফ্রেঞ্চ
                      </label>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">
                        স্প্যানিশ
                      </label>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">
                        অন্য
                      </label>
                    </div>
                    <label>অন্য ভাষা হলে তা লিখুন</label>
                    <div class="input-group" id="datepicker2">
                      <input type="text" class="form-control">
                    </div>
                    <!-- input-->
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="mb-2">
                    <h5 class="">কোন বয়স থেকে শিখেছে ?</h5>

                    <div>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">
                        ০-২ বছর- সংবেদন-সঞ্চালন স্তর
                      </label>
                    </div>
                    <div>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">
                        ২-৪ বছর- প্রাক সক্রিয়তার স্তর
                      </label>
                    </div>
                    <div>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">
                        ৪-৭ বছর- প্রাক সক্রিয়তার স্তর
                      </label>
                    </div>
                    <div>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">
                        ৭-৯ বছর -মূর্ত সক্রিয়তার স্তর
                      </label>
                    </div>
                    <div>
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">
                        ৯-১১ মূর্ত সক্রিয়তার স্তর
                      </label>
                    </div>
                  </div>
                </div>

                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="mb-2">
                    <h5 class="">কোথা থেকে সেই ভাষা শিখেছে ?</h5>

                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">
                      পরিবার
                    </label>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">
                      আত্মীয়
                    </label>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">
                      বন্ধু
                    </label>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">
                      প্রতিবেশি
                    </label>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">
                      স্কুল
                    </label>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">
                      শিক্ষক
                    </label>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">
                      টেলিভিশন
                    </label>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">
                      অন্যান্য
                    </label>
                  </div>
                  <label>অন্যান্য হলে তা লিখুন</label>
                  <div class="input-group" id="datepicker2">
                    <input type="text" class="form-control">
                  </div>
                  <!-- input-->
                </div>

                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="mb-2">
                    <h5 class="">নাম ধরে ডাকলে শিশু সারা দেয় কি?</h5>

                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">
                      মাঝে মাঝে
                    </label>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">
                      কখনো না
                    </label>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">
                      সব সময়
                    </label>
                  </div>
                </div>

                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="mb-2">
                    <h5 class="">প্রাথমিক ও সহজ ভাষায় নির্দেশ ও দিক নির্দেশনা অনুসরণ করতে পারে ?</h5>

                    <div class="d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="mb-2">
                    <h5 class="">শিশু কোন কোন শব্দ ভুল উচ্চারণ করে কিনা</h5>

                    <div class="d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5>কোন কোন শব্দে শিশু প্রতিক্রিয়াশিলতা</h5>

                      <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label"> খুব বেশি প্রতিক্রিয়াশীল </label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label"> প্রতিক্রিয়াহীন </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label"> লাফালাফি করে </label>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="mb-2">
                    <h5 class="">মৌখিক নির্দেশ মেনে চলে-</h5>

                    <div class="d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="mb-2">
                    <h5 class="">বাক্য গঠনে সঠিক শব্দের সঠিক ব্যবহার পারে?</h5>

                    <div class="d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">হ্যাঁ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>

              </form>
            </div>
          </section>


          <!-- Bank Details -->
          <h3>কাজ করার দক্ষতা</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">শিশু কি চাকু বা কাটা চামচ ব্যবহার করেতে পারে ?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5>নিজে একা একা কাপড় পরতে পারে ?</h5>

                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                          পরাপুরি স্বনির্ভর
                        </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                          কিছুটা সাহায্যে পারে
                        </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                          অনেক বেশি সহায়তা লাগে
                        </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                          পুরাপুরি পরনির্ভর
                        </label>
                      </div>
                    </div>
                    <label>বিস্তারিত লিখুন</label>
                    <div class="input-group" id="datepicker2">
                      <input type="text" class="form-control">
                    </div>
                    <!-- input-->
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">শিশু নিজের জিনিষ গুছিয়ে রাখে ?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5>কোন বয়সে টয়লেট ট্রেনিং পেয়েছে?</h5>

                      <div>
                        <input <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> ০-২ বছর- সংবেদন-সঞ্চালন স্তর </label>
                      </div>
                      <div>
                        <input <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> ২-৪ বছর- প্রাক সক্রিয়তার স্তর </label>
                      </div>
                      <div>
                        <input <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> ৪-৭ বছর- প্রাক সক্রিয়তার স্তর </label>
                      </div>
                      <div>
                        <input <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> ৭-৯ বছর -মূর্ত সক্রিয়তার স্তর</label>
                      </div>
                      <div>
                        <input <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> ৯-১১- মূর্ত সক্রিয়তার স্তর </label>
                      </div>
                      <div>
                        <input <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> টয়লেট ট্রেনিং পায়নি </label>
                      </div>
                      <div>
                        <input <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> ১১+ </label>
                      </div>
                    </div>
                    <label>অন্যান্য হলে তা লিখুন</label>
                    <div class="input-group" id="datepicker2">
                      <input type="text" class="form-control">
                    </div>
                    <!-- input-->
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">বাড়িতে কি নিজে নিজে টয়লেটে যায়?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">অপরিচত জায়গায় টয়লেটে যায়?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">বাড়িতে কি ছবি আঁকতে, কাটাকাঁটি করতে পছন্দ করে?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">খেলাধুলা করতে পছন্দ করে ?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">সে কি স্বাধীনভাবে খেলতে পারে ?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">কি খেলা পছন্দ করে?</h5>
                      <div class="">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">গঠনগত খেলা</label>
                      </div>
                      <div class="">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> কাল্পনিক খেলা </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> বস্তুগত খেলা </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> অন্যান্য </label>
                      </div>
                      <label>অন্যান্য হলে তা লিখুন</label>
                      <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                      </div>
                      <!-- input-->
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">বড়দের নির্দেশ মেনে বা মানিয়ে চলতে পারে</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">আপনি কি মনে করেন এটা একটি খুবই কঠিন কাজ?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">টয়লেট থেকে কি একা একা পরিস্কার হয়ে বের হয়ে আসতে পারে?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">টয়লেট থেকে কি একা একা নিজের কাপড় পরে বের হয়ে আসতে পারে?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </section>

          <!-- Bank Details -->
          <h3>সামাজিক দক্ষতা</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">বাসায় ভাইবোনদের সাথে খেলাধুলা করে কি?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">সন্তানের বন্ধুরা কি বাসায় খেলতে আসে ?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">বন্ধুদের সাথে খেলনা শেয়ার করে কি নাকি বড়দের সহায়তা লাগে?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">গেমস বা খেলাধুলায় অথবা কথা বলার সময় তার নিজের পালা বা টার্ন এর জন্য অপেক্ষা করে?
                      </h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">বড়দের সাথে বা অন্য শিশুদের ব্যপারে আগ্রহ দেখায় নাকি উদাসীন থাকে?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">আপনি কি সন্তানের বিশেষ কোন আচরন নিয়ে চিন্তিত ?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                      <label>হ্যাঁ হলে বিস্তারিত লিখুন</label>
                      <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                      </div>
                      <!-- input-->
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </section>


          <!-- Bank Details -->
          <h3>শেখার দক্ষতা</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">স্কুলের কাজের ক্ষেত্রে আপনার সন্তানের প্রধান উদ্বেগের কারন/বিষয় গুলি কি কি ? উল্লেখ
                        করুন-</h5>
                      <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                      </div>
                      <!-- input-->
                    </div>
                  </div>
                  <!-- end row -->
                  <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                      <div class="m-0">
                        <h5 class="mb-2">নতুন নতুন বিষয় শেখার আগ্রহ আছে কিনা?</h5>
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">হ্যাঁ</label>
                          </div>
                          <div>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">না</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                  <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                      <div class="m-0">
                        <h5 class="mb-2">যেকোনো সাধারণ বিষয় সঠিকভাবে বুঝতে পারে কিনা ?</h5>
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">হ্যাঁ</label>
                          </div>
                          <div>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">না</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                  <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                      <div class="m-0">
                        <h5 class="mb-2">শব্দের বানান শিখতে পারে কিনা?</h5>
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">হ্যাঁ</label>
                          </div>
                          <div>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">না</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                  <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                      <div class="m-0">
                        <h5 class="mb-2">নিজে নিজে লিখতে পারে?</h5>
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">হ্যাঁ</label>
                          </div>
                          <div>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">না</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                  <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                      <div class="m-0">
                        <h5 class="mb-2">কাজ করার গতি কেমন ?</h5>
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label"> খুব ভালো </label>
                          </div>
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label"> ভালো </label>
                          </div>
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label"> মোটামুটি </label>
                          </div>
                          <div>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">কম</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                  <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                      <div class="m-0">
                        <h5 class="mb-2">আপনার সন্তানের কোন ও বিষয়ে বোঝার ক্ষমতা বোঝানোর পর কতদিন পর্যন্ত থাকে?</h5>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> একদিন দেখিয়ে দিতে হয় </label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> পরবর্তী দিনগুলিতে দেখিয়ে দিতে হয় </label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label"> নিয়মিত দেখিয়ে দিতে হয় </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                  <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                      <div class="m-0">
                        <h5 class="mb-2">হোমওয়ার্ক কি তার কাছে সাধারণ কাজ?</h5>
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">হ্যাঁ</label>
                          </div>
                          <div>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">না</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                  <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                      <div class="m-0">
                        <h5 class="mb-2">স্কুলের কাজ করার সময় কি তার ব্যবহার/আচরণ অন্যরকম হয়ে যায়?</h5>
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">হ্যাঁ</label>
                          </div>
                          <div>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">না</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                  <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                      <div class="m-0">
                        <h5 class="mb-2">তাকে কি উত্তেজিত মনে হয়?</h5>
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">হ্যাঁ</label>
                          </div>
                          <div>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">না</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                  <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                      <div class="m-0">
                        <h5 class="mb-2">কাগজপত্র বা বই খাতায় অগোছালো মনে হয়?</h5>
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">হ্যাঁ</label>
                          </div>
                          <div>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">না</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                  <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                      <div class="m-0">
                        <h5 class="mb-2">সে কি নিয়মিত পেন্সিল বক্স থেকে বিভিন্ন্য আইটেম বা স্কুল ব্যাগ থেকে বিভিন্ন
                          জিনিষ হারায়?</h5>
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">হ্যাঁ</label>
                          </div>
                          <div>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">না</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </section>

          <!-- Bank Details -->
          <h3>স্বনির্ভরতা</h3>
          <section>
            <div>
              <p>আপনার সন্তানের মাঝে নিচের বিষয়গুলির নিয়ে কোন অসুবিধা পরিলক্ষন করেছেন কি? করে থাকলে, কমেন্টে বিস্তারিত
                লিখুন। এই বিষয়গুলি মুলত স্কুলে যাওয়ার বয়সের জন্য প্রযোজ্যঃ</p>
              <form>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">খাওয়াদাওয়ার সময় বিশ্রী/বেমানান কাজ করে কিনা যেটা পিতামাতার জন্য বিরক্তি সৃষ্টি
                        করে</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">কাপড় পরিধানঃ</h5>
                      <div class="me-5">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                          বেশি কান্নাকাটি/ চিৎকার করে
                        </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">না</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">আপনি আপনার শিশুকে কি ভাবে বর্ণনা করবেন?</h5>

                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                          জামা বা শার্ট এর হাতা বা গলার ফাঁক খুজে পেতে সমস্যা?
                        </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                          বোতাম ঘরের ফাঁকা অংশ দেখে বোতাম লাগাতে হয়
                        </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                          না দেখে পারে?
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">গোসল</h5>

                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label"> গোসলে সহায়তা প্রয়োজন হয় </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label"> সাবান লাগানোর সময় হাত থেকে পরে যায় </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label"> শ্যাম্পুর সময় চোখ বন্ধ করতে ভয় পায় </label>
                      </div>
                      <label>বিস্তারিত লিখুন</label>
                      <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                      </div>
                      <!-- input-->
                    </div>
                  </div>
                </div>

                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">প্রয়োজনীয় জিনিস</h5>

                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">প্রয়োজনীয় জিনিষ খুজে পায় না</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">খেলনা বা অন্যান্য জিনিষ গুছিয়ে রাখতে সাহায্য প্রয়োজন হয়</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">দিক নির্ণয়ের দক্ষতা আছে কি?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">খেলা</h5>

                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">লেগো দিয়ে খেলনা তৈরি করতে পছন্দ করে</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">একটা লেগোর সাথে আর একটা লেগোর কানেকশন বের করা তার জন্য শক্ত
                          কাজ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">খুব বেশী চাপ দিয়ে দিয়ে খেলনা গুলি ভেঙ্গে ফেলে</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">মবিলিটি</h5>

                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">হোঁচট খায় বা জিনিষ পত্রের বা বন্ধুদের সাথে ধাক্কা খায়</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">কাঁচি, ছুরি বেমানান ভাবে ব্যবহার করে এবং সাহায্য প্রয়োজন
                          হয়</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">লিখার কাজটি তার কাছে কঠিন মনে হয়</label>
                      </div>
                      <label>অন্যান্য হলে তা লিখুন</label>
                      <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                      </div>
                      <!-- input-->
                    </div>
                  </div>
                </div>

                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <h5 class="mb-2">রুটিন পছন্দ করে</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">রুটিনে কোন পরিবর্তন মেনে নেয় কি?রুটিন পছন্দ করে</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">নতুন পরিস্থিতি পছন্দ করে?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">ধারাবাহিক নির্দেশ ঠিক মত পালন করতে পারে না</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">মেজাজ খুব তাড়াতাড়ি পরিবর্তিত হয়</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">সহজে হতাশাগ্রস্থ হয়</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">কাজ করা বন্ধ করে দেয়</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">অস্থিরতা আছে কি?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">একজায়গায় ঠিক মত বসতে পারে (পরিবেশ - পরিস্থিতির প্রয়োজনে দীর্ঘ সময় বসে থাকা )</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">বাসায় ধ্বংসাত্মক বা আক্রমণাত্মক ব্যাবহার আছে কি?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                      <label>থাকলে কি ধরনের আচরন প্রদর্শন করে?</label>
                      <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                      </div>
                      <!-- input-->
                    </div>
                  </div>
                </div>
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">খেলাধুলায় মনে হয় মনোযোগ নেই, শুধু বসে থাকে</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">আপনার সন্তানের সময় সম্পর্কে জ্ঞান আছে কি?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">দিন, মাস ও সময় জ্ঞান অর্জনে সমস্যা আছে কি?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">সারা প্রদান</h5>

                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label"> ডাকলে সাড়া দেয় না </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">অনুরোধে প্রায়ই সাড়া দেয় না</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">দিবাস্বপ্নচারী মনে হয় । ঘোরের মধ্যে থাকা, কল্পনার জগতে থাকে</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">এক জায়গায় ঘোরে</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">ঘোরাঘুরি করে</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">সবসময়ই নড়াচড়া বা চলাফেরার মধ্যে থাকে</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">সোজা হয়ে বসতে পছন্দ করে কি?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">বল নিয়ে খেলার ক্ষেত্রে পারদর্শী</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">বল নিয়ে যে কোন ধরনের খেলা এড়িয়ে চলে</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">ভাংচুর করতে পছন্দ করে (জিনিষ পত্র নষ্ট করে )</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">বেমানান ভঙ্গিতে দৌঁড়ায়</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">উচ্চতা, নড়াচড়া, সিঁড়ি দিয়ে নামার ক্ষেত্রে সাবধান থাকে</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">সারাক্ষণ নড়াচড়ার মধ্যে থাকে</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">কাজ এড়িয়ে চলতে চায়</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">কোন ধরনের কাজ এড়িয়ে চলে? -</h5>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label"> ব্যাক্তিগত কাজ </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">অন্যের সাথে মিলে কাজ</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label"> শারীরিক পরিশ্রম আছে এমন কাজ </label>
                      </div>
                      <label>থাকলে কি ধরনের আচরন প্রদর্শন করে?</label>
                      <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                      </div>
                      <!-- input-->
                    </div>
                  </div>
                </div>
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">বার বার হারিয়ে যায়?</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">হ্যাঁ</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">না</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </form>
            </div>
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