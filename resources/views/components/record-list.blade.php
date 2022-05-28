<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-6">
                            <h4 class="card-title">{{$title}}</h4>
                        </div>
                        @if($wireClick)
                            <div class="col-6 text-end">
                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"
                                        wire:click="{{$wireClick}}"
                                        wire:key>Add
                                </button>
                            </div>
                        @endif
                    </div>
                    @include('elements.per-page-item-and-search')
                    @if ($records->count())
                        <div class="table-responsive">
                            {{$slot}}

                            {{$records->links()}}
                        </div>
                    @else
                        <div class="card">
                            <div class="card-body text-center">Sorry! No Record Found.</div>
                        </div>
                    @endif
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    @if($wireClick)
        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-hidden="true" wire:ignore>
            <livewire:student-create/>
        </div>
    @endif
</div>
