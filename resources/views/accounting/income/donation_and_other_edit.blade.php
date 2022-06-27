@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#receive_payment" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Donation And Other Payment</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#received_payment_details" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Donation And Other Details</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="receive_payment" role="tabpanel">
                            <form action="{{ route('donation-and-other.update', $record->id) }}" method="post">
                                @method('put')
                                @csrf
                                <!-- form start -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Project</label>
                                            <x-input-select name="project_id" :records="$projects" :selected="$record->income->project->id"
                                                targetColumn="title"></x-input-select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Customer</label>
                                            <x-input-select name="customer_id" :records="$customers" :selected="$record->customer->id"
                                                additional="mobile"></x-input-select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Payment Date</label>
                                            <x-input-text type="date" name="date" placeholder="dd M, yyyy"
                                                value="{{ $record->income->date }}">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="validationCustom02" class="form-label">Note</label>
                                            <x-input-textarea name="note" rows="1" placeholder=""
                                                value="{{ $record->income->note }}">
                                            </x-input-textarea>
                                        </div>
                                    </div>
                                </div>
                                @php($history = $record->income->history->info)
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="validationCustom02" class="form-label">Cash Pay</label>
                                            <x-input-text name="cash" placeholder="" value="{{ $history->cash }}">
                                            </x-input-text>
                                        </div>
                                    </div>
                                </div>
                                <!-- 8th row start  -->
                                @include('partials.cheque-pay-edit')
                                <!-- 8th row end  -->
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
                                <!-- end row -->
                            </form>
                        </div>
                        <div class="tab-pane" id="received_payment_details" role="tabpanel">
                            <livewire:donation-and-other-list />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
