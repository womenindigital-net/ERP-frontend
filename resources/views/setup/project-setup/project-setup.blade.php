@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')Project Setup @endslot
    @endcomponent
    {{-- code  --}}

 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end ">
                        <div class=" card-body text-end p-1">
                            <button type="button" class="btn btn-outline-info waves-effect waves-light "
                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"> <i
                                class="fas fa-plus-circle"></i> Add</button>
                        </div>
                        <!-- sample modal content -->
                        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myExtraLargeModalLabel">Add Project</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        
                                        <div class="card p-0 m-0">
                                            <div class="card-body">
                                                <div class="row pb-3">
                                                    <div class="col-6 d-flex">
                                                        <label for="example-text-input" class="col-md-4 col-form-label">Name:</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="text" id="example-text-input" placeholder="Module display name">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 d-flex">
                                                        <label for="example-text-input" class="col-md-4 col-form-label">Seq.No:</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="number" id="example-text-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-6 d-flex">
                                                        <label for="example-date-input" class="col-md-4 col-form-label">Tier No:</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="number" id="example-text-input" >
                                                        </div>
                                                    </div>
                                                    <div class="col-6 d-flex">
                                                        <label class="col-4 col-form-label"> Parent:</label>
                                                        <div class="col-6">
                                                            <select class="form-select">
                                                                    <option value="0">Top</option>
                                                                    <option value="1">Governing Office</option>
                                                                    <option value="2">Operations</option>
                                                                    <option value="3">Administration</option>
                                                                    <option value="4">Finance and Accounts Section</option>
                                                                    <option value="6">Procurement Section</option>
                                                                    <option value="7">Inventory Management</option>
                                                                    <option value="8">Stock maintenance</option>
                                                                    <option value="9">ICT Section</option>
                                                                    <option value="10">Programme</option>
                                                                    <option value="11">Core Programme</option>
                                                                    <option value="12">Computer Section</option>
                                                                    <option value="13">Jewelry Section</option>
                                                                    <option value="14">Tailoring Section</option>
                                                                    <option value="15">Paper work section</option>
                                                                    <option value="16">Angel Chef Bakery</option>
                                                                    <option value="17">Boutique Section (Tie-Dye and Block)</option>
                                                                    <option value="18">Ikebana Section</option>
                                                                    <option value="19">Karishma Cultural Group</option>
                                                                    <option value="20">Art, Crafts  and Paintings</option>
                                                                    <option value="21">Drama</option>
                                                                    <option value="22">Dance</option>
                                                                    <option value="23">Music</option>
                                                                    <option value="24">Instruments</option>
                                                                    <option value="25">Sports, Gym and exercise</option>
                                                                    <option value="26">Gym</option>
                                                                    <option value="27">Cricket</option><option value="28">Food Catering</option>
                                                                    <option value="29">Pre-Vocational</option>
                                                                    <option value="30">Therapy</option>
                                                                    <option value="31">Research and Development</option>
                                                                    <option value="32">Employment</option>
                                                                    <option value="33">Sheltered Employment</option>
                                                                    <option value="34">Wages Employment</option>
                                                                    <option value="35">Self Employment</option>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-12 d-flex">
                                                        <label for="example-date-input" class="col-md-4 col-form-label text-center">Description:</label>
                                                        <div class="col-md-6">
                                                            <textarea class="form-control" aria-label="With textarea"></textarea>
                                                        </div>
                                                    </div>

                                                    
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row modal-footer">
  
                                        <div class="col-md-1">
                                            <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                                        </div>
                                        <div class="col-md-1">
                                            <button class="btn btn-success w-100">Save</button>
                                        </div>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th class="">Name</th>
                                <th class="">Parent</th>
                                <th class="">Log</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Puja</td>
                                <td>puja</td>
                                <td>puja</td>
                                <td class="text-center">
                                    <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                    <button type="button"
                                        class="btn btn-sm btn-info btn-rounded waves-effect waves-light"
                                        > <i
                                            class="fas fa-check"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                                        <i class="fas fa-pen"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light"> <i
                                            class="fas fa-trash-alt" id="sa-warning"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Puja</td>
                                <td>puja</td>
                                <td>puja</td>
                                <    <td class="text-center">
                                    <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>

                                    <button type="button"
                                        class="btn btn-sm btn-info btn-rounded waves-effect waves-light" 
                                       > <i
                                            class="fas fa-check"></i></button>
                                
                                    <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                                        <i class="fas fa-pen"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light"> <i
                                            class="fas fa-trash-alt" id="sa-warning"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <!--  Edit Journal -->
    <div class="modal fade material-callects-modal-xl-add" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"> Add Project
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card p-0 m-0">
                        <div class="card-body">
                            <div class="row pb-3">
                                <div class="col-6 d-flex">
                                    <label for="example-text-input" class="col-md-4 col-form-label">Name:</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="example-text-input" placeholder="Module display name">
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <label for="example-text-input" class="col-md-4 col-form-label">Seq.No:</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="number" id="example-text-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-6 d-flex">
                                    <label for="example-date-input" class="col-md-4 col-form-label">Tier No:</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="number" id="example-text-input" >
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <label class="col-4 col-form-label"> Parent:</label>
                                    <div class="col-6">
                                        <select class="form-select">
                                                <option value="0">Top</option>
                                                <option value="1">Governing Office</option>
                                                <option value="2">Operations</option>
                                                <option value="3">Administration</option>
                                                <option value="4">Finance and Accounts Section</option>
                                                <option value="6">Procurement Section</option>
                                                <option value="7">Inventory Management</option>
                                                <option value="8">Stock maintenance</option>
                                                <option value="9">ICT Section</option>
                                                <option value="10">Programme</option>
                                                <option value="11">Core Programme</option>
                                                <option value="12">Computer Section</option>
                                                <option value="13">Jewelry Section</option>
                                                <option value="14">Tailoring Section</option>
                                                <option value="15">Paper work section</option>
                                                <option value="16">Angel Chef Bakery</option>
                                                <option value="17">Boutique Section (Tie-Dye and Block)</option>
                                                <option value="18">Ikebana Section</option>
                                                <option value="19">Karishma Cultural Group</option>
                                                <option value="20">Art, Crafts  and Paintings</option>
                                                <option value="21">Drama</option>
                                                <option value="22">Dance</option>
                                                <option value="23">Music</option>
                                                <option value="24">Instruments</option>
                                                <option value="25">Sports, Gym and exercise</option>
                                                <option value="26">Gym</option>
                                                <option value="27">Cricket</option><option value="28">Food Catering</option>
                                                <option value="29">Pre-Vocational</option>
                                                <option value="30">Therapy</option>
                                                <option value="31">Research and Development</option>
                                                <option value="32">Employment</option>
                                                <option value="33">Sheltered Employment</option>
                                                <option value="34">Wages Employment</option>
                                                <option value="35">Self Employment</option>
                                           
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-12 d-flex">
                                    <label for="example-date-input" class="col-md-4 col-form-label text-center">Description:</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                </div>

                                
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="row modal-footer">
  
                    <div class="col-md-1">
                        <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-success w-100">Save</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    <!--  Extra Large modal example -->
    <div class="modal fade material-callects-modal-xl-view" id="" tabindex="-2" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"> Project Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                    
                            <!-- START VIEW -->
                            <div class="row">
                                <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1" for="id"> Status: </label>
                                <div class="col-xs- col-md-7">
                                                        <span class="label label-danger label-lg">Inactive</span>
                                                </div>
                            </div>
                    
                            <div class="row">
                                <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1" for="id">Name: </label>
                                <div class="col-xs-12 col-md-7">
                                    Wages Employment
                                </div>
                            </div>
                    
                            <div class="row">
                                <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1" for="id">Description: </label>
                                <div class="col-xs-12 col-md-7">
                                    Wages Employment
                                </div>
                            </div>
                    
                              <div class="row">
                                <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1" for="id">Parent: </label>
                                <div class="col-xs-12 col-md-7">
                                    32
                                </div>
                            </div>
                    
                            <div class="row">
                                <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1" for="id">Created By: </label>
                                <div class="col-xs-12 col-md-7">
                                    Ohidul Hassan 
                                    at  
                                </div>
                            </div>
                    
                            <div class="row">
                                <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1" for="id">Updated By: </label>
                                <div class="col-xs-12 col-md-7">
                                                    Ohidul Hassan 
                                    at  
                                                </div>
                            </div>
                    
                       
                        </div>
                    </div>
                </div>
                <div class="row modal-footer">
  
                    <div class="col-md-1">
                        <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                    </div>
                  
                </div>


            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>



@endsection




