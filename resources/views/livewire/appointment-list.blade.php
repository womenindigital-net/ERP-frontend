@if ($records->count())
    <div>
        @include('elements.per-page-item-and-search')
        <div class="table-responsive">
            <table class="table w-100">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name & ID
                        <span><i class="dripicons-arrow-thin-down"></i><i class="dripicons-arrow-thin-up"></i></span>
                    </th>
                    <th>DOA</th>
                    <th>DOB</th>
                    <th>B.G</th>
                    <th>Suborno Card No</th>
                    <th>Student Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($records as $record)
                    <tr>
                        <td>{{ $records->firstItem() + $loop->index }}</td>
                        <td>{{$record->name}}</td>
                        <td>{{$record->date_of_assessment}}</td>
                        <td>{{$record->dob}}</td>
                        <td>{{$record->blood_group}}</td>
                        <td>{{$record->suborno_card_no}}</td>
                        <td>{{$record->deleted_at ? 'InActive' : 'Active'}}</td>
                        <td>
                            <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl" wire:click="show({{$record}}, 'view', {{$record->id}})">
                                <i class="mdi mdi-eye"></i>
                            </button>
                            <button type="button"
                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"><i
                                    class="fas fa-check"></i>
                            </button>
                            <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"><i
                                    class="fas fa-check"></i>
                            </button>
                            <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl" wire:click="show({{$record}}, 'edit', {{$record->id}})">
                                <i class="mdi mdi-pencil"></i>
                            </button>
                            <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="bx bx-dollar"></i>
                            </button>
                            <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-arrow-circle-right"></i>
                            </button>
                            <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$records->links()}}
        </div>
    </div>
@else
<div class="class">
    <h1>Sorry! No Record Found</h1>
</div>
@endif
