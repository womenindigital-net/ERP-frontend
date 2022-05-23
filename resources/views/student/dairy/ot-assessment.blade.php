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
@slot('title')STUDENT QA @endslot
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
              <td>2022-05-17</td>
              <td>Idham Malek</td>
              <td>Ohidul Hassan</td>
              <td>Create: Ohidul Hassan @ 2022-05-17 16:06:30</td>
              <td>
                <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                <i class="mdi mdi-eye"></i>
                </button>
                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                    <i class="mdi mdi-pencil"></i>
                </button>
              </td>
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
        <h5 class="modal-title" id="myLargeModalLabel"> OT Assessment In Computer Trainee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
            <h3>  OT Assessment In Computer Trainee</h3>
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
                </div>
                </form>
            </section>
            <h3> General</h3>
            <section>
                <div class="row">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Type of disability</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Educational Status</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </section>
            <h3>Physical skill</h3>
            <section>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Sitting posture maintain</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Can fully maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Can’t maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> can maintain with support </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Joint mobility shoulder</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Can fully maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Can’t maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> can maintain with support </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Elbow</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Can fully maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Can’t maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> can maintain with support </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Wrist</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Can fully maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Can’t maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> can maintain with support </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Finger</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Can fully maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Can’t maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> can maintain with support </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Body flexibility (Trunk)</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Can fully maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Can’t maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> can maintain with support </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Dynamic balance maintain</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Can fully maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Can’t maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> can maintain with support </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Eye hand co ordination to press the key board button</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Can fully maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Can’t maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> can maintain with support </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Mouse operater</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Can fully maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Can’t maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> can maintain with support </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Muscle strength in hand and finger</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Normal </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Less Strength </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Hand function</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Able</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Partially </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Unable </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Able with support </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Grasp</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Able</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Partially </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Unable </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Able with support </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Manipulation</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Able</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Partially </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Unable </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Able with support </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Opposition</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Able</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Partially </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Unable </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Able with support </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <h3>Cognitive, Behavior & social Skill</h3>
            <section>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Sitting habit in specific place</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Less than 5 min</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label">5 min</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">10 min</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">20 min</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> 30 min </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">30+ min</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Keep attention/concentration to work</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Yes</label>
                                </div>
                                <div class="me-5 ">
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
                            <h5>Follow instruction</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Can same to follow </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Partially perform</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Try to follow </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Can follow with help</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Response skill</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Can response </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially response </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Try to response</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Help to response </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Understand or follow the work sequence</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Can fully maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Try to maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Need to help</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Interest of work</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Show interest </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Can’t show interest </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Can’t maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Sometimes showingt </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Information receives ability</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label"> Can Reply </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Partially reply</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Try to reply </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Need to support</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Memorizing the information</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Can replay </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Partially replay</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Try to reply</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Need to support</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Awareness of Risk & hazard</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Can fully maintain</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Partially maintain </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Try to maintain</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Need to help</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Sitting chair</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label">Appropriate</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Need to adapted (height/arm rest/back support)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
            <h3>Work place adjustability</h3>
            <section>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Working table/ desk</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label">Appropriate</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label">Need to adapted (height/foot clearing space/distance)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Keyboard and mouse place</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label">Appropriate</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Need to adapted (height/ distance)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Monitor place</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label">Appropriate</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Need to adapted (height/ distance)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>CPU, Stabilizer, and multi pluck place</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Appropriate</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Need to adapted (height/distance)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Communication Style</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label">Verbal</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Sign language</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Gesture use: can properly</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Unable to perform</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Partially perform</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <h3>Signature</h3>
            <section>
                <div class="row">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Therapist comment’s/ advice:</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Signature of Therapist</label>
                        <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Name and date</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Organization Name</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Signature of Supervisor</label>
                        <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Name</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Designation</label>
                        <input type="text" class="form-control" placeholder="">
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