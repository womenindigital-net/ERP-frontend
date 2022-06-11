@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') Salary Budget Mapping  @endslot
@endcomponent
    {{-- code  --}}
<div class="card">
    <div class="card-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#profile" >
            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
            <span class="d-none d-sm-block">Salary Budget Mapping</span>
        </a>
    </li>
</ul>
<!-- Tab panes -->
    <div class="tab-content p-3 text-muted">
    <div class="tab-pane" id="profile" role="tabpanel">    
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
                  <th>Sl</th>
                  <th>Department</th>
                  <th>Employee</th>
                  <th>Salary Head</th>
                  <th>Amount</th>
                  <th>Project</th>
                  <th>Budget</th>
                  <th>B Head</th>
                  <th>B S Head</th>
                  <th>B Account</th>
                  <th>Available Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Programme -2</td>
                  <td>Mst. Rina Akter</td>
                  <td>Basic</td>
                  <td>5286.0000</td>
                  <td>
                      <select id="formrow-inputState" class="form-select">
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
                          <option value="13">Governing Office</option>
                      </select>  
                  </td>
                  <td>
                        <select id="formrow-inputState" class="form-select">
                          <option value="0">Select</option>
                          <option value="1">admin budget (2021-2022)</option>
                          <option value="2">pre-vocational budget (2021-2022)</option>
                          <option value="3">karishma budget (2021-2022)</option>
                         <option value="4">Paper Work Section Budget	(2021-2022)</option>
                         <option value="5" selected="">Jewelry budget (2021-2022)</option>
                         <option value="6">Block &amp; Boutique Section Budget (2021-2022)</option>
                         <option value="7">Computer Section Budget(2021-2022)</option>
                         <option value="9">Tailoring  section(2021-2022)</option>
                         <option value="12">Program Budget (2021-2022)</option>
                      </select>
                  </td>
                  <td>
                        <select id="formrow-inputState" class="form-select">
                          <option value="0">Payroll Expenses</option></select>
                  </td>
                  <td>
                        <select id="formrow-inputState" class="form-select">
                          <option value="0">Operations Staff Sallary</option></select>
                  </td>
                  <td>
                        <select id="formrow-inputState" class="form-select">
                          <option value="0">Support Staff Sallary</option></select>
                  </td>
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