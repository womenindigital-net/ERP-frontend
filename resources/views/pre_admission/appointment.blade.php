@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')

<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
    <x-breadcrumb pageHeader="Sample Page Header" :base="['utility' => '#']" :sub="['another' => '#', 'another1' => '#']"></x-breadcrumb>
    {{-- code  --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    </p>
                    <div class="d-flex justify-content-end pb-5">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Add</button>
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
                                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="mdi mdi-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
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
                                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                        <i class="mdi mdi-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
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
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

<!-- sample modal content -->
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <livewire:student-create/>
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
