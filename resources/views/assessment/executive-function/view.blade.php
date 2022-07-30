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
@component('components.breadcrumb')
@slot('li_1')
DashBoard
@endslot
@slot('title')
Student Qa
@endslot
@endcomponent
<div class="col-6">
    <h4 class="card-title">STUDENT QAS</h4>
</div>
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-12">
                        <!-- Wizard container -->
                        <div class="wizard-container">
                            <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                <div class="col-sm-3 col-md-3">
                                    <div id="wizard-navigation">
                                        <ul class="wizard-navigation">
                                            <li class="w-100"><a href="#Social_Communication"
                                                    data-toggle="tab">Executive Function Test</a></li>
                                            <li class="w-100"><a href="#Pragmatic_Objective"
                                                    data-toggle="tab">Self-Test</a>
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
                                                                <label for="basicpill-firstname-input">Collection
                                                                    Date:</label>
                                                                <x-input-text value="{{ $record->date }}" name="date"
                                                                    type="date" placeholder="mm/dd/yyyy"></x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input">Teacher:</label>
                                                                1:37
                                                                <x-input-select :selected="$record->teacher_id"
                                                                    name="teacher_id" :records="$teachers" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-phoneno-input">Candidate
                                                                    ID:</label>
                                                                <x-input-select :selected="$record->candidate_id"
                                                                    name="candidate_id" :records="$students" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </section>
                                            </div>
                                            <div class="tab-pane" id="Pragmatic_Objective">
                                                <section>
                                                    <div>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$record->have_trouble_getting"
                                                            name="have_trouble_getting"
                                                            label="Have trouble getting started or initiating tasks."
                                                            :records="$executiveConstants::$oftenOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            :checked="$record->start_tasks_with_enthusiasm"
                                                            name="start_tasks_with_enthusiasm"
                                                            label="Start tasks with enthusiasm but lose interest quickly."
                                                            :records="$executiveConstants::$oftenOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$record->find_it_hard"
                                                            name="find_it_hard"
                                                            label="Find it hard to do things that aren't necessary or highly stimulating."
                                                            :records="$executiveConstants::$agreeOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$record->i_see_or_hear" name="i_see_or_hear"
                                                            label="I am easily distracted by things I see or hear"
                                                            :records="$executiveConstants::$agreeOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            :checked="$record->become_absorbed_in_things"
                                                            name="become_absorbed_in_things"
                                                            label="Become absorbed in things or tasks that interest me—sometimes to the point of
                                                                                   forgetting about people around me or other obligations."
                                                            :records="$executiveConstants::$agreeOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            :checked="$record->have_trouble_following_conversations"
                                                            name="have_trouble_following_conversations" label="Have trouble following conversations because I am distracted or because I am trying
                                                                                   to remember what I wanted to say."
                                                            :records="$executiveConstants::$oftenOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$record->forget_things"
                                                            name="forget_things"
                                                            label="Forget things, even when they are important to me."
                                                            :records="$executiveConstants::$oftenOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$record->At_least_once_a_day"
                                                            name="At_least_once_a_day" label="At least once a day, lose or misplace items—for example, keys, wallet, purse, or cell
                                                                                         phone."
                                                            :records="$executiveConstants::$agreeOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            :checked="$record->consistently_forget_appointments"
                                                            name="consistently_forget_appointments"
                                                            label="Consistently forget appointments and, when I do remember, I often am late."
                                                            :records="$executiveConstants::$agreeOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$record->Cant_seem_to_get"
                                                            name="Cant_seem_to_get"
                                                            label="Can't seem to get a handle on clutter, my personal space is messy and has piles of
                                                                                         papers and miscellaneous items."
                                                            :records="$executiveConstants::$agreeOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            :checked="$record->have_difficulty_figuring"
                                                            name="have_difficulty_figuring" label="Have difficulty figuring out what is most important or what I should start with given
                                                                                     a list of things to do."
                                                            :records="$executiveConstants::$agreeOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$record->waste_time_trying"
                                                            name="waste_time_trying"
                                                            label="Waste time trying to decide what to do first."
                                                            :records="$executiveConstants::$oftenOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            :checked="$record->become_frustrated_when_things"
                                                            name="become_frustrated_when_things"
                                                            label="Become frustrated when things don’t go as planned and can quickly become angry. I
                                                                                      often let go of my anger as quickly as it came."
                                                            :records="$executiveConstants::$oftenOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            :checked="$record->have_trouble_completing"
                                                            name="have_trouble_completing"
                                                            label="Have trouble completing multiple-step tasks and moving from one task to another."
                                                            :records="$executiveConstants::$agreeOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$record->I_will_do_it_later"
                                                            name="I_will_do_it_later"
                                                            label="I say “I will do it later” and then forget all about it."
                                                            :records="$executiveConstants::$oftenOrNot">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        <!-- end row -->

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
                                                <input type="button" class='btn btn-finish btn-fill btn-danger'
                                                    value='Finish' />
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
    </div>
</div>
<!-- end col -->
<!-- end row -->
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>

@endsection