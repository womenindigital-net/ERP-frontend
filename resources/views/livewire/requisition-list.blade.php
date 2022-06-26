<div class="tab-pane" id="received_payment_details" role="tabpanel">
    <x-record-list :records="$records">
        <table class="table table-bordered w-100">
            <thead>
            <tr class="table-primary">
                <th>SL</th>
                <th>Title</th>
                <th>Date</th>
                <th>Total Items</th>
                <td>Created At</td>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $record)
                <tr>
                    <td></td>
                    <td>{{$record->title}}</td>
                    <td>{{$record->date}}</td>
                    <td>{{$record->details->count()}}</td>
                    <td>{{$record->created_at}}</td>
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
                        <a href="{{route('requisition.edit', $record->id)}}" type="button"
                           class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                           >
                            <i class="mdi mdi-pencil"></i>
                        </a>
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
    </x-record-list>
</div>