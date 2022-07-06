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
            <a class="nav-link active" data-bs-toggle="tab" href="#add" role="tab">
              <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
              <span class="d-none d-sm-block">Add</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#list" role="tab">
              <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
              <span class="d-none d-sm-block">List</span>
            </a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content text-muted">
          <div class="tab-pane active" id="add" role="tabpanel">
            <div class="row">
              <div class="col-12">
                <!-- Wizard container -->
                <div class="wizard-container">
                  <div class="card_stap wizard-card row" data-color="red" id="wizard">
                    <div class="col-sm-3 col-md-3">
                      <div id="wizard-navigation">
                        <ul class="wizard-navigation">
                          <li class="w-100"><a href="#CareNeedsPart1" data-toggle="tab">CARE needs - Part 1</a></li>
                          <li class="w-100"><a href="#Common" data-toggle="tab">Common</a></li>
                          <li class="w-100"><a href="#TypesOfSpecialty" data-toggle="tab">Types of specialty / disability / impairments</a></li>
                          <li class="w-100"><a href="#Assessment" data-toggle="tab">Assessment</a></li>
                          <li class="w-100"><a href="#EducationalInformation" data-toggle="tab">Educational Information</a></li>
                          <li class="w-100"><a href="#ChildConditionAtHisFamily" data-toggle="tab">Child’s condition at his family </a></li>
                          <li class="w-100"><a href="#NumberOfChildrenInTheFamily" data-toggle="tab">Number of children in the family</a></li>
                          <li class="w-100"><a href="#Schooling" data-toggle="tab">Schooling</a></li>
                          <li class="w-100"><a href="#Home" data-toggle="tab"> Home</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-sm-9 col-md-9">
                      <form action="" method="POST">
                        @csrf
                        <div class="tab-content">
                          <div class="tab-pane" id="CareNeedsPart1">
                            <section>
                              <div class="row">
                                <div class="col-lg-4">
                                  <div class="mb-3">
                                    <label for="basicpill-firstname-input">Collection Date:</label>
                                    <x-input-text name="date" type="date" placeholder=""></x-input-text>
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="mb-3">
                                    <label for="basicpill-lastname-input">Teacher:</label>
                                    <x-input-select name="teacher_id" :records="[]" />
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="mb-3">
                                    <label for="basicpill-phoneno-input">Candidate ID:</label>
                                    <x-input-select name="student_id" :records="[]" />
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="mb-3">
                                    <label for="verticalnav-phoneno-input">Description:</label>
                                    <p>Parents Interview form (Part of Care needs assessment form) </p>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="mb-3">
                                    <label for="verticalnav-phoneno-input">Instruction:</label>
                                    <p>Parents Interview form (Part of Care needs assessment form)</p>
                                  </div>
                                </div>
                              </div>
                            </section>
                          </div>
                          <div class="tab-pane" id="Common">
                            <section>
                               <div class="col-lg-12">
                                  <div class="mb-3">
                                    <label for="verticalnav-phoneno-input">Instruction:</label>
                                    <p>Enter common information</p>
                                  </div>
                                </div>
                              <x-input-radio-or-check name="from_where_you_learned_about_us" type="checkbox"
                                label="From where you learned about us?"
                                :records="$projectConstants::$learnAbout" :isVertical="false" multiple="true" secondaryInputLabel="If other, specify name"/>
                              <!-- row end -->
                              <div class="row border-top py-2">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="m-0">
                                            <h6>Doctor / physician (under medical treatment) name </h6>
                                            <div class="mb-2">
                                                <x-input-text name="Doctor_physician_under_medical_treatment_name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              <!-- row end -->
                              <div class="row border-top py-2">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="m-0">
                                            <h6>Contact Number</h6>
                                            <div class="mb-2">
                                                <x-input-text name="contact_umber " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              <!-- row end -->
                              <x-input-radio-or-check name="govt_disability_registration"
                                label="Govt.Disability registration"
                                :records="$projectConstants::$yesNoEn" secondaryInputLabel="If not, why?" />
                               <div class="row border-top py-2">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="m-0">
                                            <h6>If yes, enter registration number </h6>
                                            <div class="mb-2">
                                                <x-input-text name="If_yes_enter_registration_number" />
                                            </div>
                                        </div>
                                    </div>
                                </div>                               
                              <!-- row end -->
                              <x-input-radio-or-check name="suggestion_on_obtaining_registration"
                                label="Suggestion on obtaining registration" :records="$projectConstants::$yesNoEn"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="referred_to_parents_forum "
                                label="Referred to Parents Forum" :records="$projectConstants::$yesNoEn"/>
                              <!-- end row -->
                            </section>
                          </div>
                          <div class="tab-pane" id="TypesOfSpecialty">
                            <section>
                               <div class="col-lg-12">
                                  <div class="mb-3">
                                    <label for="verticalnav-phoneno-input">Instruction:</label>
                                    <p>Enter Types of speciality / disability / impairments information</p>
                                  </div>
                                </div>                              
                              <!-- row end -->
                              <x-input-radio-or-check name="iss_she_has_utism"
                                label="Is S/he has Autism?" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_down_syndrome"
                                label="Is S/he has Down Syndrome" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_cerebral_palsy"
                                label="Is S/he has Cerebral Palsy" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_intellectual_disability"
                                label="Is S/he has Intellectual Disability" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_dyslexia "
                                label="Is S/he has Dyslexia " :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_learning_disability"
                                label="Is S/he has Learning disability" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_anxiety_disorder"
                                label="Is S/he has Anxiety disorder" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="=is_she_has_adhd "
                                label="Is S/he has ADHD " :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_bipolar_disorder "
                                label="Is S/he has Bipolar Disorder " :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_he_has_speech_disorder "
                                label="Is S/he has Speech disorder " :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_language_disorder"
                                label="Is S/he has Language disorder" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_ocd"
                                label="Is S/he has OCD" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_eating_disorder"
                                label="Is S/he has Eating disorder" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_chizophrenia"
                                label="Is S/he has Schizophrenia" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_multiple_personality_disorder"
                                label="Is S/he has Multiple Personality Disorder" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_tic_disorder"
                                label="Is S/he has TIC disorder" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_sluttering"
                                label="Is S/he has Sluttering" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_depression"
                                label="Is S/he has Depression" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_writing_disorder"
                                label="Is S/he has Writing disorder" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_reading_disorder"
                                label="Is S/he has Reading disorder" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_match_disorder"
                                label="Is S/he has Match Disorder" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_attachment_disorder"
                                label="Is S/he has Attachment Disorder" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_separation_anxiety_disorder"
                                label="Is S/he has Separation Anxiety Disorder" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- row end -->
                              <x-input-radio-or-check name="is_she_has_sleep_disorder"
                                label="Is S/he has Sleep disorder" :records="$projectConstants::$yesNoDontknow"/>
                              <!-- end row -->
                            </section>
                          </div>
                          <div class="tab-pane" id="Assessment">
                            <section>
                                 <div class="col-lg-12">
                                  <div class="mb-3">
                                    <label for="verticalnav-phoneno-input">Instruction:</label>
                                    <p>Enter Assessment information</p>
                                  </div>
                                </div> 
                            <x-input-radio-or-check name="is_social_communication_checklist_has_completed?"
                                label="Is Social Communication checklist has completed?" :records="$projectConstants::$yesNoWantdo"/>
                              <!-- end row -->
                            <x-input-radio-or-check name="is_sensory_checklist_has_completed?"
                                label="Is Sensory Checklist has completed?" :records="$projectConstants::$yesNoWantdo"/>
                              <!-- end row -->
                            <x-input-radio-or-check name="is_occupational_assessment_has_completed?"
                                label="Is Occupational Assessment has completed?" :records="$projectConstants::$yesNoWantdo"/>
                              <!-- end row -->
                            <x-input-radio-or-check name="is_speech_and_language_assessment_has_completed"
                                label="Is Speech and Language Assessment has completed?" :records="$projectConstants::$yesNoWantdo"/>
                              <!-- end row -->
                            <x-input-radio-or-check name="is_physiotherapy_assessment_has_ompleted"
                                label="Is Physiotherapy assessment has completed?" :records="$projectConstants::$yesNoWantdo"/>
                              <!-- end row -->
                            <x-input-radio-or-check name="is_fundamental_movement_skills_has_completed"
                                label="Is Fundamental Movement Skills has completed?" :records="$projectConstants::$yesNoWantdo"/>
                              <!-- end row -->
                            <x-input-radio-or-check name="is_functional_evaluation_has_completed"
                                label="Is Functional evaluation has completed?" :records="$projectConstants::$yesNoWantdo"/>
                              <!-- end row -->
                            <x-input-radio-or-check name="is_psychological_assessment_has_completed"
                                label="Is Psychological assessment has completed?" :records="$projectConstants::$yesNoWantdo"/>
                              <!-- end row -->
                            <x-input-radio-or-check name="is_cademic_assessment_has_completed"
                                label="Is Academic Assessment has completed?" :records="$projectConstants::$yesNoWantdo"/>
                              <!-- end row -->
                            </section>
                          </div>
                          <div class="tab-pane" id="EducationalInformation">
                            <section>
                                <div class="col-lg-12">
                                  <div class="mb-3">
                                    <label for="verticalnav-phoneno-input">Instruction:</label>
                                    <p>Enter Educational Information</p>
                                  </div>
                                </div> 
                              <!-- end row -->
                                <x-input-radio-or-check name="schooling" type="checkbox"
                                label="Schooling"
                                :records="$projectConstants::$learnAbout" :isVertical="false" multiple="true" secondaryInputLabel="Please provide other school name"/>
                              <!-- end row -->
                                <x-input-radio-or-check name="is_she_has_speaking_capacity"
                                label="Is S/he has Speaking Capacity?" :records="$projectConstants::$yesNoEn" />
                              <!-- end row -->
                                <x-input-radio-or-check name="is_she_has_listening_capacity"
                                label="Is S/he has Listening Capacity?" :records="$projectConstants::$yesNoEn" />
                              <!-- end row -->
                                <x-input-radio-or-check name="is_she_has_reading_capacity"
                                label="Is S/he has Reading Capacity?" :records="$projectConstants::$yesNoEn" />
                              <!-- end row -->
                                <x-input-radio-or-check name="is_she_has_writing_capacity"
                                label="Is S/he has Writing capacity?" :records="$projectConstants::$yesNoEn" />
                              <!-- end row -->
                                <x-input-radio-or-check name="is_she_has"
                                label="Is S/he has" :records="$projectConstants::$yesNoEn" />
                              <!-- end row -->
                                <x-input-radio-or-check name="is_she_has_counting_capacity"
                                label="Is S/he has Counting capacity? " :records="$projectConstants::$yesNoEn" />
                              <!-- end row -->
                                <x-input-radio-or-check name="is_she_has_money_concept"
                                label="Is S/he has Money concept?" :records="$projectConstants::$yesNoEn" />
                              <!-- end row -->
                            </section>
                          </div>
                          <div class="tab-pane" id="ChildConditionAtHisFamily">
                            <section>
                                <div class="col-lg-12">
                                  <div class="mb-3">
                                    <label for="verticalnav-phoneno-input">Instruction:</label>
                                    <p>Enter Educational Information</p>
                                  </div>
                                </div> 
                              <!-- end row -->
                                <x-input-radio-or-check name="is_she_happy_at_home"
                                label="Is S/he Happy at home? " :records="$projectConstants::$yesMidNo" />
                              <!-- end row -->
                                <x-input-radio-or-check name="is_she_lonely"
                                label="Is S/he Lonely?" :records="$projectConstants::$yesMidNo" />
                              <!-- end row -->
                                <x-input-radio-or-check name="is_she_protective"
                                label="Is S/he Protective?" :records="$projectConstants::$yesMidNo" />
                              <!-- end row -->
                                <x-input-radio-or-check name="is_she_well_protective"
                                label="Is S/he Well protective?" :records="$projectConstants::$yesMidNo" />
                              <!-- end row -->
                                <x-input-radio-or-check name="is_she_withdrawal"
                                label="Is S/he Withdrawal?" :records="$projectConstants::$yesMidNo" />
                              <!-- end row -->
                                <x-input-radio-or-check name="is_she_confident"
                                label="Is S/he Confident?" :records="$projectConstants::$yesMidNo" />
                              <!-- end row -->
                                <x-input-radio-or-check name="is_she_Communicate"
                                label="Is S/he Communicate?" :records="$projectConstants::$communicate" />
                              <!-- end row -->
                               <x-input-radio-or-check name="knowledge_on_aily_life_requirement" type="checkbox"
                                label="Knowledge on Daily life requirement. (Please select (tick) only those items s/he has knowledge)"
                                :records="$projectConstants::$dailyLife" :isVertical="false" multiple="true"/>
                              <!-- row end -->
                            </section>
                          </div>
                          <div class="tab-pane" id=" NumberOfChildrenInTheFamily">
                            <section>
                              <x-input-radio-or-check name="does_not_follow_simple_commands_given_once"
                                label="Does not follow simple commands given once"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="has_pronoun_reversal" label="Has pronoun reversal"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="atonalspeech_pattern" label="Atonal Speech pattern"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check
                                name="does_not_respond_to_own_name_when_called_out_among_two_others"
                                label="Does not respond to own name when called out among two others"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="seldom_says_yes_or_I" label="Seldom says “yes” or “I”"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="does_not_follow_simple_commands_involving_prepositions"
                                label="Does not follow simple commands involving prepositions"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="gets_desired_objects_by_gesturing"
                                label="Gets desired objects by gesturing" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="repeats_phrases_over_and_over"
                                label="Repeats phrases over and over" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="cannot_point_to_more_than_five_named_objects"
                                label="Cannot point to more than five named objects"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="uses_5_spontaneous_words_per_day"
                                label="Uses 0-5 spontaneous words per day to communicate wants and needs"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="repeats_sounds_or_words" label="Repeats sounds or words"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="echoes_questions_or_statements"
                                label="Echoes questions or statements made by others"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="uses_at_least_15_but_less_than_30"
                                label="Uses at least 15 but less than 30 spontaneous phrases daily to communicate"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="learns_a_simple_task"
                                label="Learns a simple task but “forgets” quickly"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="strong_reactions_changes_in_routine_environment"
                                label="Strong reactions to changes in routine-environment"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="has_special_abilities_in_one_area_of_development" label="Has “special abilities” in one area of development, which seems to rule out mental
                                retardation" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="severe_temper_tantrums"
                                label="Severe temper tantrums and-or frequent minor tantrums"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="hurts_others_by_biting_hitting_kicking"
                                label="Hurts others by biting, hitting, kicking, etc…"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="does_not_wait_for_needs_to_be_met"
                                label="Does not wait for needs to be met" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="difficulties_with_toileting"
                                label="Difficulties with toileting" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="does_not_dress_self_without_frequent_help"
                                label="Does not dress self without frequent help"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="frequently_unaware_surroundings"
                                label="Frequently unaware of surroundings, and may be oblivious to dangerous situations"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->>
                              <x-input-radio-or-check name="prefers_to_manipulate_and_be_occupied_with_inanimate_things"
                                label="Prefers to manipulate and be occupied with inanimate things"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="a_developmental_delay_was_identified"
                                label="A developmental delay was identified at or before 30 months of age"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <!-- end row -->
                            </section>
                          </div>
                          <div class="tab-pane" id=" Schooling">
                            <section>
                              <x-input-radio-or-check name="does_not_follow_simple_commands_given_once"
                                label="Does not follow simple commands given once"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="has_pronoun_reversal" label="Has pronoun reversal"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="atonalspeech_pattern" label="Atonal Speech pattern"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check
                                name="does_not_respond_to_own_name_when_called_out_among_two_others"
                                label="Does not respond to own name when called out among two others"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="seldom_says_yes_or_I" label="Seldom says “yes” or “I”"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="does_not_follow_simple_commands_involving_prepositions"
                                label="Does not follow simple commands involving prepositions"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="gets_desired_objects_by_gesturing"
                                label="Gets desired objects by gesturing" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="repeats_phrases_over_and_over"
                                label="Repeats phrases over and over" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="cannot_point_to_more_than_five_named_objects"
                                label="Cannot point to more than five named objects"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="uses_5_spontaneous_words_per_day"
                                label="Uses 0-5 spontaneous words per day to communicate wants and needs"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="repeats_sounds_or_words" label="Repeats sounds or words"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="echoes_questions_or_statements"
                                label="Echoes questions or statements made by others"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="uses_at_least_15_but_less_than_30"
                                label="Uses at least 15 but less than 30 spontaneous phrases daily to communicate"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="learns_a_simple_task"
                                label="Learns a simple task but “forgets” quickly"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="strong_reactions_changes_in_routine_environment"
                                label="Strong reactions to changes in routine-environment"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="has_special_abilities_in_one_area_of_development" label="Has “special abilities” in one area of development, which seems to rule out mental
                                retardation" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="severe_temper_tantrums"
                                label="Severe temper tantrums and-or frequent minor tantrums"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="hurts_others_by_biting_hitting_kicking"
                                label="Hurts others by biting, hitting, kicking, etc…"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="does_not_wait_for_needs_to_be_met"
                                label="Does not wait for needs to be met" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="difficulties_with_toileting"
                                label="Difficulties with toileting" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="does_not_dress_self_without_frequent_help"
                                label="Does not dress self without frequent help"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="frequently_unaware_surroundings"
                                label="Frequently unaware of surroundings, and may be oblivious to dangerous situations"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->>
                              <x-input-radio-or-check name="prefers_to_manipulate_and_be_occupied_with_inanimate_things"
                                label="Prefers to manipulate and be occupied with inanimate things"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="a_developmental_delay_was_identified"
                                label="A developmental delay was identified at or before 30 months of age"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <!-- end row -->
                            </section>
                          </div>
                          <div class="tab-pane" id="Home">
                            <section>
                              <x-input-radio-or-check name="does_not_follow_simple_commands_given_once"
                                label="Does not follow simple commands given once"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="has_pronoun_reversal" label="Has pronoun reversal"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="atonalspeech_pattern" label="Atonal Speech pattern"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check
                                name="does_not_respond_to_own_name_when_called_out_among_two_others"
                                label="Does not respond to own name when called out among two others"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="seldom_says_yes_or_I" label="Seldom says “yes” or “I”"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="does_not_follow_simple_commands_involving_prepositions"
                                label="Does not follow simple commands involving prepositions"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="gets_desired_objects_by_gesturing"
                                label="Gets desired objects by gesturing" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="repeats_phrases_over_and_over"
                                label="Repeats phrases over and over" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="cannot_point_to_more_than_five_named_objects"
                                label="Cannot point to more than five named objects"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="uses_5_spontaneous_words_per_day"
                                label="Uses 0-5 spontaneous words per day to communicate wants and needs"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="repeats_sounds_or_words" label="Repeats sounds or words"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="echoes_questions_or_statements"
                                label="Echoes questions or statements made by others"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="uses_at_least_15_but_less_than_30"
                                label="Uses at least 15 but less than 30 spontaneous phrases daily to communicate"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="learns_a_simple_task"
                                label="Learns a simple task but “forgets” quickly"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="strong_reactions_changes_in_routine_environment"
                                label="Strong reactions to changes in routine-environment"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="has_special_abilities_in_one_area_of_development" label="Has “special abilities” in one area of development, which seems to rule out mental
                                retardation" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="severe_temper_tantrums"
                                label="Severe temper tantrums and-or frequent minor tantrums"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="hurts_others_by_biting_hitting_kicking"
                                label="Hurts others by biting, hitting, kicking, etc…"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="does_not_wait_for_needs_to_be_met"
                                label="Does not wait for needs to be met" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="difficulties_with_toileting"
                                label="Difficulties with toileting" :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="does_not_dress_self_without_frequent_help"
                                label="Does not dress self without frequent help"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="frequently_unaware_surroundings"
                                label="Frequently unaware of surroundings, and may be oblivious to dangerous situations"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->>
                              <x-input-radio-or-check name="prefers_to_manipulate_and_be_occupied_with_inanimate_things"
                                label="Prefers to manipulate and be occupied with inanimate things"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <x-input-radio-or-check name="a_developmental_delay_was_identified"
                                label="A developmental delay was identified at or before 30 months of age"
                                :records="$constants::$autismBehaviorCheck">
                              </x-input-radio-or-check>
                              <!-- row end -->
                              <!-- end row -->
                            </section>
                          </div>
                          <div class="wizard-footer d-flex justify-content-between">
                            <div class="pull-left">
                              <input type='button' class='btn btn-primary waves-effect waves-light btn-previous'
                                name='previous' value='Previous' />
                            </div>
                            <div class="pull-right">
                              <input type='button' class='btn btn-primary waves-effect waves-light btn-next' name='next'
                                value='Next' />
                              <input type="submit" class='btn btn-finish btn-fill btn-danger' value='Finish' />
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div> <!-- wizard container -->
              </div>
            </div> <!-- end col -->
            <!-- end row -->
          </div>
          <div class="tab-pane" id="list" role="tabpanel">
            <livewire:autisum-behibehaviour-list>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('script')
<!-- Custom step -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
@endsection