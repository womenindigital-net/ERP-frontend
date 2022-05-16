@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Leave Report @endslot
    @endcomponent
    {{-- code  --}}
    <div class="">
        <div class="">
            <div class="container-fluid">
                    <!-- start row  -->
                    <!-- start page title -->
                    <div class="row">
                        
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive  nowrap ">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Employee ID </th>
                                            <th>Employee Full Name</th>
                                            <th>Leave Type Name</th>
                                            <th>Leave Carry Overed</th>
                                            <th>Leave Entitled</th>
                                            <th>Leave Cashed</th>
                                            <th>Leave Enjoyed</th>
                                            <th>Leave Elapsed</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <tr>
                                            <td>1 </td>
                                            <td>1</td>
                                            <td>Test Muhammad Employee</td>
                                            <td>Test Leave</td>
                                            <td>0.00 </td>
                                            <td>3.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00 </td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row --> 
                    <!-- end row -->
                

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        
        
        <!-- End Page-content -->

        
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
 

@endsection

@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection