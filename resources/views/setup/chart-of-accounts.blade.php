@extends('layouts.master')

@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('css')
@endsection
@section('content')
<div class="container-fluid">
    <!-- end page title -->
<div class="row">
 <div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-end ">
                <div class=" card-body text-end p-1">
                    <button type="button" class="btn btn-outline-info waves-effect waves-light mb-2 "
                        data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"> <i
                            class="fas fa-plus-circle"></i> Add</button>
                </div>
                <!-- sample modal content -->
                <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4> Add Coa </h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card p-0 m-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-3 col-form-label ">Reporting
                                                    Connection</label>
                                                <div class="col-md-9 ">
                                                    <x-input-select name="reporting_connection" :records="[]" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-3 col-form-label ">Account Category</label>
                                                <div class="col-md-9 ">
                                                    <x-input-select name="account_category" :records="[]" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-3 col-form-label ">Budget Link</label>
                                                <div class="col-md-9 ">
                                                    <x-input-select name="budget_link" :records="[]" />
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-3 col-form-label ">Account Code
                                                </label>
                                                <div class="col-md-9 ">
                                                    <x-input-text name="account_code" type="number"  placeholder="Enter Account number Here" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-3 col-form-label ">Account
                                                    Group</label>
                                                <div class="col-md-9 ">
                                                    <x-input-select name="account_group" :records="[]" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-3 col-form-label ">Parent Account
                                                </label>
                                                <div class="col-md-9 ">
                                                    <x-input-select name="parent_account" :records="[]" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-3 col-form-label ">Account Name
                                                </label>
                                                <div class="col-md-9 ">
                                                    <x-input-text name="account_name" placeholder="Account number Here"/>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-3 col-form-label ">Opening Balance:</label>
                                                <div class="col-md-9 ">
                                                    <x-input-text name="opening_balance"  type="number" placeholder="Opening Balance number Here"/>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-3 col-form-label ">Current
                                                    Balance:</label>
                                                <div class="col-md-9 ">
                                                    <x-input-text name="current_balance"  type="number"  placeholder="Current Balance hete"/>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-3 col-form-label ">Sequence
                                                    No:</label>
                                                <div class="col-md-9 ">
                                                    <x-input-text name="sequence_no"  type="number"  placeholder="Sequence No Here"/>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-3 col-form-label ">Tier No.: </label>
                                                <div class="col-md-9 ">
                                                    <x-input-text name="tier_no"  type="number"  placeholder="Tier No"/>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-3 col-form-label ">Account Type</label>
                                                <div class="col-md-9 ">
                                                    <x-input-select name="account_type" :records="[]" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-3 col-form-label ">Published:</label>
                                                <div class="btn-group btn-group-sm p-2 col-md-1" role="group" aria-label="Basic radio toggle button group">
                                                    <input type="radio"  class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" checked>
                                                    <label class="btn btn-outline-success" for="btnradio4">Yes</label>
                
                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                                                    <label class="btn btn-outline-success " for="btnradio5">No</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row modal-footer">
                                <div class="col-md-1">
                                    <button class="btn btn-outline-danger w-100"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-outline-success w-100">Save</button>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
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
                        <x-input-text type="search" name="search" />
                    </label>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered w-100">
                    <thead>
                        <tr class="table-primary">
                            <th>Acc. No. </th>
                            <th>Acc. Name</th>
                            <th>Parent Acc. </th>
                            <th>Opening Balance</th>
                            <th>Current Balance</th>
                            <th>Acc. Group</th>
                            <th>Defaolt Nature</th>
                            <th>Log</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Airin Shiddique</td>
                            <td>Office Outlet</td>
                            <td>2021-03-03</td>
                            <td>Airin Shiddique</td>
                            <td>Airin Shiddique</td>
                            <td>Office Outlet</td>
                            <td>2021-03-03</td>
                            <td>1</td>
                            <td>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal"
                                    data-bs-target=".material-callects-modal-xl-add">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal"
                                    data-bs-target=".material-callects-modal-xl-add">
                                    <i class="fas fa-pen"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                    <i class="fas fa-trash-alt"></i></button>
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
                                <a class="page-link" href="#">2 <span
                                        class="sr-only">(current)</span></a>
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
    <!-- end row -->
</div> <!-- container-fluid -->
        <!--  Extra Large modal example -->
