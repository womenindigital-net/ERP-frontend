<div> 
    <x-record-list :records="$records">
    <div class="table-responsive">
        <table class="table w-100 table-bordered">
            <thead>
                <tr class="table-primary">
                    <th>Name</th>
                    <th>Parent</th>
                    <th>Log</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Wages Employment </td>
                    <td>32 </td>
                    <td>Create: Ohidul Hassan @
                        Update: Ohidul Hassan @ </td>
                    <td>
                        <button type="button"
                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                            data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                            <i class="mdi mdi-eye"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-check"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"><i
                                class="fas fa-check"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                            data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                            <i class="mdi mdi-pencil"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="bx bx-dollar"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-arrow-circle-right"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
     </x-record-list>
</div>
