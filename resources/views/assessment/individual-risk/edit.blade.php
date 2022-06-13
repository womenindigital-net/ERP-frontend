<div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Individual Risk Assessment Form</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Individual Risk Assessment List</span>
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
                                                                data-toggle="tab">Individual Risk Assessment Form</a></li>
                                                        <li class="w-100"><a href="#Pragmatic_Objective"
                                                                data-toggle="tab">Risk Assessment</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9">
                                                <form>
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="Social_Communication">
                                                            <section>
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-firstname-input">Collection
                                                                                    Date:</label>
                                                                                <x-input-text name="collection_date"
                                                                                    type="date" placeholder="mm/dd/yyyy">
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-lastname-input">Teacher:</label>
                                                                                <x-input-select name="student_id"
                                                                                    :records="[]" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="basicpill-phoneno-input">Candidate
                                                                                    ID:</label>
                                                                                <x-input-select name="student_id"
                                                                                    :records="[]" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Pragmatic_Objective">

                                                            <section>
                                                                <form>
                                                                    <x-input-radio-or-check name="hazar_spotted/Type"
                                                                        type="checkbox" label="Hazard spotted/Type"
                                                                        :records="$IRAConstants::$riskAssessment" :isVertical="false">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Cause of Hazzard</h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="causeof_hazzard"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Accident/ incident?"
                                                                        :records="$IRAConstants::$accidentOrIncident">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Possible Concerns</h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="possible_concerns"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Risk Rating (Overall risk level
                                                                                    identified: 1-10 )</h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="name"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Action to Reduce Hazard</h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="name"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Level of risk (1-25)</h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="name"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <x-input-radio-or-check name="hh" label="Likelihood"
                                                                        :records="$IRAConstants::$likelihood">
                                                                    </x-input-radio-or-check>
                                                                    {{-- end row --}}
                                                                    <x-input-radio-or-check name="hh" label="Consequences"
                                                                        :records="$IRAConstants::$consu">
                                                                    </x-input-radio-or-check>
                                                                    {{-- end row --}}

                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Staff signature</h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="name"
                                                                                        placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Staff name</h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="name"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Signature of support worker</h5>
                                                                                <div class="mb-2">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h5>Support worker name</h5>
                                                                                <div class="mb-2">
                                                                                    <x-input-text name="name"
                                                                                        placeholder=""></x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
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
                                                                wire:click='save' value='Finish' />
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9">
                                            <form action="{{ route('individual-risk.store') }}" method="POST">
                                                @csrf
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="Social_Communication">
                                                        <section>
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label for="basicpill-firstname-input">Collection
                                                                            Date:</label>
                                                                        <x-input-text name="collection_date" type="date"
                                                                            placeholder="mm/dd/yyyy">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-lastname-input">Teacher:</label>
                                                                        <x-input-select name="student_id"
                                                                            :records="[]" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label for="basicpill-phoneno-input">Candidate
                                                                            ID:</label>
                                                                        <x-input-select name="student_id"
                                                                            :records="[]" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Pragmatic_Objective">
                                                        <section>
                                                            <x-input-radio-or-check name="hazar_spotted/Type"
                                                                type="checkbox" label="Hazard spotted/Type"
                                                                :records="$IRAConstants::$riskAssessment" :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h5>Cause of Hazzard</h5>
                                                                        <div class="mb-2">
                                                                            <x-input-text name="causeof_hazzard"
                                                                                placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check label="Accident/incident?"
                                                                :records="$IRAConstants::$accidentOrIncident">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h5>Possible Concerns</h5>
                                                                        <div class="mb-2">
                                                                            <x-input-text name="possible_concerns"
                                                                                placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h5>Risk Rating (Overall risk level
                                                                            identified: 1-10 )</h5>
                                                                        <div class="mb-2">
                                                                            <x-input-text name="risk_rating" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h5>Action to Reduce Hazard</h5>
                                                                        <div class="mb-2">
                                                                            <x-input-text name="action_to_reduce_hazard"
                                                                                placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h5>Level of risk (1-25)</h5>
                                                                        <div class="mb-2">
                                                                            <x-input-text name="level_of_risk"
                                                                                placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <x-input-radio-or-check label="Likelihood" :records="$IRAConstants::$likelihood">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check label="Consequences" :records="$IRAConstants::$consu">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h5>Staff signature</h5>
                                                                        <div class="mb-2">
                                                                            <x-input-text name="staff_signature"
                                                                                placeholder=""></x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h5>Staff name</h5>
                                                                        <div class="mb-2">
                                                                            <x-input-text name="staff_name" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h5>Signature of support worker</h5>
                                                                        <div class="mb-2">
                                                                            <x-input-text
                                                                                name="signature_of_support_worker" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h5>Support worker name</h5>
                                                                        <div class="mb-2">
                                                                            <x-input-text name="support_worker_name"
                                                                                placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
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
                                    <input type="search" class="form-control form-control-sm" placeholder="">
                                </label>
                            </div>
                        </div>
                        <div class="table-responsive">
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
                                        <td>2022-05-16</td>
                                        <td>Abdur Rahman Sajid</td>
                                        <td>Ohidul Hassan</td>
                                        <td>
                                            <small>Create: Ohidul Hassan @ 2022-05-16 16:38:29</small>
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                                                <i class="mdi mdi-eye"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                                                <i class="mdi mdi-pencil"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                <i class="bx bx-dollar"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
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
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
    </div>