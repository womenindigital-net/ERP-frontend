@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')

<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />



@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') Student_Table @endslot
@endcomponent
{{-- code --}}
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                </p>
                <div class="d-flex justify-content-end pb-5">
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                        data-bs-target=".bs-example-modal-xl">Add</button>


                </div>

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>Name & ID</th>
                            <th>DOA</th>
                            <th>DOB</th>
                            <th>B.G</th>
                            <th>Mobile#</th>
                            <th>Is A.P.A</th>
                            <th>Student Status</th>
                            <th>Log</th>
                            <th>Action</th>

                        </tr>
                    </thead>


                    <tbody>
                        <tr>
                            <td>System </td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011</td>
                            <td>$320,</td>
                            <td>61</td>
                            <td>2011/</td>
                            <td>$320,</td>
                            <td>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="mdi mdi-eye"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
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
                        <tr>
                            <td>Puja </td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>20115</td>
                            <td>$170</td>
                            <td>61</td>
                            <td>2011/</td>
                            <td>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="mdi mdi-eye"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
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
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- sample modal content -->
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Student Create</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">

                <div class="card p-0 m-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-4 col-form-label">Student ID:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" placeholder="Input your ID"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-search-input" class="col-md-4 col-form-label">Name:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" placeholder="Your Name"
                                            id="example-search-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-md-4 col-form-label">Date of Birth:</label>
                                    <div class="col-md-8" id="datepicker2">
                                        <input class="form-control" placeholder="dd/mm/yy" type="date"
                                            data-date-format="dd M, yyyy" data-date-container="#datepicker2"
                                            data-provide="datepicker" data-date-autoclose="true">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-md-4 col-form-label">Date of Assesment:</label>
                                    <div class="col-md-8" id="datepicker2">
                                        <input class="form-control" placeholder="dd/m/yy" type="date"
                                            data-date-format="dd M, yyyy" data-date-container="#datepicker2"
                                            data-provide="datepicker" data-date-autoclose="true">

                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-tel-input" class="col-md-4 col-form-label">NID:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" placeholder="Enter National ID"
                                            id="example-tel-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-password-input" class="col-md-4 col-form-label">Present
                                        Address:</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="" id="" rows="1"
                                            placeholder="Present Address"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-password-input" class="col-md-4 col-form-label">Parmanent
                                        Address:</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="" id="" rows="1"
                                            placeholder="Parmanent address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">

                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label">Gender:</label>
                                    <div class="col-md-8">
                                        <select class="form-select">
                                            <option>Select</option>
                                            <option>Female</option>
                                            <option>Male</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label">Blood Group:</label>
                                    <div class="col-md-8">
                                        <select class="form-select">
                                            <option>Select</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>O+</option>
                                            <option>O-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-4 col-form-label">Suborno Card
                                        No:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" placeholder="Enter Card No"
                                            id="example-email-input">
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="example-tel-input" class="col-md-4 col-form-label">Diagonosis:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" placeholder="" id="example-tel-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-password-input"
                                        class="col-md-4 col-form-label d-flex align-items-center">Photo:</label>
                                    <div class=" col-md-8">
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-number-input" class="col-md-4 col-form-label">Approved for
                                        Observation:</label>
                                    <div class="col-md-8 d-flex align-items-center">
                                        <input type="checkbox" id="switch1" switch="none" checked />
                                        <label for="switch1" data-on-label="Yes" data-off-label="No"></label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label for="example-password-input" class="col-md-12 col-form-label text-center">
                                        <h4>Father's Name:</h4>
                                    </label>

                                </div>

                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Enter your Father's name"
                                            id="example-password-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Enter your Father's number"
                                            id="example-password-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text"
                                            placeholder="Enter your Father's profession" id="example-password-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Enter your Father's Email"
                                            id="example-password-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text"
                                            placeholder="Enter your Father's Document" id="example-password-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text"
                                            placeholder="Enter your Father's FB link" id="example-password-input">
                                    </div>
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label for="example-password-input" class="col-md-12 col-form-label text-center">
                                        <h4>Mother's Name:</h4>
                                    </label>

                                </div>

                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Enter your Mother's name"
                                            id="example-password-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Enter your Mother's number"
                                            id="example-password-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text"
                                            placeholder="Enter your Mother's profession" id="example-password-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Enter your Mother's Email"
                                            id="example-password-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text"
                                            placeholder="Enter your Mother's Document" id="example-password-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text"
                                            placeholder="Enter your Mother's FB link" id="example-password-input">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
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
<script src="{{ URL::asset('/assets/js/pages/fontawesome.init.js') }}"></script>
@endsection