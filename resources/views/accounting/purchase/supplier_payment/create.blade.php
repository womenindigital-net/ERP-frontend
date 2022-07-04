@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#supplier_payment" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Supplier Payment</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#supplier_payment_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Supplier Payment List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="supplier_payment" role="tabpanel">
                        <!-- form start -->
                        <form action="{{ route('supplier-payment.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <x-input-select name="project_id" :records="$projects" targetColumn="title">
                                        </x-input-select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Supplier</label>
                                        <x-input-select name="supplier_id" :records="$suppliers" additional="mobile">
                                        </x-input-select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Payment Date</label>
                                        <x-input-text name="date" type="date"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Invoice (Purchase Order)</label>
                                        <x-input-select name="purchase_id" :records="$purchaseOrder" targetColumn="invoice_no">
                                        </x-input-select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Remarks</label>
                                        <x-input-text name="remark" type="text"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Account</label>
                                        <x-input-text name="remark" type="text"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Note</label>
                                        <x-input-textarea name="note" rows="1"></x-input-textarea>
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
                                    <button type="submit" class="btn btn-success w-100">Save</button>
                                </div>
                            </div>
                        </form>
                        <!-- form End -->
                    </div>
                    <livewire:supplier-payment-list />
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