<div class="modal fade material-callects-modal-xl-Edit" id="" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Add Coa</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="card p-0 m-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-3 col-form-label ">Reporting
                                    Connection</label>
                                <div class="col-md-9 ">
                                    <select class="form-control form-select">
                                        <option selected="selected" value="">-- Select --</option>
                                        <option value="1">Balance Sheet</option>
                                        <option value="2">Income Statement</option>
                                        <option value="3">P&L Account</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-3 col-form-label ">Account
                                    Category</label>
                                <div class="col-md-9 ">
                                    <select class="form-control form-select">
                                        <option selected="selected" value="">-- Select --</option>
                                        <option value="1">Asset</option>
                                        <option value="2">Liability</option>
                                        <option value="3">Income</option>
                                        <option value="4">Expense</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-3 col-form-label ">Budget
                                    Link</label>
                                <div class="col-md-9 ">
                                    <select class="form-control form-select">
                                        <option selected="selected" value="">-- Select --</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-3 col-form-label ">Account Code
                                </label>
                                <div class="col-md-9 ">
                                    <x-input-text name="name" placeholder="Account Code Here"></x-input-text>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-3 col-form-label ">Account
                                    Group</label>
                                <div class="col-md-9 ">
                                    <select class="form-control form-select">
                                        <option selected="selected" value="">-- Select --</option>
                                        <option value="1">Asset</option>
                                        <option value="2">Liability</option>
                                        <option value="3">Income</option>
                                        <option value="4">Expense</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-3 col-form-label ">Parent Account
                                </label>
                                <div class="col-md-9 ">
                                    <select class="form-control form-select">
                                        <option value="0">Top</option>
                                        <option value="1">Current Assets</option>
                                        <option value="3">Cash Debitors</option>
                                        <option value="4">Accounts Receivable</option>
                                        <option value="5">Allowance for Uncollectible Accounts</option>
                                        <option value="6">Contracts</option>
                                        <option value="7">Employee Trustee receivables</option>
                                        <option value="8">Demurrage by teachers which has not paid yet</option>
                                        <option value="9">Grants receivables</option>
                                        <option value="10">Bank Asia Ltd.</option>
                                        <option value="11">Confidence Group</option>
                                        <option value="12">Dhaka Bank</option>
                                        <option value="13">First Security Islami Bank Ltd</option>
                                        <option value="17">Mutual Trust bank</option>
                                        <option value="18">Standard Chartered Bank</option>
                                        <option value="19">Instalment Receivables</option>
                                        <option value="20">Notes and loans receivable</option>
                                        <option value="21">Pledges receivable</option>
                                        <option value="22">Student Receivable</option>
                                        <option value="23">Demurrage by student which has not paid yet</option>
                                        <option value="24">Students who have not paid their fees</option>
                                        <option value="25">whose admission fees are paid in instalment</option>
                                        <option value="26">Accrued Compensation</option>
                                        <option value="27">Accrued Commissions</option>
                                        <option value="28">Accrued expenses</option>
                                        <option value="29">Accrued Interest</option>
                                        <option value="30">Accrued paid leave</option>
                                        <option value="31">Accrued Payroll</option>
                                        <option value="32">Accrued Rent</option>
                                        <option value="33">Accrued Taxes</option>
                                        <option value="34">Accrued Taxes</option>
                                        <option value="35">Accumulated Depreciation</option>
                                        <option value="36">Accumulated depreciation - Building</option>
                                        <option value="37">Accumulated depreciation - Furniture &amp; Fixture
                                        </option>
                                        <option value="38">Accumulated depreciation - Others</option>
                                        <option value="39">Accumulated depreciation - Vehicle</option>
                                        <option value="40">Accumulated depreciation -Computer Allied</option>
                                        <option value="41">Accumulated depreciation -Kitchen Equipment Croc</option>
                                        <option value="42">Accumulated depreciation -Office Equipments Mach</option>
                                        <option value="43">Accumulated depreciation -Training Educational E</option>
                                        <option value="44">Annual Events/Program Expenses</option>
                                        <option value="45">1st January New Year event</option>
                                        <option value="46">Bangabandhu Birthday 17 March</option>
                                        <option value="47">Different Cultural shows / Mela etc</option>
                                        <option value="48">Disability Day - National Program 3rd December</option>
                                        <option value="49">Eid Programmes</option>
                                        <option value="50">Independence Day 26 March</option>
                                        <option value="51">International Language Day 21 February</option>
                                        <option value="52">National Mourn Day 17 August</option>
                                        <option value="53">National Victory Day -16 December</option>
                                        <option value="54">Pohela Baishakh 14 April</option>
                                        <option value="55">VTC Anniversary Programme 15 October</option>
                                        <option value="56">World Autism Awareness Day programme2nd April</option>
                                        <option value="57">Computer Allied</option>
                                        <option value="58">Anti-Virus Disk</option>
                                        <option value="59">Desktop Computer</option>
                                        <option value="60">Hard Disk</option>
                                        <option value="61">KeyBoard and Mouse</option>
                                        <option value="62">Laptop</option>
                                        <option value="63">Mobile Accessories</option>
                                        <option value="64">Mobile phone</option>
                                        <option value="65">Pendrive</option>
                                        <option value="66">Tablets</option>
                                        <option value="68">Cost of Goods Sold</option>
                                        <option value="69">COGS from Art and Craft</option>
                                        <option value="70">COGS from Block cloths</option>
                                        <option value="80">COGS of Block Blouse</option>
                                        <option value="90">COGS of Block Hijab, Dopatta</option>
                                        <option value="91">COGS of Block other items</option>
                                        <option value="92">COGS of Block Panjabi</option>
                                        <option value="93">COGS of Block Salwar, Kamiz, Dipattta</option>
                                        <option value="94">COGS of Block Sharee</option>
                                        <option value="95">COGS of Block T-Shirt</option>
                                        <option value="96">COGS from Carpet Slipper</option>
                                        <option value="97">COGS from Catering food</option>
                                        <option value="98">Catering Revenue (Inside Staff)</option>
                                        <option value="99">Catering Sales (Inside Students)</option>
                                        <option value="100">Catering Sales (Outsiders)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-3 col-form-label ">Account Name
                                </label>
                                <div class="col-md-9 ">
                                    <x-input-text name="name" placeholder="Account Name Here"></x-input-text>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-3 col-form-label ">Opening
                                    Balance:</label>
                                <div class="col-md-9 ">
                                    <x-input-text name="name" type="number" placeholder="Opening Balance Here"></x-input-text>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-3 col-form-label ">Current
                                    Balance:</label>
                                <div class="col-md-9 ">
                                    <x-input-text name="name" type="number" placeholder="Current Balance Here"></x-input-text>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-3 col-form-label ">Sequence
                                    No:</label>
                                <div class="col-md-9 ">
                                    <x-input-text name="name" type="number" placeholder="Sequence No Here"></x-input-text>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-3 col-form-label ">Tier No.:
                                </label>
                                <div class="col-md-9 ">
                                    <x-input-text name="name" type="number" placeholder="Tier No Here"></x-input-text>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-3 col-form-label ">Account
                                    Type</label>
                                <div class="col-md-9 ">
                                    <select class="form-control form-select">
                                        <option value="">--Select--</option>
                                        <option value="1">Debit</option>
                                        <option value="2">Cradit</option>

                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input"
                                    class="col-md-3 col-form-label ">Published:</label>
                                <div class="col-md-9 ">
                                    <div class="square-switch">
                                        <input type="checkbox" id="square-switch3" switch="bool" checked />
                                        <label for="square-switch3" data-on-label="Yes" data-off-label="No"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-3 col-form-label ">Is Bank</label>
                                <div class="col-md-9 ">
                                    <input class="form-check-input" type="checkbox" id="formCheck1">
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
        </div>
        <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade material-callects-modal-xl-view" id="" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Coa Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body view">
                <div class="row">
                    <div class="col-md-12">

                        <!-- START VIEW -->
                        <div class="row">
                            <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1" for="id">
                                Status: </label>
                            <div class="col-xs-12 col-md-7">
                                <span class="label label-success label-lg">Active</span>
                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1"
                                for="id">Acc. No.: </label>
                            <div class="col-xs-12 col-md-7">
                                1010
                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1"
                                for="id">Acc. Name: </label>
                            <div class="col-xs-12 col-md-7">
                                Cash Operating Account
                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1"
                                for="id">Project: </label>
                            <div class="col-xs-12 col-md-7">

                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1"
                                for="id">Parent Acc.: </label>
                            <div class="col-xs-12 col-md-7">
                                Current Assets
                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1"
                                for="id">Sequence No.: </label>
                            <div class="col-xs-12 col-md-7">
                                1
                            </div>
                        </div>

                        <div class="row">
                            <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1"
                                for="id">Opening Balance: </label>
                            <div class="col-xs-12 col-md-7">
                                0
                            </div>
                        </div>

                        <div class="row">
                            <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1"
                                for="id">Current Balance: </label>
                            <div class="col-xs-12 col-md-7">
                                458575
                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1"
                                for="id">Acc. Group: </label>
                            <div class="col-xs-12 col-md-7">
                                1
                            </div>
                        </div>

                        <div class="row">
                            <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1"
                                for="id">Default Nature: </label>
                            <div class="col-xs-12 col-md-7">
                                1
                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1"
                                for="id">Tier No.: </label>
                            <div class="col-xs-12 col-md-7">
                                2
                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1"
                                for="id">Created By: </label>
                            <div class="col-xs-12 col-md-7">
                                Ohidul Hassan at
                            </div>
                        </div>
                        <div class="row">
                            <label class="control-label text-right col-xs-12 col-md-2 col-md-offset-1"
                                for="id">Updated By: </label>
                            <div class="col-xs-12 col-md-7">
                                There is no update record.
                            </div>
                        </div>
                        <!-- ..END VIEW -->
                    </div>
                </div>
            </div>
            <div class="row modal-footer">
                <div class="col-md-1">
                    <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
        <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> © Skote.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Themesbrand
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection
@section('script')
@endsection
