@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Student_attendance_card_setup @endslot
    @endcomponent
    {{-- code  --}}
        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Student Card Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Student Card List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="mb-3 row m-auto">
                            <div class="col-lg-6">
                                <label class="form-label">Student</label>
                                <select class="form-select">
                                    <option>--Select--</option>
                                    <option>Alamin Islam</option>
                                    <option>SAFWAT NASIF</option>
                                    <option>Md. Moinul Islam Supta</option>
                                    <option>Rumi Akhter</option>
                                    <option>abdullah-al-nafi antor</option>
                                    <option>Md. Shakib Khan</option>
                                    <option>SARRAJ SARWAR</option>
                                    <option>Humaira Sultana</option>
                                    <option>Tabassum Mehejbeen Liana</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label"> Card Number</label>
                                <x-input-text type="number" name="hh"  placeholder="Enter amount">
                                </x-input-text> 
                            </div>
                        </div>
                        <div class="text-end pe-2">
                            <button type="button" class="btn btn-danger waves-effect waves-light">Reset</button>
                            <button type="button" class="btn btn-success waves-effect waves-light">Save</button>
                        </div>
                    </div>
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
                                <x-input-text type="search" type="number" name="hh"  placeholder="Enter amount">
                                </x-input-text> 
                              </label>
                            </div>
                          </div>
                          <div class="table-responsive">
                            <table class="table table-bordered w-100">
                              <thead>
                                <tr class="table-primary">
                                    <th class="">Student Name</th>
                                    <th>Card Number</th>
                                    <th>Log</th>
                                    <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td>System </td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>
                                      <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                        <i class="mdi mdi-eye"></i>
                                      </button>
                                      <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                          class="fas fa-check"></i>
                                      </button>
                                      <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                          class="fas fa-check"></i>
                                      </button>
                                      <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                        <i class="mdi mdi-pencil"></i>
                                      </button>
                                      <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                        <i class="bx bx-dollar"></i>
                                      </button>
                                      <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                        <i class="fas fa-arrow-circle-right"></i>
                                      </button>
                                      <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                        <i class="fas fa-trash-alt"></i>
                                      </button>
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


@endsection
@section('script')
@endsection