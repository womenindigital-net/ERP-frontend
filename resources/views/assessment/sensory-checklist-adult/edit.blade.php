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
                <x-input-text type="search" name="name" placeholder=""></x-input-text>
              </label>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered w-100">
              <thead>
                <tr class="table-primary ">
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
                  <td>Abdullahil Baki</td>
                  <td>Ohidul Hassan</td>
                  <td>Create: Ohidul Hassan @ 2022-05-22 11:10:53</td>
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
        <h5 class="modal-title" id="myLargeModalLabel">Sensory Checklist - Young-Adult (PA2aOT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
          <h3>Sensory Checklist - Young-Adult</h3>
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
                    <x-input-select name="student_id" :records="[]" />
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
            </form>
          </section>
          <!-- Company Document -->
          <h3>TOUCH</h3>
          <section>
            <x-input-radio-or-check name="being_touched_on_some_body_parts" label="Being touched on some body parts"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="hugs_and_cuddles" label="Hugs and cuddles" :records="$sensoryChecklistConstant::$young">
            </x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="certain_clothing" label="Certain clothing fabrics, seams, tags, waistbands, cuffs, etc."
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="clothing"
              label="Clothing, shoes, or accessories that are very tight or very loose"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="getting_hands"
              label="Getting hands, face, or other body parts “messy” with paint, glue, sand, food, lotion, etc"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="getting_hands"
              label="Grooming activities such as face and hair washing, brushing, cutting, and nail trimming"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="taking_bath" label="Taking a bath, shower, or swimming"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="getting_toweled_dry" label="Getting toweled dry"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="trying_new_foods"
              label="Trying new foods Feeling particular food textures and temperatures inside the mouth—mushy, smooth, etc."
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="standing_close" label="Standing close to other people"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="walking_barefoot" label="Walking barefoot" :records="$sensoryChecklistConstant::$young">
            </x-input-radio-or-check>
            <!--end row -->
          </section>


          <h3>PROPRIOCEPTION (BODY SENSE)</h3>
          <section>
            <x-input-radio-or-check name="activities"
              label="Activities such as roughhousing, jumping, banging, pushing, bouncing, climbing, hanging, and other active play -"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="high_risk_play"
              label="High-risk play (jumps from extreme heights, climbs very high trees, rides bicycle over gravel)"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="Fine_motor_tasks"
              label="Fine motor tasks such as writing, drawing, closing buttons and snaps, attaching pop beads and snap-together building toys"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="activities_requiring" label="Activities requiring physical strength and force"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="eating_crunchy_foods"
              label="Eating crunchy foods (pretzels, dry cereal, etc.) or chewy foods (e.g., meat, caramels)"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="smooth_creamy_foods" label="Smooth, creamy foods (yogurt, cream cheese, pudding)"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="having_eyes" label="Having eyes closed or covered"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
          </section>

          <h3>VESTIBULAR (MOVEMENT SENSE)</h3>
          <section>
            <x-input-radio-or-check name="being_moved_passively"
              label="Being moved passively by another person (rocked or twirling by an adult, pushed in a heavy box or furniture)"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="riding_equipment"
              label="Riding equipment that moves through space (swings, teeter totter, escalators and elevators)"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="spinning_activities"
              label="Spinning activities (carousels, spinning toys, spinning around in circles)"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="activities_that_require_changes_in_head_position"
              label="Activities that require changes in head position (such as bending over sink) or having head upside down (such as somersaults, hanging from feet)"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="challenges_to_balance"
              label="Challenges to balance such as skating, bicycle riding, skiing, and balance beams"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="climbing_and_descending" label="Climbing and descending stairs, slides, and ladders"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="being_up_high"
              label="Being up high, such as at the top of a slide or mountain overlook"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="less_stable_ground_surfaces"
              label="Less stable ground surfaces such as deep pile carpet, grass, sand, and snow"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="riding_in_a_car" label="Riding in a car or other form of transportation"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
          </section>


          <h3>AUDITORY/LISTENING</h3>
          <section>
            <form>
              <x-input-radio-or-check name="hearing_loud_sounds—car_horns" label="Hearing loud sounds—car horns, sirens, loud music or TV"
                :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
              <!--end row -->
              <x-input-radio-or-check name="being_in_noisy_settings"
                label="Being in noisy settings such as a crowded restaurant, party, or busy store/shop"
                :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
              <!--end row -->
              <x-input-radio-or-check name="watching_TV_or_listening"
                label="Watching TV or listening to music at very high or very low volume"
                :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
              <!--end row -->
              <x-input-radio-or-check name="speaking_or_being_spoken" label="Speaking or being spoken to amid other sounds or voices"
                :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
              <!--end row -->
              <x-input-radio-or-check name="background_noise"
                label="Background noise when concentrating on a task (music, dishwasher, fan, etc.)"
                :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
              <!--end row -->
              <x-input-radio-or-check name="games_with_rapid_verbal_instructions"
                label="Games with rapid verbal instructions such as Hokey Pokey Back-and-forth, interactive conversations"
                :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
              <!--end row -->
              <x-input-radio-or-check name="unfamiliar_sounds" label="Unfamiliar sounds, silly voices, foreign language"
                :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
              <!--end row -->
              <x-input-radio-or-check name="singing_alone" label="Singing alone or with others"
                :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
              <!--end row -->
          </section>


          <h3>VISION</h3>
          <section>
            <x-input-radio-or-check name="learning_to_read_or_reading" label="Learning to read or reading for more than a few minutes"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="looking_at_shiny_spinning" label="Looking at shiny, spinning, or moving objects"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="activities_that_require_eye-hand"
              label="Activities that require eye-hand coordination such as baseball, catch, stringing beads, writing, and tracing"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="tasks_requiring_visual_analysis"
              label="Tasks requiring visual analysis like puzzles, mazes, and hidden pictures"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="activities_that_require_discriminating"
              label="Activities that require discriminating between colors, shapes, and sizes"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="visually_busy_places" label="Visually “busy” places such as stores and crowded playgrounds"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="finding_objects_such_as_socks"
              label="Finding objects such as socks in a drawer or a particular book on a shelf"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="very_bright_light_or_sunshine"
              label="Very bright light or sunshine, or being photographed with a flash"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="dim_lighting" label="Dim lighting, shade, or the dark"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="action_packed"
              label="Action-packed, colorful television, movies or computer/ video games"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="new_visual_experiences"
              label="New visual experiences such as looking through a kaleidoscope or colored glass"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
          </section>


          <h3>TASTE AND SMELL</h3>
          <section>
            <x-input-radio-or-check name="smelling_unfamiliar_scents" label="Smelling unfamiliar scents"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="strong_odors_such_as_perfume" label="Strong odors such as perfume, gasoline, cleaning products"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="smelling_objects_that_arent_food_such_as_flowers"
              label="Smelling objects that aren’t food such as flowers, plastic items, play dough, and garbage"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="eating_new_foods" label="Eating new foods" :records="$sensoryChecklistConstant::$young">
            </x-input-radio-or-check>
            <!--end row -->
            <x-input-radio-or-check name="eating_familiar_foods_Eating_strongly"
              label="Eating familiar foods Eating strongly flavored foods (very spicy, salty, bitter, sour, or sweet)"
              :records="$sensoryChecklistConstant::$young"></x-input-radio-or-check>
            <!--end row -->
          </section>
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