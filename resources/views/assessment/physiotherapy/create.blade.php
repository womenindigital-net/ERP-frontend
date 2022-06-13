@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
    <style>
        .wizard .steps>ul>li a {
            padding-right: 0 !important;
        }
        .wizard .steps>ul>li a {
            padding-left: 5px !important;
        }
    </style>
@endsection

@section('content')
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
                                                                data-toggle="tab">Sensory Checklist</a></li>
                                                        <li class="w-100"><a href="#Pragmatic_Objective"
                                                                data-toggle="tab">General</a>
                                                        </li>
                                                        <li class="w-100"><a href="#PERSONAL"
                                                                data-toggle="tab">Visual Perception</a></li>
                                                        <li class="w-100"><a href="#Topic_Maintenance"
                                                                data-toggle="tab">Activities of Daily living</a></li>
                                                        <li class="w-100"><a href="#Conversational_Structure"
                                                                data-toggle="tab">Strength</a></li>
                                                        <li class="w-100"><a href="#Word_Structure"
                                                                data-toggle="tab">Functional Gross Motor</a></li>
                                                        <li class="w-100"><a href="#Manner_Effectiveness"
                                                                data-toggle="tab">Transitional Movements</a></li>
                                                        <li class="w-100"><a href="#Repair_Structures"
                                                                data-toggle="tab">Fine motor Skill</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent"
                                                                data-toggle="tab">Automatic Reaction</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Functional_Intent_B"
                                                                data-toggle="tab">Sensory Skill (Normal /Hypo response)</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Functional_Intent_C"
                                                                data-toggle="tab">Cognitive Skills</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_D"
                                                                data-toggle="tab">Treatment</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_E"
                                                                data-toggle="tab">Signature</a></li>
                                                        <li class="w-100"><a href="#mp" data-toggle="tab">Muscle
                                                                Power</a></li>
                                                        <li class="w-100"><a href="#mt" data-toggle="tab">Muscle
                                                                tone</a></li>
                                                        <li class="w-100"><a href="#Be"
                                                                data-toggle="tab">Behavior</a>
                                                        </li>
                                                        <li class="w-100"><a href="#DA" data-toggle="tab">Domain
                                                                Area</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9">
                                                <form action="{{route('physiotherapy.store')}}" method="POST">
                                                    @csrf
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="Social_Communication">
                                                            <section>
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-firstname-input">Collection
                                                                                    Date:</label>
                                                                                <x-input-text name="collention_date" placeholder="Collection Date">
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
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-phoneno-input">Candidate
                                                                                    ID:</label>
                                                                                    <x-input-select name="candidate_id"
                                                                                    :records="[]" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="verticalnav-phoneno-input">Description:</label>
                                                                                <p>Physiotherapy assessment form</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="verticalnav-email-input">Instruction:</label>
                                                                                <p>Physiotherapy assessment form</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Pragmatic_Objective">
                                                            <section>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Birth history</label>
                                                                        <x-input-text name="birth_history" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Before birth</label>
                                                                        <x-input-text name="before_birth" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Pregnancy</label>
                                                                        <x-input-text name="pregnancy" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">During Birth</label>
                                                                        <x-input-text name="during_birth" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Delivery</label>
                                                                        <x-input-text name="delivery" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">After Birth</label>
                                                                        <x-input-text name="after_birth" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">History</label>
                                                                        <x-input-text name="history" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        label="Medication Treatment" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        label="Any present medicines" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Home equipment</label>
                                                                        <x-input-text name="home_equipment" placeholder="Home equipment">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- end row -->

                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="PERSONAL">
                                                            <section>
                                                                <div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Visual Discrimination" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Visual Memory" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Visual Figure ground" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Visual Spatial" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Oral Motor" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check label="Sucking"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Drooling"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Swollen"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Chewing"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Choking"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Drinking"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Topic_Maintenance">
                                                            <section>
                                                                <div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check label="Eating"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Brushing teeth" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Dressing"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Toilet"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Bathing"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Does The Child attend school?"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">If Yes, Enter school
                                                                                name</label>
                                                                            <x-input-text name="enter_your_name" placeholder="Enter school
                                                                            name">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Leisure/ Play: activities of interest."
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Conversational_Structure">
                                                            <section>
                                                                <div>
                                                                        <!-- end row -->
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Please explain
                                                                                strength area</label>
                                                                            <x-input-text name="please_explain_strength_area" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Word_Structure">
                                                            <section>
                                                                <div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check label="Sitting"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Crawling"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check label="Standing"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check label="Walking"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Jumping"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check label="Running"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Ball skill" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Manner_Effectiveness">
                                                            <section>
                                                                <div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Prone to Supine" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Continuous Rolling" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Lying to Sit" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Box sit to stand" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check label="Jumping"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Cross sit to stand" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Kneeling to stand:" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Repair_Structures">
                                                            <section>
                                                                <div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Dominance" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text name="left" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text name="right" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Reach"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Release"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Symmetrical use" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Bilateral use" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="In-hand manipulation" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Eye hand co-ordination"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Transfer"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Writing skill" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent">
                                                            <section>
                                                                <div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Protective reactions" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Equilibrium reaction" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_B">
                                                            <section>
                                                                <div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Tactile"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check  label="Auditory"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Vestibular" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Proprioceptive" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_C">
                                                            <section>
                                                                <div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Attention" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Problem Solving" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Able to Follow instruction"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check label="Memory"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Perceptual Motor" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Body Awareness" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Body Co-ordination" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Bilateral integration"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_D">
                                                            <section>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Problem List</label>
                                                                        <x-input-text name="problam_list" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Treatment plan</label>
                                                                        <x-input-text name="treatment_plan" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Treatment plan
                                                                            implementation details</label>
                                                                        <x-input-text name="treatment_plann" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Progress</label>
                                                                        <x-input-text name="progress" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_E">
                                                            <section>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Therapist
                                                                            Signature</label>
                                                                        <x-input-text name="therapist_signature" type="file"
                                                                            placeholder=""></x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Designation and
                                                                            organizations name</label>
                                                                        <x-input-text name="designation" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="mp">
                                                            <section>
                                                                <div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Upper limbs" :records="$physiotherapyConstants::$limbs">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text name="left" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text name="right" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Lower Limbs" :records="$physiotherapyConstants::$limbs">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text name="left" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text name="right" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Trunk/neck</label>
                                                                            <x-input-text name="trunk" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="mt">
                                                            <section>
                                                                <div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Upper limbs" :records="$physiotherapyConstants::$limbsTone">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text name="left" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text name="right" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check
                                                                            label="Lower Limbs" :records="$physiotherapyConstants::$limbsTone">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text name="left" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text name="right" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Be">
                                                            <section>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Independence"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Social interaction" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Social Communication" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Interpersonal" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="DA">
                                                            <section>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="physical_Gross_motor_Fine_motor"
                                                                        label="Physical (Gross motor/ Fine motor)"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check  label="Cognitive"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">If yes write
                                                                            below</label>
                                                                        <x-input-text name="if_yes" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Behavioral</label>
                                                                        <x-input-text name="behavioral" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Communication" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check  label="Social"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Emotional"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>

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
                                                                value='Finish' />
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
                                            <td>2019-02-03</td>
                                            <td>Omiggg</td>
                                            <td>Karishma Cultural</td>
                                            <td><small>Create: Karishma Cultural @ 2019-02-17 18:32:43</small></td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                                    data-bs-toggle="modal" data-bs-target=".social-communication-view">
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
                                                    data-bs-toggle="modal" data-bs-target=".social-communication-view">
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

    <!--  Large modal example -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel"> Physiotherapy (PA2dOT)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div id="vertical-example" class="vertical-wizard">
                        <!-- Seller Details -->
                        <h3>Sensory Checklist</h3>
                        <section>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Collection Date:</label>
                                            <x-input-text name="collection_date" placeholder=""></x-input-text>
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
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="verticalnav-phoneno-input">Description:</label>
                                            <p>Physiotherapy assessment form</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="verticalnav-email-input">Instruction:</label>
                                            <p>Physiotherapy assessment form</p>
                                        </div>
                                    </div>
                                </div>
                        </section>

                        <!-- Company Document -->
                        <h3>General</h3>
                        <section>
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Birth history</label>
                                    <x-input-text name="birth_history"  placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Before birth</label>
                                    <x-input-text name="before_birth" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Pregnancy</label>
                                    <x-input-text name="pregnancy" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">During Birth</label>
                                    <x-input-text name="during_birth"  placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Delivery</label>
                                    <x-input-text name="delivery" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">After Birth</label>
                                    <x-input-text name="after_birth" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">History</label>
                                    <x-input-text name="history"  placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <x-input-radio-or-check  label="Medication Treatment" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- row end -->
                                <x-input-radio-or-check  label="Any present medicines" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label class="form-label">Home equipment</label>
                                    <x-input-text name="home_equipment" placeholder=""></x-input-text>
                                </div>
                                <!-- end row -->

                        </section>

                        <!-- Bank Details -->
                        <h3>Visual Perception</h3>
                        <section>
                            <div>
                                <x-input-radio-or-check  label="Visual Discrimination" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check  label="Visual Memory" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check  label="Visual Figure ground" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check label="Visual Spatial" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check  label="Oral Motor" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check  label="Sucking" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check label="Drooling" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check  label="Swollen" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check  label="Chewing" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check label="Choking" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check  label="Drinking" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                            </div>
                        </section>

                        <!-- Bank Details -->
                        <h3>Activities of Daily living</h3>
                        <section>
                            <div>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Eating" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Brushing teeth" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Dressing" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Toilet" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Bathing" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Does The Child attend school?"
                                        :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">If Yes, Enter school
                                            name</label>
                                        <x-input-text name="if_yes" placeholder=""></x-input-text>
                                    </div>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Leisure/ Play: activities of interest."
                                        :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->

                            </div>
                        </section>

                        <!-- Bank Details -->
                        <h3>Strength</h3>
                        <section>
                            <div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Please explain strength
                                            area</label>
                                        <x-input-text name="please_explain " placeholder=""></x-input-text>
                                    </div>
                            </div>
                        </section>
                        <!-- Bank Details -->
                        <h3> Functional Gross Motor</h3>
                        <section>
                            <div>
                                    <x-input-radio-or-check  label="Sitting" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Crawling" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Standing" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Walking" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Jumping" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Running" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Ball skill" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                            </div>
                        </section>
                        <!-- Bank Details -->
                        <h3>Transitional Movements</h3>
                        <section>
                            <div>
                                    <x-input-radio-or-check  label="Prone to Supine" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Continuous Rolling" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Lying to Sit" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Box sit to stand" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Jumping" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Cross sit to stand" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Kneeling to stand:" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                            </div>
                        </section>
                        <!-- Bank Details -->
                        <h3>Fine motor Skill</h3>
                        <section>
                            <div>
                                    <x-input-radio-or-check  label="Dominance" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Left</label>
                                        <x-input-text name="left" placeholder=""></x-input-text>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Right</label>
                                        <x-input-text name="right" placeholder=""></x-input-text>
                                    </div>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Reach" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check label="Release" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Symmetrical use" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Bilateral use" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="In-hand manipulation" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Eye hand co-ordination" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Transfer" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Writing skill" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                            </div>
                        </section>
                        <!-- Bank Details -->
                        <h3>Automatic Reaction</h3>
                        <section>
                            <div>
                                <!-- end row -->
                                <x-input-radio-or-check  label="Protective reactions" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <x-input-radio-or-check  label="Equilibrium reaction" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                            </div>
                        </section>
                        <!-- Bank Details -->
                        <h3>Sensory Skill (Normal /Hypo response)</h3>
                        <section>
                            <div>

                                <x-input-radio-or-check  label="Tactile" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <x-input-radio-or-check label="Auditory" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check  label="Vestibular" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check  label="Proprioceptive" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->

                            </div>
                        </section>
                        <!-- Bank Details -->
                        <h3>Cognitive Skills</h3>
                        <section>
                            <div>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Attention" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Problem Solving" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Able to Follow instruction"
                                        :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Memory" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Perceptual Motor" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Body Awareness" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Body Co-ordination" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check label="Bilateral integration" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                            </div>
                        </section>
                        <h3> Treatment</h3>
                        <section>
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Problem List</label>
                                    <x-input-text name="problem_list" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Treatment plan</label>
                                    <x-input-text name="Treatment_plan" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Treatment plan
                                        implementation details</label>
                                    <x-input-text name="Treatment_plan_implementation" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Progress</label>
                                    <x-input-text name="progress" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                        </section>
                        <h3>Signature</h3>
                        <section>

                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Therapist Signature</label>
                                    <x-input-text name="signature" type="file" placeholder=""></x-input-text>
                                </div>
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Designation and
                                        organizations name</label>
                                    <x-input-text name="designation" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                        </section>
                        <!-- Bank Details -->
                        <h3>Muscle Power</h3>
                        <section>
                            <div>
                                    <!-- end row -->
                                    <x-input-radio-or-check label="Upper limbs" :records="$physiotherapyConstants::$limbs">
                                    </x-input-radio-or-check>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Left</label>
                                        <x-input-text name="left" placeholder=""></x-input-text>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Right</label>
                                        <x-input-text name="right" placeholder=""></x-input-text>
                                    </div>
                                    <!-- end row -->
                                    <x-input-radio-or-check label="Lower Limbs" :records="$physiotherapyConstants::$limbs">
                                    </x-input-radio-or-check>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Left</label>
                                        <x-input-text name="left" placeholder=""></x-input-text>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Right</label>
                                        <x-input-text name="right" placeholder=""></x-input-text>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Trunk/neck</label>
                                        <x-input-text name="trank" placeholder=""></x-input-text>
                                    </div>
                                    <!-- end row -->
                            </div>
                        </section>
                        <!-- Bank Details -->
                        <h3>Muscle Tone</h3>
                        <section>
                            <div>
                            <!-- end row -->
                                    <x-input-radio-or-check  label="Upper limbs" :records="$physiotherapyConstants::$limbsTone">
                                    </x-input-radio-or-check>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Left</label>
                                        <x-input-text name="left" placeholder=""></x-input-text>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Right</label>
                                        <x-input-text name="right" placeholder=""></x-input-text>
                                    </div>
                                    <!-- end row -->
                                    <x-input-radio-or-check  label="Lower Limbs" :records="$physiotherapyConstants::$limbsTone">
                                    </x-input-radio-or-check>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Left</label>
                                        <x-input-text name="left" placeholder=""></x-input-text>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Right</label>
                                        <x-input-text name="right" placeholder=""></x-input-text>
                                    </div>
                                    <!-- end row -->
                            </div>
                        </section>
                        <h3>Behavior</h3>
                        <section>
                                <!-- end row -->
                                <x-input-radio-or-check label="Independence" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check label="Social interaction" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check label="Social Communication" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check label="Interpersonal" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->

                        </section>
                        <h3>Domain Area</h3>
                        <section>
                                <!-- end row -->
                                <x-input-radio-or-check name="physical_gross_motor_fine_motor" label="Physical (Gross motor/ Fine motor)"
                                    :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check  label="Cognitive" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">If yes write below</label>
                                    <x-input-text name="if_yes" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Behavioral</label>
                                    <x-input-text name="behavioral" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <!-- end row -->
                                <x-input-radio-or-check   label="Communication" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <x-input-radio-or-check  label="Social" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <x-input-radio-or-check  label="Emotional" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                        </section>
                    </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
@endsection
