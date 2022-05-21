@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"
  type="text/css">
<link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet"
  type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet"
  type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet"
  type="text/css" />
<link href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title') Case History @endslot
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
              data-bs-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> ADD</button>
 
        </div>
        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
          <thead>
            <tr>
              <th>Collection Date</th>
              <th>Student Name</th>
              <th>Collected By</th>
              <th>Log</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2022-05-16</td>
              <td>Abdur Rahman Sajid</td>
              <td>Ohidul Hassan</td>
              <td>
                Create: Ohidul Hassan @ 2022-05-16 16:38:29
              </td>
              <td>
              <button type="button"
                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                <i class=" fas fa-eye"></i>
            </button>
            <button type="button"
                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"
                data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                 <i class="fas fa-check"></i>
            </button>
            <button type="button"
                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                 <i class="fas fa-check"></i>
            </button>
            <button type="button"
                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                <i class="fas fa-pen"></i></button>
            <button type="button"
                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                    class="fas fa-trash-alt"></i></button></td>
            </tr>
          </tbody>
        </table>

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
        <h5 class="modal-title" id="myLargeModalLabel"> Physiotherapy (PA2dOT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
          <h3>Sensory Checklist</h3>
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
                   <p>Physiotherapy assessment form</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label for="verticalnav-email-input">Instruction:</label>
                  <p>Physiotherapy assessment form</p>
                  </div>
                </div>
              </div>
            </form>
          </section>

          <!-- Company Document -->
          <h3>General</h3>
          <section>
            <form>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Birth history</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Before birth</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Pregnancy</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">During Birth</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Delivery</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">After Birth</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
            <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">History</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
  
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Medication Treatment</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Any present medicines</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Home equipment</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
              <!-- end row -->
            </form>
          </section>

          <!-- Bank Details -->
          <h3>Visual Perception</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Visual Discrimination</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Visual Memory</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Visual Figure ground</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Visual Spatial</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Oral Motor</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Sucking</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Drooling</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Swollen</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Chewing</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Choking</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Drinking</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </form>
            </div>
          </section>

          <!-- Bank Details -->
          <h3>Activities of Daily living</h3>
          <section>
            <div>
              <form>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Eating</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Brushing teeth</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Dressing</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Toilet</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Bathing</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Does The Child attend school?</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">If Yes, Enter school name</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Answer">
            </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Leisure/ Play: activities of interest.</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              </form>
            </div>
          </section>


          <!-- Bank Details -->
          <h3>Strength</h3>
          <section>
            <div>
              <form>
          <!-- end row -->
          <div class="mb-3">
            <label for="formrow-firstname-input" class="form-label">Please explain strength area</label>
            <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter  Text">
        </div>     
          <!-- end row -->
                </form>
              </div>
            </section>
          <!-- Bank Details -->
          <h3> Functional Gross Motor</h3>
          <section>
            <div>
              <form>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Sitting</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Crawling</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Standing</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Walking</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Jumping</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Running</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Ball skill</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              </form>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Transitional Movements</h3>
          <section>
            <div>
              <form>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Prone to Supine</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Continuous Rolling</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Lying to Sit</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Box sit to stand</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Jumping</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Cross sit to stand</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Kneeling to stand:</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              </form>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Fine motor Skill</h3>
          <section>
            <div>
              <form>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Dominance</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Left</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
            <div class="mb-3">
              <label for="formrow-firstname-input" class="form-label">Right</label>
              <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
          </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Reach</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Release</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Symmetrical use</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Bilateral use</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">In-hand manipulation</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Eye hand co-ordination</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Transfer</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
                 <!-- end row -->
                 <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Writing skill</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </form>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Automatic Reaction</h3>
          <section>
            <div>
              <form>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Protective reactions</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Equilibrium reaction</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
             
              <!-- end row -->
              </form>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Sensory Skill (Normal /Hypo response)</h3>
          <section>
            <div>
              <form>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Tactile</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Auditory</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Vestibular</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Proprioceptive</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
             
              <!-- end row -->
              </form>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Cognitive Skills</h3>
          <section>
            <div>
              <form>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Attention</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Problem Solving</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Able to Follow instruction</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Memory</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Perceptual Motor</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Body Awareness</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Body Co-ordination</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
             
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="mb-2">
                    <h5 class="">Bilateral integration</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
             
              <!-- end row -->
              </form>
            </div>
          </section>

          <h3> Treatment</h3>
          <section>
            <form>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Problem List</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Treatment plan</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Treatment plan implementation details</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Progress</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
              
              <!-- end row -->
            </form>
          </section>

          <h3>Signature</h3>
          <section>
            <form>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Therapist Signature</label>
                <input class="form-control" type="file" id="formFile">
            </div>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Designation and organizations name</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Answer">
            </div>              
              <!-- end row -->
            </form>
          </section>

           <!-- Bank Details -->
           <h3>Muscle Power</h3>
           <section>
             <div>
               <form>
               <!-- end row -->
               <div class="row border-top py-2">
                 <div class="col-xl-12 col-sm-12">
                   <div class="mb-2">
                     <h5 class="">Upper limbs</h5>
                     <div class="form-check d-flex">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Normal</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Hyper</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Hypo</label>
                        </div>
                      </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="mb-3">
                 <label for="formrow-firstname-input" class="form-label">Left</label>
                 <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
             </div>
             <div class="mb-3">
               <label for="formrow-firstname-input" class="form-label">Right</label>
               <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
           </div>
               <!-- end row -->
               <div class="row border-top py-2">
                 <div class="col-xl-12 col-sm-12">
                   <div class="mb-2">
                     <h5 class="">Lower Limbs</h5>
                     <div class="form-check d-flex">
                       <div class="me-5">
                         <input class="form-check-input" type="radio" name="formRadios">
                         <label class="form-check-label">Normal</label>
                       </div>
                       <div class="me-5">
                         <input class="form-check-input" type="radio" name="formRadios">
                         <label class="form-check-label">Hyper</label>
                       </div>
                       <div>
                         <input class="form-check-input" type="radio" name="formRadios">
                         <label class="form-check-label">Hypo</label>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Left</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
            <div class="mb-3">
              <label for="formrow-firstname-input" class="form-label">Right</label>
              <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
          </div>
            <div class="mb-3">
              <label for="formrow-firstname-input" class="form-label">Trunk/neck</label>
              <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
          </div>
       
                 <!-- end row -->
               </form>
             </div>
           </section>
           <!-- Bank Details -->
           <h3>Muscle Tone</h3>
           <section>
             <div>
               <form>
               <!-- end row -->
               <div class="row border-top py-2">
                 <div class="col-xl-12 col-sm-12">
                   <div class="mb-2">
                     <h5 class="">Upper limbs</h5>
                     <div class="form-check d-flex">
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Normal</label>
                        </div>
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Hyper Tone</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Hypo Tone</label>
                        </div>
                      </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="mb-3">
                 <label for="formrow-firstname-input" class="form-label">Left</label>
                 <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
             </div>
             <div class="mb-3">
               <label for="formrow-firstname-input" class="form-label">Right</label>
               <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
           </div>
               <!-- end row -->
               <div class="row border-top py-2">
                 <div class="col-xl-12 col-sm-12">
                   <div class="mb-2">
                     <h5 class="">Lower Limbs</h5>
                     <div class="form-check d-flex">
                       <div class="me-5">
                         <input class="form-check-input" type="radio" name="formRadios">
                         <label class="form-check-label">Normal</label>
                       </div>
                       <div class="me-5">
                         <input class="form-check-input" type="radio" name="formRadios">
                         <label class="form-check-label">Hyper Tone</label>
                       </div>
                       <div>
                         <input class="form-check-input" type="radio" name="formRadios">
                         <label class="form-check-label">Hypo Tone</label>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Left</label>
                <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
            </div>
            <div class="mb-3">
              <label for="formrow-firstname-input" class="form-label">Right</label>
              <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
          </div>
      
       
                 <!-- end row -->
               </form>
             </div>
           </section>
         
        

      <h3>Behavior</h3>
      <section>
        <form>
          <!-- end row -->
          <div class="row border-top py-2">
            <div class="col-xl-12 col-sm-12">
              <div class="mb-2">
                <h5 class="">Independence</h5>
                <div class="form-check d-flex">
                  <div class="me-5">
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">Yes</label>
                  </div>
                  <div>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">No</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end row -->
          <!-- end row -->
          <div class="row border-top py-2">
            <div class="col-xl-12 col-sm-12">
              <div class="mb-2">
                <h5 class="">Social interaction</h5>
                <div class="form-check d-flex">
                  <div class="me-5">
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">Yes</label>
                  </div>
                  <div>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">No</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end row -->
          <!-- end row -->
          <div class="row border-top py-2">
            <div class="col-xl-12 col-sm-12">
              <div class="mb-2">
                <h5 class="">Social Communication</h5>
                <div class="form-check d-flex">
                  <div class="me-5">
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">Yes</label>
                  </div>
                  <div>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">No</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end row -->
          <!-- end row -->
          <div class="row border-top py-2">
            <div class="col-xl-12 col-sm-12">
              <div class="mb-2">
                <h5 class="">Interpersonal</h5>
                <div class="form-check d-flex">
                  <div class="me-5">
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">Yes</label>
                  </div>
                  <div>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">No</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end row -->
        </form>
      </section>

        

      <h3>Domain Area</h3>
      <section>
        <form>
          <!-- end row -->
          <div class="row border-top py-2">
            <div class="col-xl-12 col-sm-12">
              <div class="mb-2">
                <h5 class="">Physical (Gross motor/ Fine motor</h5>
                <div class="form-check d-flex">
                  <div class="me-5">
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">Yes</label>
                  </div>
                  <div>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">No</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end row -->
          <!-- end row -->
          <div class="row border-top py-2">
            <div class="col-xl-12 col-sm-12">
              <div class="mb-2">
                <h5 class="">Cognitive</h5>
                <div class="form-check d-flex">
                  <div class="me-5">
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">Yes</label>
                  </div>
                  <div>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">No</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end row -->
          <div class="mb-3">
            <label for="formrow-firstname-input" class="form-label">If yes write below</label>
            <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
        </div>
          <div class="mb-3">
            <label for="formrow-firstname-input" class="form-label">Behavioral</label>
            <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Text">
        </div>
          <!-- end row -->
          <div class="row border-top py-2">
            <div class="col-xl-12 col-sm-12">
              <div class="mb-2">
                <h5 class="">Communication</h5>
                <div class="form-check d-flex">
                  <div class="me-5">
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">Yes</label>
                  </div>
                  <div>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">No</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end row -->
          <!-- end row -->
          <div class="row border-top py-2">
            <div class="col-xl-12 col-sm-12">
              <div class="mb-2">
                <h5 class="">Social</h5>
                <div class="form-check d-flex">
                  <div class="me-5">
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">Yes</label>
                  </div>
                  <div>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">No</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row border-top py-2">
            <div class="col-xl-12 col-sm-12">
              <div class="mb-2">
                <h5 class="">Emotional</h5>
                <div class="form-check d-flex">
                  <div class="me-5">
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">Yes</label>
                  </div>
                  <div>
                    <input class="form-check-input" type="radio" name="formRadios">
                    <label class="form-check-label">No</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end row -->
        </form>
      </section>




        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('script')
<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>


<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>

{{-- Form --}}
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

@endsection