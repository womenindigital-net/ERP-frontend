<div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-6">
                            <h4 class="card-title">STUDENT QAS</h4>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-outline-info waves-effect waves-light"
                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">ADD</button>
                        </div>
                    </div>
                    <livewire:referral-form-list />
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->



    <!--  Large modal example -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <livewire:referral-form-create />
    </div><!-- /.modal -->
</div>