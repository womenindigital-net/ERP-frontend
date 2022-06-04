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
                <input type="search" class="form-control form-control-sm" placeholder="">
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
                    <select class="form-control select2 form-select">
                      <option value="0">Select</option>
                      <option value="1">abulhasnat</option>
                      <option value="2">nila01</option>
                      <option value="3">Airins</option>
                      <option value="4">AmalRozareo</option>
                      <option value="5">anasbin</option>
                      <option value="6">arupmandal</option>
                      <option value="7">asadzaman</option>
                      <option value="8">Badshah</option>
                      <option value="9">BijoyRozareo</option>
                      <option value="10">Chandan</option>
                      <option value="11">dolonbishwash</option>
                      <option value="12">golamrabbani</option>
                      <option value="13">jahinur</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-phoneno-input">Candidate ID:</label>
                    <select class="form-control select2 form-select">
                      <option value="0">Select</option>
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
                    </select>
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
              <x-input-radio-or-check name="name" label="Poor use of visual discrimination when learning"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Seems not to hear, so that a hearing loss is suspected"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Sometimes shows no “startle response” to ”loud noise”"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name"
                label="Sometimes painful stimuli such as bruises, cuts, and injections evoke no reaction"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Covers ears at many sounds"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name"
                label="Squints, frowns, or covers eyes when in the presence of natural light"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Frequently has no visual reaction to a “new” person"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Stares into space for long periods of time"
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
              <x-input-radio-or-check name="name" label="Whirls self for long periods of time"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Does not use toys appropriately"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Insists on keeping certain objects with him/ her"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Rocks self for long periods of time"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Does a lot of lunging and darting"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Flaps hands" :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Walks on toes" :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Hurts self by banging head, biting hand, etc…"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Twirls, spins, and bangs objects a lot"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Will feel, smell, and/or taste objects in the environment"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name"
                label="Gets involved in complicated “rituals” such as lining things up, etc…"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Is very destructive"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Often frightened or very anxious"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <!-- end row -->
              <x-input-radio-or-check name="name" label="“Looks through” people"
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
              <x-input-radio-or-check name="name" label="Whirls self for long periods of time"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Does not use toys appropriately"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Sometimes shows no “startle response” to ”loud noise”"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Insists on keeping certain objects with him/ her"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Rocks self for long periods of time"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Does a lot of lunging and darting"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Flaps hands" :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Walks on toes" :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Hurts self by banging head, biting hand, etc…"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Twirls, spins, and bangs objects a lot"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Will feel, smell, and/or taste objects in the environment"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name"
                label="Gets involved in complicated “rituals” such as lining things up, etc…"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Is very destructive"
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
              <x-input-radio-or-check name="name" label="Does not follow simple commands given once"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Has pronoun reversal"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Atonal Speech pattern"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Does not respond to own name when called out among two others"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Seldom says “yes” or “I”"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Does not follow simple commands involving prepositions"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Gets desired objects by gesturing"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Repeats phrases over and over"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Cannot point to more than five named objects"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name"
                label="Uses 0-5 spontaneous words per day to communicate wants and needs"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Repeats sounds or words"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Echoes questions or statements made by others"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name"
                label="Uses at least 15 but less than 30 spontaneous phrases daily to communicate"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Learns a simple task but “forgets” quickly"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Strong reactions to changes in routine-environment"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Has “special abilities” in one area of development, which seems to rule out mental
              retardation" :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Severe temper tantrums and-or frequent minor tantrums"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Hurts others by biting, hitting, kicking, etc…"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Does not wait for needs to be met"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Difficulties with toileting"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Does not dress self without frequent help"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name"
                label="Frequently unaware of surroundings, and may be oblivious to dangerous situations"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->>
              <x-input-radio-or-check name="name" label="Prefers to manipulate and be occupied with inanimate things"
                :records="$constants::$autismBehaviorCheck">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name"
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