@extends('layouts.master')

@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') UI Elements @endslot
@slot('title')ACCOUNTING > SUPPLIER TYPE @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Supplier Type Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Supplier Type List</span>
                        </a>
                    </li>
                  
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                       <div class="row">
                        <div class=" col-6">
                            <div class="row ">
                                <div class="col-3 mt-3 mb-3">
                                    
                                    <label for="formmessage">Name:</label>
                                </div>
                                <div class="col-7 mt-3 mb-3">
                                      
                                      <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Supplier type name here" >
                                </div>
                            </div>
                            <div class="row">
                                
                                    <div class="col-3 mt-3 mb-3">
                                        <label for="formmessage">Description:</label>
                                    </div>
                                    <div class="col-7 mt-3 mb-3">
                                        <textarea id="formmessage" class="form-control" rows="3" placeholder="Enter description here"></textarea>
                                    </div>
                                
                            </div>

                          <div class="d-flex justify-content-center ">
                            <div class="me-2"> 
                                <button class="btn btn-danger waves-effect waves-light" type="submit">RESET</button>
                            </div>
                            <div class="ms-2">
                                <button class="btn btn-success waves-effect waves-light" type="submit">SAVE</button>
                            </div>
                          </div>

                         </div>
                         
                       </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <p class="mb-0">
                           
                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th class=""> Name</th>
                                        <th class=""> Description</th>
                                        <th class=""> Log</th>
                                        <th class=""> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>demo</td>
                                        <td>demo</td>
                                        
                                        <td>demo</td>
                                        <td> <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-pencil"></i>
                                           </button>
                                           <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                           <i class="fas fa-trash-alt"></i>
                                           </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>demo</td>
                                        <td>demo</td>
                                    
                                        <td>demo</td>
                                        <td> <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-pencil"></i>
                                           </button>
                                           <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                           <i class="fas fa-trash-alt"></i>
                                           </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </p>
                    </div>
                
                </div>

            </div>
        </div>
    </div>

    
</div>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection