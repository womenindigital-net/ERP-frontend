<div>
    <div class="modal-body p-0">
        <div class="card p-0 m-0">
            <div class="card-body">
                <div class="row pb-3">
                    <div class="col-6">
                        <label class="col-form-label">Course / Service Name</label>
                        <x-input-text type="number" name="course" placeholder="">
                        </x-input-text>
                    </div>
                    <div class="col-6">
                        <label class="col-form-label">Duration</label>
                        <x-input-text type="number" name="duration" placeholder="">
                        </x-input-text>
                    </div>
                    <div class="col-6">
                        <label class="col-form-label">Cash Acc:</label>
                        <select class="form-select">
                            <option>--Select--</option>
                            <option> 6205 :: 1st January New Year event </option>
                            <option> 8560 :: Accounting /Tally/ Audit/Legal expenses /option>
                            <option> 1200 :: Accounts Receivable </option>
                            <option> 7550002 :: Accounts Staff Salary </option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="col-form-label">Description:</label>
                        <x-input-textarea type="number" name="description" placeholder="">
                        </x-input-textarea>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4"><label for="heading" class="">Fee
                                            Heading</label></div>
                                    <div class="col-md-4"><label  for="account_id" class="">Acc
                                            No</label></div>
                                    <div class="col-md-4"><label for="amount"
                                            class="">Amount</label></div>
                                </div>
                                <form class="repeater" enctype="multipart/form-data">
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item class="row mb-1 removeRow">
                                            <div class=" col-lg-4">
                                                <x-input-text name="heading">
                                                </x-input-text>
                                            </div>
                                            <div class=" col-lg-4 px-1">
                                                <x-input-select name="account_id" :records="[]" />

                                            </div>
                                            <div class=" col-lg-4 d-flex">
                                                <x-input-text type="number" name="amount">
                                                </x-input-text>
                                                <button
                                                    class="btn btn-outline-danger btn-rounded me-3 ms-2 removeBtn">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <input data-repeater-create type="button"
                                        class="btn btn-outline-success m-1 mt-lg-0" value="Add" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-end pe-2">
        <button type="button" class="btn btn-outline-danger waves-effect waves-light">Reset</button>
        <button type="button" class="btn btn-outline-success waves-effect waves-light">Save</button>
    </div>
</div>
