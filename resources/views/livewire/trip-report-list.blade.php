<div>
    <br>
    @include('elements.per-page-item-and-search')
    <br>
    <div class="table-responsive">
        <table class="table table-bordered w-100">
            <thead>
                <tr class="table-primary">
                    <th>Created At
                        {{--<span>
                            <i class="dripicons-arrow-thin-down"></i>
                            <i class="dripicons-arrow-thin-up"></i>
                        </span>--}}
                    </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($records as $record)
                <tr>
                    <td>{{$record->created_at}}</td>
                    <td>
                        <button type="button"
                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                            <i class="mdi mdi-eye"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-check"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-check"></i>
                        </button>
                        <a href="{{route('trip.edit', $record->id)}}" type="button"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-pencil" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"></i>
                        </a>
                        <button type="button"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="bx bx-dollar"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-arrow-circle-right"></i>
                        </button>
                        <button wire:click="confirmDelete({{ $record->id }})" type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
