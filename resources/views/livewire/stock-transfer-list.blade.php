<div class="tab-pane" id="stock_transfer_list" role="tabpanel">
    <x-record-list :records="$records">
        <div class="text-center">
            <button class="btn btn-danger">Send For Approval</button>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead>
                    <tr class="table-primary">
                        <th>Project</th>
                        <th>Type</th>
                        <th>Reference</th>
                        <th>Date</th>
                        <th>Total Item Quantity</th>
                        <th>Location From</th>
                        <th>Location To</th>
                        <th>Is Approved</th>
                        <th>Log</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $records as $record)
                    <tr>
                        <td>{{ $record->project_id }}</td>
                        <td>{{ $record->issue_type }}</td>
                        <td>{{ $record->reference }}</td>
                        <td>{{ $record->date }}</td>
                        <td></td>
                        <td>{{ $record->warehouse_id_from }}</td>
                        <td>{{ $record->warehouse_id_to }}</td>
                        <td></td>
                        <td><small>{{ $record->created_at }}</small></td>
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
                            <a href="{{route('stock-transfer.edit', $record->id)}}" type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-pencil"></i>
                            </a>
                            <a href="#" type="button"
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