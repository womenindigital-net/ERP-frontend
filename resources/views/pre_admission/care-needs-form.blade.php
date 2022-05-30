@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
@endsection
@section('content')

@component('components.breadcrumb')
@slot('li_1')COMMON > STUDENT QA @endslot
@slot('title')STUDENT QAS @endslot
@endcomponent

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">STUDENT QAS</h4>
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
                  <td>2022-04-13</td>
                  <td>Hossain Rafif Ahyaan</td>
                  <td>Nurjahan Dipa</td>
                  <td>Create: Nurjahan Dipa @ 2022-04-13 12:32:20</td>
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
        <h5 class="modal-title" id="myLargeModalLabel"> > CARE Needs - Part 2 (PA1OT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
          <h3>CARE Needs - Part 2</h3>
          <section>
            <form>
              <div class="row">
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-firstname-input">Collection Date:</label>
                    <x-input-text name="collection_date" type="date" placeholder="mm/dd/yyyy">
                    </x-input-text>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-lastname-input">Teacher:</label>
                    <x-input-select name="teacher_id" :records="$teachers"></x-input-select>
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
                <div class="row">
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label for="verticalnav-phoneno-input">Instruction:</label>
                      <p>This form will be used after admission</p>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </section>
          <!-- Company Document -->
          <h3>2nd part: Assessment</h3>
          <section>
            <form>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Instruction:</h5>
                    <div class="form-check d-flex p-2">
                      <h6>Enter Assessment</h6>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Case History form submitted?</h5>
                  </div>
                </div>
              </div>
              <!-- end row -->

              <x-input-radio-or-check name="hh" label="Has the individual had a previous needs assessment?"
                :records="$constants::$yesNoEn"></x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="If so, has a copy been obtained?"
                :records="$constants::$yesNoEn"></x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Psychological assessment" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="if Yes, report attached" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Functional Assessment" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Sensory checklist" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Social Communication" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>

              <!-- end row -->

              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Therapy assessment: OT, SLT, Physio</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="checkbox" name="formRadios">
                        <label class="form-check-label">OT</label>
                      </div>
                      <div>
                        <input class="form-check-input " type="checkbox" name="formRadios">
                        <label class="form-check-label me-5"> SLT</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="checkbox" name="formRadios">
                        <label class="form-check-label"> Physio</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </section>
          <!-- Company Document -->
          <h3> Personal Care Needs</h3>
          <section>
            <form>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Instruction:</h5>
                    <div class="form-check d-flex p-2">
                      <h6>Enter Personal Care Needs</h6>
                    </div>
                  </div>
                </div>
              </div>

              <x-input-radio-or-check name="hh" type="checkbox" label="Self-understanding"
                :records="$careConstants::$selfUnderstanding" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->
              <x-input-radio-or-check name="hh" type="checkbox" label="Eat /drink/ swallow"
                :records="$careConstants::$eatDrinking" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->
              <div class="row border-top py-2 mt-3">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>How many fingers use to eat</h5>
                    <div class="mb-2">
                      <x-input-text name="" placeholder="">
                      </x-input-text>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Food allergy" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              <div class="mt-3">
                <label for="formmessage">Give details</label><textarea id="formmessage" class="form-control" rows="1"
                  placeholder="Enter Answer"></textarea>
              </div>
              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Any special diet?" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Preparation of meal" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" type="checkbox" label="Washing and bathing"
                :records="$careConstants::$washingBathing" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->
              <x-input-radio-or-check name="hh" type="checkbox" label="Brushing teeth/mouth care"
                :records="$careConstants::$teethMouthCare" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->

              <x-input-radio-or-check name="hh" label="Hair Cut" :records="$careConstants::$selfNeedHelp">
              </x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Shaving" :records="$careConstants::$selfNeedHelp">
              </x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Foot care" :records="$careConstants::$selfNeedHelp">
              </x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Nails" :records="$careConstants::$selfNeedHelp">
              </x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" type="checkbox" label="Toilet Training"
                :records="$careConstants::$toiletTraining" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Separate type of toilet Need"
                :records="$careConstants::$urinStool"></x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" type="checkbox" label="Dressing" :records="$careConstants::$dressing"
                :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Getting up/going to bed" :records="$careConstants::$yesNoHelp">
              </x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Managing own money" :records="$careConstants::$yesNoHelp">
              </x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Shopping" :records="$careConstants::$yesNoHelp">
              </x-input-radio-or-check>

              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Transportation" :records="$careConstants::$yesNoHelp">
              </x-input-radio-or-check>

              <!-- end row -->
              <div class="row border-top py-2 mt-3">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Other personal care/activities of daily living</h5>
                    <div class="mb-2">
                      <x-input-text name="" placeholder="">
                      </x-input-text>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <x-input-radio-or-check name="hh" type="checkbox" label="Intrapersonal skills"
                :records="$careConstants::$interpersonal" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->

              <x-input-radio-or-check name="hh" type="checkbox" label="Communication Skills"
                :records="$careConstants::$communicationSkill" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->

            </form>
          </section>
          <!-- Company Document -->
          <h3>Medical history</h3>
          <section>
            <form>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Instruction:</h5>
                    <div class="form-check d-flex p-2">
                      <h6>Enter Medical history</h6>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2 mt-3">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Details of current medical treatment</h5>
                    <div class="mb-2">
                      <x-input-text name="" placeholder="">
                      </x-input-text>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2 mt-3">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Details of past/long term medical conditions</h5>
                    <div class="mb-2">
                      <x-input-text name="" placeholder="">
                      </x-input-text>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <x-input-radio-or-check name="hh" label="Managing medication" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              {{-- end row --}}

              <x-input-radio-or-check name="hh" type="checkbox"
                label="Does the individual have any history of the following?" :records="$careConstants::$history"
                :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->

              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Vaccination records?</h5>
                    <div class="mt-3">
                      <div>
                        <x-input-text name="collection_date" type="file">
                        </x-input-text>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              {{-- ---- --}}
              <div class="row border-top py-2 mt-3">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>More information</h5>
                    <div class="mb-2">
                      <x-input-text name="" placeholder="">
                      </x-input-text>
                    </div>
                  </div>
                </div>
              </div>
              {{-- -------- --}}
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Any other records, Please attach</h5>
                    <div class="mt-3">
                      <div>
                        <x-input-text name="collection_date" type="file">
                        </x-input-text>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- -------- --}}
              <div class="row border-top py-2 mt-3">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Enter more info , if any</h5>
                    <div class="mb-2">
                      <x-input-text name="" placeholder="">
                      </x-input-text>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </section>
          <!-- Company Document -->
          <h3>Physical Health Needs</h3>
          <section>
            <form>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Instruction:</h5>
                    <div class="form-check d-flex p-2">
                      <h6>Enter Physical Health Needs</h6>
                    </div>
                  </div>
                </div>
              </div>
              <x-input-radio-or-check name="hh" label="Sight Aids required?" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              {{-- end row --}}

              <x-input-radio-or-check name="hh" label="Hearing aids required?" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              {{-- end row --}}

              <x-input-radio-or-check name="hh" label="Mobility/Walking Aids required?" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              {{-- end row --}}

              <x-input-radio-or-check name="hh" label="Handling objects/Grip Aids required?"
                :records="$constants::$yesNoEn"></x-input-radio-or-check>
              {{-- end row --}}

              <x-input-radio-or-check name="hh" label="Wheel chair /any other Aids required?"
                :records="$constants::$yesNoEn"></x-input-radio-or-check>
              {{-- end row --}}
              <x-input-radio-or-check name="hh" label="Physical Pressure areas Aids required?"
                :records="$constants::$yesNoEn"></x-input-radio-or-check>
              {{-- end row --}}
              <x-input-radio-or-check name="hh" label="Weight/Aids/Care required?" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              {{-- end row --}}
              <x-input-radio-or-check name="hh" label="Breathing Aids required?" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              {{-- end row --}}
              <x-input-radio-or-check name="hh" label="Oral health Aids required?" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              {{-- end row --}}
              <x-input-radio-or-check name="hh" type="checkbox" label="Any sensory issues? ( Tick, if the child has it)"
                :records="$careConstants::$sensoryIssue" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->
              <x-input-radio-or-check name="hh" type="checkbox" label="Gross Motor Skills"
                :records="$careConstants::$grossMotorSkill" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->
              <x-input-radio-or-check name="hh" type="checkbox" label="Fine Motor Skills"
                :records="$careConstants::$fineMotorSkill" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->
              <x-input-radio-or-check name="hh" type="checkbox" label="Eye Movements"
                :records="$careConstants::$eyeMovement" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->
              <x-input-radio-or-check name="hh" type="checkbox" label="Oral-motor activities"
                :records="$careConstants::$oralMotoractivities" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->
            </form>
          </section>
          <!-- Company Document -->
          <h3> Social Needs</h3>
          <section>
            <form>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Instruction:</h5>
                    <div class="form-check d-flex p-2">
                      <h6>Please Enter Social Needs</h6>
                    </div>
                  </div>
                </div>
              </div>
              <x-input-radio-or-check name="hh" type="checkbox" label="Relationship management"
                :records="$careConstants::$relationshipManagement" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->
              <x-input-radio-or-check name="hh" type="checkbox" label="Social Communication skills"
                :records="$careConstants::$socialSkill" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->

              <x-input-radio-or-check name="is_able_to_understand_tense" label="Demonstrating respect for self & others"
                :records="$constants::$yesNoEn" secondaryInputLabel="Explain">
              </x-input-radio-or-check>
              {{-- end row --}}

              <x-input-radio-or-check name="is_able_to_understand_tense" label="Recognizing / Managing basic Emotions"
                :records="$constants::$yesNoEn" secondaryInputLabel="Give details, if any">
              </x-input-radio-or-check>
              {{-- end row --}}

              <x-input-radio-or-check name="is_able_to_understand_tense" label="Transition and Changes"
                :records="$constants::$yesNoEn" secondaryInputLabel="Give details, if any">
              </x-input-radio-or-check>
              {{-- end row --}}

              <x-input-radio-or-check name="hh" type="checkbox" label=" Work Habit"
                :records="$careConstants::$workHabit" :isVertical="false"></x-input-radio-or-check>
              <!-- end row -->

              <x-input-radio-or-check name="is_able_to_understand_tense" label="Additional information"
                :records="$constants::$yesNoEn" secondaryInputLabel="Give details, if any">
              </x-input-radio-or-check>
              {{-- end row --}}
            </form>
          </section>
          <!-- Company Document -->
          <h3>Signature</h3>
          <section>
            <form>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Instruction:</h5>
                    <div class="form-check d-flex p-2">
                      <h6>Enter Signature information</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Hereby I confirmed that all above information I have provided are correct and genuine. For any
                      wrong and false information, may lead cancellation of the admission.</h5>
                    <div class="mt-3">
                      <div>
                        <x-input-text name="" placeholder="">
                        </x-input-text>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2 mt-3">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Name of parent/ guardian</h5>
                    <div class="mb-2">
                      <x-input-text name="" placeholder="">
                      </x-input-text>
                    </div>
                  </div>
                </div>
              </div>
            </form>
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