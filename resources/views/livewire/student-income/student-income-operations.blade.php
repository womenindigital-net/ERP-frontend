<div>
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">Add OR Edit Student Income Create
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Project</label>
                                <x-input-select wireModel="project_id" name="project_id" :records="$projects"
                                    targetColumn="title">
                                </x-input-select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="validationCustom02" class="form-label">Student</label>
                                <x-input-select wireModel="student_id" name="student_id" :records="$students">
                                </x-input-select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Student ID</label>
                                <p class="form-control">STD-232</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Payment Date</label>
                                <x-input-text wireModel='date' type='date' placeholder='dd/mm/yyyy'>
                                </x-input-text>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table nowrap mb-0">

                                            <thead>
                                                <tr class="table-primary text-center">
                                                    <th>Food Subsidy</th>
                                                    <th>Monthly Fees Subsidy</th>
                                                    <th>Transport Subsidy</th>
                                                    <th>Other Subsidy</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <form class="repeater" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-4   pe-1">
                            <label for="name">Payment Amount For</label>
                        </div>
                        <div class="col-lg-4   pe-1">
                            <label for="subject">Receive Amount For</label>
                        </div>
                        <div class="col-lg-4  pe-1">
                            <label for="email">Payment Amount </label>
                        </div>
                    </div>
                    <div data-repeater-list="group-a" id="removeButton">
                        <div data-repeater-item class="row removeRow">
                            <div class="mb-3 d-flex col-lg-4">
                                <span class="pe-2 pb-1">01</span>
                                <div>
                                    <select class="form-control form-select" wire:model="course_id">
                                        <option>--Select--</option>
                                        <option value="1">Consultation Fees</option>
                                        <option value="2">Admission for Assessment /Observation</option>
                                        <option value="3">Pre-Vocational Course</option>
                                        <option value="4">Vocational Course</option>
                                        <option value="5">Karishma Cultural Group</option>
                                        <option value="6">Cricket Course</option>
                                        <option value="7">Therapy Course</option>
                                    </select>
                                </div>
                            </div>

                            <div class=" col-lg-4  pb-1">
                                <select class="form-control form-select" {{-- wire:model="course_id" --}}>
                                    <option>--Select--</option>
                                    <option value="1">Consultation Fees</option>
                                    <option value="2">Admission for Assessment /Observation</option>
                                    <option value="3">Pre-Vocational Course</option>
                                    <option value="4">Vocational Course</option>
                                    <option value="5">Karishma Cultural Group</option>
                                    <option value="6">Cricket Course</option>
                                    <option value="7">Therapy Course</option>
                                </select>
                            </div>

                            <div class="mb-3 d-flex col-lg-4">
                                <x-input-text wireModel='amount' type="number" placeholder='Payment Amount'>
                                </x-input-text>
                                <div>
                                    <button class="btn btn-danger ms-2 removeBtn">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <input data-repeater-create type="button" class="btn btn-success mt-3 px-4 mt-lg-0" value="Add" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal"> Close</button>
                <button type="button" class="btn font-size-16 btn-success" wire:click="store"> Save</button>
            </div>
        </div>
    </div>
</div>