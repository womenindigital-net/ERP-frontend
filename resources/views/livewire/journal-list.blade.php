<div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-sm-12 col-md-4 text-enter">
                <div class="mb-3 text-enter">
                    <label class="form-label">Journals List</label>
                    <select class=" form-select">
                        <option>--Select--</option>
                        <option value="1">Approved Journals</option>
                        <option value="2" selected>All Journals</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead>
                <tr class="table-primary">
                    <th>Project</th>
                    <th>Voucher Date</th>
                    <th>Particulars</th>
                    <th>Trans Amount</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($records as $record)
                    <tr>
                    <td>{{$record->project->title}}</td>
                    <td>{{$record->voucher_date}}</td>
                    <td>{{$record->particulars}}</td>
                    <td>{{$record->transaction_amount}}</td>
                    <td>{{$record->created_at}}</td>
                    <td>
                        <a href="{{route('journal.show', $record->id)}}"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-eye"></i>
                        </a>
                        <a href="{{route('journal.toggleApprove', $record->id)}}"
                                class="btn btn-sm btn-{{$record->is_approved ? 'danger' : 'info'}} btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-check"></i>
                        </a>
                        <a href="{{route('journal.edit', $record->id)}}"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-pencil"></i>
                        </a>
                        <a href="{{route('journal.destroy', $record->id)}}"
                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </x-record-list>
</div>
