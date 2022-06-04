<div>
    <x-record-list :records="$records" title="STUDENT QAS">
        <table class="table table-bordered w-100">
            <thead>
                <tr class="table-primary">
                    <th>Project Name</th>
                    <th>Voucher Date</th>
                    <th>Particulars</th>
                    <th>Trans Amount</th>
                    <th>Log</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record )
                <tr>
                    <td>{{ $record->project_id }}</td>
                    <td>{{ $record->date }}</td>
                    <td>{{ $record->note }}</td>
                    <td>{{ $record->amount }}</td>
                    <td><small>{{ $record->created_by }} @ {{ $record->created_at }}</small></td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-check"></i></button>
                        <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                            data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view"
                            wire:click="show({{ $record }}), 'view', {{ $record->id }}">
                            <i class=" fas fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                            data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add">
                            <i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-record-list>
</div>