@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')

@endsection
@section('content')
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
                          <div class="col-6">
                            <x-input-select name="domain_id"
                :records="[]" />
                          </div>
                      </div>
                      <div class="col-md-6 d-flex">
                          <label class="form-label col-2">Sub-Domain</label>
                          <div class="col-6">
                            <x-input-select name="sub_domain_id"
                :records="[]" />
                          </div>
                      </div>
                    </div>
                    <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                      <div class="col-md-6 d-flex">
                          <label class="form-label col-2">Area</label>
                          <div class="col-6">
                            <x-input-select name="area_type"
                :records="[]" />
                          </div>
                      </div>
                      <div class="col-md-6 d-flex">
                          <label class="form-label col-2">Activity</label>
                          <div class="col-6">
                            <x-input-select name="activity_id"
                :records="[]" />
                          </div>
                      </div>
                    </div>
                    <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                      <div class="col-md-6 d-flex">
                          <label class="form-label col-2">Activity Type</label>
                          <div class="col-6">
                            <x-input-select name="activity_type"
                :records="[]" />
                          </div>
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