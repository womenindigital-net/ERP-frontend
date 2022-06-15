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
                        <!-- Wizard container -->
                        <div class="wizard-container">
                            <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                <div class="col-sm-3 col-md-3">
                                    <div id="wizard-navigation">
                                        <ul class="wizard-navigation">
                                            <li class="w-100"><a href="#Occupational_Therapy"
                                                    data-toggle="tab">Occupational Therapy</a></li>
                                            <li class="w-100"><a href="#General"
                                                    data-toggle="tab">General</a>
                                            </li>
                                            <li class="w-100"><a href="#Muscle_Tone"
                                                    data-toggle="tab">Muscle
                                                    Tone</a></li>
                                            <li class="w-100"><a href="#Range_of_movement"
                                                    data-toggle="tab">Range of movement</a></li>
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
                                                            <label class="p-2">Collection
                                                                Date:</label>
                                                            <x-input-text name="collection_date" type="date"
                                                                placeholder="mm/dd/yyyy">
                                                            </x-input-text>
                                                        </div>

                                                        <div class="col-lg-4 pull-left pb-2">
                                                            <label class="p-2">Teacher: <span
                                                                    class="text-danger text-bold">*</span></label>
                                                                    <x-input-select name="teacher_id"
                                                                    :records="$teachers" />
                                                        </div>

                                                        <div class="col-lg-4 pull-left pb-2">
                                                            <label class="p-2">Candidate ID:
                                                                <span
                                                                    class="text-danger text-bold">*</span></label>
                                                                    <x-input-select name="candidate_id"
                                                                    :records="[]" />
                                                        </div>

                                                        <div class="col-lg-12 p-0 pb-2">
                                                            <label
                                                                class="col-md-12 px-1">Description:</label>
                                                            <p>Occupational Therapy assessment form</p>
                                                        </div>

                                                        <div class="col-lg-12 p-0 pb-2">
                                                            <label
                                                                class="col-md-12 px-1">Instruction:</label>
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
                                                                <h5>General</h5>
                                                                <div class="row">
                                                                    <div class="form-check">
                                                                        <div class="me-5 ">
                                                                            <label
                                                                                class="form-check-label pb-2">Medication
                                                                                Treatment </label>
                                                                            <x-input-text
                                                                                name="collection_date"
                                                                                placeholder="Medication Treatment">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="me-5 ">
                                                                            <label
                                                                                class="form-check-label pb-2">Any
                                                                                present medicines</label>
                                                                            <x-input-text
                                                                                name="collection_date"
                                                                                placeholder="Any present medicines">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- row end -->
                                                    <x-input-radio-or-check name="name"
                                                        label="Separate Home equipment" :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>
                                                    <!-- row end -->
                                                    <x-input-radio-or-check name="name"
                                                        label="Communication" :records="$therapyConstants::$communication">
                                                    </x-input-radio-or-check>
                                                    <!-- row end -->
                                                </section>
                                            </div>
                                            <div class="tab-pane" id="Muscle_Tone">
                                                <section>
                                                    <x-input-radio-or-check name="name"
                                                        label="Separate Home equipment" :records="$therapyConstants::$separateHomeEquipment">
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
                                                                            <x-input-text name="name"
                                                                                placeholder="Left">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="me-5 ">
                                                                            <label
                                                                                class="form-check-label pb-2">Right</label>
                                                                            <x-input-text name="name"
                                                                                placeholder="Right">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- row end -->
                                                    <x-input-radio-or-check name="name" label="Lower Limbs"
                                                        :records="$therapyConstants::$lowerLimbs">
                                                    </x-input-radio-or-check>
                                                    <!-- row end -->
                                                    <x-input-radio-or-check name="name" label="Trunk/neck"
                                                        :records="$therapyConstants::$trunkNeck">
                                                    </x-input-radio-or-check>
                                                    <!-- row end -->
                                                    <x-input-radio-or-check name="name" label="Lower Limbs"
                                                        :records="$therapyConstants::$lowerLimbsTone">
                                                    </x-input-radio-or-check>
                                                    <!-- row end -->
                                                    <div class="row border-top py-2">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5>Trunk/neck</h5>
                                                                <div class="row">
                                                                    <div class="form-check">
                                                                        <div class="me-5 ">
                                                                            <label
                                                                                class="form-check-label pb-2">Left</label>
                                                                            <x-input-text name="name"
                                                                                placeholder="Left">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="me-5 ">
                                                                            <label
                                                                                class="form-check-label pb-2">Right</label>
                                                                            <x-input-text name="name"
                                                                                placeholder="Right">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="tab-pane" id="Range_of_movement">
                                                <section>
                                                    <x-input-radio-or-check name="name" label="Upper limbs"
                                                        :records="$therapyConstants::$upperLimbs">
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
                                                                            <x-input-text name="name"
                                                                                placeholder="Left">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="me-5 ">
                                                                            <label
                                                                                class="form-check-label pb-2">Right</label>
                                                                            <x-input-text name="name"
                                                                                placeholder="Right">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- row end -->
                                                    <x-input-radio-or-check name="name" label="Trunk/neck"
                                                        :records="$therapyConstants::$trunkNeckRange">
                                                    </x-input-radio-or-check>
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
                </div>
            </div>
        </div>
        <!-- end col -->
        <!-- end row -->
    @endsection

    @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>

        <!-- jquery step -->
        <script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

    @endsection
