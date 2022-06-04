@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
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
                        <h3 class="pb-5">RUN MITPS</h3>
                    </div>
                    <div class="row pb-3">
                        <div class="col-2"></div>
                        <div class="col-2 d-flex align-items-center">
                            <label class="p-0" for="CourseName">Select Student</label>
                        </div>
                        <div class="col-5 col-md-5 ">
                            <form method="POST" action=""><input name="_token" type="hidden" value="">
                            <div class="form-group">
                                <div class="col-xs-12 col-md-9 input-group">
                                    <select class="form-control form-control section2 form-select" name="studentID" id="" required="">
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
                                </div>
                            </div>
                            </form>
                        </div>
                            
                    </div>
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-10">
                            <div class="from-group mt-2">
                                <div class="">
                                    <button type="submit" class="btn btn-info btn-rounded  text-bold text-uppercase ">Run MITP</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
@section('script')


@endsection




