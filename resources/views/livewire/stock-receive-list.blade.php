<div class="tab-pane" id="stock_recive_list" role="tabpanel">
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead>
                    <tr class="table-primary">
                        <th class="">Project</th>
                        <th class="">Type</th>
                        <th class="">Date</th>
                        <th class="">Note</th>
                        <th>Log</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $records as $record)
                    <tr>
                        <td>{{ $record->project_id }}</td>
                        <td>{{ $record->type }}</td>
                        <td>{{ $record->date }}</td>
                        <td>{{ $record->note }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>
                            <button type="button"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                data-bs-toggle="modal" data-bs-target=".journal-modal-xl-add">
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
                            <a href="{{route('stock-receive.edit', $record->id)}}" type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-pencil"></i>
                            </a>
                            <a href="{{route('purchase-order.create', $record->id)}}" type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
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