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
                                <span class="d-none d-sm-block">Social Communication</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Social Communication Dtails</span>
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
                                                                data-toggle="tab">Social Communication</a></li>
                                                        <li class="w-100"><a href="#Pragmatic_Objective"
                                                                data-toggle="tab">Pragmatic Objective</a>
                                                        </li>
                                                        <li class="w-100"><a href="#PERSONAL"
                                                                data-toggle="tab">PERSONAL</a></li>
                                                        <li class="w-100"><a href="#Topic_Maintenance"
                                                                data-toggle="tab">Topic Maintenance</a></li>
                                                        <li class="w-100"><a href="#Conversational_Structure"
                                                                data-toggle="tab">Conversational Structure</a></li>
                                                        <li class="w-100"><a href="#Word_Structure"
                                                                data-toggle="tab">Word Structure</a></li>
                                                        <li class="w-100"><a href="#Manner_Effectiveness"
                                                                data-toggle="tab">Manner/Effectiveness</a></li>
                                                        <li class="w-100"><a href="#Repair_Structures"
                                                                data-toggle="tab">Repair Structures</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent"
                                                                data-toggle="tab">Functional Intent > A.Responsiveness</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Functional_Intent_B"
                                                                data-toggle="tab">Functional Intent > B.INSTRUMENTAL –
                                                                States needs</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_C"
                                                                data-toggle="tab">Functional Intent > C. Requesting</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_D"
                                                                data-toggle="tab">Functional Intent > D. Prosody</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_E"
                                                                data-toggle="tab">Functional Intent > E. Protests</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_G"
                                                                data-toggle="tab">Functional Intent > G. Humor</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_H"
                                                                data-toggle="tab">Functional Intent > H.
                                                                Greetings/Acknowledgements</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_I"
                                                                data-toggle="tab">Functional Intent > I. Problem Solving</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Functional_Intent_J"
                                                                data-toggle="tab">Functional Intent > J. Deceit</a></li>
                                                        <li class="w-100"><a href="#Academic_Communication"
                                                                data-toggle="tab">Academic Communication</a></li>
                                                        <li class="w-100"><a href="#Nonverbal_Communication"
                                                                data-toggle="tab">Nonverbal Communication</a></li>
                                                        <li class="w-100"><a href="#Perspective_Taking"
                                                                data-toggle="tab">Perspective Taking</a></li>
                                                        <li class="w-100"><a href="#REGULATORY"
                                                                data-toggle="tab">REGULATORY - Gives commands</a></li>
                                                        <li class="w-100"><a href="#Social_Emotional"
                                                                data-toggle="tab">Social-Emotional</a></li>
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
                                                                        <div class="col-lg-4 pull-left pb-2">
                                                                            <label class="p-2">Collection
                                                                                Date:</label>
                                                                            <x-input-text name="collection_date" type="date"
                                                                                placeholder="mm/dd/yyyy" value="{{$record->collection_date}}">
                                                                            </x-input-text>
                                                                        </div>

                                                                        <div class="col-lg-4 pull-left pb-2">
                                                                            <label class="p-2">Teacher: <span
                                                                                    class="text-danger text-bold">*</span></label>
                                                                            <x-input-select name="teacher_id"
                                                                                :records="$teachers" :selected="$record->teacher_id"></x-input-select>
                                                                        </div>

                                                                        <div class="col-lg-4 pull-left pb-2">
                                                                            <label class="p-2">Candidate ID:
                                                                                <span
                                                                                    class="text-danger text-bold">*</span></label>
                                                                            <x-input-select name="student_id"
                                                                                            :records="$students" :selected="$record->student_id"></x-input-select>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div
                                                                                class="col-xs-12 col-md-12 form-group pb-2">
                                                                                <label
                                                                                    class="col-md-12">Description:</label>
                                                                                <p>Social Communication checklist</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div
                                                                                class="col-xs-12 col-md-12 form-group pb-2">
                                                                                <label
                                                                                    class="col-md-12">Instruction:</label>
                                                                                <p> These social communication skills
                                                                                    develop over time. Read the behaviors
                                                                                    below and place an X in
                                                                                    the appropriate column that describes
                                                                                    how your child uses words/language, no
                                                                                    words (gestures –
                                                                                    preverbal) or does not yet show a
                                                                                    behavior.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Pragmatic_Objective">
                                                            <section>
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->interaction_with_adults ?? ''" name=""
                                                                    label="Interaction with adults " :records="$constants::$socialCommunication"
                                                                    :isVertical="false" secondaryInputValue="{{ $pragmatic_objective->interaction_with_adults_secondary }}">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->one ?? ''" name=""
                                                                    label="Interaction with age-appropriate peers"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->interaction_with_younger_children ?? ''" name=""
                                                                    label="Interaction with younger children"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->waiting_for_a_response_from_peers ?? ''" name=""
                                                                    label="Waiting for a response from peers"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->negotiating_deals ?? ''" name="" label="Negotiating deals"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->taking_turns ?? ''"  name="" label="Taking turns"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->ability_to_interact_with_many_individuals_simultaneously ?? ''" name=""
                                                                    label="Ability to interact with many individuals simultaneously"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->ability_to_establish_multiple_friendships ?? ''" name=""
                                                                    label="Ability to establish multiple friendships"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->knowing_when_to_persist_or_let_go_of_an_idea ?? ''" name=""
                                                                    label="Knowing when to persist or let go of an idea"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->interpreting_facial_expressions_and_voices ?? ''" name=""
                                                                    label="Interpreting facial expressions and voices"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->understanding_the_rules_of_the_game ?? ''" name=""
                                                                    label="Understanding the rules of the game"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->expressing_various_appropriate_expressions ?? ''" name=""
                                                                    label="Expressing various appropriate expressions"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->receiving_and_giving_gifts ?? ''" name=""
                                                                    label="Receiving and giving gifts" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->understanding_sharing_and_the_concept_of_give_and_take ?? ''" name=""
                                                                    label="Understanding sharing and the concept of give and take"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->participation_in_group_activities ?? ''" name=""
                                                                    label="Participation in group activities"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->passive_tendencies ?? ''" name="" label="Passive tendencies"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->aggressive_tendencies ?? ''" name=""
                                                                    label="Aggressive tendencies" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->responsiveness ?? ''" name="" label="Responsiveness"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$pragmatic_objective->ability_to_handle_being_left_out ?? ''" name=""
                                                                    label="Ability to handle being “left out”"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="PERSONAL">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$personal->expresses_feelings ?? ''" name="" label="Expresses feelings"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$personal->identifies_feelings ?? ''" name=""
                                                                    label="Identifies feelings (I'm happy.)"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$personal->explains_feelings ?? ''" name=""
                                                                    label="Explains feelings (I'm happy because it's my birthday)n"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$personal->provides_excuses_or_reasons ?? ''" name=""
                                                                    label="Provides excuses or reasons" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$personal->offers_an_opinion_with_support ?? ''" name=""
                                                                    label="Offers an opinion with support"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$personal->complains ?? ''" name="" label="Complains"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$personal->blames_others ?? ''" name="" label="Blames others"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$personal->provides_pertinent_information_on_request ?? ''" name=""
                                                                    label="Provides pertinent information on request (2 or 3 of the following: name, address, phone, birthdate)"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Topic_Maintenance">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$topic_maintenance->ability_to_establish_a_topic ?? ''" name=""
                                                                    label="Ability to establish a topic" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$topic_maintenance->ability_to_maintain_topic_relevancy ?? ''" name=""
                                                                    label="Ability to maintain topic relevancy"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$topic_maintenance->ability_to_change_a_topic_using_signals ?? ''" name=""
                                                                    label="Ability to change a topic using signals"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$topic_maintenance->ability_to_change_a_topic_using_verbal_means ?? ''" name=""
                                                                    label="Ability to change a topic using verbal means"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$topic_maintenance->relevancy_of_information ?? ''" name=""
                                                                    label="Relevancy of information" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$topic_maintenance->ability_to_interrupt_appropriately ?? ''" name=""
                                                                    label="Ability to interrupt appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$topic_maintenance->ability_to_terminate_the_conversation ?? ''" name=""
                                                                    label="Ability to terminate the conversation"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Conversational_Structure">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$conversational_structure->ability_to_initiate_a_conversation ?? ''" name=""
                                                                    label="Ability to initiate a conversation"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$conversational_structure->ability_to_establish_a_conversation_outside_of_the_interest_area ?? ''" name=""
                                                                    label="Ability to establish a conversation outside of the interest area"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$conversational_structure->ability_to_acknowledge_others_in_conversation ?? ''" name=""
                                                                    label="Ability to acknowledge others in conversation"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$conversational_structure->ability_to_delete_redundant_information_appropriately ?? ''" name=""
                                                                    label="Ability to delete redundant information appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$conversational_structure->ability_to_order_information_appropriately ?? ''" name=""
                                                                    label="Ability to order information appropriately (new info follows old)"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$conversational_structure->use_of_pedantic_speech ?? ''" name=""
                                                                    label="Use of pedantic speech" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Word_Structure">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$Word_Structure->ability_to_use_generals_or_specifics ?? ''" name=""
                                                                    label="Ability to use generals/specifics"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$Word_Structure->pronoun_use ?? ''" name="" label="Pronoun use"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$Word_Structure->use_of_word_referents ?? ''" name=""
                                                                    label="Use of word referents" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$Word_Structure->ability_to_employee ?? ''" name=""
                                                                    label="Ability to employ Theory of Mind (presuppostion)"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Manner_Effectiveness">
                                                            <!-- Bank Details -->
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$manner_effectiveness->lie_ambiguous_confusing_information_share ?? ''" name=""
                                                                    label="Lie, ambiguous, confusing information share"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$manner_effectiveness->provides_relevant_information ?? ''" name=""
                                                                    label="Provides relevant information" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$manner_effectiveness->truthfulness_of_information ?? ''" name=""
                                                                    label="Truthfulness of information (grandiosity)"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$manner_effectiveness->ability_to_establish_joint_activity ?? ''" name=""
                                                                    label="Ability to establish joint activity"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$manner_effectiveness->tendency_to_present_personal_opinions_as_factual ?? ''" name=""
                                                                    label="Tendency to present personal opinions as factual"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Repair_Structures">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$repair_structures->requests_clarification_as_needed ?? ''" name=""
                                                                    label="Requests clarification as needed"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$repair_structures->spontaneously_provides_additional_information ?? ''" name=""
                                                                    label="Spontaneously provides additional information"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$repair_structures->requests_repetition_of_information_for_clarification_purposes ?? ''" name=""
                                                                    label="Requests repetition of information for clarification purposes"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent">
                                                            <section>
                                                                <x-input-radio-or-check :checked="$responsiveness->looks_at_speaker_when_called ?? ''" name=""
                                                                    label="Looks at speaker when called" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$responsiveness->delay_of_response ?? ''" name="" label="Delay of response"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$responsiveness->ability_to_label_information_appropriately ?? ''" name=""
                                                                    label="Ability to label information appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$responsiveness->ability_to_describe_objects_appropriately ?? ''" name=""
                                                                    label="Ability to describe objects appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$responsiveness->ability_to_describe_events_appropriately ?? ''" name=""
                                                                    label="Ability to describe events appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$responsiveness->ability_to_state_facts_appropriately ?? ''" name=""
                                                                    label="Ability to state facts appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$responsiveness->ability_to_provide_clarification_appropriately ?? ''" name=""
                                                                    label="Ability to provide clarification appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_B">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$instrumental_states_needs->makes_polite_requests ?? ''" name=""
                                                                    label="Makes polite requests" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$instrumental_states_needs->makes_choices ?? ''"  name="" label="Makes choices"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$instrumental_states_needs->gives_description_of_an_object_wanted ?? ''"  name=""
                                                                    label="Gives description of an object wanted"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$instrumental_states_needs->expresses_a_specific_personal_need ?? ''"  name=""
                                                                    label="Expresses a specific personal need"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$instrumental_states_needs->requests_help ?? ''"  name="" label="Requests help"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_C">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$requesting->ability_to_request_information_appropriately ?? ''" name=""
                                                                    label="Ability to request information appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$requesting->ability_to_request_permission_appropriately ?? ''" name=""
                                                                    label="Ability to request permission appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$requesting->ability_to_request_yes_no_responses_appropriately ?? ''" name=""
                                                                    label="Ability to request yes-no responses appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$requesting->ability_to_use_wh_questions_appropriately ?? ''" name=""
                                                                    label="Ability to use Wh-Questions appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$requesting->ability_to_request_an_action_of_another_appropriately ?? ''" name=""
                                                                    label="Ability to request an action of another appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$requesting->ability_to_request_clarification_appropriately ?? ''" name=""
                                                                    label="Ability to request clarification appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$requesting->ability_to_request_attention_appropriately ?? ''" name=""
                                                                    label="Ability to request attention appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$requesting->ability_to_request_help_appropriately ?? ''" name=""
                                                                    label="Ability to request help appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>

                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_D">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$prosody->ability_to_use_appropriate_rate_of_speech ?? ''" name=""
                                                                    label="Ability to use appropriate rate of speech"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$prosody->ability_to_use_appropriate_tone_of_voice ?? ''" name=""
                                                                    label="Ability to use appropriate tone of voice"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$prosody->ability_to_use_appropriate_pitch ?? ''" name=""
                                                                    label="Ability to use appropriate pitch"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$prosody->ability_to_use_appropriate_loudness ?? ''" name=""
                                                                    label="Ability to use appropriate loudness"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$prosody->ability_to_comprehend_implied_meanings_via_tone_of_voice ?? ''" name=""
                                                                    label="Ability to comprehend implied meanings via tone of voice"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$prosody->ability_to_comprehend_implied_meanings_via_inflectional_cues ?? ''" name=""
                                                                    label="Ability to comprehend implied meanings via inflectional cues"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>

                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_E">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$protests->ability_to_state_his_opinion_using_appropriate_means ?? ''" name=""
                                                                    label="Ability to state his opinion using appropriate means"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$protests->ability_to_disagree ?? ''" name="" label="Ability to disagree"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_F">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$style_of_Conversation->ability_to_shift_the_style_of_conversation_according_to_person ?? ''" name=""
                                                                    label="Ability to shift the style of conversation according to person"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$style_of_Conversation->ability_to_shift_the_style_of_conversation_according_to_the_setting ?? ''" name=""
                                                                    label="Ability to shift the style of conversation according to the setting"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$style_of_Conversation->ability_to_shift_the_style_of_conversation_according_to_humor ?? ''" name=""
                                                                    label="Ability to shift the style of conversation according to humor"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$style_of_Conversation->ability_to_engage_a_listener_appropriately ?? ''" name=""
                                                                    label="Ability to engage a listener appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$style_of_Conversation->ability_to_use_politeness ?? ''" name=""
                                                                    label="Ability to use politeness" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$style_of_Conversation->appropriateness_to_the_situation ?? ''" name=""
                                                                    label="Appropriateness to the situation"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$style_of_Conversation->ability_to_recognize_others_moods ?? ''" name=""
                                                                    label="Ability to recognize other’s moods"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$style_of_Conversation->ability_to_differentiate_requests_from_demands ?? ''" name=""
                                                                    label="Ability to differentiate requests from demands"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_G">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$humor->comprehends_humor ?? ''" name="" label="Comprehends humor"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$humor->uses_humor_appropriately ?? ''" name=""
                                                                    label="Uses humor appropriately" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_H">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$greetings_acknowledgements->provides_greetings ?? ''" name="" label="Provides greetings"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$greetings_acknowledgements->uses_greetings ?? ''" name="" label="Uses greetings"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$greetings_acknowledgements->ability_to_acknowledge_the_presence_of_another_individual ?? ''" name=""
                                                                    label="Ability to acknowledge the presence of another individual"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>

                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_I">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$problem_solving->ability_to_solve_problems_affecting_himself ?? ''" name=""
                                                                    label="Ability to solve problems affecting himself"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$problem_solving->ability_to_solve_problems_affecting_others ?? ''" name=""
                                                                    label="Ability to solve problems affecting others"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$problem_solving->ability_to_recognize_problems_affecting_others ?? ''" name=""
                                                                    label="Ability to recognize problems affecting others"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$problem_solving->ability_to_recognize_problems_affecting_himself ?? ''" name=""
                                                                    label="Ability to recognize problems affecting himself"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$problem_solving->ability_to_establish_cause_effect ?? ''" name=""
                                                                    label="Ability to establish cause-effect"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$problem_solving->ability_to_use_conflict_resolution ?? ''" name=""
                                                                    label="Ability to use conflict-resolution"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_J">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$deceit->uses_language_to_deceive ?? ''" name=""
                                                                    label="Uses language to deceive" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$deceit->lies ?? ''" name="" label="Lies"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Academic_Communication">

                                                            <section>
                                                                <div class="title">
                                                                    <h3><b>This section is designed to compare the
                                                                            individual’s ability to communicate in an
                                                                            academic setting
                                                                            with other students.</b></h3>
                                                                </div>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check  :checked="$academy_communication->ability_to_respond_appropriately_to_teacher_requests ?? ''" name=""
                                                                    label="Ability to respond appropriately to teacher requests"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$academy_communication->ability_to_reorient_to_academic_agenda_appropriately ?? ''" name=""
                                                                    label="Ability to reorient to academic agenda appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$academy_communication->ability_to_obtain_teachers_attention_appropriately ?? ''" name=""
                                                                    label="Ability to obtain teacher’s attention appropriately"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$academy_communication->ability_to_request_clarification_from_teacher ?? ''" name=""
                                                                    label="Ability to request clarification from teacher"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$academy_communication->ability_to_participate_in_classroom_discussions ?? ''" name=""
                                                                    label="Ability to participate in classroom discussions"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$academy_communication->ability_to_interact_with_classroom_peers ?? ''" name=""
                                                                    label="Ability to interact with classroom peers"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$academy_communication->ability_to_paraphrase_text ?? ''" name=""
                                                                    label="Ability to paraphrase text" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$academy_communication->ability_to_summarize_a_story_providing_key_information ?? ''" name=""
                                                                    label="Ability to summarize a story providing key information"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$academy_communication->ability_to_respond_to_questions_requiring_inferential_reasoning ?? ''" name=""
                                                                    label="Ability to respond to questions requiring inferential reasoning"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Nonverbal_Communication">

                                                            <section>
                                                                <div class="title">
                                                                    <h3><b>This section is designed to compare the
                                                                            individual’s ability to communicate with
                                                                            others using
                                                                            non-verbal means.</b></h3>
                                                                </div>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$nonverbal_communication->ability_to_recognize_personal_space_boundaries ?? ''" name=""
                                                                    label="Ability to recognize “personal space” boundaries"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$nonverbal_communication->ability_to_touch_appropriatel ?? ''" name=""
                                                                    label="Ability to touch appropriatel"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$nonverbal_communication->comprehends_facial_expression ?? ''" name=""
                                                                    label="Comprehends facial expression"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$nonverbal_communication->comprehends_eye_gaze ?? ''" name="" label="Comprehends eye gaze"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$nonverbal_communication->comprehends_gestures ?? ''" name="" label="Comprehends gestures"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$nonverbal_communication->comprehends_body_language ?? ''" name=""
                                                                    label="Comprehends body language" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$nonverbal_communication->ability_to_use_facial_expression ?? ''" name=""
                                                                    label="Ability to use facial expression"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$nonverbal_communication->ability_to_use_eye_gaze ?? ''" name=""
                                                                    label="Ability to use eye gaze" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$nonverbal_communication->ability_to_use_gestures ?? ''" name=""
                                                                    label="Ability to use gestures" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$nonverbal_communication->ability_to_use_body_language ?? ''" name=""
                                                                    label="Ability to use body language" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$nonverbal_communication->ability_to_use_eye_contact ?? ''" name=""
                                                                    label="Ability to use eye contact" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>

                                                        </div>
                                                        <div class="tab-pane" id="Perspective_Taking">

                                                            <section>
                                                                <div class="title">
                                                                    <h3><b>This section is designed to compare the
                                                                            individual’s ability to recognize and use
                                                                            appropriate
                                                                            perspective taking.</b></h3>
                                                                </div>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$perspective_taking->ability_to_recognize_anothers_viewpoints ?? ''" name=""
                                                                    label="Ability to recognize another’s viewpoints"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$perspective_taking->ability_to_recognize_anothers_interests ?? ''" name=""
                                                                    label="Ability to recognize another’s interests"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$perspective_taking->ability_to_recognize_anothers_feelings ?? ''" name=""
                                                                    label="Ability to recognize another’s feelings"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$nonverbal_communication->ability_to_demonstrate_concern_for_anothers_problems ?? ''" name=""
                                                                    label="Ability to demonstrate concern for another’s problems"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="REGULATORY">

                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$regulatory_gives_commands->gives_directions_to_play_a_game ?? ''" name=""
                                                                    label="Gives directions to play a game"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$regulatory_gives_commands->gives_directions_to_make_something ?? ''" name=""
                                                                    label="Gives directions to make something"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$regulatory_gives_commands->changes_the_style_of_commands_or_requests_depending_on_who_the_child_is_speaking_to_and_what_the_child_wants ?? ''" name="" label="Changes the style of commands or requests depending on who the child is speaking to and what the
                                                                               child wants" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                            </section>

                                                        </div>
                                                        <div class="tab-pane" id="Social_Emotional">

                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$social_emotional->ability_to_recognize_personal_emotional_states ?? ''" name=""
                                                                    label="Ability to recognize personal emotional states"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$social_emotional->ability_to_recognize_emotional_states_in_others ?? ''" name=""
                                                                    label="Ability to recognize emotional states in others"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$social_emotional->ability_to_express_personal_emotional_state ?? ''" name=""
                                                                    label="Ability to express personal emotional state"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$social_emotional->perfectionist_quality ?? ''" name=""
                                                                    label="Perfectionist quality" :records="$constants::$socialCommunication"
                                                                    :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$social_emotional->ability_to_use_appropriate_self_control ?? ''" name=""
                                                                    label="Ability to use appropriate self-control"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$social_emotional->ability_to_lose_a_game_graciously ?? ''" name=""
                                                                    label="Ability to lose a game graciously"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check :checked="$social_emotional->degree_of_anxiety_in_social_settings ?? ''" name=""
                                                                    label="Degree of anxiety in social settings"
                                                                    :records="$constants::$socialCommunication" :isVertical="false">
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

    <!-- end col -->
    <!-- end row -->
    {{-- ===================== --}}
    <!--  Large modal example -->
    <div class="modal fade social-communication-view" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Social Communication (PA2bOT)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="vertical-example" class="vertical-wizard">
                        <!-- Seller Details -->
                        <h3>Social Communication</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col-lg-4 pull-left pb-2">
                                        <label class="p-2">Collection Date:</label>
                                        <x-input-text name="collection_date" type="date" placeholder="mm/dd/yyyy" value="{{$record->collection_date}}">
                                        </x-input-text>
                                    </div>

                                    <div class="col-lg-4 pull-left pb-2">
                                        <label class="p-2">Teacher: <span
                                                class="text-danger text-bold">*</span></label>
                                        <x-input-select name="teacher_id" :records="$teachers"></x-input-select>
                                    </div>

                                    <div class="col-lg-4 pull-left pb-2">
                                        <label class="p-2">Candidate ID: <span
                                                class="text-danger text-bold">*</span></label>
                                        <select class="form-control strip-tags select2 form-select" id="StudentID"
                                            required="" name="StudentID">
                                            <option selected="selected" value="">-- Select --</option>
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
                                            <option value="14">Adiyan Islam Danial</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="col-xs-12 col-md-12 form-group pb-2">
                                            <label class="col-md-12">Description:</label>
                                            <p>Social Communication checklist</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="col-xs-12 col-md-12 form-group pb-2">
                                            <label class="col-md-12">Instruction:</label>
                                            <p> These social communication skills develop over time. Read the behaviors
                                                below and place an X in
                                                the appropriate column that describes how your child uses words/language, no
                                                words (gestures –
                                                preverbal) or does not yet show a behavior.</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>

                        <!-- Company Document -->
                        <h3>Pragmatic Objective</h3>
                        <section>
                            <x-input-radio-or-check name="" label="Interaction with adults " :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Interaction with age-appropriate peers"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Interaction with younger children" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Waiting for a response from peers" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Negotiating deals" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Taking turns" :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to interact with many individuals simultaneously"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to establish multiple friendships"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Knowing when to persist or let go of an idea"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Interpreting facial expressions and voices"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Understanding the rules of the game" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Expressing various appropriate expressions"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Receiving and giving gifts" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Understanding sharing and the concept of give and take"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Participation in group activities" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Passive tendencies" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Aggressive tendencies" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Responsiveness" :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to handle being “left out”" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>PERSONAL</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Expresses feelings" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Identifies feelings (I'm happy.)" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Explains feelings (I'm happy because it's my birthday)n"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Provides excuses or reasons" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Offers an opinion with support" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Complains" :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Blames others" :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name=""
                                label="Provides pertinent information on request (2 or 3 of the following: name, address, phone, birthdate)"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <!-- Bank Details -->
                        <h3>Topic Maintenance</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to establish a topic" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to maintain topic relevancy" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to change a topic using signals"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to change a topic using verbal means"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Relevancy of information" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to interrupt appropriately" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to terminate the conversation"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>

                        <!-- Bank Details -->
                        <h3>Conversational Structure</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to initiate a conversation" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name=""
                                label="Ability to establish a conversation outside of the interest area" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to acknowledge others in conversation"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to delete redundant information appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name=""
                                label="Ability to order information appropriately (new info follows old)"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Use of pedantic speech" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <!-- Bank Details -->
                        <h3>Word Structure</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to use generals/specifics" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Pronoun use" :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Use of word referents" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to employ Theory of Mind (presuppostion)"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <!-- Bank Details -->
                        <h3>Manner/Effectiveness</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Lie, ambiguous, confusing information share"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Provides relevant information" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Truthfulness of information (grandiosity)"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to establish joint activity" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Tendency to present personal opinions as factual"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Repair Structures</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Requests clarification as needed" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Spontaneously provides additional information"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name=""
                                label="Requests repetition of information for clarification purposes" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                        </section>

                        <h3>Functional Intent > A.Responsiveness</h3>
                        <section>
                            <x-input-radio-or-check name="" label="Looks at speaker when called" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Delay of response" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to label information appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to describe objects appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to describe events appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to state facts appropriately" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to provide clarification appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>

                        <h3>Functional Intent > B.INSTRUMENTAL – States needs</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Makes polite requests" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Makes choices" :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Gives description of an object wanted"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Expresses a specific personal need" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Requests help" :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>

                        <h3>Functional Intent > C. Requesting</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to request information appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to request permission appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to request yes-no responses appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to use Wh-Questions appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to request an action of another appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to request clarification appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to request attention appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to request help appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Functional Intent > D. Prosody</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to use appropriate rate of speech"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to use appropriate tone of voice"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to use appropriate pitch" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to use appropriate loudness" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to comprehend implied meanings via tone of voice"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name=""
                                label="Ability to comprehend implied meanings via inflectional cues" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Functional Intent > E. Protests</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to state his opinion using appropriate means"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to disagree" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3> Functional Intent > F. Style of Conversation</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name=""
                                label="Ability to shift the style of conversation according to person" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name=""
                                label="Ability to shift the style of conversation according to the setting"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name=""
                                label="Ability to shift the style of conversation according to humor" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to engage a listener appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to use politeness" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Appropriateness to the situation" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to recognize other’s moods" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to differentiate requests from demands"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Functional Intent > G. Humor</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Comprehends humor" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Uses humor appropriately" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Functional Intent > H. Greetings/Acknowledgements</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Provides greetings" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Uses greetings" :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name=""
                                label="Ability to acknowledge the presence of another individual" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Functional Intent > I. Problem Solving</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to solve problems affecting himself"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to solve problems affecting others"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to recognize problems affecting others"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to recognize problems affecting himself"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to establish cause-effect" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to use conflict-resolution" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                        </section>

                        <h3>Functional Intent > J. Deceit</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Uses language to deceive" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Lies" :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Academic Communication</h3>
                        <section>
                            <div class="title">
                                <h3><b>This section is designed to compare the individual’s ability to communicate in an
                                        academic setting
                                        with other students.</b></h3>
                            </div>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to respond appropriately to teacher requests"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to reorient to academic agenda appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to obtain teacher’s attention appropriately"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to request clarification from teacher"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to participate in classroom discussions"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to interact with classroom peers"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to paraphrase text" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to summarize a story providing key information"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name=""
                                label="Ability to respond to questions requiring inferential reasoning" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                        </section>

                        <h3>Nonverbal Communication</h3>
                        <section>
                            <div class="title">
                                <h3><b>This section is designed to compare the individual’s ability to communicate with
                                        others using
                                        non-verbal means.</b></h3>
                            </div>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to recognize “personal space” boundaries"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to touch appropriatel" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Comprehends facial expression" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Comprehends eye gaze" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Comprehends gestures" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Comprehends body language" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to use facial expression" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to use eye gaze" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to use gestures" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to use body language" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to use eye contact" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Perspective Taking</h3>
                        <section>
                            <div class="title">
                                <h3><b>This section is designed to compare the individual’s ability to recognize and use
                                        appropriate
                                        perspective taking.</b></h3>
                            </div>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to recognize another’s viewpoints"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to recognize another’s interests"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to recognize another’s feelings"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to demonstrate concern for another’s problems"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3> REGULATORY - Gives commands</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Gives directions to play a game" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Gives directions to make something" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Changes the style of commands or requests depending on who the child is speaking to and what the
                                                              child wants" :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Social-Emotional</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to recognize personal emotional states"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to recognize emotional states in others"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to express personal emotional state"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Perfectionist quality" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to use appropriate self-control"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Ability to lose a game graciously" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="" label="Degree of anxiety in social settings" :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
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
