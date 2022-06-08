<div>
    <div class="row">
        <label class="col-2 col-form-label">Journals List</label>
        <div class="col-10">
            <select class="form-select">
                <option>--Select--</option>
                <option value="1">Approved Journals</option>
                <option value="2" selected>All Journals</option>
            </select>
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
                            <button type="button"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                data-bs-toggle="modal" data-bs-target=".modal-view"> <i
                                    class="mdi mdi-eye"></i></button>
                            {{-- <a href="{{route('journal.show', $record->id)}}"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-eye"></i>
                            </a> --}}
                            <button type="button" wire:click="toggleApprove({{$record->id}})"
                                class="btn btn-sm btn-{{$record->is_approved ? 'danger' : 'info'}} btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-check"></i>
                            </button>
                            <button type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-pencil"></i>
                            </button>
                            <button type="button" class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light"
                                id="sa-warning">
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