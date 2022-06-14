@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class=" card-body text-end p-1">
                <button type="button" class="btn btn-outline-info waves-effect waves-light "
                data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"> <i class="fas fa-plus-circle"></i> Add</button>
            </div>
            <div class="card-body">
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
                            <th class="text-center">Project</th>
                            <th class="text-center">Closing Account Name</th>
                            <th class="text-center">Start Date</th>
                            <th class="text-center">Log</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-center">No data available in table</td>
                            <td></td>
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
<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="myLargeModalLabel">Add Cas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <div class="row p-5 pt-0 pb-0">
                <div class="col-12 p-5 pb-3 pt-3"> 
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Project *</label>
                        <div class="col-md-8 pe-0 ps-0">
                            <x-input-select name="project_id"
                            :records="[]" />
                        </div>
                    </div>  
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Acc. No</label>
                        <div class="col-md-8 pe-0 ps-0">
                            <x-input-text name="ac_id" type="number" class="form-control">
                            </x-input-text>
                        </div>
                    </div>  
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Start Date</label>
                        <div class="col-md-8 pe-0 ps-0">
                            <x-input-text name="ac_id" type="date" class="form-control">
                            </x-input-text>
                        </div>
                    </div>  
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Published:</label>
                        <div class="col-md-8 pe-0 ps-0">
                            <div class="square-switch">
                                <input type="checkbox" id="square-switch3" switch="bool" checked />
                                <label for="square-switch3" data-on-label="Yes"
                                    data-off-label="No"></label>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
     </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 
@endsection
@section('script')

@endsection




