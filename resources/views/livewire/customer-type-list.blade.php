<div>
    <x-record-list :records="$records">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="" class="table table-bordered dt-responsive w-100">
                            <thead>
                                <tr>
                                    <th>Customer Type Name</th>
                                    <th>Description</th>
                                    <th>Log</th>
                                    <th>Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Organization</td>
                                    <td>Organization</td>
                                    <td>Create: Arif Dev @ 2018-12-09 22:45:45 There is no update record.</td>
                                    <td><button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                        <i class="mdi mdi-pencil"></i>
                                       </button>
                                       <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                        <i class="fas fa-trash-alt"></i>
                                        </button> 
                                    </td>
                                </tr>

                                <tr>
                                    <td>Individual (In House)</td>
                                    <td>Individual (In House)</td>
                                    <td>Create: Md. Rizwanur Rahman @ 2019-01-12 23:04:38 There is no update record</td>
                                    <td><button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                        <i class="mdi mdi-pencil"></i>
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
            </div> <!-- end col -->
        </div> 
    </x-record-list>
</div>
