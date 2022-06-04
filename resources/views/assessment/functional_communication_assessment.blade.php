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
@slot('title') Student Qa @endslot
@endcomponent

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title"> STUDENT QA</h4>
          </div>
          <div class="col-6 text-end mb-3">
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=""><i class="fa fa-user"></i> Profile</button>
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> ADD</button>
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
                  <td>2022-03-20</td>
                  <td>Alil Arysa Mariya</td>
                  <td>Nurjahan Dipa</td>
                  <td>Create: Nurjahan Dipa @ 2022-03-20 15:46:38</td>
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
        <h5 class="modal-title" id="myLargeModalLabel">Functional Assessment (PA2eOT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
          <h3>Case History</h3>
          <section>
            <form>
              <div class="row">
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-firstname-input">Collection Date:</label>
                    <div class="input-group" id="datepicker2">
                      <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy"
                        data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">
                      <span class="input-group-text">
                        <i class="mdi mdi-calendar"></i></span>
                    </div><!-- input-group -->
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
                    <label for="verticalnav-phoneno-input">Description:</label>
                    <p>Functional Assessment Checklist (FACTS)</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label for="verticalnav-email-input">Instruction:</label>
                    <p>Functional Assessment Checklist (FACTS)</p>
                  </div>
                </div>
              </div>
            </form>
          </section>
          <!-- Speech -->
          <h3>Speech</h3>
          <section>
            <form>
              <!--end row -->
              <x-input-radio-or-check name="" label="Talk too loud for the context" :records="$constants::$yesNoEn"
                secondaryInputLabel="Excessive:"></x-input-radio-or-check>
              <!--end row -->
              <x-input-radio-or-check name="" label="Speech is hard to understand" :records="$constants::$yesNoEn"
                secondaryInputLabel="Excessive:"></x-input-radio-or-check>
              <!--end row -->
              <x-input-radio-or-check name="" label="Speech calls attention of itself" :records="$constants::$yesNoEn"
                secondaryInputLabel="Excessive:"></x-input-radio-or-check>
              <!--end row -->
              <!--end row -->
              <x-input-radio-or-check name="" label="Voice is too hard" :records="$constants::$yesNoEn"
                secondaryInputLabel="Excessive:"></x-input-radio-or-check>
              <!--end row -->
              <x-input-radio-or-check name="" label="Voice is too low" :records="$constants::$yesNoEn"
                secondaryInputLabel="Excessive:"></x-input-radio-or-check>
              <!--end row -->
              <!--end row -->
              <x-input-radio-or-check name="" label="Repeats words of parts of word when talking"
                :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
              <!--end row -->
              <!--end row -->
              <x-input-radio-or-check name="" label="Talks fast, causing speech to be unclear"
                :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
              <!--end row -->
              <!--end row -->
              <x-input-radio-or-check name="" label="Speech sounds monotone" :records="$constants::$yesNoEn"
                secondaryInputLabel="Excessive:"></x-input-radio-or-check>
              <!--end row -->
              <!--end row -->
              <x-input-radio-or-check name="" label="Speech sounds sign-song" :records="$constants::$yesNoEn"
                secondaryInputLabel="Excessive:"></x-input-radio-or-check>
              <!--end row -->
            </form>
          </section>
          <!-- Body Language -->
          <h3>Body Language</h3>
          <section>
            <div>
              <form>
                <!--end row -->
                <x-input-radio-or-check name="" label="Talk too quietly for the context" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Body posture is too rigid" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Body posture is too relaxed" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has noticed nervous mannerisms" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has limited use if gestures" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Demonstrates unusual facial expressions"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Shows little variation in facial expressions"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty understanding facial expressions / body language"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Use inappropriate body orientation or proximity in interaction"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Eye contact is fleeting" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Does not use eye contact" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
              </form>
            </div>
          </section>
          <!--Words usages / Vocabulary-->
          <h3>Words usages / Vocabulary</h3>
          <section>
            <div>
              <form>
                <!--end row -->
                <x-input-radio-or-check name="" label="Repeats words / phrases / sentences"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name=""
                  label="Has difficulties using ad understanding non – literal meanings (proverbs, idioms, slangs, sarcasm, teasing etc),"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty understanding /using humor appropriately"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <x-input-radio-or-check name="" label="Demonstrate literal use and understanding of language"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty with multiple meaning words"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Uses rote / recital language" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Demonstrate idiosyncratic word use"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has a large vocabulary with little comprehension"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Reverses personal pronouns" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
              </form>
            </div>
          </section>
          <!--Sentence structure-->
          <h3>Sentence structure</h3>
          <section>
            <div>
              <form>
                <!--end row -->
                <x-input-radio-or-check name="" label="Lacks variety in use of sentence structure"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
              </form>
            </div>
          </section>
          <!--Relaying information-->
          <h3>Relaying information</h3>
          <section>
            <div>
              <form>
                <!--end row -->
                <x-input-radio-or-check name=""
                  label="Leaves out important information when retelling a story, describing an event, giving directions or giving a message"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulties relaying information in a sequential way"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Says too much or too little" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Is slow in answering questions in class / work"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
              </form>
            </div>
          </section>

          <!-- Following Directions -->
          <h3>Following Directions</h3>
          <section>
            <div>
              <form>
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty understanding what to do"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name=""
                  label="Often asks for repeats/ explanations of a direction or assignment"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Does the wrong thing after clear directions have been given"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name=""
                  label="Doesn’t appear to watch what other students are doing for information"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Doesn’t seek help in following directions when it is needed"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Appears to have difficulty understanding tone of voice"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty comprehending questions"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
              </form>
            </div>
          </section>
          <!-- Attention and Memory -->
          <h3>Attention and Memory</h3>
          <section>
            <div>
              <form>
                <!--end row -->
                <x-input-radio-or-check name="" label="has an excellent rote memory with poor comprehension"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Often looks away or ‘day dreams’ during lectures"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty remembering orally presented information"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name=""
                  label="Has a hard time picking out the main points of an oral presentation or story"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name=""
                  label="Demonstrates difficulty remembering the names of teachers and class members"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty shifting attention"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty with joint attention"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Focuses on apparently irrelevant information or details"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Uses delayed r immediate echolalia"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Repeats passages from movie, songs , commercials , cartoons etc"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Does not responds to his name" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Responds to his name inconsistently"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Inconsistently attends to verbal stimuli"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Response to speech is delayed" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
              </form>
            </div>
          </section>
          <!-- Conversation / Social Communication -->
          <h3>Conversation / Social Communication</h3>
          <section>
            <div>
              <form>
                <!--end row -->
                <x-input-radio-or-check name=""
                  label="Demonstrates pragmatic difficulties despite adequate scores on standardized tests"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Looks down or away when talking" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Makes off topic comments" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name=""
                  label="Has trouble stating opinion and reason for those opinions for a varieties of age appropriate topics"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty initiating conversations"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty initiating pay" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has hard time sustaining topic of conversation"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty initiating play" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has a hard time sustaining topic of conversation"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has a hard time sustaining play with others"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Demonstrate problems terminating a conversation"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty understanding the perspective of others"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has trouble responding in an empathetic manner"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Interrupts the conversation of others"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty adapting language of others"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty adapting language to audience or setting"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Talks too much in a conversation with peers / adults"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Speech is hard to understand" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Bringing up the same topic repeatedly"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Gives recitative / redundant information"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Demonstrates difficulty taking turns"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Does not use language to regulate others action"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty with greetings / departures"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty clarifying" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty asking for clarification"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty asking question" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name=""
                  label="Use obsessive questions or comments to initiate or maintain interaction"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name=""
                  label="Significant differences between interaction skills with peers vs. adults"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Does not evoke attention appropriately"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Difficulty comprehending social rules"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Difficulty asking for and accepting help"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Protest in inappropriate or atypical ways"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Does not ask permission when appropriate to do so"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Is unaware of his impact on others"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Demonstrates limited range of communicative functions"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Pre-suppositional skills are weak"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Appear to have difficulty judging listener interest"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
              </form>
            </div>
          </section>
          <!-- play skill -->
          <h3>Play skill</h3>
          <section>
            <div>
              <form>
                <!--end row -->
                <x-input-radio-or-check name="" label="Appears more interested in objectives than people"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Does not establish joint focus" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Does not anticipate social approach of other"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Shows little awareness of peers of have atypical interactions"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Does not observe peers with curiosity"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty with parallel play"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty with associative play"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty with cooperative play"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Laughs for no apparent reason" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Cries for no apparent reason" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has difficulty sharing" :records="$constants::$yesNoEn"
                  secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Does thing s for himself without interacting with others"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Has limited imaginative / pretending play"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Demonstrate difficulty with cause and effect"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Play appears ritualistic / recitation / rote"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Does not response appropriately to others distress"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
                <!--end row -->
                <x-input-radio-or-check name="" label="Lack of joint attention such as showing and pointing"
                  :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:"></x-input-radio-or-check>
                <!--end row -->
              </form>
            </div>
          </section>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('script')

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>

@endsection