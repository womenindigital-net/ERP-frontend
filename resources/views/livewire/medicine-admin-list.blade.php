<div>
    <x-record-list :records="$records">
        <div class="table-rasponseve">
            <table class="table table-bordered w-100">
                <thead>
                    <tr class="table-primary">
                        <th>Student Name</th>
                        <th>Prescription Name</th>
                        <th>GivenBy</th>
                        <th>GivenDate</th>
                        <th>GivenTime</th>
                        <th>Log</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->student->name ?? 'Student Name' }}</td>
                        <td>{{ $record->prescription_id}}</td>
                        <td>{{ $record->given_id }}</td>
                        <td>{{ $record->date }}</td>
                        <td>{{ $record->time }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>
                            <a href="{{ route('medicine-admin.show', $record->id) }}" target="_blank"
                                rel="noopener noreferrer"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-eye"></i>
                            </a>

                            <button type="button" wire:click="toggleApprove({{ $record->id }})"
                                class="btn btn-sm btn-{{ $record->is_approved ? 'danger' : 'info' }} btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-check"></i>
                            </button>
                            <a href="{{ route('medicine-admin.edit', $record->id) }}" target="_blank"
                                rel="noopener noreferrer"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-pencil"></i>
                            </a>
                            <button type="button" wire:click="confirmDelete({{$record->id}})"
                                class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light">
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