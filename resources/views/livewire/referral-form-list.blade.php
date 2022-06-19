<div>
    <x-record-list :records="$records" wireClick="show()" title="STUDENT QAS" dataBsTarget=".modal">
        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead>
                    <tr>
                        <th>Collection Date
                            <span>
                                <i class="dripicons-arrow-thin-down"></i>
                                <i class="dripicons-arrow-thin-up"></i>
                            </span>
                        </th>
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
                            <small><span>Create: Nurjahan Dipa @ 2022-03-29 16:04:41</span><br />
                                <span>Update: Ohidul Hassan @ 2022-04-12 11:36:44</span></small>
                        </td>
                        <td>
                            <button type="button"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
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
                                <i class="mdi mdi-pencil" data-bs-toggle="modal"
                                    data-bs-target=".bs-example-modal-lg"></i>
                            </button>
                            <button type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="bx bx-dollar"></i>
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
                </tbody>
            </table>
        </div>
    </x-record-list>




    <!--  Large modal example -->
    <div class="modal fade modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <livewire:referral-form-create />
    </div><!-- /.modal -->
</div>