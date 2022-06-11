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
            COMMON > STUDENT QA
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
                                <span class="d-none d-sm-block">Care Needs Form</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Care Needs Dtails</span>
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
                                                        <li class="w-100"><a href="#case_history_init"
                                                                data-toggle="tab">CARE Needs - Part 2</a></li>
                                                        <li class="w-100"><a href="#referral_information"
                                                                data-toggle="tab">2nd part: Assessment</a></li>
                                                        <li class="w-100"><a href="#Personal_Care_Needs"
                                                                data-toggle="tab">Personal Care Needs</a></li>
                                                        <li class="w-100"><a href="#Personal_Care_Needs"
                                                                data-toggle="tab">Personal Care Needs</a></li>
                                                        <li class="w-100"><a href="#Medical_history"
                                                                data-toggle="tab">Medical history</a></li>
                                                        <li class="w-100"><a href="#Physical_Health_Needs"
                                                                data-toggle="tab">Physical Health Needs</a></li>
                                                        <li class="w-100"><a href="#Social Needs"
                                                                data-toggle="tab">Social Needs</a></li>
                                                        <li class="w-100"><a href="#Signature"
                                                                data-toggle="tab">Signature</a></li>
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
                                                                                <x-input-text name="collection_date"
                                                                                    type="date" placeholder="mm/dd/yyyy">
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-lastname-input">Teacher:</label>
                                                                                <x-input-select name="teacher_id"
                                                                                    :records="$teachers">
                                                                                </x-input-select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-phoneno-input">Candidate
                                                                                    ID:</label>
                                                                                <select
                                                                                    class="form-control select2 form-select">
                                                                                    <option value="0">Select</option>
                                                                                    <option value="1">Aalliyah Tehzeeb Ahmed
                                                                                    </option>
                                                                                    <option value="2">abdullah-al-nafi antor
                                                                                    </option>
                                                                                    <option value="3">Abdullahil Baki
                                                                                    </option>
                                                                                    <option value="4">Abdur Rahman Sajid
                                                                                    </option>
                                                                                    <option value="5">Abid Hossain Turjo
                                                                                    </option>
                                                                                    <option value="6">Abid Kabir Chowdhury
                                                                                    </option>
                                                                                    <option value="7">Abrar Ahosab Talha
                                                                                    </option>
                                                                                    <option value="8">Abrar Jawad Siam
                                                                                    </option>
                                                                                    <option value="9">Abu Sufiyan</option>
                                                                                    <option value="10">Adib Akbar</option>
                                                                                    <option value="11">Adiba Atiar</option>
                                                                                    <option value="12">Adil Anaf</option>
                                                                                    <option value="13">Aditya Chakraborty
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        for="verticalnav-phoneno-input">Instruction:</label>
                                                                                    <p>This form will be used after
                                                                                        admission</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="referral_information">
                                                            <section>
                                                                <form>
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Instruction:</h5>
                                                                                <div class="form-check d-flex p-2">
                                                                                    <h6>Enter Assessment</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Case History form submitted?</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end row -->

                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Has the individual had a previous needs assessment?"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="If so, has a copy been obtained?"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Psychological assessment" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="if Yes, report attached" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Functional Assessment" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Sensory checklist" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Social Communication" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Therapy
                                                                        assessment: OT,
                                                                        SLT, Physio" :records="$careConstants::$therapyAssessment" multiline="true"/>
                                                                    

                                                                    <!-- end row -->
                                                                </form>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Personal_Care_Needs">
                                                            <section>
                                                                <form>
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Instruction:</h5>
                                                                                <div class="form-check d-flex p-2">
                                                                                    <h6>Enter Personal Care Needs</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Self-understanding" :records="$careConstants::$selfUnderstanding"
                                                                        :isVertical="false"></x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Eat /drink/ swallow" :records="$careConstants::$eatDrinking"
                                                                        :isVertical="false"></x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <div class="row border-top py-2 mt-3">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>How many fingers use to eat</h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="hello"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" label="Food allergy"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <div class="mt-3">
                                                                        <label for="formmessage">Give details</label>
                                                                        <textarea id="formmessage" class="form-control" rows="1" placeholder="Enter Answer"></textarea>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Any special diet?" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Preparation of meal" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Washing and bathing" :records="$careConstants::$washingBathing"
                                                                        :isVertical="false"></x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Brushing teeth/mouth care" :records="$careConstants::$teethMouthCare"
                                                                        :isVertical="false"></x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                    <x-input-radio-or-check name="hh" label="Hair Cut"
                                                                        :records="$careConstants::$selfNeedHelp">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" label="Shaving"
                                                                        :records="$careConstants::$selfNeedHelp">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" label="Foot care"
                                                                        :records="$careConstants::$selfNeedHelp">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" label="Nails"
                                                                        :records="$careConstants::$selfNeedHelp">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Toilet Training" :records="$careConstants::$toiletTraining"
                                                                        :isVertical="false"></x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Separate type of toilet Need"
                                                                        :records="$careConstants::$urinStool">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Dressing" :records="$careConstants::$dressing"
                                                                        :isVertical="false">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Getting up/going to bed" :records="$careConstants::$yesNoHelp">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Managing own money" :records="$careConstants::$yesNoHelp">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" label="Shopping"
                                                                        :records="$careConstants::$yesNoHelp">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" label="Transportation"
                                                                        :records="$careConstants::$yesNoHelp">
                                                                    </x-input-radio-or-check>

                                                                    <!-- end row -->
                                                                    <div class="row border-top py-2 mt-3">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Other personal care/activities of daily
                                                                                    living
                                                                                </h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="hello1"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Intrapersonal skills" :records="$careConstants::$interpersonal"
                                                                        :isVertical="false"></x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Communication Skills" :records="$careConstants::$communicationSkill"
                                                                        :isVertical="false"></x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                </form>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Medical_history">
                                                            <section>
                                                                <form>
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Instruction:</h5>
                                                                                <div class="form-check d-flex p-2">
                                                                                    <h6>Enter Medical history</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <div class="row border-top py-2 mt-3">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Details of current medical treatment
                                                                                </h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="hello2"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <div class="row border-top py-2 mt-3">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Details of past/long term medical
                                                                                    conditions
                                                                                </h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="hello3"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Managing medication" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    {{-- end row --}}

                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Does the individual have any history of the following?"
                                                                        :records="$careConstants::$history" :isVertical="false">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                    <!-- end row -->
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Vaccination records?</h5>
                                                                                <div class="mt-3">
                                                                                    <div>
                                                                                        <x-input-text name="collection_date"
                                                                                            type="file">
                                                                                        </x-input-text>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- ---- --}}
                                                                    <div class="row border-top py-2 mt-3">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>More information</h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="hello4"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- -------- --}}
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Any other records, Please attach</h5>
                                                                                <div class="mt-3">
                                                                                    <div>
                                                                                        <x-input-text name="collection_date"
                                                                                            type="file">
                                                                                        </x-input-text>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- -------- --}}
                                                                    <div class="row border-top py-2 mt-3">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Enter more info , if any</h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="hello5"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Physical_Health_Needs">
                                                            <section>
                                                                <form>
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Instruction:</h5>
                                                                                <div class="form-check d-flex p-2">
                                                                                    <h6>Enter Physical Health Needs</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Sight Aids required?" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    {{-- end row --}}

                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Hearing aids required?" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    {{-- end row --}}

                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Mobility/Walking Aids required?"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    {{-- end row --}}

                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Handling objects/Grip Aids required?"
                                                                        :records="$constants::$yesNoEn"></x-input-radio-or-check>
                                                                    {{-- end row --}}

                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Wheel chair /any other Aids required?"
                                                                        :records="$constants::$yesNoEn"></x-input-radio-or-check>
                                                                    {{-- end row --}}
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Physical Pressure areas Aids required?"
                                                                        :records="$constants::$yesNoEn"></x-input-radio-or-check>
                                                                    {{-- end row --}}
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Weight/Aids/Care required?"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    {{-- end row --}}
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Breathing Aids required?" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    {{-- end row --}}
                                                                    <x-input-radio-or-check name="hh"
                                                                        label="Oral health Aids required?"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    {{-- end row --}}
                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Any sensory issues? ( Tick, if the child has it)"
                                                                        :records="$careConstants::$sensoryIssue" :isVertical="false">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Gross Motor Skills" :records="$careConstants::$grossMotorSkill"
                                                                        :isVertical="false"></x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Fine Motor Skills" :records="$careConstants::$fineMotorSkill"
                                                                        :isVertical="false"></x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Eye Movements" :records="$careConstants::$eyeMovement"
                                                                        :isVertical="false">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Oral-motor activities" :records="$careConstants::$oralMotoractivities"
                                                                        :isVertical="false"></x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                </form>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Social_Needs">
                                                            <section>
                                                                <form>
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Instruction:</h5>
                                                                                <div class="form-check d-flex p-2">
                                                                                    <h6>Please Enter Social Needs</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Relationship management" :records="$careConstants::$relationshipManagement"
                                                                        :isVertical="false"></x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label="Social Communication skills"
                                                                        :records="$careConstants::$socialSkill" :isVertical="false">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                    <x-input-radio-or-check
                                                                        name="is_able_to_understand_tense"
                                                                        label="Demonstrating respect for self & others"
                                                                        :records="$constants::$yesNoEn" secondaryInputLabel="Explain">
                                                                    </x-input-radio-or-check>
                                                                    {{-- end row --}}

                                                                    <x-input-radio-or-check
                                                                        name="is_able_to_understand_tense"
                                                                        label="Recognizing / Managing basic Emotions"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Give details, if any">
                                                                    </x-input-radio-or-check>
                                                                    {{-- end row --}}

                                                                    <x-input-radio-or-check
                                                                        name="is_able_to_understand_tense"
                                                                        label="Transition and Changes" :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Give details, if any">
                                                                    </x-input-radio-or-check>
                                                                    {{-- end row --}}

                                                                    <x-input-radio-or-check name="hh" type="checkbox"
                                                                        label=" Work Habit" :records="$careConstants::$workHabit"
                                                                        :isVertical="false">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                    <x-input-radio-or-check
                                                                        name="is_able_to_understand_tense"
                                                                        label="Additional information" :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Give details, if any">
                                                                    </x-input-radio-or-check>
                                                                    {{-- end row --}}
                                                                </form>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Signature">
                                                            <section>
                                                                <form>
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Instruction:</h5>
                                                                                <div class="form-check d-flex p-2">
                                                                                    <h6>Enter Signature information</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Hereby I confirmed that all above
                                                                                    information I
                                                                                    have provided are correct
                                                                                    and genuine. For any
                                                                                    wrong and false information, may lead
                                                                                    cancellation of the admission.</h5>
                                                                                <div class="mt-3">
                                                                                    <div>
                                                                                        <x-input-text name="hello7"
                                                                                            placeholder="">
                                                                                        </x-input-text>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row border-top py-2 mt-3">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Name of parent/ guardian</h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="hello6"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                            </div> <!-- end col -->
                        </div>
                        <div class="tab-pane " id="case-histroy_list" role="tabpanel">
                            <!-- form start -->
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <label style="display: inline-flex;align-items: center;"> Show
                                        <select name="length"
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
                                            <th>Collection Date</th>
                                            <th>Student Name</th>
                                            <th>Collected By</th>
                                            <th>Log</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2022-04-13</td>
                                            <td>Hossain Rafif Ahyaan</td>
                                            <td>Nurjahan Dipa</td>
                                            <td>Create: Nurjahan Dipa @ 2022-04-13 12:32:20</td>
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
@endsection
