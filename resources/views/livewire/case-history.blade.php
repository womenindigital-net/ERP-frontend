<div>
    @section('css')
    <link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
    @endsection
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-6">
                            <h4 class="card-title">STUDENT QAS</h4>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-outline-info waves-effect waves-light"
                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" wire:click="show()"
                                wire:key>ADD
                            </button>
                        </div>
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
                        <table class="table w-100">
                            <thead>
                                <tr>
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
                                    <td>2022-03-29</td>
                                    <td>Ashfaq Sadi</td>
                                    <td>Nurjahan Dipa</td>
                                    <td>
                                        <small>
                                            <span>Create: Nurjahan Dipa @ 2022-03-29 16:04:41</span><br>
                                            <span>Update: Ohidul Hassan @ 2022-04-12 11:36:44</span>
                                        </small>
                                    </td>
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
                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
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

    <!--  Large modal example -->
    <div class="modal fade bs-example-modal-lg @if($mode === 'view') apply-view-only @endif" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" wire:ignore aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    {{-- Step --}}
                    <div class="container">
                        <div class="row">
                            {{-- <div class="col-sm-3" id="horizontal_nev"></div> --}}
                            <div class="col-sm-12">
                                <!-- Wizard container -->
                                <div class="wizard-container">
                                    <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                        <div class="col-sm-3 col-md-3">
                                            <div id="wizard-navigation">
                                                <ul class="wizard-navigation">
                                                    <li class="w-100"><a href="#case_history_init"
                                                            data-toggle="tab">Case History Init</a></li>
                                                    <li class="w-100"><a href="#referral_information"
                                                            data-toggle="tab">রেফারাল তথ্য</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9">
                                            <form>
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="case_history_init">
                                                        <section>
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-firstname-input">Collection
                                                                                Date:</label>
                                                                            <div class="input-group" id="datepicker2">
                                                                                <x-input-text name="sample" type="date"
                                                                                    wireModel="date"
                                                                                    placeholder="mm/dd/yyyy">
                                                                                </x-input-text>
                                                                            </div><!-- input-group -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-lastname-input">Teacher:</label>
                                                                            <x-input-select name="sample"
                                                                                :records="$teachers"
                                                                                wireModel="teacher_id">
                                                                            </x-input-select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-phoneno-input">Candidate
                                                                                ID:</label>
                                                                            <x-input-select name="sample"
                                                                                :records="$students"
                                                                                wireModel="student_id">
                                                                            </x-input-select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-phoneno-input">Phone</label>
                                                                            <x-input-text wireModel="phone">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-email-input">Email</label>
                                                                            <x-input-text wireModel="email">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-address-input">Address</label>
                                                                            <x-input-textarea wireModel="address">
                                                                            </x-input-textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="referral_information">
                                                        <section>
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <h3>Instruction:</h3>
                                                                        <p>আপনার জানা তথ্য ও জ্ঞান অনুযায়ী নিচের
                                                                            তথ্যাবলী প্রেরণ করুন। সঠিক উত্তর না
                                                                            জানা থাকলে ‘জানি না’
                                                                            লিখুন। উত্তরের জন্য প্রয়োজনীয় জায়গা না থাকলে
                                                                            আলাদা কাগজ ব্যবহার করে উত্তর
                                                                            বিস্তারিত ভাবে লিখুন।
                                                                        <p>
                                                                    </div>
                                                                </div>
                                                                <x-input-radio-or-check
                                                                    label="সমন্বয় দক্ষতা আছে কি? <br>(Join Coordination এর মাধ্যমে কাজ করা যেমন- doe / আটা দিয়ে রুটি বানানো বলে জোড়ে কিক দেয়া)"
                                                                    :records="$constants::$yesNo"
                                                                    wireModel="has_adjustment_capability">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    label="চলাফেরার ক্ষেত্রে ভারসাম্য আছে কি? <br>(যেমন-হাটার সময় পড়ে যাওয়া, হাটার সময় শরীর দোলানো, থপ থপ জোরে হাটা, বেখাপ্পা ভাবে হাটা)"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>

                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    name="has_fine_equipment_use_ability"
                                                                    label="সূক্ষ্ম যন্ত্রপাতি ব্যবহার করা সহ ফাইন মটরের দক্ষতা আছে কি?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="has_write_ability"
                                                                    label="লিখার পদ্ধতি ঠিক আছে কিনাঃ?"
                                                                    :records="$caseConstants::$hasWriteAbilities"
                                                                    type="checkbox" :isVertical="false"
                                                                    :multiple="true">
                                                                </x-input-radio-or-check>

                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="has_education_intersted"
                                                                    label="পড়াশুনা সহ শিক্ষার বিষয়ের উদ্বেগ আছে কিনা <br> (যেমন-পড়তে – লিখবে অনাগ্রহ / দেখে পড়া / সঠিক ভাবে দেখে লেখার সমস্যা)"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="has_self_work_capabelity"
                                                                    label="স্বনির্ভরতার (নিজে নিজে কাজ করার ) দক্ষতা আছে কিনা (যেমন-বয়স অনুযায়ী নিজের কাজ করতে পারা / রুটিন জানা)"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    name="has_abil_to_comminite_socilely"
                                                                    label="সামাজিক যোগাযোগ করতে পারে কিনা (যেমন-বয়স অনুযায়ী সামাজিক যোগাযোগ)"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="is_ableto_paly_others"
                                                                    label="খেলার মাধ্যমে যোগাযোগ করে কিনা? অন্যের সাথে মিলে মিশে খেলাধুলা করে কিনা? (যেমন-বয়স অনুযায়ী খেলা / সঠিক ভাবে খেলা / খেলার প্রতি আগ্রহ / খেলার উপকরন চাওয়া)"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>

                                                                {{--todo--}}
                                                                <!-- end row -->
                                                                <x-input-radio-or-check wireModel="has_write_ability"
                                                                    label="শেখার প্রতিবন্ধকতা আছে কি? নীচের বিষয়গুলি সম্মন্ধে কোন ধারনা আছে কিনা? (যেমন-অক্ষর / বর্ণ শব্দ বাক্য পড়তে লিখতে সমস্যা অস্বাভাবিক তা, অংক শিখতে না পারা, অংকে অনাগ্রহ, গ্রাফ / চিত্র সম্পর্কে অনাগ্রহ)"
                                                                    :records="$caseConstants::$hasAnyLerningAbstagol"
                                                                    type="checkbox" :isVertical="false"
                                                                    :multiple="true">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="has_control_over_body"
                                                                    label="শরীরের ওপর সাধারণ নিয়ন্ত্রন আছে কিনা?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                {{--todo--}}
                                                                <!-- end row -->
                                                                {{-- <x-input-radio-or-check
                                                                    wireModel="has_speaking_problem"
                                                                    label="কথা বলার সমস্যা আছে কিনাঃ"
                                                                    :records="$constants::$yesNo"
                                                                    secondaryInputLabel="থাকলে উল্লেখ করুন"
                                                                    secondaryInputWire="has_speaking_problem_additional">
                                                                </x-input-radio-or-check> --}}
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    name="is_able_to_understand_tense"
                                                                    label="ভাষা বুঝতে পারে কিনা (যেমন-অতীত – ভবিষ্যৎ কাল, এক বচন – বহুবচন, পুরুষ (আপনি, তুমি) বুঝতে পারে )"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                {{--todo--}}
                                                                <!-- end row -->
                                                                {{-- <x-input-radio-or-check
                                                                    name="is_able_to_use_correct_word_in_sentence"
                                                                    label="ভাষার ব্যবহার পারে ?(যেমন- বাক্যে সঠিক শব্দের ব্যবহার)"
                                                                    :records="$caseConstants::$isAbleToUseCurrectWordInSentanse"
                                                                    secondaryInputWire="is_able_to_use_correct_word_in_sentence_additional"
                                                                    secondaryInputLabel="সমস্যা থাকলে উল্লেখ করুন">
                                                                </x-input-radio-or-check> --}}
                                                                <!-- end row -->
                                                                {{-- <x-input-radio-or-check
                                                                    name="is_able_to_understand_tense"
                                                                    label="অতীতে আপনার সন্তানের কোন স্পেশালিষ্ট এর মাধ্যমে অ্যাসেসমেন্ট হয়েছিল কিনা ?"
                                                                    :records="$constants::$yesNo"
                                                                    secondaryInputLabel="স্পেশালিষ্ট এর পদবি ও বিস্তারিত লিখুন।">
                                                                </x-input-radio-or-check> --}}
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    name="is_able_to_understand_tense"
                                                                    label="লার্নিং ডিজাবিলিটি বা কোন কিছু শিখতে পারাতে কোন সমস্যা পরিবারে কারো ছিল কিনা?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    name="is_able_to_understand_tense"
                                                                    label="সন্তানের মধ্যে অস্থিরতা আছে কিনা"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                            </form>
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
                        </div> <!-- row -->
                    </div> <!--  big container -->
                    {{-- Step --}}
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    @section('script')

    <!-- Custom step -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
    @endsection
</div>