@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title') Bank Reconciliation New @endslot
@endcomponent
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Bank Reconciliation </span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="card p-0 m-0">
                    <div class="card-body">
                        <div class="row pb-3">
                            <div class="row pb-3">
                                <div class="col-6 d-flex">
                                    <label class="col-2 col-form-label">Form</label>
                                    <div class="col-6 mb-4">
                                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <label for="example-date-input" class="col-md-4 col-form-label">To</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                    </div>
                                </div>
                            </div>    
                            <div class="col-6 d-flex">
                                <label class="col-2 col-form-label">Bank</label>
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
                                    <button class="btn btn-info w-100" data-bs-dismiss="modal">SHOW</button>
                                </div>
                         </div>
                        <div class="row pb-3">
                            <div class="row">
                                <table id="" class="table table-bordered dt-responsive  w-100 px-5">
                                    <thead>
                                        <tr>
                                            <th>Selected Task </th>
                                            <th>Date</th>
                                            <th>Reference no (CQ no)</th>
                                            <th>Deposit</th>
                                            <th>Withdrawal</th>
                                            <th>Reconciled</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            </div>
                            <div class="row modal-footer">
                                <div class="col-md-2">
                                    <button class="btn btn-success w-100">Print</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                         </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div
@endsection