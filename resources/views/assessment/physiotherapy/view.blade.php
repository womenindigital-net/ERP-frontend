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
                                                        <li class="w-100"><a href="#sensory_checklist"
                                                                data-toggle="tab">Sensory Checklist</a></li>
                                                        <li class="w-100"><a href="#general" data-toggle="tab">General</a>
                                                        </li>
                                                        <li class="w-100"><a href="#visual_perception"
                                                                data-toggle="tab">Visual
                                                                Perception</a></li>
                                                        <li class="w-100"><a href="#activities_of_daily_living"
                                                                data-toggle="tab">Activities of Daily living</a></li>
                                                        <li class="w-100"><a href="#strength"
                                                                data-toggle="tab">Strength</a></li>
                                                        <li class="w-100"><a href="#functional_gross_motor"
                                                                data-toggle="tab">Functional Gross Motor</a></li>
                                                        <li class="w-100"><a href="#transitional_movements"
                                                                data-toggle="tab">Transitional Movements</a></li>
                                                        <li class="w-100"><a href="#fine_motor_skill"
                                                                data-toggle="tab">Fine motor Skill</a></li>
                                                        <li class="w-100"><a href="#automatic_reaction"
                                                                data-toggle="tab">Automatic Reaction</a>
                                                        </li>
                                                        <li class="w-100"><a href="#sensory_skill"
                                                                data-toggle="tab">Sensory Skill (Normal /Hypo response)</a>
                                                        </li>
                                                        <li class="w-100"><a href="#cognitive_skills"
                                                                data-toggle="tab">Cognitive Skills</a></li>
                                                        <li class="w-100"><a href="#treatment"
                                                                data-toggle="tab">Treatment</a></li>
                                                        <li class="w-100"><a href="#signature"
                                                                data-toggle="tab">Signature</a></li>
                                                        <li class="w-100"><a href="#muscle_power" data-toggle="tab">Muscle
                                                                Power</a></li>
                                                        <li class="w-100"><a href="#muscle_tone" data-toggle="tab">Muscle
                                                                tone</a></li>
                                                        <li class="w-100"><a href="#behavior"
                                                                data-toggle="tab">Behavior</a>
                                                        </li>
                                                        <li class="w-100"><a href="#domain_area" data-toggle="tab">Domain
                                                                Area</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9">
                                                <form>
                                                    <div class="tab-content apply-view-only">
                                                        <div class="tab-pane" id="sensory_checklist">
                                                            <section>
                                                                <div class="row">
                                                                    <div class="col-lg-4 pull-left pb-2">
                                                                        <label class="p-2">Collection
                                                                            Date:</label>
                                                                        <x-input-text name="collection_date" type="date"
                                                                            placeholder="mm/dd/yyyy"
                                                                            value="{{ $collection_date }}">
                                                                        </x-input-text>
                                                                    </div>

                                                                    <div class="col-lg-4 pull-left pb-2">
                                                                        <label class="p-2">Teacher: <span
                                                                                class="text-danger text-bold">*</span></label>
                                                                        <x-input-select name="teacher_id" :records="$teachers"
                                                                            :selected="$teacher_id">
                                                                        </x-input-select>
                                                                    </div>

                                                                    <div class="col-lg-4 pull-left pb-2">
                                                                        <label class="p-2">Candidate ID:
                                                                            <span
                                                                                class="text-danger text-bold">*</span></label>
                                                                        <x-input-select name="student_id" :records="$students"
                                                                            :selected="$candidate_id">
                                                                        </x-input-select>

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
                                                        <div class="tab-pane" id="general">
                                                            <section>

                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Birth history</label>
                                                                    <x-input-text :checked="$general->birth_history ?? ''" 
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Before birth</label>
                                                                    <x-input-text
                                                                        value="{{ $general->before_birth ?? '' }}"
                                                                         placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Pregnancy</label>
                                                                    <x-input-text 
                                                                    value="{{ $general->pregnancy ?? '' }}"
                                                                    
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">During Birth</label>
                                                                    <x-input-text 
                                                                    value="{{ $general->during_birth ?? '' }}"
                                                                   
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Delivery</label>
                                                                    <x-input-text 
                                                                         value="{{ $general->delivery ?? '' }}"
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">After Birth</label>
                                                                    <x-input-text 
                                                                    value="{{ $general->after_birth ?? '' }}"
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">History</label>
                                                                    <x-input-text 
                                                                     value="{{ $general->history ?? '' }}"
                                                                        placeholder="">
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
                                                                     
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- end row -->

                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="visual_perception">
                                                            <section>
                                                                <div>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$visual_perception->visual_discrimination ??
                                                                        ''"
                                                                         label="Visual Discrimination"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$visual_perception->visual_memory ?? ''"
                                                                         label="Visual Memory"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$visual_perception->visual_figure_ground ??
                                                                        ''"
                                                                         label="Visual Figure ground"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$visual_perception->visual_spatial ?? ''"
                                                                         label="Visual Spatial"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$visual_perception->oral_motor ?? ''"
                                                                         label="Oral Motor"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$visual_perception->sucking ?? ''"
                                                                         label="Sucking" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$visual_perception->drooling ?? ''"
                                                                         label="Drooling"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$visual_perception->swollen ?? ''"
                                                                         label="Swollen" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$visual_perception->chewing ?? ''"
                                                                         label="Chewing" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$visual_perception->choking ?? ''"
                                                                         label="Choking" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$visual_perception->drinking ?? ''"
                                                                         label="Drinking"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="activities_of_daily_living">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$activities_of_daily_living->eating ??
                                                                        ''"
                                                                         label="Eating" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$activities_of_daily_living->brushing_teeth ??
                                                                        ''"
                                                                         label="Brushing teeth"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$activities_of_daily_living->dressing ??
                                                                        ''"
                                                                         label="Dressing"
                                                                        :records="$constants::$yesNoEn">
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
                                                                            value="{{ $activities_of_daily_living->if_yes_enter_school_name ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$activities_of_daily_living->leisure_or_play_activities_of_interest ??
                                                                        ''"
                                                                        
                                                                        label="Leisure/ Play: activities of interest."
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="strength">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Please explain
                                                                            strength area</label>
                                                                        <x-input-text  
                                                                             value="{{ $strength->please_explain_strength_area ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="functional_gross_motor">
                                                            <section>
                                                                <div>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$functional_gross_motor->sitting ?? ''"
                                                                         label="Sitting" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$functional_gross_motor->crawling ?? ''"
                                                                         label="Crawling"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$functional_gross_motor->standing ?? ''"
                                                                         label="Standing"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$functional_gross_motor->walking ?? ''"
                                                                         label="Walking" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$functional_gross_motor->jumping ?? ''"
                                                                         label="Jumping" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$functional_gross_motor->running ?? ''"
                                                                         label="Running" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$functional_gross_motor->ball_skill ??
                                                                        ''"
                                                                         label="Ball skill"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="transitional_movements">
                                                            <section>
                                                                <div>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$transitional_movements->prone_to_supine ??
                                                                        ''"
                                                                         label="Prone to Supine"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$transitional_movements->continuous_rolling ??
                                                                        ''"
                                                                         label="Continuous Rolling"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$transitional_movements->lying_to_sit ??
                                                                        ''"
                                                                         label="Lying to Sit"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$transitional_movements->box_sit_to_stand ??
                                                                        ''"
                                                                         label="Box sit to stand"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$transitional_movements->jumping ?? ''"
                                                                         label="Jumping" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$transitional_movements->cross_sit_to_stand ??
                                                                        ''"
                                                                         label="Cross sit to stand"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$transitional_movements->kneeling_to_stand ??
                                                                        ''"
                                                                         label="Kneeling to stand:"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="fine_motor_skill">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$fine_motor_skill->dominance ?? ''"
                                                                         label="Dominance"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Left</label>
                                                                        <x-input-text :checked="$fine_motor_skill->left ?? ''" 
                                                                            value="{{ $fine_motor_skill->left ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Right</label>
                                                                        <x-input-text :checked="$fine_motor_skill->right ?? ''"
                                                                            value="{{ $fine_motor_skill->right ?? '' }}" 
                                                                            placeholder="">
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
                                                                    <x-input-radio-or-check :checked="$fine_motor_skill->symmetrical_use ?? ''"
                                                                         label="Symmetrical use"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$fine_motor_skill->bilateral_use ?? ''"
                                                                         label="Bilateral use"
                                                                        :records="$constants::$yesNoEn">
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
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$fine_motor_skill->transfer ?? ''"
                                                                         label="Transfer"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$fine_motor_skill->writing_skill ?? ''"
                                                                         label="Writing skill"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="automatic_reaction">
                                                            <section>
                                                                <div>

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
                                                                    <!-- end row -->
                                                                    <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="sensory_skill">
                                                            <section>
                                                                <div>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$sensory_skill_normal_hypo_response->tactile ??
                                                                        ''"
                                                                         label="Tactile"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$sensory_skill_normal_hypo_response->auditory ??
                                                                        ''"
                                                                         label="Auditory"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$sensory_skill_normal_hypo_response->vestibular ??
                                                                        ''"
                                                                         label="Vestibular"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$sensory_skill_normal_hypo_response->proprioceptive ??
                                                                        ''"
                                                                         label="Proprioceptive"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                    <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="cognitive_skills">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$cognitive_skills->attention ?? ''"
                                                                         label="Attention"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$cognitive_skills->problem_solving ?? ''"
                                                                         label="Problem Solving"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$cognitive_skills->able_to_follow_instruction ??
                                                                        ''"
                                                                         label="Able to Follow instruction"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$cognitive_skills->memory ?? ''"
                                                                         label="Memory" :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$cognitive_skills->perceptual_motor ??
                                                                        ''"
                                                                         label="Perceptual Motor"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$cognitive_skills->body_awareness ?? ''"
                                                                         label="Body Awareness"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$cognitive_skills->body_co_ordination ??
                                                                        ''"
                                                                         label="Body Co-ordination"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$cognitive_skills->bilateral_integration ??
                                                                        ''"
                                                                         label="Bilateral integration"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="treatment">
                                                            <section>

                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Problem List</label>
                                                                    <x-input-text :checked="$treatment->problam_list ?? ''" 
                                                                        value="{{ $treatment->please_explain_strength_area ?? '' }}"
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Treatment plan</label>
                                                                    <x-input-text :checked="$treatment->treatment_plan ?? ''" 
                                                                        value="{{ $strength->please_explain_strength_area ?? '' }}"
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Treatment plan
                                                                        implementation details</label>
                                                                    <x-input-text :checked="$treatment->treatment_plann ?? ''"
                                                                        value="{{ $strength->please_explain_strength_area ?? '' }}" 
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Progress</label>
                                                                    <x-input-text :checked="$treatment->progress ?? ''" 
                                                                        value="{{ $strength->please_explain_strength_area ?? '' }}"
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <!-- end row -->

                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="signature">
                                                            <h3>Signature</h3>
                                                            <section>

                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Therapist
                                                                        Signature</label>
                                                                    <x-input-text :checked="$signature->therapist_signature ?? ''" 
                                                                        value="{{ $strength->please_explain_strength_area ?? '' }}"
                                                                        type="file" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Designation and
                                                                        organizations name</label>
                                                                    <x-input-text :checked="$signature->designation ?? ''" 
                                                                        value="{{ $strength->please_explain_strength_area ?? '' }}"
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <!-- end row -->

                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="muscle_power">
                                                            <h3>Muscle Power</h3>
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$muscle_power->upper_limbs ?? ''"
                                                                         label="Upper limbs"
                                                                        :records="$physiotherapyConstants::$limbs">
                                                                    </x-input-radio-or-check>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Left</label>
                                                                        <x-input-text :checked="$muscle_power->left ?? ''" 
                                                                            value="{{ $strength->please_explain_strength_area ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Right</label>
                                                                        <x-input-text :checked="$muscle_power->right ?? ''" 
                                                                            value="{{ $strength->please_explain_strength_area ?? '' }}">
                                                                            
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$muscle_power->lower_limbs ?? ''"
                                                                         label="Lower Limbs"
                                                                        :records="$physiotherapyConstants::$limbs">
                                                                    </x-input-radio-or-check>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Left</label>
                                                                        <x-input-text :checked="$muscle_power->left ?? ''" 
                                                                            value="{{ $strength->please_explain_strength_area ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Right</label>
                                                                        <x-input-text :checked="$muscle_power->right ?? ''" 
                                                                            value="{{ $strength->please_explain_strength_area ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Trunk/neck</label>
                                                                        <x-input-text :checked="$muscle_power->trunk ?? ''"
                                                                            value="{{ $strength->please_explain_strength_area ?? '' }}" 
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="muscle_tone">
                                                            <h3>Muscle Tone</h3>
                                                            <section>
                                                                <div>

                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$muscle_tone->upper_limbs ?? ''"
                                                                         label="Upper limbs"
                                                                        :records="$physiotherapyConstants::$limbsTone">
                                                                    </x-input-radio-or-check>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Left</label>
                                                                        <x-input-text :checked="$muscle_tone->left ?? ''" 
                                                                            value="{{ $strength->please_explain_strength_area ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Right</label>
                                                                        <x-input-text :checked="$muscle_tone->right ?? ''"
                                                                            value="{{ $strength->please_explain_strength_area ?? '' }}" 
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check :checked="$muscle_tone->lower_limbs ?? ''"
                                                                         label="Lower Limbs"
                                                                        :records="$physiotherapyConstants::$limbsTone">
                                                                    </x-input-radio-or-check>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Left</label>
                                                                        <x-input-text :checked="$muscle_tone->left ?? ''"
                                                                            value="{{ $strength->please_explain_strength_area ?? '' }}" 
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Right</label>
                                                                        <x-input-text :checked="$muscle_tone->right ?? ''" 
                                                                            value="{{ $strength->please_explain_strength_area ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="behavior">
                                                            <section>

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

                                                            </section>

                                                        </div>
                                                        <div class="tab-pane" id="domain_area">
                                                            <section>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check :checked="$domain_area->physical_Gross_motor_Fine_motor ??
                                                                    ''"
                                                                    name="physical_Gross motor_Fine motor"
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
                                                                        class="form-label">If
                                                                        yes write
                                                                        below</label>
                                                                    <x-input-text :checked="$domain_area->if_yes ?? ''" 
                                                                        value="{{ $strength->please_explain_strength_area ?? '' }}"
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Behavioral</label>
                                                                    <x-input-text :checked="$domain_area->behavioral ?? ''" 
                                                                        value="{{ $strength->please_explain_strength_area ?? '' }}"
                                                                        placeholder="">
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
                                                                wire:click='save' value='Update' />
                                                        </div>
                                                    </div>
                                                </form>
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
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>

    <!-- jquery step -->
    <script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

    <!-- form wizard init -->
    <script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection
