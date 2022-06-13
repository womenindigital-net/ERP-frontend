@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
<style>
  .wizard .steps>ul>li a{
    padding-right: 0 !important;
  }
  .wizard .steps>ul>li a{
    padding-left: 5px !important;
  }
</style>

@endsection

@section('content')

<div class="row mb-3 mt-3">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3 mt-3">
          <div class="col-6">
            <h4 class="card-title">STUDENT QAS</h4>
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
                <x-input-text type="search" name="search" />
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
                  <td>2022-05-15</td>
                  <td>Abid Hossain Turjo</td>
                  <td>Ohidul Hassan</td>
                  <td>Create: Ohidul Hassan @ 2022-05-15 17:24:20</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="mdi mdi-eye" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                        class="fas fa-check"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                        class="fas fa-check"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
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
        <h5 class="modal-title" id="myLargeModalLabel"> Fundamental Movement Skills</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
          <h3>Fundamental Movement Skills</h3>
          <section>
              <div class="row mb-3 mt-3">
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-firstname-input">Collection Date:</label>
                    <div class="input-group" id="datepicker2">
                      <input type="date" class="form-control" placeholder="dd M, yyyy">
                    </div><!-- input-group -->
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-lastname-input">Teacher:</label>
                    <x-input-select name="teacher_id" :records="[]" />
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-phoneno-input">Candidate ID:</label>
                    <x-input-select name="candidate_id" :records="[]" />
                  </div>
                </div>
              </div>
              <div class="row ">
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label for="verticalnav-phoneno-input">Description:</label>
                   <p>Sensory checklist</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label for="verticalnav-email-input">Instruction:</label>
                  <p>Parents can use this checklist to identify potential sensory challenges for their Child. The checklist is designed to target specific areas of potential dysfunction and to give you an opportunity to look at child’s environment and assess potential triggers for challenging behaviors. Read the statements and put a check mark or an X next to any statements that are true.</p>
                  </div>
                </div>
              </div>
          </section>

          <!-- Company Document -->
          <h3>General</h3>
          <section>
                  <div class="row mb-3 mt-3">
                    <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                    <div class="col-md-8">On the left is the Deep Squat test from the Functional Movement Screen.
                      Note that the stick is maintained vertically aligned with the feet, representing good mobility/stability through the trunk and shoulders.
                      For the max score of “3”, this is the position you must achieve. On the right, the stick is well forward of the body, indicating deficits in mobility, stability, or both. Pls check 4 times :</div>
                  </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <x-input-radio-or-check name="functional_movement_general_1" :records="$movementSkillsConstants::$accidentOrIncident" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <x-input-radio-or-check name="functional_movement_general_2" :records="$movementSkillsConstants::$accidentOrIncident" />
                      </div>
                  </div>
                </div>
              </div>
              <div id="" class="">
                  <div class="row mb-3 mt-3">
                    <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                    <div class="col-md-8">	
                      In these pictures, the Hurdle Step evaluates mobility of the right hip and stability of the trunk and left leg. Optimal execution is shown on the left. The picture on the right demonstrates</div>
                  </div>
              </div>
              <h5>Excessive hip rotation to clear the hurdle</h5>
              <div id="" class="">
                  <div class="row mb-3 mt-3">
                    <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                    <div class="col-md-8">	
                      In these pictures, the Hurdle Step evaluates mobility of the right hip and stability of the trunk and left leg. Optimal execution is shown on the left. The picture on the right demonstrates 
                    </div>
                  </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Poor control of trunk indicated by the tilting stick?</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <x-input-radio-or-check name="functional_movement_general_3" :records="$movementSkillsConstants::$accidentOrIncidentTwo" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          
          </section>
          <!-- Bank Details -->
          <h3>Foot</h3>
          <section>
            <div>
              <form >
                <div id="" class="">
                    <div class="row mb-3 mt-3">
                      <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                      <div class="col-md-8">To improve the stability of the feet, single-leg stance exercises with bare feet are useful.
                        Shown here are diagonal leg whips on the left and rotational reaches on the right. Gently grip the ground with the toes. Keep a tall posture and limit trunk sway. Start with short, slow movements and gradually add the range of motion and speed as proficiency improves.</div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <x-input-radio-or-check name="functional_movement_foot_1" :records="$movementSkillsConstants::$accidentOrIncidentTwo" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
           
            </div>
          </section>

          <!-- Bank Details -->
          <h3>Ankle</h3>
          <section>
            <div>
              <div class="row mb-3 mt-3">
                <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                <div class="col-md-8">Ankle: The picture on the left shows optimal ankle flexion just before the heel rises during the walking stride. The picture on the right shows limited ankle flexion and is associated with an inefficient stride. </div>
              </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <x-input-radio-or-check name="functional_movement_ankle_1" :records="$movementSkillsConstants::$accidentOrIncidentThree" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Knee</h3>
          <section>
            <div>
                <div id="" class="">
                    <div class="row mb-3 mt-3">
                      <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                      <div class="col-md-8">On the left, side stepping against the elastic band builds lateral hip stability and thus better control of knee motion. Ensure that the trunk doesn't sway.
                        On the right, the medial pull of the elastic band adds challenge to lunges or single-leg squats. Ensure that the knee of the stance leg does not drift inward.</div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <x-input-radio-or-check name="functional_movement_knee_1" :records="$movementSkillsConstants::$accidentOrIncidentThree" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="" class="">
                    <div class="row mb-3 mt-3">
                      <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                      <div class="col-md-8">	The single-leg squat with medial rotation. This exercise challenges hip and knee stability. Do not let the knee of the stance leg drift inward.
                        Start with short, slow movements and gradually add range of motion and speed as proficiency improves.</div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <x-input-radio-or-check name="functional_movement_knee_2" :records="$movementSkillsConstants::$accidentOrIncidentThree" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mb-3 mt-3">
                  <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <x-input-radio-or-check name="functional_movement_knee_3" :records="$movementSkillsConstants::$accidentOrIncidentThree" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </section>
          <!-- Bank Details -->
          <h3> Hip</h3>
          <section>
            <div>
              <div class="row mb-3 mt-3">
                <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                <div class="col-md-8">The single-leg squat variation shown on the left is a strong challenge to the hip stabilizers. The picture on the right shows excellent mobility of the right hip into extension during a lunge. This is also the position for stretch of the hip flexors of the right leg.
                </div>
              </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <x-input-radio-or-check name="functional_movement_hip_1" :records="$movementSkillsConstants::$accidentOrIncidentThree" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mb-3 mt-3">
                  <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                  <div class="col-md-8">	The single-leg squat with medial rotation. This exercise challenges hip and knee stability. Do not let the knee of the stance leg drift inward.
                    Start with short, slow movements and gradually add range of motion and speed as proficiency improves.</div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <x-input-radio-or-check name="functional_movement_hip_2" :records="$movementSkillsConstants::$accidentOrIncidentThree" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Low Back</h3>
          <section>
            <div>
                <div class="row mb-3 mt-3">
                  <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                  <div class="col-md-8">Low Back: Walking lunges with a plate overhead demands control of the core.
                    Keep the core engaged throughout to limit trunk sway.
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <x-input-radio-or-check name="functional_movement_low_back_1" :records="$movementSkillsConstants::$accidentOrIncidentThree" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mb-3 mt-3">
                  <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <x-input-radio-or-check name="functional_movement_low_back_2" :records="$movementSkillsConstants::$accidentOrIncidentThree" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Mid Back</h3>
          <section>
            <div class="row mb-3 mt-3">
              <div class="row mb-3 mt-3">
                <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                <div class="col-md-8">Low Back: Walking lunges with a plate overhead demands control of the core.
                  Keep the core engaged throughout to limit trunk sway.
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <x-input-radio-or-check name="functional_movement_mid_back_1" :records="$movementSkillsConstants::$accidentOrIncidentThree" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Shoulder </h3>
          <section>
            <div class="row mb-3 mt-3">
              <div class="row mb-3 mt-3">
                <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                <div class="col-md-8">Tight muscles around the shoulder blades can limit overhead motion. Here the foam roll is used to increase the extensibility of the teres major. 
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <x-input-radio-or-check name="functional_movement_shoulder_1" :records="$movementSkillsConstants::$accidentOrIncidentThree" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-3 mt-3">
                <div class="row mb-3 mt-3">
                  <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                  <div class="col-md-8">Overhead squatting is a challenge to stability throughout the core and shoulder girdle. Ensure you have sufficient shoulder mobility to keep the weight vertically aligned with the feet, not in front of the body.
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <x-input-radio-or-check name="functional_movement_shoulder_2" :records="$movementSkillsConstants::$accidentOrIncidentThree" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mb-3 mt-3">                  
                  <div class="row mb-3 mt-3">
                    <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                  </div>
                  <!-- end row -->
                  <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                      <div class="m-0">
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <x-input-radio-or-check name="functional_movement_shoulder_3" :records="$movementSkillsConstants::$accidentOrIncidentThree" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
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