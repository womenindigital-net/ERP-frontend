@extends('layouts.master')

@section('title')
@lang('translation.Starter_Page')
@endsection

@section('css')
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <form>
                            <div class="card p-0 m-0">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3 row ms-2">
                                                <label class="col-md-4 col-form-label">Sudent:</label>
                                                <div class="col-md-8">
                                                    <x-input-select :selected="$record->student_id" name="student_id"
                                                        :records="$students" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row ms-2">
                                                <label class="col-md-4 col-form-label">Prescription:</label>
                                                <div class="col-md-8">
                                                    <x-input-select :selected="$record->prescription_id"
                                                        name="prescription_id" :records="['1' => 'one']" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row ms-2">
                                                <label class="col-md-4 col-form-label">Given By:</label>
                                                <div class="col-md-8">
                                                    <x-input-select :selected="$record->given_id" name="given_id"
                                                        :records="$doctors" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 row me-2">
                                                <label for="" class="col-md-4 col-form-label">Given
                                                    Date:</label>
                                                <div class="col-md-8" id="datepicker2">
                                                    <x-input-text name="date" placeholder="dd/mm/yyyy" type="date"
                                                        value="{{ $record->date }}">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row me-2">
                                                <label for="" class="col-md-4 col-form-label">Given
                                                    Time:</label>
                                                <div class="col-md-8" id="datepicker2">
                                                    <x-input-text name="time" placeholder="Time"
                                                        value="{{ $record->time }}">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <h3>Posting Transaction Details</h3>
                                </div>
                                <form class="repeater" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col p-0 pe-1 text-center">
                                            <label for="name">Medicine Name</label>
                                        </div>
                                        <div class="col p-0 pe-1 text-center">
                                            <label for="product">AmountGiven</label>
                                        </div>
                                        <div class="col p-0 pe-1 text-center">
                                            <label for="product">AmountGivenUnit</label>
                                        </div>
                                        <div class="col-1 p-0 ps-5 text-center">
                                            <label for="quality">Expire Check</label>
                                        </div>
                                        <div class="col p-0 pe-5 text-center">
                                            <label for="quality">Note</label>
                                        </div>
                                    </div>
                                    @foreach ($record->details as $detail)
                                    <div data-repeater-list="medicineAdmin">
                                        <div data-repeater-item="" class="row ms-1">
                                            <div class=" col p-0 pe-1 pb-1">
                                                <x-input-text value="{{ $detail->medicine_name }}" name="medicine_name"
                                                    placeholder="Medicine Name">
                                                </x-input-text>
                                            </div>
                                            <div class=" col p-0 pe-1 pb-1">
                                                <x-input-text value="{{ $detail->amount_given }}" name="amount_given"
                                                    placeholder=" Amount Given">
                                                </x-input-text>
                                            </div>
                                            <div class=" col p-0 pe-1 pb-1">
                                                <x-input-text value="{{ $detail->amount_given_unit }}"
                                                    name="amount_given_unit" placeholder="Amount Given Unit">
                                                </x-input-text>
                                            </div>
                                            <div class=" col-1 p-0  pb-1 text-center">
                                                <input type="checkbox" name="expire_check" @if (!empty($detail->expire_check)) checked
                                                    @endif class="form-check-input">
                                            </div>

                                            <div class=" col p-0  pb-1 me-4 d-flex">
                                                <x-input-text value="{{ $detail->note }}" name="note"
                                                    placeholder="Note">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </form>
                                <div class="container">
                                    <div class="row">
                                        <div class="row modal-footer">
                                            <div class="col-md-2">
                                                <a href="{{ route('medicine-admin.create') }}"
                                                    class="btn btn-success w-100">Go back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- form wizard init -->

@endsection