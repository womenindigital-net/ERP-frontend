<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end pb-5">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                            data-bs-target=".bs-example-modal-xl" wire:click="show()">Add</button>
                    </div>
                    <livewire:appointment-list />
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-hidden="true">
        <livewire:student-create />
    </div>
</div>