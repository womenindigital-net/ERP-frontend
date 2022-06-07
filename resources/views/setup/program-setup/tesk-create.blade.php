@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')TASK ACTIVITIES @endslot
    @endcomponent
 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end pb-5">
                        <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".text-add-or-edit">Add</button>
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
                            <x-input-text name="hello1" type="search" placeholder="">
                            </x-input-text>
                          </label>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-bordered w-100">
                          <thead>
                            <tr class="table-primary">
                                <th class=""> Activity</th>
                                <th class=""> task</th>
                                <th class="">Log</th>
                                <th class="">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>General Play</td>
                                <td>Push and Pull Doors open and closed</td>
                                <td>Create: Nusrat Jahan @ <br> 2019-06-09 22:22:54 <br>
                                    There is no update record.</td>
                              <td>
                                <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="mdi mdi-eye"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
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

<!-- Add And Edit -->
<div class="modal fade text-add-or-edit" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Task Add or Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                
                <div class="card p-0 m-0">
                    <div class="card-body">
                        <div class="row pb-3">
                            <div class="col-6 row">

                                <label class="col-4 col-form-label">Activity</label>
                                <div class="col-8">
                                    <select class="form-select">
                                        <option>--Select--</option>
                                        <option>General Play</option>
                                        <option>Organized Play</option>
                                        <option>Balance Beam</option>
                                    </select>
                                </div>
                            
                            </div>
                            <div class="col-6 row">

                                <label class="col-4 col-form-label">Domain Weight</label>
                                <div class="col-8">
                                    <select class="form-select">
                                        <option>--Select--</option>
                                        <option>Domain - Distribution structure</option>
                                        <option>Section B : Preparatory framework</option>
                                        <option>Section C: Steps of the work process</option>
                                        <option>Section D : Assessment package</option>
                                    </select>
                                </div>
                            
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="repeater" enctype="multipart/form-data">
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row mt-3">

                                                    <div class=" col-lg-6 d-flex row">
                                                        <div class="col-4">
                                                            <label for="name" class="">Task Name</label>
                                                        </div>
                                                        <div class="col-7">
                                                            <x-input-text name="hello1" placeholder="">
                                                            </x-input-text>
                                                        </div>
                                                    </div>
                                                    <div class=" col-lg-4 d-flex row">
                                                        <div class="col-4">
                                                            <label for="name" class="">Type</label>
                                                        </div>
                                                        <div class="col-7">
                                                            <select class="form-select">
                                                                <option>--Select--</option>
                                                                <option>Pre-Vocational</option>
                                                                <option>Vocational</option>
                                                                <option>Independent</option>
                                                                <option>Karishma</option>
                                                            </select>
                                                        </div>
                                                    </div>                                                                  
                                                </div>
                                            </div>
                                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- view -->
<div class="modal fade tesk-view" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">TASK View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                
                <div class="card p-0 m-0">
                    <div class="card-body">
                        <div class="row pb-3">
                            <div class="col-6 row">
                                <label class="col-4 col-form-label">Activity</label>
                                <div class="col-8">
                                    <p class="form-control">General Play</p>
                                </div>
                            </div>
                            <div class="col-6 row">
                                <label class="col-4 col-form-label">Domain Weight</label>
                                <div class="col-8">
                                    <p class="form-control">Section E: Domain 01 - Physical</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mt-3">
                                            <div class=" col-lg-6 d-flex row">
                                                <div class="col-4">
                                                    <label for="name" class="">Task Name</label>
                                                </div>
                                                <div class="col-7">
                                                    <p class="form-control">Playing On Swings</p>
                                                </div>
                                            </div>
                                            <div class=" col-lg-4 d-flex row">
                                                <div class="col-4">
                                                    <label for="name" class="">Type</label>
                                                </div>
                                                <div class="col-7">
                                                    <p class="form-control">Pre-Vocational</p>
                                                </div>
                                            </div>                                                                  
                                        </div>
                                        <div class="row mt-3">
                                            <div class=" col-lg-6 d-flex row">
                                                <div class="col-4">
                                                    <label for="name" class="">Task Name</label>
                                                </div>
                                                <div class="col-7">
                                                    <p class="form-control">Push and Pull Doors open and closed</p>
                                                </div>
                                            </div>
                                            <div class=" col-lg-4 d-flex row">
                                                <div class="col-4">
                                                    <label for="name" class="">Type</label>
                                                </div>
                                                <div class="col-7">
                                                    <p class="form-control">Pre-Vocational</p>
                                                </div>
                                            </div>                                                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
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
<script>
    $(document).ready(function(){
        $(".hide").hide();
      $("#container").click(function(){
        $(".hide").toggle();
      });
    });
</script>

<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection
