@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')

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
@slot('li_1') DashBoard @endslot
@slot('title') STUDENT QAS @endslot
@endcomponent
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">STUDENT QAS</h4>
          </div>
          <div class="col-6 text-end  mb-3">
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=""><i class="fa fa-user"></i> Profile</button>
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=".bs-example-modal-lg"><i class="fa fa-plus"></i>ADD</button>
          </div>

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
                  <td>2022-05-22</td>
                  <td>abdullah-al-nafi antor</td>
                  <td>Ohidul Hassan</td>
                  <td><small>Create: Ohidul Hassan @ 2022-05-22 11:10:53</small></td>
                  <td>
                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                      data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                      <i class="mdi mdi-eye"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                        class="fas fa-check"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="fas fa-check"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                      data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                      <i class="mdi mdi-pencil"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="bx bx-dollar"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="fas fa-arrow-circle-right"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
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
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>


        </div>
      </div>
    </div> <!-- end col -->
  </div> <!-- end row -->
</div>
<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel"> Autism Behavior Checklist (ABC) </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
          <h3>Autism Behavior Checklist (ABC)</h3>
          <section>
            <form>
              <div class="row">
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-firstname-input">Collection Date:</label>
                    <x-input-text name="name" type="date" placeholder=""></x-input-text>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-lastname-input">Teacher:</label>
                    <x-input-select name="student_id"
                :records="[]" />
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-phoneno-input">Candidate ID:</label>
                    <x-input-select name="student_id"
                :records="[]" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label for="verticalnav-phoneno-input">Instruction:</label>
                    <p>The Autism Behavior Checklist (ABC) is a checklist of non-adaptive behaviors; capable of
                      providing how an individual “Looks” in comparison to others. This checklist reflects an
                      individual’s challenges to respond appropriately to daily life situation. Parents and the
                      educational team to complete the check lists.</p>
                  </div>
                </div>
              </div>
            </form>
          </section>
          <!-- Company Document -->
          <h3>Sensory Behaviors</h3>
          <section>
            <form>
              <x-input-radio-or-check name="poor_use_of_visual_discrimination_when_learning" label="Poor use of visual discrimination when learning"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="seems_not_to_hear" label="Seems not to hear, so that a hearing loss is suspected"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="sometimes_shows_no_startle_response" label="Sometimes shows no “startle response” to ”loud noise”"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="sometimes_painful_stimuli_such_as_bruises"
                label="Sometimes painful stimuli such as bruises, cuts, and injections evoke no reaction"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="covers_ears_at_many_sounds" label="Covers ears at many sounds"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="squints_frowns_covers_eyes_when_in_the_presence_of_natural_light"
                label="Squints, frowns, or covers eyes when in the presence of natural light"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="frequently_has_no_visual_reaction" label="Frequently has no visual reaction to a “new” person"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="stares_into_space_for_long_periods_of_time" label="Stares into space for long periods of time"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- end row -->
            </form>
          </section>
          <!-- Bank Details -->
          <!-- Company Document -->
          <h3>Relating Behaviors</h3>
          <section>
            <form>
              <x-input-radio-or-check name="whirls_self_for_long_periods_of_time" label="Whirls self for long periods of time"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="does_not_use_toys_appropriately" label="Does not use toys appropriately"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="insists_on_keeping_certain_objects" label="Insists on keeping certain objects with him/ her"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="rocks_self_for_long_periods_of_time" label="Rocks self for long periods of time"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="does_a_lot_of_lunging_and_darting" label="Does a lot of lunging and darting"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="flaps_hands" label="Flaps hands" :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="walks_on_toes" label="Walks on toes" :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="hurts_self_by_banging_head" label="Hurts self by banging head, biting hand, etc…"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="twirls_spins_and_bangs_objects_lot" label="Twirls, spins, and bangs objects a lot"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="will_feel_smell" label="Will feel, smell, and/or taste objects in the environment"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="gets_involved_in_complicated_rituals"
                label="Gets involved in complicated “rituals” such as lining things up, etc…"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="is_very_destructive" label="Is very destructive"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="often_frightened_or_very_anxious" label="Often frightened or very anxious"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <!-- end row -->
              <x-input-radio-or-check name="looks_through_people" label="Looks through people"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <!-- end row -->
            </form>
          </section>
          <!-- Bank Details -->
          <!-- Company Document -->
          <h3>Body and Object Use Behaviors</h3>
          <section>
            <form>
              <x-input-radio-or-check name="whirls_self_for_long_periods_time" label="Whirls self for long periods of time"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="does_not_use_toys_appropriately" label="Does not use toys appropriately"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="sometimes_shows_no_startle response_to_loud noise" label="Sometimes shows no “startle response” to ”loud noise”"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="insists_on_keeping_certain_objects" label="Insists on keeping certain objects with him/ her"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="rocks_self_for_long_periods_time" label="Rocks self for long periods of time"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="does_lot_lunging_and_darting" label="Does a lot of lunging and darting"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="flaps_hands" label="Flaps hands" :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="walks_on_toes" label="Walks on toes" :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="hurts_self_banging_head" label="Hurts self by banging head, biting hand, etc…"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="twirls_spins_bangs_objects_lot" label="Twirls, spins, and bangs objects a lot"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="will_feel_smell_taste_objects_environment" label="Will feel, smell, and/or taste objects in the environment"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="gets_involved_complicated"
                label="Gets involved in complicated “rituals” such as lining things up, etc…"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="is_very_destructive" label="Is very destructive"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <!-- end row -->
            </form>
          </section>
          <!-- Bank Details -->
          <!-- Company Document -->
          <h3>Language Behaviors</h3>
          <section>
            <form>
              <x-input-radio-or-check name="does_not_follow_simple_commands_given_once" label="Does not follow simple commands given once"
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
              <x-input-radio-or-check name="does_not_respond_to_own_name_when_called_out_among_two_others" label="Does not respond to own name when called out among two others"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="seldom_says_yes_or_I" label="Seldom says “yes” or “I”"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="does_not_follow_simple_commands_involving_prepositions" label="Does not follow simple commands involving prepositions"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="gets_desired_objects_by_gesturing" label="Gets desired objects by gesturing"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="repeats_phrases_over_and_over" label="Repeats phrases over and over"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="cannot_point_to_more_than_five_named_objects" label="Cannot point to more than five named objects"
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
              <x-input-radio-or-check name="echoes_questions_or_statements" label="Echoes questions or statements made by others"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="uses_at_least_15_but_less_than_30"
                label="Uses at least 15 but less than 30 spontaneous phrases daily to communicate"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="learns_a_simple_task" label="Learns a simple task but “forgets” quickly"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="strong_reactions_changes_in_routine-environment" label="Strong reactions to changes in routine-environment"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="has_special_abilities_in_one_area_of_development" label="Has “special abilities” in one area of development, which seems to rule out mental
              retardation" :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="severe_temper_tantrums" label="Severe temper tantrums and-or frequent minor tantrums"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="hurts_others_by_biting_hitting_kicking" label="Hurts others by biting, hitting, kicking, etc…"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="does_not_wait_for_needs_to_be_met" label="Does not wait for needs to be met"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="difficulties_with_toileting" label="Difficulties with toileting"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="does_not_dress_self_without_frequent_help" label="Does not dress self without frequent help"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="frequently_unaware_surroundings"
                label="Frequently unaware of surroundings, and may be oblivious to dangerous situations"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->>
              <x-input-radio-or-check name="prefers_to_manipulate_and_be_occupied_with_inanimate_things" label="Prefers to manipulate and be occupied with inanimate things"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="a_developmental_delay_was_identified"
                label="A developmental delay was identified at or before 30 months of age"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <!-- end row -->
            </form>
          </section>
          <!-- Bank Details -->
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
@section('script')
<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>

@endsection