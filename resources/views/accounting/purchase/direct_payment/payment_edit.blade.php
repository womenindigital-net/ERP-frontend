@extends('layouts.master')
@section('css')
{{-- <style>
    #from_account {
        display: none;
    }

    #to_account {
        display: none;
    }
</style> --}}
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <!-- form start -->
                    <form action="{{ route('direct-payment.update', $record->id) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Payment Type</label>
                                    <x-input-select :selected="$payment->payment_type_id" name="payment_type_id" :records="$paymentType" targetColumn="title">
                                    </x-input-select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Project</label>
                                    <x-input-select :selected="$payment->project_id" name="project_id" :records="$projects" targetColumn="title">
                                    </x-input-select>
                                </div>
                            </div>
                            <div class="col-md-6" id="from_account">
                                <div class="mb-3">
                                    <label class="form-label">From Account</label>
                                    <x-input-text name="from_account" placeholder="Enter From Account here">
                                    </x-input-text>
                                </div>
                            </div>
                            <div class="col-md-6" id="to_account">
                                <div class="mb-3">
                                    <label class="form-label">To Account</label>
                                    <x-input-text name="to_account" placeholder="Enter To Account here">
                                    </x-input-text>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Amount</label>
                                    <x-input-text name="amount" placeholder="Enter Amount here"></x-input-text>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Note</label>
                                    <x-input-textarea rows="1" name="note" placeholder="Enter Purpose here">
                                    </x-input-textarea>
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
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
{{-- <script>
    function paymentChange(payment){
        if(payment.value === 2)
        {
            document.getElementById("from_account").style.display = "block";
            document.getElementById("to_account").style.display = "block";
        }
        else{
            document.getElementById("from_account").style.display = "none";
            document.getElementById("to_account").style.display = "none";
        }
       }
</script> --}}
@section('script-bottom')
@endsection