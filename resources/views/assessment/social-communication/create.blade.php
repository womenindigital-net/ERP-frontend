@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
    <style>
        .wizard .steps > ul > li a {
            padding-right: 0 !important;
        }
        .wizard .steps > ul > li a {
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
                                    <form method="POST" action="{{route('social-communication.store')}}">
                                    @csrf
                                    <!-- Wizard container -->
                                    <div class="wizard-container">
                                        <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                            <div class="col-sm-3 col-md-3">
                                                <div id="wizard-navigation">
                                                    <ul class="wizard-navigation">
                                                        <li class="w-100"><a href="#Social_Communication"
                                                                             data-toggle="tab">Social Communication</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Pragmatic_Objective"
                                                                             data-toggle="tab">Pragmatic Objective</a>
                                                        </li>
                                                        <li class="w-100"><a href="#PERSONAL"
                                                                             data-toggle="tab">PERSONAL</a></li>
                                                        <li class="w-100"><a href="#Topic_Maintenance"
                                                                             data-toggle="tab">Topic Maintenance</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Conversational_Structure"
                                                                             data-toggle="tab">Conversational
                                                                Structure</a></li>
                                                        <li class="w-100"><a href="#Word_Structure"
                                                                             data-toggle="tab">Word Structure</a></li>
                                                        <li class="w-100"><a href="#Manner_Effectiveness"
                                                                             data-toggle="tab">Manner/Effectiveness</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Repair_Structures"
                                                                             data-toggle="tab">Repair Structures</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Functional_Intent"
                                                                             data-toggle="tab">Functional Intent >
                                                                A.Responsiveness</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Functional_Intent_B"
                                                                             data-toggle="tab">Functional Intent >
                                                                B.INSTRUMENTAL –
                                                                States needs</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_C"
                                                                             data-toggle="tab">Functional Intent > C.
                                                                Requesting</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_D"
                                                                             data-toggle="tab">Functional Intent > D.
                                                                Prosody</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_E"
                                                                             data-toggle="tab">Functional Intent > E.
                                                                Protests</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_G"
                                                                             data-toggle="tab">Functional Intent > G.
                                                                Humor</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_H"
                                                                             data-toggle="tab">Functional Intent > H.
                                                                Greetings/Acknowledgements</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_I"
                                                                             data-toggle="tab">Functional Intent > I.
                                                                Problem Solving</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Functional_Intent_J"
                                                                             data-toggle="tab">Functional Intent > J.
                                                                Deceit</a></li>
                                                        <li class="w-100"><a href="#Academic_Communication"
                                                                             data-toggle="tab">Academic
                                                                Communication</a></li>
                                                        <li class="w-100"><a href="#Nonverbal_Communication"
                                                                             data-toggle="tab">Nonverbal
                                                                Communication</a></li>
                                                        <li class="w-100"><a href="#Perspective_Taking"
                                                                             data-toggle="tab">Perspective Taking</a>
                                                        </li>
                                                        <li class="w-100"><a href="#REGULATORY"
                                                                             data-toggle="tab">REGULATORY - Gives
                                                                commands</a></li>
                                                        <li class="w-100"><a href="#Social_Emotional"
                                                                             data-toggle="tab">Social-Emotional</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="Social_Communication">
                                                        <section>
                                                            <div class="row">
                                                                <div class="col-lg-4 pull-left pb-2">
                                                                    <label class="p-2">Collection
                                                                        Date:</label>
                                                                    <x-input-text name="collection_date" type="date"
                                                                                  placeholder="mm/dd/yyyy"/>
                                                                </div>

                                                                <div class="col-lg-4 pull-left pb-2">
                                                                    <label class="p-2">Teacher: <span
                                                                            class="text-danger text-bold">*</span></label>
                                                                    <x-input-select name="teacher_id"
                                                                                    :records="[]"/>
                                                                </div>

                                                                <div class="col-lg-4 pull-left pb-2">
                                                                    <label class="p-2">Candidate ID:
                                                                        <span
                                                                            class="text-danger text-bold">*</span></label>
                                                                    <x-input-select name="student_id"
                                                                                    :records="[]"/>
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
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Pragmatic_Objective">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                label="Interaction with adults "
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check name="one"
                                                                                    label="Interaction with age-appropriate peers"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Interaction with younger children"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                name="waiting_for_a_response_from_peers"
                                                                label="Waiting for a response from peers"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Negotiating deals"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Taking turns"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to interact with many individuals simultaneously"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to establish multiple friendships"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Knowing when to persist or let go of an idea"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Interpreting facial expressions and voices"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Understanding the rules of the game"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Expressing various appropriate expressions"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Receiving and giving gifts"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Understanding sharing and the concept of give and take"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Participation in group activities"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Passive tendencies"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Aggressive tendencies"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Responsiveness"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to handle being “left out”"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="PERSONAL">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Expresses feelings"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false"/>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check name="identifies_feelings"
                                                                                    label="Identifies feelings (I'm happy.)"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false"/>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check name="explains_feelings"
                                                                                    label="Explains feelings (I'm happy because it's my birthday)n"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Provides excuses or reasons"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Offers an opinion with support"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Complains"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Blames others"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                name="provides_pertinent_information_on_request"
                                                                label="Provides pertinent information on request (2 or 3 of the following: name, address, phone, birthdate)"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Topic_Maintenance">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to establish a topic"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to maintain topic relevancy"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to change a topic using signals"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to change a topic using verbal means"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Relevancy of information"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to interrupt appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to terminate the conversation"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Conversational_Structure">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to initiate a conversation"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to establish a conversation outside of the interest area"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to acknowledge others in conversation"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to delete redundant information appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                name="ability_to_order_information_appropriately"
                                                                label="Ability to order information appropriately (new info follows old)"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Use of pedantic speech"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Word_Structure">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to use generals/specifics"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Pronoun use"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Use of word referents"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check name="ability_to_employee"
                                                                                    label="Ability to employ theory of mind (presuppostion)"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Manner_Effectiveness">
                                                        <!-- Bank Details -->
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Lie, ambiguous, confusing information share"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Provides relevant information"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check name="truthfulness_of_information"
                                                                                    label="Truthfulness of information (grandiosity)"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to establish joint activity"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Tendency to present personal opinions as factual"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Repair_Structures">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Requests clarification as needed"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Spontaneously provides additional information"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Requests repetition of information for clarification purposes"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                label="Looks at speaker when called"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Delay of response"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to label information appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to describe objects appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to describe events appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to state facts appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to provide clarification appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_B">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Makes polite requests"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Makes choices"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Gives description of an object wanted"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Expresses a specific personal need"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Requests help"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_C">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to request information appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to request permission appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to request yes-no responses appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to use Wh-Questions appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to request an action of another appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to request clarification appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to request attention appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to request help appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>

                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_D">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to use appropriate rate of speech"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to use appropriate tone of voice"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to use appropriate pitch"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to use appropriate loudness"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to comprehend implied meanings via tone of voice"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to comprehend implied meanings via inflectional cues"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>

                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_E">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to state his opinion using appropriate means"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Ability to disagree"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_F">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to shift the style of conversation according to person"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to shift the style of conversation according to the setting"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to shift the style of conversation according to humor"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to engage a listener appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to use politeness"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Appropriateness to the situation"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to recognize other’s moods"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to differentiate requests from demands"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_G">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Comprehends humor"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Uses humor appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_H">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Provides greetings"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Uses greetings"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to acknowledge the presence of another individual"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>

                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_I">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to solve problems affecting himself"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to solve problems affecting others"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to recognize problems affecting others"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to recognize problems affecting himself"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to establish cause-effect"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to use conflict-resolution"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_J">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Uses language to deceive"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Lies"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
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
                                                            <x-input-radio-or-check
                                                                label="Ability to respond appropriately to teacher requests"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to reorient to academic agenda appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to obtain teacher’s attention appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to request clarification from teacher"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to participate in classroom discussions"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to interact with classroom peers"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to paraphrase text"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to summarize a story providing key information"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to respond to questions requiring inferential reasoning"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
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
                                                            <x-input-radio-or-check
                                                                label="Ability to recognize “personal space” boundaries"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to touch appropriatel"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Comprehends facial expression"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Comprehends eye gaze"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Comprehends gestures"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Comprehends body language"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to use facial expression"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to use eye gaze"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to use gestures"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to use body language"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to use eye contact"
                                                                :records="$constants::$socialCommunication"
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
                                                            <x-input-radio-or-check
                                                                label="Ability to recognize another’s viewpoints"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to recognize another’s interests"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to recognize another’s feelings"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to demonstrate concern for another’s problems"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="REGULATORY">

                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Gives directions to play a game"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Gives directions to make something"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Changes the style of commands or requests depending on who the child is speaking to and what the
                                                                               child wants"
                                                                                    :records="$constants::$socialCommunication"
                                                                                    :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>

                                                    </div>
                                                    <div class="tab-pane" id="Social_Emotional">

                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to recognize personal emotional states"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to recognize emotional states in others"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to express personal emotional state"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Perfectionist quality"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to use appropriate self-control"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Ability to lose a game graciously"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                label="Degree of anxiety in social settings"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                </div>
                                                <div class="wizard-footer d-flex justify-content-between">
                                                    <div class="pull-left">
                                                        <input type='button'
                                                               class='btn btn-primary waves-effect waves-light btn-previous'
                                                               name='previous' value='Previous'/>
                                                    </div>
                                                    <div class="pull-right">
                                                        <input type='button'
                                                               class='btn btn-primary waves-effect waves-light btn-next'
                                                               name='next' value='Next'/>
                                                        <input type="submit" class='btn btn-finish btn-fill btn-danger'
                                                               value='Finish'/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- wizard container -->
                                    </form>
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
                                        <x-input-text name="collection_date" type="date" placeholder="mm/dd/yyyy">
                                        </x-input-text>
                                    </div>

                                    <div class="col-lg-4 pull-left pb-2">
                                        <label class="p-2">Teacher: <span
                                                class="text-danger text-bold">*</span></label>
                                        <x-input-select name="teacher_id"
                                                        :records="[]"/>
                                    </div>

                                    <div class="col-lg-4 pull-left pb-2">
                                        <label class="p-2">Candidate ID: <span
                                                class="text-danger text-bold">*</span></label>
                                        <x-input-select name="candidate_id"
                                                        :records="[]"/>
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
                                                the appropriate column that describes how your child uses
                                                words/language, no
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
                            <x-input-radio-or-check label="Interaction with adults "
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false"></x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Interaction with age-appropriate peers"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Interaction with younger children"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Waiting for a response from peers"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Negotiating deals"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Taking turns" :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to interact with many individuals simultaneously"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to establish multiple friendships"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Knowing when to persist or let go of an idea"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Interpreting facial expressions and voices"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Understanding the rules of the game"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Expressing various appropriate expressions"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Receiving and giving gifts"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Understanding sharing and the concept of give and take"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Participation in group activities"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Passive tendencies"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Aggressive tendencies"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Responsiveness" :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to handle being “left out”"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>PERSONAL</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Expresses feelings"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="identifies_feelings" label="Identifies feelings (I'm happy.)"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="explains_feelings"
                                                    label="Explains feelings (I'm happy because it's my birthday)n"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Provides excuses or reasons"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Offers an opinion with support"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Complains" :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Blames others" :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="provides_perinent"
                                                    label="Provides pertinent information on request (2 or 3 of the following: name, address, phone, birthdate)"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <!-- Bank Details -->
                        <h3>Topic Maintenance</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to establish a topic"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to maintain topic relevancy"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to change a topic using signals"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to change a topic using verbal means"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Relevancy of information"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to interrupt appropriately"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to terminate the conversation"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>

                        <!-- Bank Details -->
                        <h3>Conversational Structure</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to initiate a conversation"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check
                                label="Ability to establish a conversation outside of the interest area"
                                :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to acknowledge others in conversation"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to delete redundant information appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="ability_to_order"
                                                    label="Ability to order information appropriately (new info follows old)"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Use of pedantic speech"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <!-- Bank Details -->
                        <h3>Word Structure</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to use generals/specifics"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Pronoun use" :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Use of word referents"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="ability_to_employ"
                                                    label="Ability to employ Theory of Mind (presuppostion)"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <!-- Bank Details -->
                        <h3>Manner/Effectiveness</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Lie, ambiguous, confusing information share"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Provides relevant information"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check name="truthfulness_of_info"
                                                    label="Truthfulness of information (grandiosity)"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to establish joint activity"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Tendency to present personal opinions as factual"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Repair Structures</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Requests clarification as needed"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Spontaneously provides additional information"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check
                                label="Requests repetition of information for clarification purposes"
                                :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                        </section>

                        <h3>Functional Intent > A.Responsiveness</h3>
                        <section>
                            <x-input-radio-or-check label="Looks at speaker when called"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Delay of response"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to label information appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to describe objects appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to describe events appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to state facts appropriately"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to provide clarification appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>

                        <h3>Functional Intent > B.INSTRUMENTAL – States needs</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Makes polite requests"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Makes choices" :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Gives description of an object wanted"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Expresses a specific personal need"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Requests help" :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                        </section>

                        <h3>Functional Intent > C. Requesting</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to request information appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to request permission appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to request yes-no responses appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to use Wh-Questions appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to request an action of another appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to request clarification appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to request attention appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to request help appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Functional Intent > D. Prosody</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to use appropriate rate of speech"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to use appropriate tone of voice"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to use appropriate pitch"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to use appropriate loudness"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to comprehend implied meanings via tone of voice"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check
                                label="Ability to comprehend implied meanings via inflectional cues"
                                :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Functional Intent > E. Protests</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to state his opinion using appropriate means"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to disagree"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3> Functional Intent > F. Style of Conversation</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check
                                label="Ability to shift the style of conversation according to person"
                                :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check
                                label="Ability to shift the style of conversation according to the setting"
                                :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check
                                label="Ability to shift the style of conversation according to humor"
                                :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to engage a listener appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to use politeness"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Appropriateness to the situation"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to recognize other’s moods"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to differentiate requests from demands"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Functional Intent > G. Humor</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Comprehends humor"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Uses humor appropriately"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Functional Intent > H. Greetings/Acknowledgements</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Provides greetings"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Uses greetings" :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check
                                label="Ability to acknowledge the presence of another individual"
                                :records="$constants::$socialCommunication"
                                :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Functional Intent > I. Problem Solving</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to solve problems affecting himself"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to solve problems affecting others"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to recognize problems affecting others"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to recognize problems affecting himself"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to establish cause-effect"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to use conflict-resolution"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                        </section>

                        <h3>Functional Intent > J. Deceit</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Uses language to deceive"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Lies" :records="$constants::$socialCommunication"
                                                    :isVertical="false">
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
                            <x-input-radio-or-check label="Ability to respond appropriately to teacher requests"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to reorient to academic agenda appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to obtain teacher’s attention appropriately"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to request clarification from teacher"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to participate in classroom discussions"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to interact with classroom peers"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to paraphrase text"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to summarize a story providing key information"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check
                                label="Ability to respond to questions requiring inferential reasoning"
                                :records="$constants::$socialCommunication"
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
                            <x-input-radio-or-check label="Ability to recognize “personal space” boundaries"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to touch appropriatel"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Comprehends facial expression"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Comprehends eye gaze"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Comprehends gestures"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Comprehends body language"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to use facial expression"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to use eye gaze"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to use gestures"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to use body language"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to use eye contact"
                                                    :records="$constants::$socialCommunication"
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
                            <x-input-radio-or-check label="Ability to recognize another’s viewpoints"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to recognize another’s interests"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to recognize another’s feelings"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to demonstrate concern for another’s problems"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3> REGULATORY - Gives commands</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Gives directions to play a game"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Gives directions to make something"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Changes the style of commands or requests depending on who the child is speaking to and what the
                                                              child wants" :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                        </section>


                        <h3>Social-Emotional</h3>
                        <section>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to recognize personal emotional states"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to recognize emotional states in others"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to express personal emotional state"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Perfectionist quality"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to use appropriate self-control"
                                                    :records="$constants::$socialCommunication" :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Ability to lose a game graciously"
                                                    :records="$constants::$socialCommunication"
                                                    :isVertical="false">
                            </x-input-radio-or-check>
                            <!-- row end -->
                            <x-input-radio-or-check label="Degree of anxiety in social settings"
                                                    :records="$constants::$socialCommunication"
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