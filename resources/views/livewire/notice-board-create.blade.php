<div>
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="submit" id="NoticeBoardForm">
                    {{--  --}}
                    <div class="mb-3 row">
                        <label for="example-email-input" class="col-md-4 col-form-label text-center">Send
                            To:</label>
                        <div class="col-md-8 pe-5">
                            <x-input-select wireModel="send_to" :records="[1]" />
                        </div>
                    </div>
                    {{--  --}}
                    <div class="mb-3 row">
                        <label for="example-search-input" class="col-md-4 col-form-label text-center">Subject:</label>
                        <div class="col-md-8 pe-5">
                            <x-input-text wireModel="sub" placeholder="Notice Subject Here" />
                        </div>
                    </div>
                    {{--  --}}
                    <div class="mb-3 row">
                        <label for="example-search-input" class="col-md-4 col-form-label text-center">Message:</label>
                        <div class="col-md-8 pe-5">
                            <form method="post">
                                <x-input-textarea wireModel="area" />
                            </form>
                        </div>
                    </div>
                </form>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="row modal-footer">
                            <div class="col-md-1">
                                <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                            </div>
                            <div class="col-md-1">
                                <button wire:click="save()" class="btn btn-success w-100">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
