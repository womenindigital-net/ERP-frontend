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
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"><i
                class="fa fa-user"></i>PROFILE</button>
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=".social-communication-view"><i class="fa fa-plus"></i>ADD</button>
          </div>
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
                  <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                    data-bs-toggle="modal" data-bs-target=".social-communication-view">
                    <i class="mdi mdi-eye"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                      class="fas fa-check"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                      class="fas fa-check"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                    data-bs-toggle="modal" data-bs-target=".social-communication-view">
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
                  <x-input-text name="collection_date" type="date" placeholder="mm/dd/yyyy"></x-input-text>
                </div>

                <div class="col-lg-4 pull-left pb-2">
                  <label class="p-2">Teacher: <span class="text-danger text-bold">*</span></label>
                  <x-input-select name="teacher_id" :records="$teachers"></x-input-select>
                </div>

                <div class="col-lg-4 pull-left pb-2">
                  <label class="p-2">Candidate ID: <span class="text-danger text-bold">*</span></label>
                  <select class="form-control strip-tags select2 form-select" id="StudentID" required=""
                    name="StudentID">
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
                    <p> These social communication skills develop over time. Read the behaviors below and place an X in
                      the appropriate column that describes how your child uses words/language, no words (gestures –
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
            <x-input-radio-or-check name="" label="Interaction with younger children"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Waiting for a response from peers"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Negotiating deals" :records="$constants::$socialCommunication"
              :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Taking turns" :records="$constants::$socialCommunication"
              :isVertical="false">
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
            <x-input-radio-or-check name="" label="Understanding the rules of the game"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Expressing various appropriate expressions"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Receiving and giving gifts"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Understanding sharing and the concept of give and take"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Participation in group activities"
              :records="$constants::$socialCommunication" :isVertical="false">
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
            <x-input-radio-or-check name="" label="Responsiveness" :records="$constants::$socialCommunication"
              :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to handle being “left out”"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
          </section>


          <h3>PERSONAL</h3>
          <section>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Expresses feelings" :records="$constants::$socialCommunication"
              :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Identifies feelings (I'm happy.)"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Explains feelings (I'm happy because it's my birthday)n"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Provides excuses or reasons"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Offers an opinion with support"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Complains" :records="$constants::$socialCommunication"
              :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Blames others" :records="$constants::$socialCommunication"
              :isVertical="false">
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
            <x-input-radio-or-check name="" label="Ability to establish a topic"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to maintain topic relevancy"
              :records="$constants::$socialCommunication" :isVertical="false">
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
            <x-input-radio-or-check name="" label="Ability to interrupt appropriately"
              :records="$constants::$socialCommunication" :isVertical="false">
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
            <x-input-radio-or-check name="" label="Ability to initiate a conversation"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to establish a conversation outside of the interest area"
              :records="$constants::$socialCommunication" :isVertical="false">
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
            <x-input-radio-or-check name="" label="Ability to order information appropriately (new info follows old)"
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
            <x-input-radio-or-check name="" label="Ability to use generals/specifics"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Pronoun use" :records="$constants::$socialCommunication"
              :isVertical="false">
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
            <x-input-radio-or-check name="" label="Provides relevant information"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Truthfulness of information (grandiosity)"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to establish joint activity"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Tendency to present personal opinions as factual"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
          </section>


          <h3>Repair Structures</h3>
          <section>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Requests clarification as needed"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Spontaneously provides additional information"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Requests repetition of information for clarification purposes"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
          </section>

          <h3>Functional Intent > A.Responsiveness</h3>
          <section>
            <x-input-radio-or-check name="" label="Looks at speaker when called"
              :records="$constants::$socialCommunication" :isVertical="false">
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
            <x-input-radio-or-check name="" label="Ability to state facts appropriately"
              :records="$constants::$socialCommunication" :isVertical="false">
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
            <x-input-radio-or-check name="" label="Makes choices" :records="$constants::$socialCommunication"
              :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Gives description of an object wanted"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Expresses a specific personal need"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Requests help" :records="$constants::$socialCommunication"
              :isVertical="false">
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
            <x-input-radio-or-check name="" label="Ability to use appropriate pitch"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to use appropriate loudness"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to comprehend implied meanings via tone of voice"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to comprehend implied meanings via inflectional cues"
              :records="$constants::$socialCommunication" :isVertical="false">
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
            <x-input-radio-or-check name="" label="Ability to shift the style of conversation according to person"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to shift the style of conversation according to the setting"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to shift the style of conversation according to humor"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to engage a listener appropriately"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to use politeness"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Appropriateness to the situation"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to recognize other’s moods"
              :records="$constants::$socialCommunication" :isVertical="false">
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
            <x-input-radio-or-check name="" label="Uses greetings" :records="$constants::$socialCommunication"
              :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to acknowledge the presence of another individual"
              :records="$constants::$socialCommunication" :isVertical="false">
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
            <x-input-radio-or-check name="" label="Ability to establish cause-effect"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to use conflict-resolution"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
          </section>

          <h3>Functional Intent > J. Deceit</h3>
          <section>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Uses language to deceive" :records="$constants::$socialCommunication"
              :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Lies" :records="$constants::$socialCommunication"
              :isVertical="false">
            </x-input-radio-or-check>
          </section>


          <h3>Academic Communication</h3>
          <section>
            <div class="title">
              <h3><b>This section is designed to compare the individual’s ability to communicate in an academic setting
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
            <x-input-radio-or-check name="" label="Ability to paraphrase text"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to summarize a story providing key information"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to respond to questions requiring inferential reasoning"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
          </section>

          <h3>Nonverbal Communication</h3>
          <section>
            <div class="title">
              <h3><b>This section is designed to compare the individual’s ability to communicate with others using
                  non-verbal means.</b></h3>
            </div>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to recognize “personal space” boundaries"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to touch appropriatel"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Comprehends facial expression"
              :records="$constants::$socialCommunication" :isVertical="false">
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
            <x-input-radio-or-check name="" label="Comprehends body language"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to use facial expression"
              :records="$constants::$socialCommunication" :isVertical="false">
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
            <x-input-radio-or-check name="" label="Ability to use body language"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Ability to use eye contact"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
          </section>


          <h3>Perspective Taking</h3>
          <section>
            <div class="title">
              <h3><b>This section is designed to compare the individual’s ability to recognize and use appropriate
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
            <x-input-radio-or-check name="" label="Gives directions to play a game"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Gives directions to make something"
              :records="$constants::$socialCommunication" :isVertical="false">
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
            <x-input-radio-or-check name="" label="Ability to lose a game graciously"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="" label="Degree of anxiety in social settings"
              :records="$constants::$socialCommunication" :isVertical="false">
            </x-input-radio-or-check>
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