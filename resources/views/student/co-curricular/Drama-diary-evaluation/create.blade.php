@extends('layouts.master')

@section('title')
    @lang('translation.Starter_Page')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
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
                                                                data-toggle="tab">Drama Diary Evaluation</a></li>
                                                        <li class="w-100"><a href="#Pragmatic_Objective"
                                                                data-toggle="tab">বেসিক / ফাংশনাল এরিয়া</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Outing"
                                                                data-toggle="tab">অন্যান এরিয়া</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9">
                                                <form>
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="Social_Communication">
                                                            <section>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-firstname-input">Collection
                                                                                Date:</label>
                                                                            <div class="input-group" id="datepicker2">
                                                                                <x-input-text type="date" name="date" />
                                                                            </div><!-- input-group -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-lastname-input">Teacher:</label>
                                                                            <x-input-select name="teachar_id"
                                                                                :records="[]" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label for="basicpill-phoneno-input">Candidate
                                                                                ID:</label>
                                                                            <x-input-select name="candidate_id"
                                                                                :records="[]" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-phoneno-input">Description:</label>
                                                                            <p>Kashima Cultural Group ড্রামা / নাটক</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Pragmatic_Objective">
                                                            <section>
                                                                <!-- Start row -->
                                                                <x-input-radio-or-check name="understanding_the_character" label="চরিত্র বুঝতে পারা"
                                                                    :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="being_able_to_understand_the_character_and_act"
                                                                    label="চরিত্র বুঝে অভিনয় করতে পারা" :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="say_three_lines_clearly_about_yourself"
                                                                    label="নিজের সম্পর্কে তিন লাইন স্পষ্ট করে বলবে"
                                                                    :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="be_able_to_present_fluently"
                                                                    label="সাবলীল ভাবে উপস্থাপনা করতে পারবে"
                                                                    :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="the_vowel_will_be_pronounced_clearly"
                                                                    label="স্বরধনি স্পষ্ট করে উচ্চারণ করবে"
                                                                    :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="be_able_to_memorize" label="মুখস্থ করতে পারা"
                                                                    :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="being_able_to_speak_with_open_mouth"
                                                                    label="মুখ খুলে কথা বলতে পারা" :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="mouth_tongue_exercises"
                                                                    label="মুখ / জিহ্বার ব্যায়াম" :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="being_able_to_tell_a_minute_story"
                                                                    label="১/২ মিনিটের গল্প বলতে পারা" :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="being_able_to_bring_variation_in_words"
                                                                    label="কথায় Variation আনতে পারা" :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="being_able_to_speak_in_regional_tenses_or_other_accents"
                                                                    label="আঞ্চলিক টানে বা অন্য অচ্চারনে কথা বলতে পারা"
                                                                    :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="after_listening_to_the_dialogue_of_the_coartist_he_will_give_his_own_dialogue"
                                                                    label="সহশিল্পির ডায়লগ শুনে নিজের ডায়লগ দিবে"
                                                                    :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="will_act_using_body_gestures"
                                                                    label="শারিরিক অঙ্গভঙ্গি ব্যবহার করে অভিনয় করবে"
                                                                    :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="will_wait_for_his_turn_to_act"
                                                                    label="অভিনয়ে নিজের turn এর জন্য অপেক্ষা করবে"
                                                                    :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="will_help_the_coartist"
                                                                    label="সহশিল্পিকে সাহায্য করবে" :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="respect_for_the_coartist"
                                                                    label="সহশিল্পীর প্রতি শ্রদ্ধাশীলতা" :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="respect_for_the_coartist"
                                                                    label="সহশিল্পীর প্রতি শ্রদ্ধাশীলতা" :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->

                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Outing">
                                                            <section>
                                                                <!-- Start row -->
                                                                <x-input-radio-or-check name="hold_attention" label="মনোযোগ ধরে রাখা"
                                                                    :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="presentation" label="প্রেজেন্টেশান"
                                                                    :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="perticipating_drama"
                                                                    label="সবার সাথে নাটকে অংশ নিবে" :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="will_take_part_in_the_play_with_everyone"
                                                                    label="সবার সাথে নাটকে অংশ নিবে" :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="self_doing_ownwork"
                                                                    label="ব্যক্তিগত অংশ স্বনির্ভর ভাবে করতে পারা"
                                                                    :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="others" label="অন্যান্য"
                                                                    :records="$diaryConstant::$diaryType"
                                                                    secondaryInputLabel="শিক্ষক এর মন্তব্য">
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
                                        <input type="search" class="form-control form-control-sm" placeholder="">
                                    </label>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered w-100">
                                    <thead>
                                        <tr class="table-primary">
                                            <th>Collection Date </th>
                                            <th>Student Name</th>
                                            <th>Collected By</th>
                                            <th>Log</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2022-05-17</td>
                                            <td>Abdur Rahman Sajid</td>
                                            <td>Ohidul Hassan</td>
                                            <td>Create: Ohidul Hassan @ 2022-05-17 15:50:24</td>
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
    <!-- Custom step -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
@endsection
