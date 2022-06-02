@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') STUDENT TEACHERS @endslot
@endcomponent
{{-- code --}}

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">


                </p>
                <div class="d-flex justify-content-end pb-5">
                    <button type="button" class="btn btn-outline-info waves-effect waves-light " data-bs-toggle="modal"
                        data-bs-target=".bs-example-modal-xl"><i class="fas fa-plus-circle"></i>Add</button>


                    <!-- sample modal content -->
                    <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-0">

                                    <div class="card p-0 m-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-3 row">
                                                        <label class="col-md-4 col-form-label">Student:</label>
                                                        <div class="col-md-8">
                                                            <select name="StudentID"
                                                                class="form-control strip-tags  form-control section2 form-select"
                                                                id="StudentID" required="">
                                                                <option value="">Select</option>
                                                                <option value="1">Aalliyah Tehzeeb Ahmed</option>
                                                                <option value="2">abdullah-al-nafi antor</option>
                                                                <option value="3">Abdullahil Baki</option>
                                                                <option value="4">Abdur Rahman Sajid</option>
                                                                <option value="5">Abid Hossain Turjo</option>
                                                                <option value="6">Abid Kabir Chowdhury</option>
                                                                <option value="7">Abrar Ahosab Talha</option>
                                                                <option value="8">Abrar Jawad Siam</option>
                                                                <option value="9">Abu Sufiyan</option>
                                                                <option value="10">Adib Akbar</option>
                                                                <option value="11">Adiba Atiar</option>
                                                                <option value="12">Adil Anaf</option>
                                                                <option value="13">Aditya Chakraborty</option>
                                                                <option value="12">Adil Anaf</option>
                                                                <option value="13">Aditya Chakraborty</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3 row">
                                                        <label class="col-md-4 col-form-label">Main Teacher:</label>
                                                        <div class="col-md-8">
                                                            <select name="IsMainTeacher"
                                                                onchange="activeMainTeacher(this)"
                                                                class="form-control strip-tags  form-control section2 form-select"
                                                                id="IsMainTeacher" required="">
                                                                <option value="">Select</option>
                                                                <option value="1">Abul hasnat</option>
                                                                <option value="2">Airin Shiddique</option>
                                                                <option value="3">Anas Bin Iqbal</option>
                                                                <option value="4">Arup Mandal</option>
                                                                <option value="5">Ashiqur Rahman</option>
                                                                <option value="6">Atiya Azim</option>
                                                                <option value="7">Bijoy ..</option>
                                                                <option value="8">Dolon Bishwas</option>
                                                                <option value="9">Farhana ..</option>
                                                                <option value="10">Golam Rabbani</option>
                                                                <option value="11">Habibur Rahman</option>
                                                                <option value="12">Kalon Hossain</option>
                                                                <option value="13">Karishma Cultural</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3 ">
                                                <div class="col-2 d-flex align-items-center">
                                                    <div class=" row">
                                                        <label class=" col-form-label ">Teachers:</label>
                                                    </div>
                                                </div>
                                                <div class="col-2 d-flex align-items-center">
                                                    <div class="form-check ">
                                                        <x-input-radio-or-check name='' :records="['Select All']"
                                                            label="" type="checkbox">
                                                        </x-input-radio-or-check>
                                                    </div>
                                                </div>
                                                <div class="col-2 d-flex align-items-center">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Deselect All
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Boutique
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Paperwork
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Elementary
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Music
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Tailoring
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Starter
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Yoga
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Dance
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Online Chess class
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Jewelry
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Radial
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Physical Exercise(PE)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="square-switch pt-3">
                                                <h6>Published:</h6>
                                                <input type="checkbox" id="square-switch1" switch="none" checked />
                                                <label for="square-switch1" data-on-label="Yes"
                                                    data-off-label="No"></label>
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
                        </div>
                    </div><!-- /.modal -->
                </div>

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th class="">Student</th>
                            <th class="">Main Teacher</th>
                            <th class="">Log</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Iaffee Hossain Dipto</td>
                            <td>PFDA C COMMON</td>
                            <td>Create: Md. Amir Hossain @ 2019-07-25 00:32:35
                                There is no update record.</td>

                            <td>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal"
                                    data-bs-target=".student-income-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal"
                                    data-bs-target=".student-income-modal-xl-add">
                                    <i class="fas fa-pen"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Iaffee Hossain Dipto</td>
                            <td>PFDA C COMMON</td>
                            <td>Create: Md. Amir Hossain @ 2019-07-25 00:32:35
                                There is no update record.</td>
                            <td> <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal"
                                    data-bs-target=".student-income-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal"
                                    data-bs-target=".student-income-modal-xl-add">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->



<!--  Extra Large modal example -->
<div class="modal fade student-income-modal-xl-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary"> Student Teacher View Details
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- journal form start -->
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Student:</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" value="Iaffee Hossain Dipto"
                                    id="example-text-input">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Main Teacher:</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" value="PFDA C COMMON" id="example-text-input">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row pb-3">
                    <div class="col-2">
                        <span class="text-center">Assign Teachers:</span>
                    </div>
                    <div class="col-4">
                        <span><input class="form-check-input" type="checkbox" id="formCheck1"> PFDA C COMMON</span>
                    </div>

                </div>

                <!-- journal form end -->
                <div class="modal-footer">
                    <div class="col-md-1">
                        <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



@endsection
@section('script')

<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

<!-- fontawesome init -->
<script src="{{ URL::asset('/assets/js/pages/fontawesome.init.js') }}"></script>

@endsection