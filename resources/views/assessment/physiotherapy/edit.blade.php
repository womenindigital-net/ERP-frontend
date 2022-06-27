@extends('layouts.master')

@section('title')
    @lang('translation.Starter_Page')
@endsection

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
                                <span class="d-none d-sm-block"> List</span>
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
                                                <form>
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="Social_Communication">

                                                            <section>
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-firstname-input">Collection
                                                                                    Date:</label>
                                                                                <x-input-text name="name" placeholder="">
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
                                                                </form>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Pragmatic_Objective">

                                                            <section>
                                                                <form>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Birth history</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Before birth</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Pregnancy</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">During Birth</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Delivery</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">After Birth</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">History</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check name="name"
                                                                        label="Medication Treatment" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check name="name"
                                                                        label="Any present medicines" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Home equipment</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- end row -->
                                                                </form>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="PERSONAL">

                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Visual Discrimination" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Visual Memory" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Visual Figure ground" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Visual Spatial" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Oral Motor" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Sucking"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Drooling"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Swollen"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Chewing"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Choking"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Drinking"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Topic_Maintenance">

                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Eating"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Brushing teeth" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Dressing"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Toilet"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Bathing"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Does The Child attend school?"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">If Yes, Enter school
                                                                                name</label>
                                                                            <x-input-text name="name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Leisure/ Play: activities of interest."
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                    </form>
                                                                </div>
                                                            </section>

                                                        </div>
                                                        <div class="tab-pane" id="Conversational_Structure">

                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!-- end row -->
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Please explain
                                                                                strength area</label>
                                                                            <x-input-text name="name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Word_Structure">

                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Sitting"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Crawling"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Standing"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Walking"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Jumping"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Running"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Ball skill" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Manner_Effectiveness">

                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Prone to Supine" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Continuous Rolling" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Lying to Sit" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Box sit to stand" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Jumping"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Cross sit to stand" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Kneeling to stand:" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Repair_Structures">

                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Dominance" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text name="name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text name="name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Reach"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Release"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Symmetrical use" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Bilateral use" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="In-hand manipulation" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Eye hand co-ordination"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Transfer"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Writing skill" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent">

                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Protective reactions" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Equilibrium reaction" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_B">

                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Tactile"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Auditory"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Vestibular" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Proprioceptive" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->

                                                                        <!-- end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_C">

                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Attention" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Problem Solving" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Able to Follow instruction"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name" label="Memory"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Perceptual Motor" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Body Awareness" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Body Co-ordination" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Bilateral integration"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                    </form>
                                                                </div>
                                                            </section>

                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_D">

                                                            <section>
                                                                <form>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Problem List</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Treatment plan</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Treatment plan
                                                                            implementation details</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Progress</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <!-- end row -->
                                                                </form>
                                                            </section>

                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_E">
                                                            <h3>Signature</h3>
                                                            <section>
                                                                <form>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Therapist
                                                                            Signature</label>
                                                                        <x-input-text name="name" type="file"
                                                                            placeholder=""></x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Designation and
                                                                            organizations name</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <!-- end row -->
                                                                </form>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="mp">
                                                            <h3>Muscle Power</h3>
                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Upper limbs" :records="$physiotherapyConstants::$limbs">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text name="name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text name="name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Lower Limbs" :records="$physiotherapyConstants::$limbs">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text name="name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text name="name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Trunk/neck</label>
                                                                            <x-input-text name="name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="mt">
                                                            <h3>Muscle Tone</h3>
                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Upper limbs" :records="$physiotherapyConstants::$limbsTone">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text name="name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text name="name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Lower Limbs" :records="$physiotherapyConstants::$limbsTone">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text name="name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text name="name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>


                                                                        <!-- end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Be">
                                                            <section>
                                                                <form>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="name" label="Independence"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="name"
                                                                        label="Social interaction" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="name"
                                                                        label="Social Communication" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="name"
                                                                        label="Interpersonal" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                </form>
                                                            </section>

                                                        </div>
                                                        <div class="tab-pane" id="DA">
                                                            <section>
                                                                <form>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="physical_Gross motor_Fine motor"
                                                                        label="Physical (Gross motor/ Fine motor)"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="name" label="Cognitive"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">If yes write
                                                                            below</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Behavioral</label>
                                                                        <x-input-text name="name" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="name"
                                                                        label="Communication" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="name" label="Social"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="name" label="Emotional"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
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
                                        <input type="search" class="form-control form-control-sm" placeholder="Search">
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
                    <div id="vertical-example" class="vertical-wizard">
                        <!-- Seller Details -->
                        <h3>Sensory Checklist</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input">Collection Date:</label>
                                            <x-input-text name="name" placeholder=""></x-input-text>
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
                            </form>
                        </section>

                        <!-- Company Document -->
                        <h3>General</h3>
                        <section>
                            <form>
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Birth history</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Before birth</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Pregnancy</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">During Birth</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Delivery</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">After Birth</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">History</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <x-input-radio-or-check name="name" label="Medication Treatment" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- row end -->
                                <x-input-radio-or-check name="name" label="Any present medicines" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label class="form-label">Home equipment</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- end row -->
                            </form>
                        </section>

                        <!-- Bank Details -->
                        <h3>Visual Perception</h3>
                        <section>
                            <div>
                                <form>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Visual Discrimination" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Visual Memory" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Visual Figure ground" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Visual Spatial" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Oral Motor" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Sucking" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Drooling" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Swollen" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Chewing" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Choking" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Drinking" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                </form>
                            </div>
                        </section>

                        <!-- Bank Details -->
                        <h3>Activities of Daily living</h3>
                        <section>
                            <div>
                                <form>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Eating" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Brushing teeth" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Dressing" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Toilet" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Bathing" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Does The Child attend school?"
                                        :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">If Yes, Enter school
                                            name</label>
                                        <x-input-text name="name" placeholder=""></x-input-text>
                                    </div>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Leisure/ Play: activities of interest."
                                        :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                </form>
                            </div>
                        </section>


                        <!-- Bank Details -->
                        <h3>Strength</h3>
                        <section>
                            <div>
                                <form>
                                    <!-- end row -->
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Please explain strength
                                            area</label>
                                        <x-input-text name="name" placeholder=""></x-input-text>
                                    </div>
                                    <!-- end row -->
                                </form>
                            </div>
                        </section>
                        <!-- Bank Details -->
                        <h3> Functional Gross Motor</h3>
                        <section>
                            <div>
                                <form>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Sitting" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Crawling" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Standing" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Walking" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Jumping" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Running" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Ball skill" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                </form>
                            </div>
                        </section>
                        <!-- Bank Details -->
                        <h3>Transitional Movements</h3>
                        <section>
                            <div>
                                <form>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Prone to Supine" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Continuous Rolling" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Lying to Sit" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Box sit to stand" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Jumping" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Cross sit to stand" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Kneeling to stand:" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                </form>
                            </div>
                        </section>
                        <!-- Bank Details -->
                        <h3>Fine motor Skill</h3>
                        <section>
                            <div>
                                <form>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Dominance" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Left</label>
                                        <x-input-text name="name" placeholder=""></x-input-text>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Right</label>
                                        <x-input-text name="name" placeholder=""></x-input-text>
                                    </div>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Reach" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Release" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Symmetrical use" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Bilateral use" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="In-hand manipulation" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Eye hand co-ordination" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Transfer" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Writing skill" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                </form>
                            </div>
                        </section>
                        <!-- Bank Details -->
                        <h3>Automatic Reaction</h3>
                        <section>
                            <div>
                                <form>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Protective reactions" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Equilibrium reaction" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                </form>
                            </div>
                        </section>
                        <!-- Bank Details -->
                        <h3>Sensory Skill (Normal /Hypo response)</h3>
                        <section>
                            <div>
                                <form>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Tactile" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Auditory" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Vestibular" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Proprioceptive" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->

                                    <!-- end row -->
                                </form>
                            </div>
                        </section>
                        <!-- Bank Details -->
                        <h3>Cognitive Skills</h3>
                        <section>
                            <div>
                                <form>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Attention" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Problem Solving" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Able to Follow instruction"
                                        :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Memory" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Perceptual Motor" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Body Awareness" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Body Co-ordination" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Bilateral integration" :records="$constants::$yesNoEn">
                                    </x-input-radio-or-check>
                                    <!-- end row -->
                                    <!-- end row -->
                                </form>
                            </div>
                        </section>

                        <h3> Treatment</h3>
                        <section>
                            <form>
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Problem List</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Treatment plan</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Treatment plan
                                        implementation details</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Progress</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <!-- end row -->
                            </form>
                        </section>

                        <h3>Signature</h3>
                        <section>
                            <form>
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Therapist Signature</label>
                                    <x-input-text name="name" type="file" placeholder=""></x-input-text>
                                </div>
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Designation and
                                        organizations name</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <!-- end row -->
                            </form>
                        </section>

                        <!-- Bank Details -->
                        <h3>Muscle Power</h3>
                        <section>
                            <div>
                                <form>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Upper limbs" :records="$physiotherapyConstants::$limbs">
                                    </x-input-radio-or-check>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Left</label>
                                        <x-input-text name="name" placeholder=""></x-input-text>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Right</label>
                                        <x-input-text name="name" placeholder=""></x-input-text>
                                    </div>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Lower Limbs" :records="$physiotherapyConstants::$limbs">
                                    </x-input-radio-or-check>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Left</label>
                                        <x-input-text name="name" placeholder=""></x-input-text>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Right</label>
                                        <x-input-text name="name" placeholder=""></x-input-text>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Trunk/neck</label>
                                        <x-input-text name="name" placeholder=""></x-input-text>
                                    </div>

                                    <!-- end row -->
                                </form>
                            </div>
                        </section>
                        <!-- Bank Details -->
                        <h3>Muscle Tone</h3>
                        <section>
                            <div>
                                <form>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Upper limbs" :records="$physiotherapyConstants::$limbsTone">
                                    </x-input-radio-or-check>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Left</label>
                                        <x-input-text name="name" placeholder=""></x-input-text>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Right</label>
                                        <x-input-text name="name" placeholder=""></x-input-text>
                                    </div>
                                    <!-- end row -->
                                    <x-input-radio-or-check name="name" label="Lower Limbs" :records="$physiotherapyConstants::$limbsTone">
                                    </x-input-radio-or-check>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Left</label>
                                        <x-input-text name="name" placeholder=""></x-input-text>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Right</label>
                                        <x-input-text name="name" placeholder=""></x-input-text>
                                    </div>


                                    <!-- end row -->
                                </form>
                            </div>
                        </section>



                        <h3>Behavior</h3>
                        <section>
                            <form>
                                <!-- end row -->
                                <x-input-radio-or-check name="name" label="Independence" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check name="name" label="Social interaction" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check name="name" label="Social Communication" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check name="name" label="Interpersonal" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                            </form>
                        </section>



                        <h3>Domain Area</h3>
                        <section>
                            <form>
                                <!-- end row -->
                                <x-input-radio-or-check name="name" label="Physical (Gross motor/ Fine motor)"
                                    :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <!-- end row -->
                                <x-input-radio-or-check name="name" label="Cognitive" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">If yes write below</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Behavioral</label>
                                    <x-input-text name="name" placeholder=""></x-input-text>
                                </div>
                                <!-- row end -->
                                <!-- end row -->
                                <x-input-radio-or-check name="name" label="Communication" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <x-input-radio-or-check name="name" label="Social" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
                                <!-- end row -->
                                <x-input-radio-or-check name="name" label="Emotional" :records="$constants::$yesNoEn">
                                </x-input-radio-or-check>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>

    <!-- jquery step -->
    <script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

    <!-- form wizard init -->
    <script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection
