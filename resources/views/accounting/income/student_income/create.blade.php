@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#student_income" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Student Income</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#student_income_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Student Income List</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="student_income" role="tabpanel">
                        <!-- form start -->
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <form action="{{route('student-income.store')}}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Project</label>
                                                    <x-input-select wireModel="project_id" name="project_id"
                                                        :records="$projects" targetColumn="title">
                                                    </x-input-select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Student</label>
                                                    <x-input-select wireModel="student_id" name="student_id"
                                                        :records="$students" additional="code">
                                                    </x-input-select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
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
                                                <div data-repeater-item class="row removeRow">
                                                    <div class="mb-3 d-flex col-lg-7">
                                                        <div class="w-100">

                                                            <select
                                                                class="form-control form-select  @if($errors->first('details.*.course_id')) is-invalid @endif"
                                                                name="course_id">
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
                                                            @if($errors->first('details.*.course_id'))
                                                            <span style="color: red">{{
                                                                $errors->first('details.*course_id')}}</span>
                                                            @endif
                                                            {{-- {{ $errors->first('details.*') }} --}}
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 d-flex col-lg-5">
                                                        <div>
                                                            <input
                                                                class="form-control w-100 @if($errors->first('details.*.amount')) is-invalid @endif"
                                                                type="number" name="amount" id=""
                                                                placeholder='Payment Amount'>
                                                            @if($errors->first('details.*amount'))
                                                            <span style="color: red">{{
                                                                $errors->first('details.*amount')}}</span>
                                                            @endif
                                                        </div>
                                                        {{-- <x-input-text name='amount' type="number"
                                                            placeholder='Payment Amount'>
                                                        </x-input-text> --}}
                                                        <div onclick="this.parentNode.parentNode.remove(this)">
                                                            <button class="btn btn-danger ms-2 removeBtn" type="button">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input data-repeater-create type="button"
                                                class="btn btn-success mt-3 px-4 mt-lg-0" value="Add" />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn font-size-16 btn-success"> Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <div class="tab-pane" id="student_income_list" role="tabpanel">
                        <livewire:student-income.student-income-list />
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection