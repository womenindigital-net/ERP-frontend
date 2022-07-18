<div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table w-100 table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th>Name</th>
                        <th>Type</th>
                        <th>Mobile</th>
                        <th>DOB</th>
                        <th>City</th>
                        <th>Phone1</th>
                        <th>Email</th>
                        <th>Credit Allow</th>
                        <th>Limit</th>
                        <th>Due</th>
                        <th>Log</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>VF Asia</td>
                        <td>Organization</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>No</td>
                        <td>0</td>
                        <td>0</td>
                        <td>Create: Ohidul Hassan<br> @ 2021-06-20 11:20:46 <br>
                            There is no update record.</td>
                        <td>
                            <button type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-pencil"></i>
                            </button>
                            <button type="button"
                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-record-list>
</div>
