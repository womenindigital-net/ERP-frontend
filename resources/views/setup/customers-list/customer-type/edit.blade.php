@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('customer-Type.update',$id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Type Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="type_name" class="form-control" id="horizontal-firstname-input" placeholder="Enter your name ">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea id="message" class="form-control" placeholder="Enter your description here"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-9">
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-success waves-light">
                                            Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>

            </div>
        </div>
    </div>
</div
@endsection