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
                                                    <li class="w-100"><a href="#Occupational_Therapy"
                                                            data-toggle="tab">Occupational Therapy</a></li>
                                                    <li class="w-100"><a href="#General" data-toggle="tab">General</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Muscle_Tone" data-toggle="tab">Muscle
                                                            Tone</a></li>
                                                    <li class="w-100"><a href="#Range_of_movement"
                                                            data-toggle="tab">Range of movement</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Functional_gross_motor"
                                                            data-toggle="tab">Functional Gross Motor</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Transitional_movement"
                                                            data-toggle="tab">Transitional Movements</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Fine_motor_skil" data-toggle="tab"> Fine
                                                            motor Skill</a></li>
                                                    <li class="w-100"><a href="#Automatic_reaction"
                                                            data-toggle="tab">Automatic Reaction</a></li>
                                                    <li class="w-100"><a href="#Sensory_Skill" data-toggle="tab">
                                                            Sensory Skill (Normal/Hypo response)</a></li>
                                                    <li class="w-100"><a href="#Visual_Perception"
                                                            data-toggle="tab">Visual Perception</a></li>
                                                    <li class="w-100"><a href="#Activities_of_Daily_living"
                                                            data-toggle="tab"> Activities of Daily living (ADL’s)</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Strength" data-toggle="tab">Strength</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Signature"
                                                            data-toggle="tab">Signature</a></li>
                                                    <li class="w-100"><a href="#Cognitive_Skills" data-toggle="tab">
                                                            Cognitive Skills</a></li>
                                                    <li class="w-100"><a href="#Treatment_Plan"
                                                            data-toggle="tab">Treatment Plan</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9">
                                            <form>
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="Occupational_Therapy">
                                                        <section>
                                                            <div class="row">
                                                                <div class="col-lg-4 pull-left pb-2">
                                                                    <label class="p-2">Collection Date:</label>
                                                                    <x-input-text name="date" type="date"
                                                                        placeholder="mm/dd/yyyy"
                                                                        value="{{ $record->date }}">
                                                                    </x-input-text>
                                                                </div>
                                                                <div class="col-lg-4 pull-left pb-2">
                                                                    <label class="p-2">Teacher: <span
                                                                            class="text-danger text-bold">*</span>
                                                                    </label>
                                                                    <x-input-select name="teacher_id"
                                                                        :records="$teachers"
                                                                        :selected="$record->teacher_id" />
                                                                </div>
                                                                <div class="col-lg-4 pull-left pb-2">
                                                                    <label class="p-2">Candidate ID:
                                                                        <span
                                                                            class="text-danger text-bold">*</span></label>
                                                                    <x-input-select name="candidate_id"
                                                                        :records="$students"
                                                                        :selected="$record->candidate_id" />
                                                                </div>
                                                                <div class="col-lg-12 p-0 pb-2">
                                                                    <label class="col-md-12 px-1">Description:</label>
                                                                    <p>Occupational Therapy assessment form</p>
                                                                </div>

                                                                <div class="col-lg-12 p-0 pb-2">
                                                                    <label class="col-md-12 px-1">Instruction:</label>
                                                                    <p>Occupational Therapy assessment form</p>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="General">
                                                        <section>
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Medication
                                                                                        Treatment </label>
                                                                                    <x-input-text
                                                                                        name="medication_treatment"
                                                                                        placeholder="Medication Treatment" value="{{ $record->medication_treatment}}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Any
                                                                                        present medicines</label>
                                                                                    <x-input-text
                                                                                        name="any_present_medicines"
                                                                                        placeholder="Any present medicines" value="{{ $record->any_present_medicines}}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Separate Home equipment"
                                                                :records="$constants::$yesNoEn" :checked="$record->separate_home_equipment">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Communication"
                                                                :records="$constants::$yesNoEn" :checked="$record->communication">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Communication"
                                                                :records="$therapyConstants::$communication"  :checked="$record->communication" >
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Muscle_Tone">
                                                        <section>
                                                            <x-input-radio-or-check label="Upper limbs"
                                                                :records="$therapyConstants::$lowerLimbs"  :checked="$record->upper_limbs">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Left</label>
                                                                                    <x-input-text name="left"
                                                                                        placeholder="Left" value="{{ $record->left }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Right</label>
                                                                                    <x-input-text name="right"
                                                                                        placeholder="Right" value="{{ $record->right }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Lower Limbs"
                                                                :records="$therapyConstants::$lowerLimbs"  :checked="$record->lower_limbs">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Trunk/neck"
                                                                :records="$therapyConstants::$trunkNeck"  :checked="$record->trunk_or_neck">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Lower Limbs"
                                                                :records="$therapyConstants::$lowerLimbsTone"  :checked="$record->lower_limbs">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <div class="row py-2 pt-0">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Left</label>
                                                                                    <x-input-text name="left"
                                                                                        placeholder="Left" value="{{ $record->left }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Right</label>
                                                                                    <x-input-text name="right"
                                                                                        placeholder="Right" value="{{ $record->right }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <x-input-radio-or-check label="Upper Limbs"
                                                                :records="$therapyConstants::$trunkNeck"  :checked="$record->upper_limbs">
                                                            </x-input-radio-or-check>
                                                            <div class="row py-2 pt-0">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Left</label>
                                                                                    <x-input-text name="left"
                                                                                        placeholder="Left" value="{{ $record->left }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Right</label>
                                                                                    <x-input-text name="right"
                                                                                        placeholder="Right" value="{{ $record->right }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Range_of_movement">
                                                        <section>
                                                            <x-input-radio-or-check label="Upper limbs"
                                                                :records="$therapyConstants::$upperLimbs"  :checked="$record->upper_limbs">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h5></h5>
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Left</label>
                                                                                    <x-input-text name="left"
                                                                                        placeholder="Left" value="{{ $record->left }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Right</label>
                                                                                    <x-input-text name="right"
                                                                                        placeholder="Right" value="{{ $record->right }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Lower limbs"
                                                                :records="$therapyConstants::$upperLimbs"  :checked="$record->lower_limbs">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_gross_motor">
                                                        <section>
                                                            <x-input-radio-or-check label="Sitting"
                                                                :records="$constants::$yesNoEn"  :checked="$record->Sitting">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Standing"
                                                                :records="$constants::$yesNoEn"  :checked="$record->Standing">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Ball skill"
                                                                :records="$constants::$yesNoEn"  :checked="$record->ball_skill">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Crawling"
                                                                :records="$constants::$yesNoEn"  :checked="$record->Crawling">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Walking"
                                                                :records="$constants::$yesNoEn"  :checked="$record->Walking">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Running"
                                                                :records="$constants::$yesNoEn"  :checked="$record->Running">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Jumping"
                                                                :records="$constants::$yesNoEn"  :checked="$record->Jumping">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Transitional_movement">
                                                        <section>
                                                            <x-input-radio-or-check label="Rolling supine to prone"
                                                                :records="$constants::$yesNoEn"  :checked="$record->rolling_supine_to_prone">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Continuous Rolling"
                                                                :records="$constants::$yesNoEn"  :checked="$record->continuous_Rolling">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Box sit to stand"
                                                                :records="$constants::$yesNoEn"  :checked="$record->box_sit_to_stand">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Kneeling to stand"
                                                                :records="$constants::$yesNoEn"  :checked="$record->kneeling_to_stand">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Prone to Supine"
                                                                :records="$constants::$yesNoEn"  :checked="$record->prone_to_supine">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Lying to Sit"
                                                                :records="$constants::$yesNoEn"  :checked="$record->lying_to_Sit">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Cross sit to stand"
                                                                :records="$constants::$yesNoEn"  :checked="$record->cross_sit_to_stand">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Rolling supine to prone"
                                                                :records="$constants::$yesNoEn"  :checked="$record->rolling_supine_to_prone">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>


                                                    <div class="tab-pane" id="Fine_motor_skil">
                                                        <section>
                                                            <x-input-radio-or-check label="Dominance"
                                                                :records="$constants::$yesNoEn"  :checked="$record->Dominance">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Reach"
                                                                :records="$constants::$yesNoEn"  :checked="$record->Reach">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Grasp type"
                                                                :records="$constants::$yesNoEn"  :checked="$record->grasp_type">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Release"
                                                                :records="$constants::$yesNoEn"  :checked="$record->Release">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Symmetrical use"
                                                                :records="$constants::$yesNoEn"  :checked="$record->symmetrical_use">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Bilateral use"
                                                                :records="$constants::$yesNoEn"  :checked="$record->bilateral_use">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="In-hand manipulation"
                                                                :records="$constants::$yesNoEn"  :checked="$record->In_hand_manipulation">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Eye hand co-ordination"
                                                                :records="$constants::$yesNoEn"  :checked="$record->eye_hand_co_ordination">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Transfer"
                                                                :records="$constants::$yesNoEn"  :checked="$record->transfer">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Writing skills"
                                                                :records="$constants::$yesNoEn"  :checked="$record->writing_skills">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Grasp type"
                                                                :records="$constants::$yesNoEn"  :checked="$record->grasp_type">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Automatic_reaction">
                                                        <section>
                                                            <x-input-radio-or-check label="Protective reactions"
                                                                :records="$constants::$yesNoEn"  :checked="$record->protective_reactions">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Equilibrium reaction"
                                                                :records="$constants::$yesNoEn"  :checked="$record->equilibrium_reaction">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Sensory_Skill">
                                                        <section>
                                                            <x-input-radio-or-check label="Tactile"
                                                                :records="$constants::$yesNoEn"  :checked="$record->tactile">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Visual"
                                                                :records="$constants::$yesNoEn"  :checked="$record->Visual">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Auditory"
                                                                :records="$constants::$yesNoEn"  :checked="$record->Auditory">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Vestibular"
                                                                :records="$constants::$yesNoEn"  :checked="$record->vestibular">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Proprioceptive"
                                                                :records="$constants::$yesNoEn"  :checked="$record->proprioceptive">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Vestibular"
                                                                :records="$constants::$yesNoEn"  :checked="$record->vestibular">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Visual_Perception">
                                                        <section>
                                                            <x-input-radio-or-check label="Visual Discrimination"
                                                                :records="$constants::$yesNoEn"  :checked="$record->Visual_discrimination">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Visual Memory"
                                                                :records="$constants::$yesNoEn"  :checked="$record->Visual_Memory">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Visual Figure ground"
                                                                :records="$constants::$yesNoEn"  :checked="$record->visual_figure_ground">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Visual Spatial"
                                                                :records="$constants::$yesNoEn"  :checked="$record->visual_spatial">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Behavior</label>
                                                                                    <x-input-text name="left"
                                                                                        placeholder="" value="{{ $record->behavior }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Social interaction"
                                                                :records="$constants::$yesNoEn"  :checked="$record->social_interaction">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Activities_of_Daily_living">
                                                        <section>
                                                            <x-input-radio-or-check label="Eating"
                                                                :records="$constants::$yesNoEn"  :checked="$record->Eating">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Brushing teeth"
                                                                :records="$constants::$yesNoEn"  :checked="$record->brushing_teeth">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Dressing"
                                                                :records="$constants::$yesNoEn"  :checked="$record->dressing">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Toilet"
                                                                :records="$constants::$yesNoEn"  :checked="$record->toilet">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Bathing"
                                                                :records="$constants::$yesNoEn"  :checked="$record->bathing">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check
                                                                label="Does the child attend school?"
                                                                :records="$constants::$yesNoEn"  :checked="$record->does_the_child_attend_school">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <div class="row py-2 pt-0">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Any
                                                                                        more information</label>
                                                                                    <x-input-text name="left"
                                                                                        placeholder="" value="{{ $record->left }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->


                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Leisure/Play:
                                                                                        activities of interest</label>
                                                                                    <x-input-text name="left"
                                                                                        placeholder="" value="{{ $record->left }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Strength">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                label="Physical (Gross motor/Fine motor)"
                                                                :records="$constants::$yesNoEn"  :checked="$record->physical">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Cognitive</label>
                                                                                    <x-input-text name="left"
                                                                                        placeholder="" value="{{ $record->left }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->


                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Behavioral</label>
                                                                                    <x-input-text name="left"
                                                                                        placeholder="" value="{{ $record->left }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Communication"
                                                                :records="$constants::$yesNoEn"  :checked="$record->communication">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Social"
                                                                :records="$constants::$yesNoEn"  :checked="$record->social">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="ADL’s"
                                                                :records="$constants::$yesNoEn"  :checked="$record->adl’s">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Emotional"
                                                                :records="$constants::$yesNoEn"  :checked="$record->emotional">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Signature">
                                                        <section>
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Therapist
                                                                                        Signature</label>
                                                                                    <x-input-text type="file"
                                                                                        name="therapist_signature"
                                                                                        placeholder="" value="{{ $record->therapist_signature }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                            <div class="row py-2 pt-0">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">
                                                                                        Designation and organizations
                                                                                        name</label>
                                                                                    <x-input-text
                                                                                        name="designation_organization"
                                                                                        placeholder="" value="{{ $record->designation_organization }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                            <div class="row py-2 pt-0">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Supervisor’s
                                                                                        Signature</label>
                                                                                    <x-input-text type="file"
                                                                                        name="supervisor_signature"
                                                                                        placeholder="" value="{{ $record->supervisor_signature }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Designation
                                                                                        and organizations name</label>
                                                                                    <x-input-text
                                                                                        name="designation_name"
                                                                                        placeholder="" value="{{ $record->designation_name }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Cognitive_Skills">
                                                        <section>
                                                            <x-input-radio-or-check label="Attention"
                                                                :records="$constants::$yesNoEn"  :checked="$record->attention">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Problem Solving"
                                                                :records="$constants::$yesNoEn"  :checked="$record->problem_solving">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Able to Follow instruction"
                                                                :records="$constants::$yesNoEn"  :checked="$record->able_to_follow_instruction">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Memory</label>
                                                                                    <x-input-text name="memory"
                                                                                        placeholder="" value="{{ $record->memory }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Perceptual Motor"
                                                                :records="$constants::$yesNoEn"  :checked="$record->perceptual_motor">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Body Awareness"
                                                                :records="$constants::$yesNoEn"  :checked="$record->body_awareness">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Body Co-ordination"
                                                                :records="$constants::$yesNoEn"  :checked="$record->body_co_ordination">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Bilateral Integration"
                                                                :records="$constants::$yesNoEn"  :checked="$record->bilateral_integration">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Treatment_Plan">
                                                        <section>
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Problem
                                                                                        List</label>
                                                                                    <x-input-text name="problem_list"
                                                                                        placeholder="" value="{{ $record->problem_list}}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Treatment
                                                                                        Plan & Implementation</label>
                                                                                    <x-input-text name="treatment_plan"
                                                                                        placeholder=""  value="{{ $record->treatment_plan }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Progress</label>
                                                                                    <x-input-text name="progress"
                                                                                        placeholder=""  value="{{ $record->progress }}">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
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
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end col -->
<!-- end row -->
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
@endsection