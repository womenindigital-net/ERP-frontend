@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')RUN MITP @endslot
    @endcomponent
    {{-- code  --}}

 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3 row">
                        <h3 class="col-md-2 col-form-label">RUN MITPS</h3>
                        <div class="col-md-10">
                            <div class="col-sm-12">
                                <div class="white-box">
                                    
                                   
                                    
                                    <p class="text-muted m-b-30"></p>
                                    <div class="">
                                        <p class="text-muted m-b-30 loader_2 runMitp" id="loader_2"></p>
                                        <div class="row">
                                            <div class="col-xs-12 col-lg-12 col-md-12 ">
                                            
                                            <!-- // Start From -->
                                                <form method="POST" action="http://67.227.249.189/~pfdavtcadmin/pfdavtc/public/calculate-mitp" accept-charset="UTF-8" name="Request::segment(2)" id="data_form" class="form-horizontal calculate_mitp col-xs-12 col-lg-7 col-lg-offset-2 col-md-10 col-md-offset-1 ds-form-" enctype="multipart/form-data"><input name="_token" type="hidden" value="irZvc2MAAD0IhAdINYqDNFl6nItaIUHonkVO00Hi">
                        
                                                {{-- <span id="routeSpan"> http://67.227.249.189/~pfdavtcadmin/pfdavtc/public/run-mitp-store</span> --}}
                                                <div class="form-group">
                                                    <label class="control-label col-xs-12 col-md-3" for="CourseName">Select Student</label>
                                                    <div class="col-xs-12 col-md-9 input-group">
                                                        <select class="form-control form-control section2 form-select" name="studentID" onchange="showLastUpdate(this)" id="" required="">
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
                                                            <option value="14">Adiyan Islam Danial</option>
                                                            <option value="15">Adkin Rozar Quiah</option>
                                    
                                                    </select>
                                                        <p class="mitp_p"></p>
                                                    </div>
                                                </div>
                        
                                                <div class="from-group mt-2">
                                                    <div class="col-sm-offset-2 col-sm-4">
                                                        <button type="submit" class="btn btn-block btn-info btn-rounded p-10 text-bold text-uppercase pull-right">Run MITP</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- // ..End From -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                       
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>


@endsection




