<div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table w-100">
                <thead>
                    <tr>
                        <th>Collection Date</th>
                        <th>Student Name</th>
                        <th>Collected By</th>
                        <th>Log</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->date }}</td>
                        <td>{{ $record->student->name }}</td>
                        <td>{{ $record->user->name ?? 'no name' }}</td>
                        <td>
                            <small>
                                <span>Create: {{ $record->user->name ?? 'no name' }} @ {{ $record->created_at
                                    }}</span><br>
                                <span>Update: {{ $record->user->name ?? 'no name' }} @ {{ $record->updated_at }}</span>
                            </small>
                        </td>
                        <td>
                            <button type="button"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                                <i class="mdi mdi-eye"></i>
                            </button>
                            <button type="button" wire:click="toggleApprove({{$record->id}})"
                                class="btn btn-sm btn-{{$record->is_approved ? 'danger' : 'info'}} btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-check"></i>
                            </button>
                            <button type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
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
        </div>
    </x-record-list>
</div>