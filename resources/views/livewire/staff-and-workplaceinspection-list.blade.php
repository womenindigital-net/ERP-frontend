<div>
    <div class="table-responsive">
        <table class="table w-100 table-bordered">
            <thead>
                <tr class="table-primary">
                    <th>Collection Date</th>
                    <th>Student Name</th>
                    <th>Collected By</th>
                    <th>Log</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2022-03-29</td>
                    <td>Ashfaq Sadi</td>
                    <td>Nurjahan Dipa</td>
                    <td>
                        <small>
                            <span>Create: Nurjahan Dipa @ 2022-03-29 16:04:41</span><br />
                            <span>Update: Ohidul Hassan @ 2022-04-12 11:36:44</span>
                        </small>
                    </td>
                    <td>
                        <a href="{{ route('staff-and-workplaceinspection.show','1') }}" target="_blank" rel="noopener noreferrer"  class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-eye"></i>
                        </a>
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
</div>
