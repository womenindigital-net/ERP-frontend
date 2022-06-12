@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <!-- Wizard container -->
                                <div class="wizard-container">
                                    <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                        <div class="col-sm-3 col-md-3">
                                            <div id="wizard-navigation">
                                                <ul class="wizard-navigation">
                                                    <li class="w-100"><a href="#Social_Communication"
                                                            data-toggle="tab">Incident
                                                            Record step 1</a></li>
                                                    <li class="w-100"><a href="#Pragmatic_Objective"
                                                            data-toggle="tab">Incident
                                                            Record step 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9">
                                            <form action="{{route('incident-record.store')}}" method="POST">
                                                @csrf
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="Social_Communication">
                                                        <section>
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-firstname-input">Collection
                                                                            Date:</label>
                                                                        <div class="input-group" id="datepicker2">
                                                                            <x-input-text name="date"
                                                                                placeholder="dd/mm/yyyy" type="date">
                                                                            </x-input-text>
                                                                        </div><!-- input-group -->
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-lastname-input">Teacher:</label>
                                                                        <x-input-select name="teacher_id"
                                                                            :records="[]" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Pragmatic_Objective">
                                                        <section>
                                                            <x-input-radio-or-check label="Incident Type"
                                                                :records="$incidentConstant::$incidentType">
                                                            </x-input-radio-or-check>
                                                            <div class="row border-top py-2">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Date and
                                                                            Time</label>
                                                                        <x-input-text name="date"
                                                                            placeholder="dd/mm/yyyy" type="date">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row border-top py-2">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label
                                                                            class="form-check-label pb-2">Setting/Places</label>
                                                                        <x-input-text name="setting"
                                                                            placeholder="Setting">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Duration (
                                                                            in
                                                                            Minutes)</label>
                                                                        <x-input-text name="duration"
                                                                            placeholder="duration">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <x-input-radio-or-check label="Action Taken?"
                                                                :records="$constants::$yesNoEn" :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <x-input-radio-or-check type="checkbox"
                                                                label="What is the Previous cause of Incident/Antecedent Behavior?"
                                                                :records="$incidentConstant::$activityType"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                </div>
                                                <div class="wizard-footer d-flex justify-content-between">
                                                    <div class="pull-left">
                                                        <input type='button'
                                                            class='btn btn-primary waves-effect waves-light btn-previous'
                                                            name='previous' value='Previous' />
                                                    </div>
                                                    <div class="pull-right">
                                                        <input type='button'
                                                            class='btn btn-primary waves-effect waves-light btn-next'
                                                            name='next' value='Next' />
                                                        <input type="submit" class='btn btn-finish btn-fill btn-danger'
                                                            value='Finish' />
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- wizard container -->
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <div class="tab-pane " id="case-histroy_list" role="tabpanel">
                        <!-- form start -->
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
                        <div class="table-rasponseve">
                            <table class="table table-bordered w-100">
                                <thead>
                                    <tr class="table-primary">
                                        <th>Collection Date</th>
                                        <th>Student Name</th>
                                        <th>Collected By</th>
                                        <th>Log</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2022-05-17</td>
                                        <td>Abdur Rahman Sajid</td>
                                        <td>Ohidul Hassan</td>
                                        <td><small>Create: Ohidul Hassan @ 2022-05-17 15:50:24</small></td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                                data-bs-toggle="modal" data-bs-toggle="modal"
                                                data-bs-target=".bs-example-modal-lg">
                                                <i class=" fas fa-eye"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                                data-bs-toggle="modal" data-bs-toggle="modal"
                                                data-bs-target=".bs-example-modal-lg">
                                                <i class="fas fa-pen"></i></button>
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
                        <!-- end row -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- Custom step -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
@endsection
