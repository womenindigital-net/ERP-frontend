@extends('layouts.master')
@section('title')
    @lang('translation.Starter_Page')
@endsection

@section('css')
    <link href="{{ asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('title') @lang('translation.Starter_Page') @endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body pt-5">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#finished_good" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Product Setup</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#finished_good_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Product List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="finished_good" role="tabpanel">
                            <livewire:product-create/>
                        </div>
                        <div class="tab-pane" id="finished_good_list" role="tabpanel">
                            <livewire:product-list/>
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
    <script src="{{ asset('assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>
    <script src="{{ asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".hide_sell").hide();
            $("#sell").click(function() {
                $(".hide_sell").toggle();
            });
            $(".hide_cost").hide();
            $("#cost").click(function() {
                $(".hide_cost").toggle();
            });
            $(".hide_expiry").hide();
            $("#expiry").click(function() {
                $(".hide_expiry").toggle();
            });

        });
    </script>
@endsection
@section('script-bottom')
@endsection
