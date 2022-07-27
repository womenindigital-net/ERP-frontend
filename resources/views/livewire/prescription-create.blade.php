<div>
    <section>
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="basicpill-lastname-input">Prescription Name:</label>
                    <x-input-text name="pres_name" placeholder="Prescription Name">
                    </x-input-text>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="basicpill-lastname-input">Prescribe By:</label>
                    <x-input-text name="pres_by" placeholder="Prescribe By">
                    </x-input-text>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 p-0">
                <div class="card">
                    <div class="card-body p-0">
                        <h4 class="text-center pt-3">Posting Transaction Details</h4>
                        <form class="repeater" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="medicine_admin">Medicine Name</label>
                                </div>
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="medicine_dose">Medicine Dose</label>
                                </div>
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="medicine_route">Medicine Route</label>
                                </div>
                            </div>
                            <div data-repeater-list="group-a">
                                <div data-repeater-item class="row removeRow">
                                    <div  class="col-lg-4 p-0  ps-4 pe-2 pb-1 align-items-center">
                                        <x-input-text name="medicine_admin" type="text"  placeholder=""></x-input-text>
                                    </div>
                                    <div class=" col-lg-4 p-0 pe-2 ps-2 pb-1">
                                        <x-input-text name="medicine_dose" type="text"  placeholder=""></x-input-text>
                                    </div>
                                    <div class="col-lg-4 p-0 pe-4 ps-2 pe-2 pb-1 align-self-center d-flex">
                                      <x-input-text name="medicine_route" type="text"  placeholder=""></x-input-text>
                                        <button class="btn btn-danger ms-2 removeBtn">
                                          <i class="fas fa-trash-alt"></i>
                                      </button>
                                    </div>
                                </div> 
                            </div>
                            <div class="ms-2">
                            <button data-repeater-create type="button" class="btn btn-success mt-3 ms-1  mt-lg-0"><i class="fa fa-plus"></i> Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tab panes One Add  -->
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
        <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
    </div>
</div>
