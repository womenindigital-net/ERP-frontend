@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Direct Payment @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <!-- form start -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Payment Type</label>
                                    <select class="form-control select2">
                                        <option>--Select--</option>
                                        <option value="">Cash Payment</option>
                                        <option value="">Advance Payment</option>
                                        <option value="">Bank to bank Transfer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Project</label>
                                    <select class="form-control select2">
                                        <option>--Select--</option>
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">From Account</label>
                                        <x-input-text type="text" name="yousuf" placeholder="Enter From Account here"></x-input-text>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">To Account</label>
                                    <x-input-text type="text" name="yousuf" placeholder="Enter To Account here"></x-input-text>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Amount</label>
                                     <x-input-text type="text" name="yousuf" placeholder="Enter Amount here"></x-input-text>  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Purpose</label>
                                    <x-input-textarea rows="1" name="yousuf" placeholder="Enter Purpose here"></x-input-textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-danger w-100">Reset</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success w-100">Save</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
   
@section('script-bottom')
@endsection