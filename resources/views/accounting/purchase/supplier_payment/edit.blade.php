@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="supplier_payment" role="tabpanel">
                        <!-- form start -->
                        <form action="{{ route('supplier-payment.store') }}" method="post">
                            @csrf
                            @dd(34534);
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <x-input-select :selected="$record->payment->project_id" name="project_id" :records="$projects" targetColumn="title">
                                        </x-input-select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Supplier</label>
                                        <x-input-select {{-- :selected="$record->" --}} name="supplier_id" :records="$suppliers" additional="mobile">
                                        </x-input-select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Payment Date</label>
                                        <x-input-text value="{{ $record->date }}" name="date" type="date"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Purchase Order</label>
                                        <x-input-select :selected="$record->payment->purchase_id" name="purchase_id" :records="$purchaseOrder"
                                            additional="mobile">
                                        </x-input-select>
                                    </div>
                                </div>
                                {{-- @dd($purchaseOrder) --}}
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Invoice Number</label>
                                        <x-input-select :selected="$record->invoice_num" name="invoice_num" :records="$invoices">
                                        </x-input-select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Remarks</label>
                                        <x-input-text value="{{ $record->remark }}" name="remark" type="text"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Note</label>
                                        <x-input-text value="{{ $record->note }}"tarea name="note" rows="1"></x-input-text>
                                    </div>
                                </div>
                            </div>
                            @include('partials.cheque-pay')
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
                </div>

            </div>
        </div>
    </div>
</div>

@endsection