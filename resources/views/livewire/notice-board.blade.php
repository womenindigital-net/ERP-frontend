<div>
    <div class="col-xl-12 col-lg-12 col-sm-6 d-flex justify-content-end mb-3">
        <!-- Extra Large modal button -->
        <div class="pb-3 card-body text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light " data-bs-toggle="modal"
                data-bs-target=".bs-example-modal-xl"> <i class="fas fa-plus-circle"></i> Add</button>
        </div>
        {{-- Add Content Modul --}}
        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <livewire:notice-board-create />
        </div>
        {{-- Add Content Modul Closd --}}
    </div>
    {{-- Data Table Start --}}
    <div class="row">
        <livewire:notice-board-list />
    </div> <!-- end col -->
</div> <!-- end row -->


</div>
