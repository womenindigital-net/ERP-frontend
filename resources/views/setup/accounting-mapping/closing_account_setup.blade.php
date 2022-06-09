@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
    @slot('li_1') Utility @endslot
    @slot('title')CAS @endslot
@endcomponent
{{-- code  --}}
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class=" card-body text-end p-1">
                <button type="button" class="btn btn-outline-info waves-effect waves-light "
                data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"> <i class="fas fa-plus-circle"></i> Add</button>
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
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
               <!--==============Section 01 Start======================-->
            <div class="row p-5 pt-0 pb-0">
                <div class="col-12 p-5 pb-3 pt-3"> 
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Project *</label>
                        <div class="col-md-8 pe-0 ps-0">
                            <select class="form-select">
                               <option value="0">Select</option>
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
                               <option value="27">Cricket</option>
                               <option value="28">Food Catering</option>
                               <option value="29">Pre-Vocational</option>
                               <option value="30">Therapy</option>
                               <option value="31">Research and Development</option>
                               <option value="32">Employment</option>
                               <option value="33">Sheltered Employment</option>
                               <option value="34">Wages Employment</option>
                               <option value="35">Self Employment</option>
                               <option value="36">reg</option>
                            </select>
                        </div>
                    </div>  
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Acc. No</label>
                        <div class="col-md-8 pe-0 ps-0">
                            <input class="form-control strip-tags" id="id" placeholder="Closing Account Number" minlength="1" maxlength="10" required="" name="ClosingAccNo" type="text">
                        </div>
                    </div>  
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Start Date</label>
                        <div class="col-md-8 pe-0 ps-0">
                            <input class="form-control strip-tags" id="id" placeholder="Closing Account Number" minlength="1" maxlength="10" required="" name="ClosingAccNo" type="date">
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
           <!--==============Section 01 Closed======================-->
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




