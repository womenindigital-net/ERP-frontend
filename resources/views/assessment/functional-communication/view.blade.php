@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

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

    @@extends('layouts.master')
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
                                                                data-toggle="tab">Case History11</a></li>
                                                        <li class="w-100"><a href="#Pragmatic_Objective"
                                                                data-toggle="tab">Speech</a>
                                                        </li>
                                                        <li class="w-100"><a href="#PERSONAL" data-toggle="tab">Body
                                                                Language</a></li>
                                                        <li class="w-100"><a href="#Topic_Maintenance"
                                                                data-toggle="tab">Words usages / Vocabulary</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Conversational_Structure"
                                                                data-toggle="tab">Sentence structure</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Word_Structure"
                                                                data-toggle="tab">Relaying information</a></li>
                                                        <li class="w-100"><a href="#Manner_Effectiveness"
                                                                data-toggle="tab">Following Directions</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Repair_Structures"
                                                                data-toggle="tab">Attention and Memory</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent"
                                                                data-toggle="tab">Conversation / Social
                                                                Communication</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Functional_Intent_B"
                                                                data-toggle="tab">Play skill</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9">
                                                <form>
                                                    <div class="tab-content apply-view-only">
                                                        <div class="tab-pane" id="Social_Communication">
                                                            <section>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-firstname-input">Collection
                                                                                Date:</label>
                                                                            <x-input-text value="{{ $collection_date }}"
                                                                                name="collection_date" type="date"
                                                                                placeholder=""></x-input-text>
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
                                                                            <label for="basicpill-phoneno-input">Candidate
                                                                                ID:</label>
                                                                            <x-input-select :selected="$student_id"
                                                                                name="student_id" :records="$students" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-phoneno-input">Description:</label>
                                                                            <p>Functional Assessment Checklist (FACTS)</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-email-input">Instruction:</label>
                                                                            <p>Functional Assessment Checklist (FACTS)</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Pragmatic_Objective">
                                                            <section>
                                                                <!--end row -->
                                                                <x-input-radio-or-check
                                                                    label="Talk too loud for the context" :checked="$speech->talk_too_loud_for_the_context ??
                                                                        ''"
                                                                    :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:">
                                                                    secondaryInputValue="{{ $speech->talk_too_loud_for_the_context_secondary ?? '' }}"
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <x-input-radio-or-check name="" :checked="$body_language->talk_too_quietly_for_the_context ??
                                                                    ''"
                                                                    label="Talk too quietly for the context"
                                                                    :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:">
                                                                    secondaryInputValue="{{ $body_language->talk_too_quietly_for_the_context_secondary ?? '' }}"
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <x-input-radio-or-check
                                                                    label="Speech is hard to understand" :records="$constants::$yesNoEn"
                                                                    :checked="$speech->speech_is_hard_to_understand ??
                                                                        ''" secondaryInputLabel="Excessive:">
                                                                    secondaryInputValue="{{ $speech->speech_is_hard_to_understand_secondary ?? '' }}"
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <x-input-radio-or-check
                                                                    label="Speech calls attention of itself"
                                                                    :checked="$speech->speech_calls_attention_of_itself ??
                                                                        ''" :records="$constants::$yesNoEn"
                                                                    secondaryInputLabel="Excessive:">
                                                                    secondaryInputValue="{{ $speech->speech_calls_attention_of_itself_secondary ?? '' }}"
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <!--end row -->
                                                                <x-input-radio-or-check label="Voice is too hard"
                                                                    :checked="$speech->voice_is_too_hard ?? ''" :records="$constants::$yesNoEn"
                                                                    secondaryInputLabel="Excessive:">
                                                                    secondaryInputValue="{{ $speech->voice_is_too_hard_secondary ?? '' }}"
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <x-input-radio-or-check label="Voice is too low"
                                                                    :checked="$speech->voice_is_too_low ?? ''" :records="$constants::$yesNoEn"
                                                                    secondaryInputLabel="Excessive:">
                                                                    secondaryInputValue="{{ $speech->voice_is_too_low_secondary ?? '' }}"
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <!--end row -->
                                                                <x-input-radio-or-check
                                                                    label="Repeats words of parts of word when talking"
                                                                    :checked="$speech->repeats_words_of_parts_of_word_when_talking ??
                                                                        ''" :records="$constants::$yesNoEn"
                                                                    secondaryInputLabel="Excessive:">
                                                                    secondaryInputValue="{{ $speech->repeats_words_of_parts_of_word_when_talking_secondary ?? '' }}"
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <!--end row -->
                                                                <x-input-radio-or-check
                                                                    label="Talks fast, causing speech to be unclear"
                                                                    :checked="$speech->talks_fast_causing_speech_to_be_unclear ??
                                                                        ''" :records="$constants::$yesNoEn"
                                                                    secondaryInputLabel="Excessive:">
                                                                    secondaryInputValue="{{ $speech->talks_fast_causing_speech_to_be_unclear_secondary ?? '' }}"
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <!--end row -->
                                                                <x-input-radio-or-check label="Speech sounds monotone"
                                                                    :checked="$speech->speech_sounds_monotone ?? ''" :records="$constants::$yesNoEn"
                                                                    secondaryInputLabel="Excessive:">
                                                                    secondaryInputValue="{{ $speech->speech_sounds_monotone_secondary ?? '' }}"
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <!--end row -->
                                                                <x-input-radio-or-check label="Speech sounds sign-song"
                                                                    :checked="$speech->speech_sounds_sign_song ?? ''" :records="$constants::$yesNoEn"
                                                                    secondaryInputLabel="Excessive:">
                                                                    secondaryInputValue="{{ $speech->speech_sounds_sign_song_secondary ?? '' }}"
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="PERSONAL">
                                                            <section>
                                                                <div>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$body_language->body_posture_is_too_rigid ??
                                                                        ''"
                                                                        label="Body posture is too rigid"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $body_language->body_posture_is_too_rigid_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$body_language->body_posture_is_too_relaxed ??
                                                                        ''"
                                                                        label="Body posture is too relaxed"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $body_language->body_posture_is_too_relaxed_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$body_language->has_noticed_nervous_mannerisms ??
                                                                        ''"
                                                                        label="Has noticed nervous mannerisms"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $body_language->has_noticed_nervous_mannerisms_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$body_language->has_limited_use_if_gestures ??
                                                                        ''"
                                                                        label="Has limited use if gestures"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $body_language->has_limited_use_if_gestures_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$body_language->demonstrates_unusual_facial_expressions ??
                                                                        ''"
                                                                        label="Demonstrates unusual facial expressions"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $body_language->demonstrates_unusual_facial_expressions_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$body_language->shows_little_variation_in_facial_expressions ??
                                                                        ''"
                                                                        label="Shows little variation in facial expressions"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $body_language->shows_little_variation_in_facial_expressions_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$body_language->expressions_or_body_language_secondary ??
                                                                        ''"
                                                                        label="Has difficulty understanding facial expressions / body language"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $body_language->expressions_or_body_language_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$body_language->orientation_or_proximity_in_interaction ??
                                                                        ''"
                                                                        label="Use inappropriate body orientation or proximity in interaction"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $body_language->orientation_or_proximity_in_interaction_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$body_language->eye_contact_is_fleeting ??
                                                                        ''"
                                                                        label="Eye contact is fleeting" :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $body_language->eye_contact_is_fleeting_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$body_language->does_not_use_eye_contact ??
                                                                        ''"
                                                                        label="Does not use eye contact" :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $body_language->does_not_use_eye_contact_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Topic_Maintenance">
                                                            <section>
                                                                <div>

                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$words_usages_vocabulary->repeats_words_or_phrases_or_sentences ??
                                                                        ''"
                                                                        label="Repeats words / phrases / sentences"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $words_usages_vocabulary->repeats_words_or_phrases_or_sentences_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$words_usages_vocabulary->Has_difficulties_using ??
                                                                        ''"
                                                                        name="Has_difficulties_using"
                                                                        label="Has difficulties using ad understanding non – literal meanings (proverbs, idioms, slangs, sarcasm, teasing etc),"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $words_usages_vocabulary->Has_difficulties_using_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$words_usages_vocabulary->or_using_humor_appropriately ??
                                                                        ''"
                                                                        label="Has difficulty understanding /using humor appropriately"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $words_usages_vocabulary->or_using_humor_appropriately_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$words_usages_vocabulary->demonstrate_literal_use_and_understanding_of_language ??
                                                                        ''"
                                                                        label="Demonstrate literal use and understanding of language"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $words_usages_vocabulary->demonstrate_literal_use_and_understanding_of_language_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$words_usages_vocabulary->has_difficulty_with_multiple_meaning_words ??
                                                                        ''"
                                                                        label="Has difficulty with multiple meaning words"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $words_usages_vocabulary->has_difficulty_with_multiple_meaning_words_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$words_usages_vocabulary->uses_rote_or_recital_language ??
                                                                        ''"
                                                                        label="Uses rote / recital language"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $words_usages_vocabulary->uses_rote_or_recital_language_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$words_usages_vocabulary->demonstrate_idiosyncratic_word_use ??
                                                                        ''"
                                                                        label="Demonstrate idiosyncratic word use"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $words_usages_vocabulary->demonstrate_idiosyncratic_word_use_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$words_usages_vocabulary->has_a_large_vocabulary_with_little_comprehension ??
                                                                        ''"
                                                                        label="Has a large vocabulary with little comprehension"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $words_usages_vocabulary->has_a_large_vocabulary_with_little_comprehension_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$words_usages_vocabulary->reverses_personal_pronouns ??
                                                                        ''"
                                                                        label="Reverses personal pronouns"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $words_usages_vocabulary->reverses_personal_pronouns_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Conversational_Structure">
                                                            <section>
                                                                <div>

                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$sentence_structure->lacks_variety_in_use_of_sentence_structure ??
                                                                        ''"
                                                                        label="Lacks variety in use of sentence structure"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $sentence_structure->lacks_variety_in_use_of_sentence_structure_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Word_Structure">
                                                            <section>
                                                                <div>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$relaying_information->leaves_out_important_information_when_retelling_a_story_describing_an_event_giving_directions_or_giving_a_message ??
                                                                        ''"
                                                                        label="Leaves out important information when retelling a story, describing an event, giving directions or giving a message"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $relaying_information->leaves_out_important_information_when_retelling_a_story_describing_an_event_giving_directions_or_giving_a_message_secondary ??
                                                                            '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$relaying_information->has_difficulties_relaying_information_in_a_sequential_way ??
                                                                        ''"
                                                                        label="Has difficulties relaying information in a sequential way"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $relaying_information->has_difficulties_relaying_information_in_a_sequential_way_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$relaying_information->says_too_much_or_too_little ??
                                                                        ''"
                                                                        label="Says too much or too little"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $relaying_information->says_too_much_or_too_little_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$relaying_information->is_slow_in_answering_questions_in_class_or_work ??
                                                                        ''"
                                                                        label="Is slow in answering questions in class / work"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $relaying_information->is_slow_in_answering_questions_in_class_or_work_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Manner_Effectiveness">
                                                            <section>
                                                                <div>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$following_directions->has_difficulty_understanding_what_to_do ??
                                                                        ''"
                                                                        label="Has difficulty understanding what to do"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $following_directions->has_difficulty_understanding_what_to_do_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$following_directions->often_asks_for_repeats_or_explanations_of_a_direction_or_assignment ??
                                                                        ''"
                                                                        label="Often asks for repeats/ explanations of a direction or assignment"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $following_directions->often_asks_for_repeats_or_explanations_of_a_direction_or_assignment_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$following_directions->does_the_wrong_thing_after_clear_directions_have_been_given ??
                                                                        ''"
                                                                        label="Does the wrong thing after clear directions have been given"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $following_directions->does_the_wrong_thing_after_clear_directions_have_been_given_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$following_directions->doesnt_appear_to_watch_what_other_students_are_doing_for_information ??
                                                                        ''"
                                                                        label="Doesn’t appear to watch what other students are doing for information"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $following_directions->doesnt_appear_to_watch_what_other_students_are_doing_for_information_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$following_directions->doesnt_seek_help_in_following_directions_when_it_is_needed ??
                                                                        ''"
                                                                        label="Doesn’t seek help in following directions when it is needed"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $following_directions->doesnt_seek_help_in_following_directions_when_it_is_needed_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$following_directions->appears_to_have_difficulty_understanding_tone_of_voice ??
                                                                        ''"
                                                                        label="Appears to have difficulty understanding tone of voice"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $following_directions->appears_to_have_difficulty_understanding_tone_of_voice_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$following_directions->has_difficulty_comprehending_questions ??
                                                                        ''"
                                                                        label="Has difficulty comprehending questions"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $following_directions->has_difficulty_comprehending_questions_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Repair_Structures">
                                                            <section>
                                                                <div>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$attention_and_memory->has_an_excellent_rote_memory_with_poor_comprehension ??
                                                                        ''"
                                                                        label="has an excellent rote memory with poor comprehension"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $attention_and_memory->has_an_excellent_rote_memory_with_poor_comprehension_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$attention_and_memory->often_looks_away_or_ ??
                                                                        ''"
                                                                        label="Often looks away or ‘day dreams’ during lectures"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $attention_and_memory->often_looks_away_or_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$attention_and_memory->has_difficulty_remembering_orally_presented_information ??
                                                                        ''"
                                                                        label="Has difficulty remembering orally presented information"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $attention_and_memory->has_difficulty_remembering_orally_presented_information_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->

                                                                    <x-input-radio-or-check :checked="$attention_and_memory->has_a_hard_time_picking_out_the_main_points_of_an_oral_presentation_or_story ??
                                                                        ''"
                                                                        label="Has a hard time picking out the main points of an oral presentation or story"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $attention_and_memory->has_a_hard_time_picking_out_the_main_points_of_an_oral_presentation_or_story_secondary ??
                                                                            '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$attention_and_memory->demonstrates_difficulty_remembering_the_names_of_teachers_and_class_members ??
                                                                        ''"
                                                                        label="Demonstrates difficulty remembering the names of teachers and class members"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $attention_and_memory->demonstrates_difficulty_remembering_the_names_of_teachers_and_class_members_secondary ??
                                                                            '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$attention_and_memory->has_difficulty_shifting_attention ??
                                                                        ''"
                                                                        label="Has difficulty shifting attention"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $attention_and_memory->has_difficulty_shifting_attention_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$attention_and_memory->has_difficulty_with_joint_attention ??
                                                                        ''"
                                                                        label="Has difficulty with joint attention"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $attention_and_memory->has_difficulty_with_joint_attention_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$attention_and_memory->focuses_on_apparently_irrelevant_information_or_details ??
                                                                        ''"
                                                                        label="Focuses on apparently irrelevant information or details"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $attention_and_memory->focuses_on_apparently_irrelevant_information_or_details_secondary ?? '' }}"

                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$attention_and_memory->uses_delayed_r_immediate_echolalia ??
                                                                        ''"
                                                                        label="Uses delayed r immediate echolalia"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $attention_and_memory->uses_delayed_r_immediate_echolalia_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$attention_and_memory->repeats_passages_from_movie_songs_commercials_cartoons_etc ??
                                                                        ''"
                                                                        label="Repeats passages from movie, songs , commercials , cartoons etc"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $attention_and_memory->repeats_passages_from_movie_songs_commercials_cartoons_etc_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$attention_and_memory->does_not_responds_to_his_name ??
                                                                        ''"
                                                                        label="Does not responds to his name"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $attention_and_memory->does_not_responds_to_his_name_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$attention_and_memory->responds_to_his_name_inconsistently ??
                                                                        ''"
                                                                        label="Responds to his name inconsistently"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $attention_and_memory->responds_to_his_name_inconsistently_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$attention_and_memory->inconsistently_attends_to_verbal_stimuli ??
                                                                        ''"
                                                                        label="Inconsistently attends to verbal stimuli"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $attention_and_memory->inconsistently_attends_to_verbal_stimuli_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$attention_and_memory->response_to_speech_is_delayed ??
                                                                        ''"
                                                                        label="Response to speech is delayed"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $attention_and_memory->response_to_speech_is_delayed_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent">
                                                            <section>
                                                                <div>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->demonstrates_pragmatic_difficulties_despite_adequate_scores_on_standardized_tests ??
                                                                        ''"
                                                                        label="Demonstrates pragmatic difficulties despite adequate scores on standardized tests"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->demonstrates_pragmatic_difficulties_despite_adequate_scores_on_standardized_tests_secondary ??
                                                                            '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->looks_down_or_away_when_talking ??
                                                                        ''"
                                                                        label="Looks down or away when talking"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->looks_down_or_away_when_talking_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->makes_off_topic_comments ??
                                                                        ''"
                                                                        label="Makes off topic comments"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->makes_off_topic_comments_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_trouble_stating_opinion_and_reason_for_those_opinions_for_a_varieties_of_age_appropriate_topics ??
                                                                        ''"
                                                                        label="Has trouble stating opinion and reason for those opinions for a varieties of age appropriate topics"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_trouble_stating_opinion_and_reason_for_those_opinions_for_a_varieties_of_age_appropriate_topics_secondary ??
                                                                            '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_difficulty_initiating_conversations ??
                                                                        ''"
                                                                        label="Has difficulty initiating conversations"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_difficulty_initiating_conversations_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_difficulty_initiating_pay ??
                                                                        ''"
                                                                        label="Has difficulty initiating pay"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_difficulty_initiating_pay_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_hard_time_sustaining_topic_of_conversation ??
                                                                        ''"
                                                                        label="Has hard time sustaining topic of conversation"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_hard_time_sustaining_topic_of_conversation_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_difficulty_initiating_play ??
                                                                        ''"
                                                                        label="Has difficulty initiating play"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_difficulty_initiating_play_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_a_hard_time_sustaining_topic_of_conversation ??
                                                                        ''"
                                                                        label="Has a hard time sustaining topic of conversation"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_a_hard_time_sustaining_topic_of_conversation_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_a_hard_time_sustaining_play_with_others ??
                                                                        ''"
                                                                        label="Has a hard time sustaining play with others"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_a_hard_time_sustaining_play_with_others_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->demonstrate_problems_terminating_a_conversation ??
                                                                        ''"
                                                                        label="Demonstrate problems terminating a conversation"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->demonstrate_problems_terminating_a_conversation_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_difficulty_understanding_the_perspective_of_others ??
                                                                        ''"
                                                                        label="Has difficulty understanding the perspective of others"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_difficulty_understanding_the_perspective_of_others_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_trouble_responding_in_an_empathetic_manner ??
                                                                        ''"
                                                                        label="Has trouble responding in an empathetic manner"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_trouble_responding_in_an_empathetic_manner_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->interrupts_the_conversation_of_others ??
                                                                        ''"
                                                                        label="Interrupts the conversation of others"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->interrupts_the_conversation_of_others_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_difficulty_adapting_language_of_others ??
                                                                        ''"
                                                                        label="Has difficulty adapting language of others"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_difficulty_adapting_language_of_others_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_difficulty_adapting_language_to_audience_or_setting ??
                                                                        ''"
                                                                        label="Has difficulty adapting language to audience or setting"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_difficulty_adapting_language_to_audience_or_setting_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->talks_too_much_in_a_conversation_with_peers_or_adults ??
                                                                        ''"
                                                                        label="Talks too much in a conversation with peers / adults"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->talks_too_much_in_a_conversation_with_peers_or_adults_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->talks_too_little_in_a_conversation_with_peers_adults ??
                                                                        ''"
                                                                        label="Talks too little in a conversation with peers / adults"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->talks_too_little_in_a_conversation_with_peers_adults_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->bringing_up_the_same_topic_repeatedly ??
                                                                        ''"
                                                                        label="Bringing up the same topic repeatedly"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->bringing_up_the_same_topic_repeatedly_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->gives_recitative_or_redundant_information ??
                                                                        ''"
                                                                        label="Gives recitative / redundant information"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->gives_recitative_or_redundant_information_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->demonstrates_difficulty_taking_turns ??
                                                                        ''"
                                                                        label="Demonstrates difficulty taking turns"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->demonstrates_difficulty_taking_turns_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->does_not_use_language_to_regulate_others_action ??
                                                                        ''"
                                                                        label="Does not use language to regulate others action"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->does_not_use_language_to_regulate_others_action_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_difficulty_with_greetings_or_departures ??
                                                                        ''"
                                                                        label="Has difficulty with greetings / departures"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_difficulty_with_greetings_or_departures_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_difficulty_clarifying ??
                                                                        ''"
                                                                        label="Has difficulty clarifying"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_difficulty_clarifying_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_difficulty_asking_for_clarification ??
                                                                        ''"
                                                                        label="Has difficulty asking for clarification"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_difficulty_asking_for_clarification_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->has_difficulty_asking_question ??
                                                                        ''"
                                                                        label="Has difficulty asking question"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->has_difficulty_asking_question_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->use_obsessive_questions_or_comments_to_initiate_or_maintain_interaction ??
                                                                        ''"
                                                                        label="Use obsessive questions or comments to initiate or maintain interaction"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->use_obsessive_questions_or_comments_to_initiate_or_maintain_interaction_secondary ??
                                                                            '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->significant_differences_between_interaction_skills_with_peers_vs_adults ??
                                                                        ''"
                                                                        label="Significant differences between interaction skills with peers vs. adults"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->significant_differences_between_interaction_skills_with_peers_vs_adults_secondary ??
                                                                            '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->does_not_evoke_attention_appropriately ??
                                                                        ''"
                                                                        label="Does not evoke attention appropriately"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->does_not_evoke_attention_appropriately_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->difficulty_comprehending_social_rules ??
                                                                        ''"
                                                                        label="Difficulty comprehending social rules"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->difficulty_comprehending_social_rules_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->difficulty_asking_for_and_accepting_help ??
                                                                        ''"
                                                                        label="Difficulty asking for and accepting help"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->difficulty_asking_for_and_accepting_help_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->protest_in_inappropriate_or_atypical_ways ??
                                                                        ''"
                                                                        label="Protest in inappropriate or atypical ways"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->protest_in_inappropriate_or_atypical_ways_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->does_not_ask_permission_when_appropriate_to_do_so ??
                                                                        ''"
                                                                        label="Does not ask permission when appropriate to do so"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->does_not_ask_permission_when_appropriate_to_do_so_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->is_unaware_of_his_impact_on_others ??
                                                                        ''"
                                                                        label="Is unaware of his impact on others"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->is_unaware_of_his_impact_on_others_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->demonstrates_limited_range_of_communicative_functions ??
                                                                        ''"
                                                                        label="Demonstrates limited range of communicative functions"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->demonstrates_limited_range_of_communicative_functions_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->pre_suppositional_skills_are_weak ??
                                                                        ''"
                                                                        label="Pre-suppositional skills are weak"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->pre_suppositional_skills_are_weak_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$conversation_social_communication->appear_to_have_difficulty_judging_listener_interest ??
                                                                        ''"
                                                                        label="Appear to have difficulty judging listener interest"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $conversation_social_communication->appear_to_have_difficulty_judging_listener_interest_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_B">
                                                            <section>
                                                                <div>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->appears_more_interested_in_objectives_than_people ??
                                                                        ''"
                                                                        label="Appears more interested in objectives than people"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->appears_more_interested_in_objectives_than_people_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->does_not_establish_joint_focus ??
                                                                        ''"
                                                                        label="Does not establish joint focus"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->does_not_establish_joint_focus_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->does_not_anticipate_social_approach_of_other ??
                                                                        ''"
                                                                        label="Does not anticipate social approach of other"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->does_not_anticipate_social_approach_of_other_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->shows_little_awareness_of_peers_of_have_atypical_interactions ??
                                                                        ''"
                                                                        label="Shows little awareness of peers of have atypical interactions"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->shows_little_awareness_of_peers_of_have_atypical_interactions_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->does_not_observe_peers_with_curiosity ??
                                                                        ''"
                                                                        label="Does not observe peers with curiosity"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->does_not_observe_peers_with_curiosity_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->has_difficulty_with_parallel_play ??
                                                                        ''"
                                                                        label="Has difficulty with parallel play"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->has_difficulty_with_parallel_play_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->has_difficulty_with_associative_play ??
                                                                        ''"
                                                                        label="Has difficulty with associative play"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->has_difficulty_with_associative_play_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->has_difficulty_with_cooperative_play ??
                                                                        ''"
                                                                        label="Has difficulty with cooperative play"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->has_difficulty_with_cooperative_play_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->laughs_for_no_apparent_reason ??
                                                                        ''"
                                                                        label="Laughs for no apparent reason"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->laughs_for_no_apparent_reason_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->cries_for_no_apparent_reason ??
                                                                        ''"
                                                                        label="Cries for no apparent reason"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->cries_for_no_apparent_reason_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->has_difficulty_sharing ??
                                                                        ''"
                                                                        label="Has difficulty sharing" :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->has_difficulty_sharing_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->does_thing_s_for_himself_without_interacting_with_others ??
                                                                        ''"
                                                                        label="Does thing s for himself without interacting with others"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->does_thing_s_for_himself_without_interacting_with_others_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->has_limited_imaginative_or_pretending_play ??
                                                                        ''"
                                                                        label="Has limited imaginative / pretending play"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->has_limited_imaginative_or_pretending_play_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->demonstrate_difficulty_with_cause_and_effect ??
                                                                        ''"
                                                                        label="Demonstrate difficulty with cause and effect"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->demonstrate_difficulty_with_cause_and_effect_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->play_appears_ritualistic_or_recitation_or_rote ??
                                                                        ''"
                                                                        label="Play appears ritualistic / recitation / rote"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->play_appears_ritualistic_or_recitation_or_rote_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->does_not_response_appropriately_to_others_distress ??
                                                                        ''"
                                                                        label="Does not response appropriately to others distress"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->does_not_response_appropriately_to_others_distress_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check :checked="$play_skill->lack_of_joint_attention_such_as_showing_and_pointing ??
                                                                        ''"
                                                                        label="Lack of joint attention such as showing and pointing"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                        secondaryInputValue="{{ $play_skill->lack_of_joint_attention_such_as_showing_and_pointing_secondary ?? '' }}"
                                                                    </x-input-radio-or-check>
                                                                </div>
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
                            {{-- <livewire:functional-communication-list /> --}}
                            <!-- end row -->
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

@section('content')

    <div class="col-6  mb-3">
        <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
            data-bs-target=""><i class="fa fa-user"></i> Profile</button>
        <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
            data-bs-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> ADD</button>
    </div>
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Functional Communeacication Assessment</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Functional Communication Assessment List</span>
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
                                                                data-toggle="tab">Case History</a></li>
                                                        <li class="w-100"><a href="#Pragmatic_Objective"
                                                                data-toggle="tab">Speech</a>
                                                        </li>
                                                        <li class="w-100"><a href="#PERSONAL" data-toggle="tab">Body
                                                                Language</a></li>
                                                        <li class="w-100"><a href="#Topic_Maintenance"
                                                                data-toggle="tab">Words usages / Vocabulary</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Conversational_Structure"
                                                                data-toggle="tab">Sentence structure</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Word_Structure"
                                                                data-toggle="tab">Relaying information</a></li>
                                                        <li class="w-100"><a href="#Manner_Effectiveness"
                                                                data-toggle="tab">Following Directions</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Repair_Structures"
                                                                data-toggle="tab">Attention and Memory</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent"
                                                                data-toggle="tab">Conversation / Social
                                                                Communication</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Functional_Intent_B"
                                                                data-toggle="tab">Play skill</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9">
                                                <form>
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="Social_Communication">
                                                            <h3>Case History</h3>
                                                            <section>
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-firstname-input">Collection
                                                                                    Date:</label>
                                                                                <x-input-text name="date"
                                                                                    type="date" placeholder="">
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-lastname-input">Teacher:</label>
                                                                                <x-input-select name="Teacher_id"
                                                                                    :records="[]" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-phoneno-input">Candidate
                                                                                    ID:</label>
                                                                                <x-input-select name="candidate_i"
                                                                                    :records="[]" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="verticalnav-phoneno-input">Description:</label>
                                                                                <p>Functional Assessment Checklist (FACTS)
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="verticalnav-email-input">Instruction:</label>
                                                                                <p>Functional Assessment Checklist (FACTS)
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Pragmatic_Objective">
                                                            <h3>Speech</h3>
                                                            <section>
                                                                <form>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check name=""
                                                                        label="Talk too loud for the context"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check name=""
                                                                        label="Speech is hard to understand"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check name=""
                                                                        label="Speech calls attention of itself"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check name=""
                                                                        label="Voice is too hard" :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check name=""
                                                                        label="Voice is too low" :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check name=""
                                                                        label="Repeats words of parts of word when talking"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check name=""
                                                                        label="Talks fast, causing speech to be unclear"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check name=""
                                                                        label="Speech sounds monotone" :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check name=""
                                                                        label="Speech sounds sign-song" :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                </form>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="PERSONAL">
                                                            <h3>Body Language</h3>
                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Talk too quietly for the context"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Body posture is too rigid"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Body posture is too relaxed"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has noticed nervous mannerisms"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has limited use if gestures"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Demonstrates unusual facial expressions"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Shows little variation in facial expressions"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty understanding facial expressions / body language"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Use inappropriate body orientation or proximity in interaction"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Eye contact is fleeting"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Does not use eye contact"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Topic_Maintenance">
                                                            <h3>Words usages / Vocabulary</h3>
                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Repeats words / phrases / sentences"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulties using ad understanding non – literal meanings (proverbs, idioms, slangs, sarcasm, teasing etc),"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty understanding /using humor appropriately"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Demonstrate literal use and understanding of language"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty with multiple meaning words"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Uses rote / recital language"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Demonstrate idiosyncratic word use"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has a large vocabulary with little comprehension"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Reverses personal pronouns"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                    </form>
                                                                </div>
                                                            </section>

                                                        </div>
                                                        <div class="tab-pane" id="Conversational_Structure">
                                                            <h3>Sentence structure</h3>
                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Lacks variety in use of sentence structure"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Word_Structure">
                                                            <h3>Relaying information</h3>
                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Leaves out important information when retelling a story, describing an event, giving directions or giving a message"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulties relaying information in a sequential way"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Says too much or too little"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Is slow in answering questions in class / work"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Manner_Effectiveness">
                                                            <h3>Following Directions</h3>
                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty understanding what to do"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Often asks for repeats/ explanations of a direction or assignment"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Does the wrong thing after clear directions have been given"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Doesn’t appear to watch what other students are doing for information"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Doesn’t seek help in following directions when it is needed"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Appears to have difficulty understanding tone of voice"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty comprehending questions"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Repair_Structures">
                                                            <h3>Attention and Memory</h3>
                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="has an excellent rote memory with poor comprehension"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Often looks away or ‘day dreams’ during lectures"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty remembering orally presented information"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has a hard time picking out the main points of an oral presentation or story"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Demonstrates difficulty remembering the names of teachers and class members"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty shifting attention"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty with joint attention"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Focuses on apparently irrelevant information or details"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Uses delayed r immediate echolalia"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Repeats passages from movie, songs , commercials , cartoons etc"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Does not responds to his name"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Responds to his name inconsistently"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Inconsistently attends to verbal stimuli"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Response to speech is delayed"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
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
                                                                            label="Protective reactions"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <x-input-radio-or-check name="name"
                                                                            label="Equilibrium reaction"
                                                                            :records="$constants::$yesNoEn">
                                                                        </x-input-radio-or-check>
                                                                        <!-- end row -->
                                                                        <!-- end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_B">
                                                            <h3>Conversation / Social Communication</h3>
                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Demonstrates pragmatic difficulties despite adequate scores on standardized tests"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Looks down or away when talking"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Makes off topic comments"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has trouble stating opinion and reason for those opinions for a varieties of age appropriate topics"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty initiating conversations"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty initiating pay"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has hard time sustaining topic of conversation"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty initiating play"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has a hard time sustaining topic of conversation"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has a hard time sustaining play with others"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Demonstrate problems terminating a conversation"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty understanding the perspective of others"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has trouble responding in an empathetic manner"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Interrupts the conversation of others"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty adapting language of others"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty adapting language to audience or setting"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Talks too much in a conversation with peers / adults"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Speech is hard to understand"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Bringing up the same topic repeatedly"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Gives recitative / redundant information"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Demonstrates difficulty taking turns"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Does not use language to regulate others action"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty with greetings / departures"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty clarifying"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty asking for clarification"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty asking question"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Use obsessive questions or comments to initiate or maintain interaction"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Significant differences between interaction skills with peers vs. adults"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Does not evoke attention appropriately"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Difficulty comprehending social rules"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Difficulty asking for and accepting help"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Protest in inappropriate or atypical ways"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Does not ask permission when appropriate to do so"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Is unaware of his impact on others"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Demonstrates limited range of communicative functions"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Pre-suppositional skills are weak"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Appear to have difficulty judging listener interest"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_C">
                                                            <h3>Play skill</h3>
                                                            <section>
                                                                <div>
                                                                    <form>
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Appears more interested in objectives than people"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Does not establish joint focus"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Does not anticipate social approach of other"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Shows little awareness of peers of have atypical interactions"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Does not observe peers with curiosity"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty with parallel play"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty with associative play"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty with cooperative play"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Laughs for no apparent reason"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Cries for no apparent reason"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has difficulty sharing"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Does thing s for himself without interacting with others"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Has limited imaginative / pretending play"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Demonstrate difficulty with cause and effect"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Play appears ritualistic / recitation / rote"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Does not response appropriately to others distress"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                        <!--end row -->
                                                                        <x-input-radio-or-check name=""
                                                                            label="Lack of joint attention such as showing and pointing"
                                                                            :records="$constants::$yesNoEn"
                                                                            secondaryInputLabel="Excessive:">
                                                                        </x-input-radio-or-check>
                                                                        <!--end row -->
                                                                    </form>
                                                                </div>
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
                                        <x-input-text name="name" type="search" placeholder=""></x-input-text>
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
    <!-- end col -->
    <!-- end row -->


    <!--  Large modal example -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Functional Assessment (PA2eOT)</h5>
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
                                            <x-input-text name="date" type="date" placeholder=""></x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-lastname-input">Teacher:</label>
                                            <x-input-select name="student_id" :records="[]" />
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
                                            <p>Functional Assessment Checklist (FACTS)</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="verticalnav-email-input">Instruction:</label>
                                            <p>Functional Assessment Checklist (FACTS)</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                        <!-- Speech -->
                        <h3>Speech</h3>
                        <section>
                            <form>
                                <!--end row -->
                                <x-input-radio-or-check name="" label="Talk too loud for the context"
                                    :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                <!--end row -->
                                <x-input-radio-or-check name="" label="Speech is hard to understand"
                                    :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                <!--end row -->
                                <x-input-radio-or-check name="" label="Speech calls attention of itself"
                                    :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                <!--end row -->
                                <!--end row -->
                                <x-input-radio-or-check name="" label="Voice is too hard" :records="$constants::$yesNoEn"
                                    secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                <!--end row -->
                                <x-input-radio-or-check name="" label="Voice is too low" :records="$constants::$yesNoEn"
                                    secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                <!--end row -->
                                <!--end row -->
                                <x-input-radio-or-check name=""
                                    label="Repeats words of parts of word when talking" :records="$constants::$yesNoEn"
                                    secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                <!--end row -->
                                <!--end row -->
                                <x-input-radio-or-check name="" label="Talks fast, causing speech to be unclear"
                                    :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                <!--end row -->
                                <!--end row -->
                                <x-input-radio-or-check name="" label="Speech sounds monotone"
                                    :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                <!--end row -->
                                <!--end row -->
                                <x-input-radio-or-check name="" label="Speech sounds sign-song"
                                    :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                <!--end row -->
                            </form>
                        </section>
                        <!-- Body Language -->
                        <h3>Body Language</h3>
                        <section>
                            <div>
                                <form>
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Talk too quietly for the context"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Body posture is too rigid"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Body posture is too relaxed"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Has noticed nervous mannerisms"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Has limited use if gestures"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Demonstrates unusual facial expressions" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Shows little variation in facial expressions" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has difficulty understanding facial expressions / body language"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Use inappropriate body orientation or proximity in interaction"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Eye contact is fleeting"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Does not use eye contact"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                </form>
                            </div>
                        </section>
                        <!--Words usages / Vocabulary-->
                        <h3>Words usages / Vocabulary</h3>
                        <section>
                            <div>
                                <form>
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Repeats words / phrases / sentences"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="has_difficulties_using_ad_understanding"
                                        label="Has difficulties using ad understanding non – literal meanings (proverbs, idioms, slangs, sarcasm, teasing etc),"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has difficulty understanding /using humor appropriately"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Demonstrate literal use and understanding of language" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has difficulty with multiple meaning words" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Uses rote / recital language"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Demonstrate idiosyncratic word use"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has a large vocabulary with little comprehension" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Reverses personal pronouns"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                </form>
                            </div>
                        </section>
                        <!--Sentence structure-->
                        <h3>Sentence structure</h3>
                        <section>
                            <div>
                                <form>
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Lacks variety in use of sentence structure" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                </form>
                            </div>
                        </section>
                        <!--Relaying information-->
                        <h3>Relaying information</h3>
                        <section>
                            <div>
                                <form>
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Leaves out important information when retelling a story, describing an event, giving directions or giving a message"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has difficulties relaying information in a sequential way"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Says too much or too little"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Is slow in answering questions in class / work" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                </form>
                            </div>
                        </section>

                        <!-- Following Directions -->
                        <h3>Following Directions</h3>
                        <section>
                            <div>
                                <form>
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has difficulty understanding what to do" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Often asks for repeats/ explanations of a direction or assignment"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Does the wrong thing after clear directions have been given"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Doesn’t appear to watch what other students are doing for information"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Doesn’t seek help in following directions when it is needed"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Appears to have difficulty understanding tone of voice" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has difficulty comprehending questions" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                </form>
                            </div>
                        </section>
                        <!-- Attention and Memory -->
                        <h3>Attention and Memory</h3>
                        <section>
                            <div>
                                <form>
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="has an excellent rote memory with poor comprehension" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Often looks away or ‘day dreams’ during lectures" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has difficulty remembering orally presented information"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has a hard time picking out the main points of an oral presentation or story"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Demonstrates difficulty remembering the names of teachers and class members"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Has difficulty shifting attention"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Has difficulty with joint attention"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Focuses on apparently irrelevant information or details"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Uses delayed r immediate echolalia"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Repeats passages from movie, songs , commercials , cartoons etc"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Does not responds to his name"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Responds to his name inconsistently"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Inconsistently attends to verbal stimuli" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Response to speech is delayed"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                </form>
                            </div>
                        </section>
                        <!-- Conversation / Social Communication -->
                        <h3>Conversation / Social Communication</h3>
                        <section>
                            <div>
                                <form>
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Demonstrates pragmatic difficulties despite adequate scores on standardized tests"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Looks down or away when talking"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Makes off topic comments"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has trouble stating opinion and reason for those opinions for a varieties of age appropriate topics"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has difficulty initiating conversations" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Has difficulty initiating pay"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has hard time sustaining topic of conversation" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Has difficulty initiating play"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has a hard time sustaining topic of conversation" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has a hard time sustaining play with others" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Demonstrate problems terminating a conversation" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has difficulty understanding the perspective of others" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has trouble responding in an empathetic manner" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Interrupts the conversation of others"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has difficulty adapting language of others" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has difficulty adapting language to audience or setting"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Talks too much in a conversation with peers / adults" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Speech is hard to understand"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Bringing up the same topic repeatedly"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Gives recitative / redundant information" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Demonstrates difficulty taking turns"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Does not use language to regulate others action" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has difficulty with greetings / departures" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Has difficulty clarifying"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has difficulty asking for clarification" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Has difficulty asking question"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Use obsessive questions or comments to initiate or maintain interaction"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Significant differences between interaction skills with peers vs. adults"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Does not evoke attention appropriately" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Difficulty comprehending social rules"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Difficulty asking for and accepting help" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Protest in inappropriate or atypical ways" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Does not ask permission when appropriate to do so" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Is unaware of his impact on others"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Demonstrates limited range of communicative functions" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Pre-suppositional skills are weak"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Appear to have difficulty judging listener interest" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                </form>
                            </div>
                        </section>
                        <!-- play skill -->
                        <h3>Play skill</h3>
                        <section>
                            <div>
                                <form>
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Appears more interested in objectives than people" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Does not establish joint focus"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Does not anticipate social approach of other" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Shows little awareness of peers of have atypical interactions"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Does not observe peers with curiosity"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Has difficulty with parallel play"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Has difficulty with associative play"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Has difficulty with cooperative play"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Laughs for no apparent reason"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Cries for no apparent reason"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name="" label="Has difficulty sharing"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Does thing s for himself without interacting with others"
                                        :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Has limited imaginative / pretending play" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Demonstrate difficulty with cause and effect" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Play appears ritualistic / recitation / rote" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Does not response appropriately to others distress" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
                                    <!--end row -->
                                    <x-input-radio-or-check name=""
                                        label="Lack of joint attention such as showing and pointing" :records="$constants::$yesNoEn"
                                        secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                                    <!--end row -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
    <!-- form wizard init -->
    <script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>

@endsection
