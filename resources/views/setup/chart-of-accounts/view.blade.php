@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block"> List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab Panes One -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
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
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                                                <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                     <!-- Tab Panes Two -->
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
    </div> 
</div
@endsection