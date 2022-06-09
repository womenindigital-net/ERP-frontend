@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title')task weight setting @endslot
@endcomponent
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">task weight settings</h4>
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light "
            data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view"> <i
                class="fas fa-plus-circle"></i> Add</button>
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
                <input type="search" class="form-control form-control-sm" placeholder="">
              </label>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table w-100 table-bordered">
              <thead>
                <tr class="table-primary">
                    <th>Activity</th>
                    <th>Task</th>
                    <th>Activity Type</th>
                    <th>Log</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                 <td>General Play</td>
                 <td>Push and Pull Doors open and closed </td>
                 <td>A</td>
                 <td>Create: Nusrat Jahan @ 2019-06-09 22:22:54
                    There is no update record.</td>
                <td>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                    <i class="mdi mdi-pencil"></i>
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
<!--  Extra Large modal example -->
<div class="modal fade material-callects-modal-xl-view" id="" tabindex="-2" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-primary"> Add task activities create</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                    <!-- journal form start -->  
                    <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                      <div class="col-md-6 d-flex">
                          <label class="form-label col-2">Domain</label>
                          <select id="formrow-inputState" class="form-select">
                            <option value="0">Select</option>
                            <option value="1">Section B : Preparatory framework</option>
                            <option value="2">Section E:  Domain 01 - Physical development</option>
                            <option value="3">Section F:  Domain 02 : Intellectual / cognitive development</option>
                            <option value="4">Section G : Domain 03 - Emotional development</option>
                            <option value="5">Section H : Domain 04 - Social and ethical development</option>
                            <option value="6">Section I: Independent skills</option>
                        </select>
                      </div>
                      <div class="col-md-6 d-flex">
                          <label class="form-label col-2">Sub-Domain</label>
                          <select id="formrow-inputState" class="form-select">
                            <option value="0">Select</option>
                            <option value="1">Definitions</option>
                            <option value="2">Ethical Values</option>
                            <option value="3">Independent Daily Living Skills</option>
                            <option value="4">Intrapersonal</option>
                            <option value="5">Leisure &amp; Recreation</option>
                            <option value="6">Motor Planning</option>
                            <option value="7">Planning of Family</option>
                            <option value="8">Self development</option>
                            <option value="9">Sensory Skills</option>
                            <option value="10">Skill Development planner</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                      <div class="col-md-6 d-flex">
                          <label class="form-label col-2">Area</label>
                          <select id="formrow-inputState" class="form-select">
                            <option value="0">Select</option>
                            <option value="1">Appreciating diversity</option>
                            <option value="2">Banking</option>
                            <option value="3">Basic Safety Rules</option>
                            <option value="4">Behavior Management</option>
                            <option value="5">Budgeting &amp Planning</option>
                            <option value="6">Communication Skills</option>
                            <option value="7">Creativity</option><option value="494">Empathy</option>
                            <option value="8">Eye Movements</option>
                            <option value="9">Fine Motor Skills</option>
                            <option value="10">Functional Academic Skills</option>
                        </select>
                      </div>
                      <div class="col-md-6 d-flex">
                          <label class="form-label col-2">Activity</label>
                          <select id="formrow-inputState" class="form-select">
                            <option value="0">Select</option>
                            <option value="1">Accept family diversity</option>
                            <option value="2">Accept formal/official decision</option>
                            <option value="3">Accept inability of family</option>
                            <option value="4">Accept inability of others</option>
                            <option value="5">Accept inability of self</option>
                            <option value="6">accept others opinion</option>
                            <option value="7">Accept situation / Environment</option>
                            <option value="8">Acceptance of new family members / relatives</option>
                            <option value="9">Acceptance of own fault short coming</option>
                            <option value="10">Activities to Improve Visual Perception</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                      <div class="col-md-6 d-flex">
                          <label class="form-label col-2">Activity Type</label>
                          <select id="formrow-inputState" class="form-select">
                            <option value="0">Select</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                        </select>
                      </div>
                    </div>
                <!-- journal form end -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
            </div>
                </div>

          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
@endsection
@section('script')

@endsection