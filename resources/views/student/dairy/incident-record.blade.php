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
            </tr>
          </thead>
          <tbody>
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
        <h5 class="modal-title" id="myLargeModalLabel">Incident Record</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
            <h3>Incident Record</h3>
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
            <h3>  Incident Record</h3>
            <section>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Incident Type</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios" checked="">
                                <label class="form-check-label">Same as previous</label>
                                </div>
                                <div class="me-5">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> New </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Date and Time</label>
                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Setting/Places</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Duration ( in Minutes)</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Action Taken?</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Yes</label>
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
                            <h5>What is the Previous cause of Incident/Antecedent Behavior?</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Beginning a new activity</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Ending an activity</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Transitions between classrooms</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Participating in groups</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Same working area</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Asked for a particular task</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Observed same activity of teacher by students</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Asked to do preferred activity</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Asked to do non preferred activity</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Asked ‘not to’</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Peer interaction</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Alone</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">With peers</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">With same peer</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Different adult</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label"> Being ignored</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">For fulfillment of same purpose</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Incident in transport</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Others</label>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">If other, Please specify</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Incidental Behavior</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Leaving area without permission</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Did not follow teacher’s instruction</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Disrupting class</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Hitting others</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Self hitting</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Screaming/yelling</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Throwing items</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Destroying property</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Use dirty words</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Scold peers</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Scold teacher</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Verbal threats</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Calling teachers name disrespectfully</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Kicking</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Grabbing</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Crying</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Climbing on furniture</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Peeing</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Defecated</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Undressed</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Spitting </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Showing anger</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Others</label>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Others ( please specify)</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Incidental Physical Condition</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Well</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Hurt ( mild/ moderate/ Severe) </label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Mentally disturbed</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Others ( please specify)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Others ( please specify)</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Incidental Hazard</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Who or what may be harmed by this activity/behavior?</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Student himself</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Other student</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Teacher</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Object / Property Damages</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Other staff</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Specify any extra information, if any.</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">How could harm occur?</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">If other, please specify</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="col-xl-12 col-sm-12">
                        <div class="m-0">
                            <h5>Action Taken/what type of management provided?</h5>
                            <div class="row">
                                <div class="form-check">
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Directed to calming area</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Changed assignment</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Changed working area</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Gave non verbal cue</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Gave verbal warning</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Student ignored</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Behavior modification</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Focus on next learning activity</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Provided exercise as instructed by gym instructor</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Primary aid provided</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">intervention by therapist</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Intervention by psychologist</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Administrative intervention</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Informed parents</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Referred for medical support</label>
                                </div>
                                <div class="me-5 ">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Other</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">If other, please specify</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="form-check">
                        <div class="me-5 ">
                            <label class="form-check-label pb-2">Who will complete the action?</label>
                            <input type="text" class="form-control" placeholder="">
                            </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Designation</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Recommendation</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Any other related issue that you want to keep, please write</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row border-top py-2">
                    <div class="form-check">
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">Action completion Date</label>
                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                        </div>
                        <div class="me-5 ">
                        <label class="form-check-label pb-2">When will the assessment be reviewed?</label>
                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
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