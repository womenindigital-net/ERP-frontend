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
                            <td></td>
                            <td></td>
                            <td>{{ $record->created_at }}</td>
                            <td>
                                <a href="{{ route('ot-assessment.show', $record->id) }}" target="_blank"
                                    rel="noopener noreferrer"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                <button type="button" wire:click="toggleApprove({{ $record->id }})"
                                    class="btn btn-sm btn-{{ $record->is_approved ? 'danger' : 'info' }} btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="fas fa-check"></i>
                                </button>
                                <a href="{{ route('ot-assessment.edit', $record->id) }}" target="_blank"
                                    rel="noopener noreferrer"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
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
