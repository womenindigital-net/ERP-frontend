@extends('layouts.master')
@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Customer Type Setup</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Customer Type List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <section>
                                <form action="{{ route('customer-reg-list.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="card-body">
                                                            <div class="mb-2 row">
                                                                <label for="example-text-input"
                                                                    class="col-md-4 col-form-label">Name</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="name"
                                                                        placeholder="Enter Customer Name Here">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-5 row">
                                                                <label for="example-search-input"
                                                                    class="col-md-4 col-form-label">Mobile</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="mobile" placeholder="Mobile">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-2 row">
                                                                <label for="example-email-input"
                                                                    class="col-md-4 col-form-label">Address 1</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="address_1" placeholder="Address 1">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-2 row">
                                                                <label for="example-email-input"
                                                                    class="col-md-4 col-form-label">City</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="city"
                                                                        placeholder="City Name Here"></x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-5 row">
                                                                <label for="example-url-input"
                                                                    class="col-md-4 col-form-label">State</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="state"
                                                                        placeholder="State Name Here"></x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-2 row">
                                                                <label for="example-text-input"
                                                                    class="col-md-4 col-form-label">Phone 1</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="phone_1"
                                                                        placeholder="Phone One Here"></x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-2 row">
                                                                <label for="example-search-input"
                                                                    class="col-md-4 col-form-label">Email</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="email"
                                                                        placeholder="Enter Email Address Here">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="card-body">
                                                            <div class="mb-5 mt-3 row">
                                                                <label class="col-md-4 col-form-label">Select</label>
                                                                <div class="col-md-8">
                                                                    <x-input-select name="select" :records="$select"  />
                                                                </div>
                                                            </div>
                                                            {{-- Address --}}
                                                            <div class="mb-2 row">
                                                                <label for="example-search-input"
                                                                    class="col-md-4 col-form-label">Address</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="address"
                                                                        placeholder="Enter Address Here"></x-input-text>
                                                                </div>
                                                            </div>
                                                            {{-- Zip Code --}}
                                                            <div class="mb-2 row">
                                                                <label for="example-search-input"
                                                                    class="col-md-4 col-form-label">Zip Code</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text type="number" name="zip_code"
                                                                        placeholder="Zip Code"></x-input-text>
                                                                </div>
                                                            </div>
                                                            {{-- Country --}}
                                                            <div class="mb-5 row">
                                                                <label for="example-search-input"
                                                                    class="col-md-4 col-form-label">Country</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="country"
                                                                        placeholder="Country Name Here"></x-input-text>
                                                                </div>
                                                            </div>
                                                            {{-- Phone2 --}}
                                                            <div class="mb-2 row">
                                                                <label for="example-search-input"
                                                                    class="col-md-4 col-form-label">Phone2 </label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="phone_2"
                                                                        placeholder="Phone Two Here"></x-input-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <h5 class="mb-5">Is Card Allow &nbsp;
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="gridCheck">
                                                                </h5>
                                                            </div>
                                                            <label for="example-search-input"
                                                                class="col-md-2 col-form-label">
                                                                <h5>Advanced</h5>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <x-input-text name="advance"
                                                                    placeholder="Advanced Amount"></x-input-text>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <h5 class="mb-5">Is Active &nbsp;
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="gridCheck">
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-outline-success  waves-light">
                                                        Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <livewire:customer-reg-list />
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
