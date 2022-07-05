@extends('layouts.master')

@section('content')
{{-- @dd($record)--}}
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content apply-view-only">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <x-input-select wireModel="project_id" name="project_id" :records="$projects"
                                            targetColumn="title" selected="{{$record->income->project_id}}">
                                        </x-input-select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Student</label>
                                        <x-input-select wireModel="student_id" name="student_id" :records="$students"
                                            additional="code" selected="{{$record->student_id}}">
                                        </x-input-select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Payment Date</label>
                                        <x-input-text wireModel='date' type='date' placeholder='dd/mm/yyyy'
                                            value="{{$record->income->date}}">
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
                                <div data-repeater-list="details">
                                    @foreach($record->incomeDetails as $detail)
                                    <div data-repeater-item class="row removeRow">
                                        <div class="mb-3 d-flex col-lg-7">
                                            <div class="w-100">
                                                <select class="form-control form-select" name="course_id">
                                                    <option>--Select--</option>
                                                    @foreach($courses as $course)
                                                    <optgroup label="{{$course['title']}}">
                                                        @foreach($course['children'] as $childCourse)
                                                        <option value="{{$childCourse['id']}}" {{$detail->course_id ==
                                                            $childCourse['id'] ? 'selected' :
                                                            ''}}>{{$childCourse['title']}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 d-flex col-lg-5">
                                            <x-input-text name='amount' type="number" placeholder='Payment Amount'
                                                value="{{$detail->amount}}">
                                            </x-input-text>
                                            {{-- <div>
                                                <button class="btn btn-danger ms-2 removeBtn">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div> --}}
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                {{-- <input data-repeater-create type="button" class="btn btn-success mt-3 px-4 mt-lg-0"
                                    value="Add" /> --}}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{route('student-income.create')}}" class="btn btn-success w-100">
                                Go Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection