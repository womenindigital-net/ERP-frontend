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
                                                        <li class="w-100"><a href="#PERSONAL" data-toggle="tab">Visual
                                                                Perception</a></li>
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
                                                        <li class="w-100"><a href="#Be" data-toggle="tab">Behavior</a>
                                                        </li>
                                                        <li class="w-100"><a href="#DA" data-toggle="tab">Domain
                                                                Area</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9">
                                                    <div class="tab-content apply-view-only">
                                                        <div class="tab-pane" id="Social_Communication">

                                                            <section>
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-firstname-input">Collection
                                                                                    Date:</label>
                                                                                <x-input-text value="{{ $collection_date }}"
                                                                                    name="collection_date"
                                                                                    placeholder="date" type="date">
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-lastname-input">Teacher:</label>
                                                                                <x-input-select :selected="$teacher_id"
                                                                                    name="teacher_id" :records="$teachers" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-phoneno-input">Candidate
                                                                                    ID:</label>
                                                                                <x-input-select :selected="$candidate_id"
                                                                                    name="candidate_id" :records="$students" />
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
                                                                        <x-input-text
                                                                            value="{{ $general->birth_history ?? '' }}"
                                                                            name="birth_history" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Before birth</label>
                                                                        <x-input-text
                                                                            value="{{ $general->before_birth ?? '' }}"
                                                                            name="before_birth" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Pregnancy</label>
                                                                        <x-input-text
                                                                            value="{{ $general->pregnancy ?? '' }}"
                                                                            name="pregnancy" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">During Birth</label>
                                                                        <x-input-text
                                                                            value="{{ $general->during_birth ?? '' }}"
                                                                            name="during_birth" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Delivery</label>
                                                                        <x-input-text
                                                                            value="{{ $general->delivery ?? '' }}"
                                                                            name="delivery" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">After Birth</label>
                                                                        <x-input-text
                                                                            value="{{ $general->after_birth ?? '' }}"
                                                                            name="after_birth" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">History</label>
                                                                        <x-input-text value="{{ $general->history ?? '' }}"
                                                                            name="history" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check :checked="$general->medication_treatment ?? ''"
                                                                        label="Medication Treatment" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check :checked="$general->any_present_medicines ?? ''"
                                                                        label="Any present medicines" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Home equipment</label>
                                                                        <x-input-text
                                                                            value="{{ $general->home_equipment ?? '' }}"
                                                                            name="home_equipment" placeholder="">
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
                                                                        <x-input-radio-or-check :checked="$visual_perception->visual_discrimination ??
                                                                            ''"
                                                                            label="Visual Discrimination"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$visual_perception->visual_memory ??
                                                                            ''"
                                                                            label="Visual Memory" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$visual_perception->visual_figure_ground ??
                                                                            ''"
                                                                            label="Visual Figure ground"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$visual_perception->visual_spatial ??
                                                                            ''"
                                                                            label="Visual Spatial" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$visual_perception->oral_motor ?? ''"
                                                                            label="Oral Motor" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$visual_perception->sucking ?? ''"
                                                                            label="Sucking" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$visual_perception->drooling ?? ''"
                                                                            label="Drooling" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$visual_perception->swollen ?? ''"
                                                                            label="Swollen" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$visual_perception->chewing ?? ''"
                                                                            label="Chewing" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$visual_perception->choking ?? ''"
                                                                            label="Choking" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$visual_perception->drinking ?? ''"
                                                                            label="Drinking" :records="$constants::$yesNoEn">
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
                                                                        <x-input-radio-or-check :checked="$activities_of_daily_living->eating ??
                                                                            ''"
                                                                            label="Eating" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$activities_of_daily_living->brushing_teeth ??
                                                                            ''"
                                                                            label="Brushing teeth" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$activities_of_daily_living->dressing ??
                                                                            ''"
                                                                            label="Dressing" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$activities_of_daily_living->toilet ??
                                                                            ''"
                                                                            label="Toilet" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$activities_of_daily_living->bathing ??
                                                                            ''"
                                                                            label="Bathing" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$activities_of_daily_living->does_the_child_attend_school ??
                                                                            ''"
                                                                            label="Does The Child attend school?"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">If Yes, Enter school
                                                                                name</label>
                                                                            <x-input-text
                                                                                value="{{ $activities_of_daily_living->enter_your_name ?? '' }}"
                                                                                name="enter_your_name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$activities_of_daily_living->leisure_or_play_activities_of_interest ??
                                                                            ''"
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
                                                                            <x-input-text
                                                                                value="{{ $strength->please_explain_strength_area ?? '' }}"
                                                                                name="please_explain_strength_area"
                                                                                placeholder="">
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
                                                                        <x-input-radio-or-check :checked="$functional_gross_motor->sitting ??
                                                                            ''"
                                                                            label="Sitting" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$functional_gross_motor->crawling ??
                                                                            ''"
                                                                            label="Crawling" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$functional_gross_motor->standing ??
                                                                            ''"
                                                                            label="Standing" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$functional_gross_motor->walking ??
                                                                            ''"
                                                                            label="Walking" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$functional_gross_motor->jumping ??
                                                                            ''"
                                                                            label="Jumping" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$functional_gross_motor->running ??
                                                                            ''"
                                                                            label="Running" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$functional_gross_motor->ball_skill ??
                                                                            ''"
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
                                                                        <x-input-radio-or-check
                                                                            label="Rolling supine to prone"
                                                                            :records="$constants::$yesNoEn" :checked="$transitional_movements->rolling_supine_to_prone ??''" >
                                                                        </x-input-radio-or-check>
                                                                        <x-input-radio-or-check :checked="$transitional_movements->prone_to_supine ??
                                                                            ''"
                                                                            label="Prone to Supine" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$transitional_movements->continuous_rolling ??
                                                                            ''"
                                                                            label="Continuous Rolling" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$transitional_movements->lying_to_sit ??
                                                                            ''"
                                                                            label="Lying to Sit" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$transitional_movements->box_sit_to_stand ??
                                                                            ''"
                                                                            label="Box sit to stand" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$transitional_movements->cross_sit_to_stand ??
                                                                            ''"
                                                                            label="Cross sit to stand" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$transitional_movements->kneeling_to_stand ??
                                                                            ''"
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
                                                                        <x-input-radio-or-check :checked="$fine_motor_skill->dominance ?? ''"
                                                                            label="Dominance" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text
                                                                                value="{{ $fine_motor_skill->left ?? '' }}"
                                                                                name="left" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text
                                                                                value="{{ $fine_motor_skill->right ?? '' }}"
                                                                                name="right" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$fine_motor_skill->reach ?? ''"
                                                                            label="Reach" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$fine_motor_skill->release ?? ''"
                                                                            label="Release" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$fine_motor_skill->symmetrical_use ??
                                                                            ''"
                                                                            label="Symmetrical use" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$fine_motor_skill->bilateral_use ??
                                                                            ''"
                                                                            label="Bilateral use" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$fine_motor_skill->in_hand_manipulation ??
                                                                            ''"
                                                                            label="In-hand manipulation"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$fine_motor_skill->eye_hand_co_ordination ??
                                                                            ''"
                                                                            label="Eye hand co-ordination"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$fine_motor_skill->transfer ?? ''"
                                                                            label="Transfer" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$fine_motor_skill->writing_skill ??
                                                                            ''"
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
                                                                        <x-input-radio-or-check :checked="$automatic_reaction->protective_reactions ??
                                                                            ''"
                                                                            label="Protective reactions"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$automatic_reaction->equilibrium_reaction ??
                                                                            ''"
                                                                            label="Equilibrium reaction"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_B">
                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$sensory_skill_normal_hypo_response->tactile ??
                                                                            ''"
                                                                            label="Tactile" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$sensory_skill_normal_hypo_response->auditory ??
                                                                            ''"
                                                                            label="Auditory" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$sensory_skill_normal_hypo_response->vestibular ??
                                                                            ''"
                                                                            label="Vestibular" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$sensory_skill_normal_hypo_response->proprioceptive ??
                                                                            ''"
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
                                                                        <x-input-radio-or-check :checked="$cognitive_skills->attention ?? ''"
                                                                            label="Attention" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$cognitive_skills->problem_solving ??
                                                                            ''"
                                                                            label="Problem Solving" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$cognitive_skills->able_to_follow_instruction ??
                                                                            ''"
                                                                            label="Able to Follow instruction"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$cognitive_skills->memory ?? ''"
                                                                            label="Memory" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$cognitive_skills->perceptual_motor ??
                                                                            ''"
                                                                            label="Perceptual Motor" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$cognitive_skills->body_awareness ??
                                                                            ''"
                                                                            label="Body Awareness" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$cognitive_skills->body_co_ordination ??
                                                                            ''"
                                                                            label="Body Co-ordination" :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

                                                                        <x-input-radio-or-check :checked="$cognitive_skills->bilateral_integration ??
                                                                            ''"
                                                                            label="Bilateral integration"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>

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
                                                                        <x-input-text
                                                                            value="{{ $treatment->problam_list ?? '' }}"
                                                                            name="problam_list" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Treatment plan</label>
                                                                        <x-input-text
                                                                            value="{{ $treatment->treatment_plan ?? '' }}"
                                                                            name="treatment_plan" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Treatment plan
                                                                            implementation details</label>
                                                                        <x-input-text
                                                                            value="{{ $treatment->treatment_plann ?? '' }}"
                                                                            name="treatment_plann" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Progress</label>
                                                                        <x-input-text
                                                                            value="{{ $treatment->progress ?? '' }}"
                                                                            name="progress" placeholder="">
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
                                                                        <x-input-text
                                                                            value="{{ $signature->therapist_signature ?? '' }}"
                                                                            name="therapist_signature" type="file"
                                                                            placeholder=""></x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Designation and
                                                                            organizations name</label>
                                                                        <x-input-text
                                                                            value="{{ $signature->designation ?? '' }}"
                                                                            name="designation" placeholder="">
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
                                                                        <x-input-radio-or-check :checked="$muscle_power->musical_power_upper_limbs ?? ''"
                                                                            label="Upper limbs" :records="$physiotherapyConstants::$limbs">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text
                                                                                value="{{ $muscle_power->musical_power_upper_left ?? '' }}"
                                                                                name="left" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text
                                                                                value="{{ $muscle_power->musical_power_upper_right ?? '' }}"
                                                                                name="right">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$muscle_power->musicle_power_lower_limbs ?? ''"
                                                                            label="Lower Limbs" :records="$physiotherapyConstants::$limbs">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text
                                                                                value="{{ $muscle_power->musicle_power_lower_left ?? '' }}"
                                                                                name="left" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text
                                                                                value="{{ $muscle_power->musicle_power_lower_right ?? '' }}"
                                                                                name="right" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Trunk/neck</label>
                                                                            <x-input-text
                                                                                value="{{ $muscle_power->trunk_and_neck ?? '' }}"
                                                                                name="trunk" placeholder="">
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
                                                                        <x-input-radio-or-check :checked="$muscle_tone->musicle_tone_upper_limbs ?? ''"
                                                                            label="Upper limbs" :records="$physiotherapyConstants::$limbsTone">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text
                                                                                value="{{ $muscle_tone->musicle_tone_upper_left ?? '' }}"
                                                                                name="left" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text
                                                                                value="{{ $muscle_tone->musicle_tone_upper_right ?? '' }}"
                                                                                name="right" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check :checked="$muscle_tone->musicle_tone_lower_limbs ?? ''"
                                                                            label="Lower Limbs" :records="$physiotherapyConstants::$limbsTone">
                                                                        </x-input-radio-or-check>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Left</label>
                                                                            <x-input-text
                                                                                value="{{ $muscle_tone->musicle_tone_lower_left ?? '' }}"
                                                                                name="left" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Right</label>
                                                                            <x-input-text
                                                                                value="{{ $muscle_tone->musicle_tone_lower_right ?? '' }}"
                                                                                name="right" placeholder="">
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
                                                                    <x-input-radio-or-check :checked="$behavior->independence ?? ''"
                                                                        label="Independence" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$behavior->social_interaction ?? ''"
                                                                        label="Social interaction" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$behavior->social_communication ?? ''"
                                                                        label="Social Communication" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$behavior->interpersonal ?? ''"
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
                                                                    <x-input-radio-or-check :checked="$domain_area->physical_Gross_motor_Fine_motor ??
                                                                        ''"
                                                                        label="Physical (Gross motor/ Fine motor)"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$domain_area->cognitive ?? ''"
                                                                        label="Cognitive" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">If yes write
                                                                            below</label>
                                                                        <x-input-text
                                                                            value="{{ $domain_area->if_yes ?? '' }}"
                                                                            name="if_yes" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Behavioral</label>
                                                                        <x-input-text
                                                                            value="{{ $domain_area->behavioral ?? '' }}"
                                                                            name="behavioral" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$domain_area->communication ?? ''"
                                                                        label="Communication" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$domain_area->social ?? ''"
                                                                        label="Social" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$domain_area->emotional ?? ''"
                                                                        label="Emotional" :records="$constants::$yesNoEn">
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
                                                            <input type="submit"
                                                                class='btn btn-finish btn-fill btn-danger'
                                                                wire:click='save' value='Finish' />
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div> <!-- wizard container -->
                                </div>
                            </div> <!-- end col -->
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
    <!-- jquery step -->
    <script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>
    <!-- form wizard init -->
    <script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection
