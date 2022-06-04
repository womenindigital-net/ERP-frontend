@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('css')
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title') Bank Reconciliation @endslot
@endcomponent
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Transaction Analysis View</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="card p-0 m-0">
                    <div class="card-body">
                        <div class="row pb-3">
                            <div class="row pb-3">
                                <div class="col-6 d-flex">
                                    <label class="col-2 col-form-label text-end me-4">Form</label>
                                    <div class="col-6 mb-4">
                                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <label for="example-date-input" class="col-md-4 col-form-label me-4  text-end">To</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                    </div>
                                </div>
                            </div>    
                            <div class="col-6 d-flex">
                                <label class="col-2 col-form-label text-end me-4">Bank</label>
                                <div class="col-6 mb-4">
                                    <select name="StudentID"  class="form-control strip-tags form-control section2 form-select" id="StudentID" required="">
                                             <option value="0">Select</option>
                                             <option value="1">1050001::Bank - Brac Bank (A/c # 1555204025093001)</option>
                                             <option value="2">1050002::Bank - Mutual Trust Bank</option>
                                             <option value="3">1050003::Bank - SCB (01-1308636-01)</option>
                                             <option value="4">1050004::Bank-The City Bank Ltd (3101829023001)</option>
                                             <option value="5">1050005::Bank - FSIB Ltd. (010311100012296)</option>
                                             <option value="6">1210004::First Security Islami Bank Ltd</option>
                                    </select>
                                </div>
                                <div class="col-md-4 ms-2">
                                    <button class="btn btn-outline-info waves-effect waves-light" data-bs-dismiss="modal">Show</button>
                                </div>
                         </div>
                         <div class="col-6 d-flex ps-0">
                            <label class="col-2 col-form-label me-5"></label>
                            <div class="col-6 mb-4">
                                <input class="form-control ms-5" type="text" value="Company Amount: Bank Amount:" id="example-date-input">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Transaction Date</th>
                                                    <th>Particular</th>
                                                    <th>Debit</th>
                                                    <th>Credit</th>
                                                    <th>Reconciliation Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>No data available in table</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row --> 
                        <!-- end row -->
                            <div class="col-md-12 d-flex">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Journal Add</button>
                                </div>    
                                <div class="col-md-6 text-end">
                                    <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                                </div>    
                            </div>
                         </div>
                        </div> 
                    </div>
                <!--  Extra Large modal example -->
                <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myExtraLargeModalLabel"> Add Journal Voucher</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-body p-0"> 
                                <div class="card p-0 m-0">
                                    <div class="card-body p-0">
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3 text-center">
                                                            <label for="formrow-inputState" class="form-label">Project </label>
                                                            <select id="formrow-inputState" class="form-select">
                                                                <option selected="">Select</option>
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
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3 text-center">
                                                            <label for="formrow-inputState" class="form-label">Trans. Amount</label>
                                                            <input type="number" class="form-control" id="formrow-inputZip" placeholder="Trans. Amount">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3 text-center">
                                                            <label for="formrow-inputState" class="form-label">Voucher Date</label>
                                                            <input type="date" class="form-control" id="formrow-inputZip" placeholder="Trans. Amount">
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="mb-3 text-center">
                                                            <label for="formrow-inputZip" class="form-label ">Particulars</label>
                                                            <input type="text" class="form-control" id="formrow-inputZip" placeholder="Particulars If Any">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3 text-center">
                                                            <label for="formrow-inputZip" class="form-label ">Reference</label>
                                                            <input type="text" class="form-control" id="formrow-inputZip" placeholder="Reference If Any">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <h6 class="text-center">Enter Transaction Detail</h6>
                                        <form class="repeater" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col p-0 pe-1 text-center">
                                                    <label for="number">Acc. Number</label>
                                                </div>
                                                <div class="col p-0 pe-1 text-center">
                                                    <label for="particular">Acc. Particular</label>
                                                </div>
                                                <div class="col p-0 pe-1 text-center">
                                                    <label for="debit">Debit</label>
                                                </div>
                                                <div class="col p-0 ps-5 text-center">
                                                    <label for="credit">Credit</label>
                                                </div>
                                            </div>
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item="" class="row ms-1">
                                                    <div class=" col p-0 pe-1 pb-1">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                    <div class=" col p-0 pe-1 pb-1">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class=" col p-0 pe-1 pb-1">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                    <div class=" col p-0  pb-1 me-4 d-flex">
                                                        <input type="number" class="form-control">
                                                        <button class="btn btn-outline-danger waves-effect waves-light ms-2">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <input data-repeater-create="" type="button" class="btn btn-outline-info waves-effect waves-light mt-3 ms-1 mt-lg-0" value="Add">
                                            </form>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive  nowrap w-100">
                                        <thead>
                                            <tr>
                                               <th></th>
                                               <th></th>
                                               <th></th>
                                               <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                                    <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
                                </div>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
    </div>
  </div>
</div> 
@endsection
@section('script')
@endsection
@section('script-bottom')
@endsection