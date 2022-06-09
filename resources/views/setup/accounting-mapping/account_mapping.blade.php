@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
    @slot('li_1') Utility @endslot
    @slot('title')ACC MAPPING @endslot
@endcomponent
{{-- code  --}}
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class=" card-body text-end p-1">
                <button type="button" class="btn btn-outline-info waves-effect waves-light "
                data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"> <i class="fas fa-plus-circle"></i> Add</button>
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
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
                                <select class="form-select">
                                    <option value="0">Select</option>
                                    <option value="1">4 Water Purifier &amp; 6 Fire Exti</option>
                                    <option value="2">AC (11)</option>
                                    <option value="3">Angel Chef Hot Kitchen</option>
                                    <option value="4">Anklet</option>
                                    <option value="5">Annual Anniversary</option>
                                    <option value="6">Annual Anniversary of PFDA - V</option>
                                    <option value="7">antivirus</option>
                                    <option value="8">Application Development</option>
                                    <option value="9">Art Finished Goods</option>
                                    <option value="10">Art Raw Materials</option>
                                    <option value="11">Art Training Materials</option>
                                    <option value="12">Asus Laptop</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <div class="col-6 p-5 pt-0 pb-0">
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Project</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">Administration</option>
                                   <option value="2">Angel Chef Bakery</option>
                                   <option value="3">Art, Crafts  and Paintings</option>
                                   <option value="4">Boutique Section (Tie-Dye and Block)</option>
                                   <option value="5">Computer Section</option>
                                   <option value="6">Core Programme</option>
                                   <option value="7">Cricket</option>
                                   <option value="8">Dance</option>
                                   <option value="9">Drama</option>
                                   <option value="10">Employment</option>
                                   <option value="11">Finance and Accounts Section</option>
                                   <option value="12">Food Catering</option>
                                </select>
                            </div>
                        </div>   
                    </div>
                </div> 
                <!--==============Section 01 Start======================-->
                <div class="row p-5 pt-0 pb-0">
                    <div class="col-6 p-5 pb-3 pt-3">
                        <div class="mb-3 row  bg-success text-white text-center">
                          <label class="col-md-12 col-form-label"><input class="form-check-input" id="container" type="checkbox" 
                            name="container"> Sales Acc. Group</label>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Credit Card Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Income Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Vat Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
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
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Payable Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Expense Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Vat Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                    </div>
                </div>
                <!--==============Section 01 Closed======================-->

                <!--==============Section 02 Start======================-->
                <div class="row p-5 pt-0 pb-0">
                    <div class="col-6 p-5 pt-0 pb-3">
                        <div class="mb-3 row  bg-info text-white text-center">
                          <label class="col-md-12 col-form-label"><input class="form-check-input" id="container" type="checkbox" 
                            name="container"> Sales Return Acc. Group</label>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Returnable Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-labelpe-0 ps-0">Income Acc.</label>
                            <div class="col-md-8  pe-0 ps-0pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-labelpe-0 ps-0">Vat Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
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
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Payable Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-labelpe-0 ps-0">Expense Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-labelpe-0 ps-0">Vat Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                    </div>
                </div>
                <!--==============Section 02 Closed======================-->

                <!--==============Section 03 Start======================-->
                <div class="row p-5 pt-0">
                    <div class="col-6 p-5 pt-0 pb-3">
                        <div class="mb-3 row bg-dark text-white text-center">
                          <label class="col-md-12 col-form-label"><input class="form-check-input" id="container" type="checkbox" 
                            name="container">  Customer Payment Acc. Group</label>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Receivable Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
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
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>  
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                            <div class="col-md-8 pe-0 ps-0">
                                <select class="form-select">
                                   <option value="0">Select</option>
                                   <option value="1">1000::Current Assets::1</option>
                                    <option value="2">1010::Cash Operating Account::2</option>
                                    <option value="3">1020::Cash Debitors::3</option>
                                    <option value="4">1030::Petty Cash::4</option>
                                    <option value="5">1050::Cash in Bank::5</option>
                                    <option value="6">1050001::Bank - Brac Bank (A/c # 1555204025093001)::6</option>
                                    <option value="7">1050002::Bank - Mutual Trust Bank::7</option>
                                    <option value="8">1050003::Bank - SCB (01-1308636-01)::8</option>
                                    <option value="9">1050004::Bank-The City Bank Ltd (3101829023001)::9</option>
                                    <option value="10">1050005::Bank - FSIB Ltd. (010311100012296)::10</option>
                                    <option value="11">1080::Savings &amp; Short-Term Investments::11</option>
                                    <option value="12">1080001::FDR - MTBL::12</option>
                                </select>
                            </div>
                        </div>   
                    </div>
                </div>
                <!--==============Section 03 Closed======================-->
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




