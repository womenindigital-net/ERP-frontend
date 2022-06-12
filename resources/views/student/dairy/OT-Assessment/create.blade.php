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
            DashBoard
        @endslot
        @slot('title')
            STUDENT QA
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
                                                        <li class="w-100"><a href="#Occupational_Therapy"
                                                                data-toggle="tab"> OT Assessment In Computer Trainee</a>
                                                        </li>
                                                        <li class="w-100"><a href="#General"
                                                                data-toggle="tab">General</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Muscle_Tone"
                                                                data-toggle="tab">Physical skill
                                                                Tone</a></li>
                                                        <li class="w-100"><a href="#Range_of_movement"
                                                                data-toggle="tab">Cognitive, Behavior & social Skill</a>
                                                        </li>
                                                        <li class="w-100"><a href="#work" data-toggle="tab">Work
                                                                place adjustability</a></li>
                                                        <li class="w-100"><a href="#signature"
                                                                data-toggle="tab">Signature</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9">
                                                <form>
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="Occupational_Therapy">
                                                            <section>
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-firstname-input">Collection
                                                                                    Date:</label>
                                                                                <div class="input-group"
                                                                                    id="datepicker2">
                                                                                    <x-input-text type="date" name="date" />
                                                                                </div><!-- input-group -->
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

                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="General">
                                                            <section>
                                                                <div class="row">
                                                                    <div class="form-check">
                                                                        <div class="me-5 ">
                                                                            <label class="form-check-label pb-2">Type of
                                                                                disability</label>
                                                                            <x-input-text name="type_of_disability"
                                                                                placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="me-5 ">
                                                                            <label class="form-check-label pb-2">Educational
                                                                                Status</label>
                                                                            <x-input-text name="educational_status"
                                                                                placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Muscle_Tone">
                                                            <section>
                                                                <x-input-radio-or-check name="sitting_posture_maintain"
                                                                    label="Sitting posture maintain" :records="$otassessmentConstants::$maintain"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="oint_mobility_shoulder"
                                                                    label="oint mobility shoulder" :records="$otassessmentConstants::$maintain"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="elbow" label="Elbow"
                                                                    :records="$otassessmentConstants::$maintain" secondaryInputLabel="">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="wrist" label="Wrist"
                                                                    :records="$otassessmentConstants::$maintain" secondaryInputLabel="">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="finger" label="Finger"
                                                                    :records="$otassessmentConstants::$maintain" secondaryInputLabel="">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="body_flexibility"
                                                                    label="Body flexibility (Trunk)" :records="$otassessmentConstants::$maintain"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="dynamic_balance_maintain"
                                                                    label="Dynamic balance maintain" :records="$otassessmentConstants::$maintain"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="eye_hand_co_ordination"
                                                                    label="Eye hand co ordination to press the key board button"
                                                                    :records="$otassessmentConstants::$maintain" secondaryInputLabel="">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="mouse_operater"
                                                                    label="Mouse operater" :records="$otassessmentConstants::$maintain"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="muscle_strength_in_hand"
                                                                    label="Muscle strength in hand and finger"
                                                                    :records="$otassessmentConstants::$strength" secondaryInputLabel="">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="hand_function"
                                                                    label="Hand function" :records="$otassessmentConstants::$ability"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="grasp" label="Grasp"
                                                                    :records="$otassessmentConstants::$ability" secondaryInputLabel="">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="manipulation"
                                                                    label="Manipulation" :records="$otassessmentConstants::$ability"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="opposition" label="Opposition"
                                                                    :records="$otassessmentConstants::$ability" secondaryInputLabel="">
                                                                </x-input-radio-or-check>

                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Range_of_movement">
                                                            <section>
                                                                <x-input-radio-or-check name="sitting_habit_in_specific"
                                                                    label="Sitting habit in specific place"
                                                                    :records="$otassessmentConstants::$time" secondaryInputLabel="">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="keep_attention"
                                                                    label="Keep attention/concentration to work"
                                                                    :records="$constants::$yesNoEn" secondaryInputLabel="">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="follow_instruction"
                                                                    label="Follow instruction" :records="$otassessmentConstants::$follow"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="response_skill"
                                                                    label="Response skill" :records="$otassessmentConstants::$response"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="understand_or_follow"
                                                                    label="Understand or follow the work sequence"
                                                                    :records="$otassessmentConstants::$maintain" secondaryInputLabel="">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="interest_of_work"
                                                                    label="Interest of work" :records="$otassessmentConstants::$show"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="information_receives_ability"
                                                                    label="Information receives ability" :records="$otassessmentConstants::$maintain"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="memorizing_the_information"
                                                                    label="Memorizing the information" :records="$otassessmentConstants::$maintain"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="awareness_of_risk_&_hazard"
                                                                    label="Awareness of Risk & hazard" :records="$otassessmentConstants::$maintain"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="opposition" label="Opposition"
                                                                    :records="$otassessmentConstants::$appropriate" secondaryInputLabel="">
                                                                </x-input-radio-or-check>

                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="work">
                                                            <section>
                                                                <x-input-radio-or-check name="working_table"
                                                                    label="Working table/ desk" :records="$otassessmentConstants::$appropriate"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="Keyboard_and_mouse"
                                                                    label="Keyboard and mouse place" :records="$otassessmentConstants::$appropriate"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="monitor_place"
                                                                    label="Monitor place" :records="$otassessmentConstants::$appropriate"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                                <x-input-radio-or-check name="cpu"
                                                                    label="CPU, Stabilizer, and multi pluck place"
                                                                    :records="$otassessmentConstants::$appropriate" secondaryInputLabel="">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="communication_style"
                                                                    label="Communication Style" :records="$otassessmentConstants::$sign"
                                                                    secondaryInputLabel=""></x-input-radio-or-check>

                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="signature">
                                                            <section>
                                                                <div class="row">
                                                                    <div class="form-check">
                                                                        <div class="me-5 ">
                                                                            <label class="form-check-label pb-2">Therapist
                                                                                comment’s/ advice:</label>
                                                                            <x-input-text name="therapist_comments" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-check">
                                                                        <div class="me-5 ">
                                                                            <label class="form-check-label pb-2">Signature
                                                                                of Therapist</label>
                                                                            <x-input-text type="file" name="signature_of_therapist" />
                                                                        </div>
                                                                        <div class="me-5 ">
                                                                            <label class="form-check-label pb-2">Name and
                                                                                date</label>
                                                                            <x-input-text name="name_and_date" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="me-5 ">
                                                                            <label
                                                                                class="form-check-label pb-2">Organization
                                                                                Name</label>
                                                                            <x-input-text name="organization_Name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-check">
                                                                        <div class="me-5 ">
                                                                            <label class="form-check-label pb-2">Signature
                                                                                of Supervisor</label>
                                                                            <input class="form-control" type="file"
                                                                                id="formFile" name="signature_of_supervisor">
                                                                        </div>
                                                                        <div class="me-5 ">
                                                                            <label
                                                                                class="form-check-label pb-2">Name</label>
                                                                            <x-input-text name="name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="me-5 ">
                                                                            <label
                                                                                class="form-check-label pb-2">Designation</label>
                                                                            <x-input-text name="designation" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
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
                                        <x-input-text name="search" type="search" />
                                    </label>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table w-100">
                                    <thead>
                                        <tr>
                                            <th>Collection Date</th>
                                            <th>Student Name</th>
                                            <th>Collected By</th>
                                            <th>Log</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2022-05-17</td>
                                            <td>Idham Malek</td>
                                            <td>Ohidul Hassan</td>
                                            <td>Create: Ohidul Hassan @ 2022-05-17 16:06:30</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="mdi mdi-eye" data-bs-toggle="modal"
                                                        data-bs-target=".bs-example-modal-lg"></i>
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
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="mdi mdi-pencil" data-bs-toggle="modal"
                                                        data-bs-target=".bs-example-modal-lg"></i>
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
    <!-- jquery step -->
    <script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>
    <!-- form wizard init -->
    <script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection
