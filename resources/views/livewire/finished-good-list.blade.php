<div class="tab-pane" id="finished_good_list" role="tabpanel">
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead>
                    <tr class="table-primary">
                        <th class="">Warehouse</th>
                        <th class="">Added Date</th>
                        <th class="">Added By</th>
                        <th class="">Total Qty</th>
                        <th class="">Log</th>
                        <th class="">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)

                    <tr>
                        <td>{{ $record->warehouse_id }}</td>
                        <td>{{ $record->date }}</td>
                        <td>{{ $record->created_by }}</td>
                        <td>{{ $record->total_qty }}</td>
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
                            <a href="{{route('finished-goods.edit', $record->id)}}" type="button"
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