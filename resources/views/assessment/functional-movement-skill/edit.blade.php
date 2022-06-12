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

@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title')STUDENT QA @endslot
@endcomponent

<div class="row mb-3 mt-3">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3 mt-3">
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
        <h5 class="modal-title" id="myLargeModalLabel"> Fundamental Movement Skills</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
          <h3>Fundamental Movement Skills</h3>
          <section>
            <form >
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
                    <x-input-select name="teacher_id" :records="$teachers"></x-input-select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-phoneno-input">Candidate ID:</label>
                    <select class="form-control strip-tags select2 form-select" id="StudentID" required="" name="StudentID">
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
                    </select>
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
            </form>
          </section>

          <!-- Company Document -->
          <h3>General</h3>
          <section>
            <form >
              <div id="" class="class="">
                  <div class="row mb-3 mt-3">
                    <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                    <div class="col-md-8">On the left is the Deep Squat test from the Functional Movement Screen.
                      Note that the stick is maintained vertically aligned with the feet, representing good mobility/stability through the trunk and shoulders.
                      For the max score of “3”, this is the position you must achieve. On the right, the stick is well forward of the body, indicating deficits in mobility, stability, or both. Pls check 4 times :</div>
                  </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 1: Can do</label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 1: Can not do </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 2: Can do </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 2: Can not do </label>
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
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 3: Can do</label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 3: Can not do</label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 4: Can do</label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 4: Can not do</label>
                      </div>
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
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Can do</label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Can Not do</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
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
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can not Do  </label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can not Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 4: Can not Do</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </section>

          <!-- Bank Details -->
          <h3>Ankle</h3>
          <section>
            <div>
              <form >
                <div id="" class="">
                
                    <div class="row mb-3 mt-3">
                      <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                      <div class="col-md-8">Ankle: The picture on the left shows optimal ankle flexion just before the heel rises during the walking stride. The picture on the right shows limited ankle flexion and is associated with an inefficient stride. </div>
                    </div>
                  
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can not Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can not DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can Do Try</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can not DO</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </section>

          <!-- Bank Details -->
          <h3>Knee</h3>
          <section>
            <div>
              <form >
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
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can not Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can not DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can Do </label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can not DO</label>
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
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can not Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can not DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can not DO</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="" class="">
                    <div class="row mb-3 mt-3">
                      <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                    </div>
                  
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can not Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can not DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can Do Try</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can not DO</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </section>


          <!-- Bank Details -->
          <h3> Hip</h3>
          <section>
            <div>
              <form >
                <div id="" class="">
                
                    <div class="row mb-3 mt-3">
                      <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                      <div class="col-md-8">The single-leg squat variation shown on the left is a strong challenge to the hip stabilizers. The picture on the right shows excellent mobility of the right hip into extension during a lunge. This is also the position for stretch of the hip flexors of the right leg.
                      </div>
                    </div>
                  
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can not Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can not DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can Do </label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can not DO</label>
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
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can not Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can not DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can not DO</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </section>

          <!-- Bank Details -->
          <h3>Low Back</h3>
          <section>
            <div>
              <form >
                <div id="" class="">
                
                    <div class="row mb-3 mt-3">
                      <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                      <div class="col-md-8">Low Back: Walking lunges with a plate overhead demands control of the core.
                        Keep the core engaged throughout to limit trunk sway.
                      </div>
                    </div>
                  
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can not Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can not DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can Do </label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can not DO</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="" class="">
                
                    <div class="row mb-3 mt-3">
                      <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                    </div>
                  
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can not Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can not DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can not DO</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </section>


          <!-- Bank Details -->
          <h3>Mid Back</h3>
          <section>
            <div class="row mb-3 mt-3">
              <div id="" class="">
              
                  <div class="row mb-3 mt-3">
                    <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                    <div class="col-md-8">Low Back: Walking lunges with a plate overhead demands control of the core.
                      Keep the core engaged throughout to limit trunk sway.
                    </div>
                  </div>
                
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 1: Can Do</label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 1: Can not Do</label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 2: Can DO</label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 2: Can not DO</label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 3: Can Do </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 3: Can not DO</label>
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
              <div id="" class="">
              
                  <div class="row mb-3 mt-3">
                    <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                    <div class="col-md-8">Tight muscles around the shoulder blades can limit overhead motion. Here the foam roll is used to increase the extensibility of the teres major. 
                    </div>
                  </div>
                
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 1: Can Do</label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 1: Can not Do</label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 2: Can DO</label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 2: Can not DO</label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 3: Can Do </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Try 3: Can not DO</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-3 mt-3">
                <div id="" class="">
                
                    <div class="row mb-3 mt-3">
                      <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                      <div class="col-md-8">Overhead squatting is a challenge to stability throughout the core and shoulder girdle. Ensure you have sufficient shoulder mobility to keep the weight vertically aligned with the feet, not in front of the body.
                      </div>
                    </div>
                  
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="m-0">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 1: Can not Do</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 2: Can not DO</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can Do </label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Try 3: Can not DO</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mb-3 mt-3">
                  <div id="" class="">
                  
                      <div class="row mb-3 mt-3">
                        <div class="col-md-4"><img src="{{ asset('images/avatar-19.jpg') }}" alt="image" class="w-100"></div>
                      </div>
                    
                  </div>
                  <!-- end row -->
                  <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                      <div class="m-0">
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">Try 1: Can Do</label>
                          </div>
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">Try 1: Can not Do</label>
                          </div>
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">Try 2: Can DO</label>
                          </div>
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">Try 2: Can not DO</label>
                          </div>
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">Try 3: Can Do </label>
                          </div>
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">Try 3: Can not DO</label>
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