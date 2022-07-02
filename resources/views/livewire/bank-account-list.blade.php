<div class="table-responsive">
    <x-record-list :records="$records">
        <table class="table w-100 table-bordered">
            <thead>
                <tr class="table-primary">
                    <th>Account No</th>
                    <th>Account Name</th>
                    <th>Initial Balance</th>
                    <th>Note</th>
                    <th>Log</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="col-1">12345678</td>
                    <td class="col-1">test account</td>
                    <td class="col-1">0.00</td>
                    <td class="col-1">testing purpose</td>
                    <td class="col-4">Create: Shamima Shikder @ 2020-12-22 15:03:12
                        Update: Ohidul Hassan @ 2022-05-12 13:11:49</td>
                    <td>
                        <button type="button" wire:click="confirmDelete({{$record->id}})"
                            class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </x-record-list>
</div>