<div class="tab-pane" id="purchase_order_list" role="tabpanel">
    <x-record-list :records="$records">
        <table class="table table-bordered w-100">
            <thead>
            <tr class="table-primary">
                <th>Project</th>
                <th>Items</th>
                <th>Date</th>
                <th class="nowrap">action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $record)
            <tr>
                <td>{{$record->requisition->project->title}}</td>
                <td>{{$record->details->count()}}</td>
                <td>{{$record->date}}</td>
                <td>
                    <button type="button"
                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
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
    <!-- end row -->
</div>
