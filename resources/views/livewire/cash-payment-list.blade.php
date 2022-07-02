<div class="tab-content p-3 text-muted">
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead>
                    <tr class="table-primary">
                        <th>Purpose</th>
                        <th>Amount</th>
                        <th>Trans Date</th>
                        <th>Is Sent For Approval</th>
                        <th>Is Approved</th>
                        <th>Approved By</th>
                        <th>Approved Date</th>
                        <th>Is Transfer Done</th>
                        <th>Transfer Date</th>
                        <th>Log</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                    <tr>
                        <td>{{ $record->note }}</td>
                        <td>{{ $record->amount }}</td>
                        <td>{{-- $record-> --}}</td>
                        <td>{{-- $record-> --}}</td>
                        <td>{{-- $record-> --}}</td>
                        <td>{{-- $record-> --}}</td>
                        <td>{{-- $record-> --}}</td>
                        <td>{{-- $record-> --}}</td>
                        <td>{{-- $record-> --}}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>
                            {{-- <a href="{{route('supplier-payment.show', $record->id)}}" type="button"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2">
                                <i class=" fas fa-eye"></i>
                            </a> --}}
                            <button type="button"
                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"
                                data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                <i class="fas fa-check"></i>
                            </button>
                            <button type="button"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                <i class="fas fa-check"></i>
                            </button>
                            <a href="{{route('direct-payment.edit', $record->id)}}"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-pencil"></i>
                            </a>
                            <button type="button"
                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"
                                wire:click="confirmDelete({{$record->id}})">
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