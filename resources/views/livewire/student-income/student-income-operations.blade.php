<div>
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">Add OR Edit Student Income Create
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation repeater" wire:submit.prevent="store">
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
                                <x-input-select wireModel="student_id" :records="$students" additional="code">
                                </x-input-select>
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
                    <div class="row">
                        <div class="col-lg-4   pe-1">
                            <label for="name">Payment Amount For</label>
                        </div>
                        <div class="col-lg-4  pe-1">
                            <label for="email">Payment Amount </label>
                        </div>
                    </div>
                    <div data-repeater-list="group-a">
                        <div data-repeater-item class="row">
                            <div class="mb-3 d-flex col-lg-4">
                                <span class="pe-2 pb-1">01</span>
                                <div>
                                    <select class="form-control form-select" wire:model="course_id">
                                        <option>--Select--</option>
                                        @foreach($courses as $course)
                                            <optgroup label="{{$course['title']}}">
                                                @foreach($course['children'] as $childCourse)
                                                    <option value="{{$childCourse['id']}}">{{$childCourse['title']}}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 d-flex col-lg-4">
                                <x-input-text wireModel='amount' type="number" placeholder='Payment Amount'>
                                </x-input-text>
                                <div>
                                    <button class="btn btn-danger ms-2">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <input data-repeater-create type="button" class="btn btn-success mt-3 px-4 mt-lg-0"
                           value="Add"/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal"> Close</button>
                <button type="button" class="btn font-size-16 btn-success" wire:click="store"> Save</button>
            </div>
        </div>
    </div>
</div>
