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
                data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"> <i class="fas fa-plus-circle"></i> Add</button>
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                    <thead>
                        <tr class="table-primary">
                            <th class="">Project</th>
                            <th class="">Category</th>
                            <th class="">Log</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Administration</td>
                            <td>Canteen Raw Material</td>
                            <td><small>Create: Ohidul Hassan @ 2021-08-10 17:11:36</small></td>
                            <td>
                            <button type="button"
                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light"
                            data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                            <i class=" fas fa-eye"></i>
                            </button>
                            <button type="button"
                                class="btn btn-sm btn-info btn-rounded waves-effect waves-light"><i class="fas fa-check"></i></button>
                            <button type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                                <i class="fas fa-pen"></i></button>
                            <button type="button"
                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light"><i class="fas fa-trash-alt" id="sa-warning"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<!--  Extra Large modal example -->
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Add Acc Mapping</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row p-5 pt-2 pb-0">
                    <div class="col-6 p-5 pt-0 pb-0">
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Product Category</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div> 
                    </div>
                    <div class="col-6 p-5 pt-0 pb-0">
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Project</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>   
                    </div>
                </div> 
                <div class="row p-5 pt-0 pb-0">
                    <div class="col-6 p-5 pb-3 pt-3">
                        <div class="mb-3 row  bg-success text-white text-center">
                          <label class="col-md-12 col-form-label"><input class="form-check-input" id="container" type="checkbox" 
                            name="container"> Sales Acc. Group</label>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Credit Card Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Income Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Vat Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                    </div>
                    <div class="col-6 p-5 pb-3 pt-3">
                        <div class="mb-3 row bg-primary  text-white text-center">
                            <label class="col-md-12 col-form-label "><input class="form-check-input" id="container" type="checkbox" 
                              name="container"> Purchase Acc. Group</label>
                        </div> 
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Payable Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Expense Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Vat Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="row p-5 pt-0 pb-0">
                    <div class="col-6 p-5 pt-0 pb-3">
                        <div class="mb-3 row  bg-info text-white text-center">
                          <label class="col-md-12 col-form-label"><input class="form-check-input" id="container" type="checkbox" 
                            name="container"> Sales Return Acc. Group</label>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Returnable Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-labelpe-0 ps-0">Income Acc.</label>
                            <div class="col-md-8  pe-0 ps-0pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-labelpe-0 ps-0">Vat Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                    </div>
                    <div class="col-6 p-5 pt-0 pb-3">
                        <div class="mb-3 row  bg-danger text-white text-center">
                            <label class="col-md-12 col-form-label "><input class="form-check-input" id="container" type="checkbox" 
                              name="container"> Purchase Return Acc. Group</label>
                        </div> 
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Payable Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-labelpe-0 ps-0">Expense Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-labelpe-0 ps-0">Vat Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                :records="[]" />
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="row p-5 pt-0">
                    <div class="col-6 p-5 pt-0 pb-3">
                        <div class="mb-3 row bg-dark text-white text-center">
                          <label class="col-md-12 col-form-label"><input class="form-check-input" id="container" type="checkbox" 
                            name="container">  Customer Payment Acc. Group</label>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Receivable Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                :records="[]" />
                            </div>
                        </div>  
                    </div>
                    <div class="col-6 p-5 pt-0 pb-3">
                        <div class="mb-3 row bg-secondary text-white text-center">
                            <label class="col-md-12 col-form-label "><input class="form-check-input" id="container" type="checkbox" 
                              name="container">  Supplier Payment Acc. Group</label>
                        </div> 
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Payable Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                :records="[]" />
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <x-input-select name="student_id"
                                :records="[]" />
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




