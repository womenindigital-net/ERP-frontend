<div class="row">
    <div class="form-check form-check-primary mb-3">
        {{-- <input class="form-check-input" wireModel="card" type="checkbox" id="formCheckBox2"> --}}
        <label class="form-check-label ms-2" for="formCheckcolor1"> Credit Card Pay</label>
    </div>
    <div class="row" id="formCheckBoxForm2">
        <div class="row">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <x-input-text wireModel="card_amount" placeholder="Enter  Amount">
                        </x-input-text>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label"> Card No</label>
                        <x-input-text wireModel="card_no" placeholder="Enter  Credit Card Number">
                        </x-input-text>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Card Name</label>
                        <x-input-text wireModel="card_name" placeholder="Enter  Card Name">
                        </x-input-text>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Card Type</label>
                        <x-input-text wireModel="card_type" placeholder="Enter  Card Type here">
                        </x-input-text>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('bottomJsStack')
{{-- <script>
    $(function () {
            $ ( "#formCheckBoxForm2" ).hide ();
            $ ( "#formCheckBox2" ).click ( function () {
                $ ( "#formCheckBoxForm2" ).toggle ();
            } );
        });
</script> --}}
@endpush