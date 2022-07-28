<div>
    <!-- form start -->
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Project</label>
                            <x-input-select wireModel="project_id" :records="$projects" targetColumn="title">
                            </x-input-select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="validationCustom02" class="form-label">Student</label>
                            <x-input-select wireModel="student_id" :records="$students" additional="code">
                            </x-input-select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label>Payment Date</label>
                            <x-input-text wireModel='date' type='date'>
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
                <div class="repeater">
                    <div class="row">
                        <div class="col-lg-7 pe-1">
                            <label for="name">Payment Amount For</label>
                        </div>
                        <div class="col-lg-5  pe-1">
                            <label for="email">Payment Amount </label>
                        </div>
                    </div>
                    <div>
                        @foreach ($inputs as $key => $item)
                        <div class="row removeRow py-1">
                            <div class="d-flex col-lg-7">
                                <div class="w-100">
                                    <select class="form-control form-select " wire:model="course_id.{{$key}}">
                                        <option value="">--Select--</option>
                                        @foreach($courses as $course)
                                        <optgroup label="{{$course['title']}}">
                                            @foreach($course['children'] as $childCourse)
                                            <option value="{{$childCourse['id']}}">
                                                {{$childCourse['title']}}</option>
                                            @endforeach
                                        </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex col-lg-5">
                                <x-input-text wireModel="amount.{{ $key }}" type="number">
                                </x-input-text>
                                @if (!($this->mode == 'show'))
                                <button type="button" class="btn mb-1 btn-danger waves-effect waves-light removeBtn"
                                    wire:click="removeItem({{ $key }})">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                @endif
                            </div>
                        </div>
                        @endforeach
                        @if (!($this->mode == 'show'))
                        <input type="button" class="btn btn-success mt-3 mt-lg-0" value="Add" wire:click="addMore()" />

                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="w-25">
                    @if ($this->mode == 'edit')
                    <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
                    @elseif (!($this->mode) == 'show')
                    <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
                    @else
                    <a href="{{route('student-income.create')}}" class="btn btn-lg btn-success w-100">
                        Go Back
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>