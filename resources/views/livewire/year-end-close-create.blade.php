<div>
    <p class="mb-0">
        <div class="col-xl-10">
            <div class="card">
                <div class="card-body p-0">
                      <div class="row pt-3">
                          <div class="col-8">
                              <div class="mb-3 row">
                                  <label class="col-md-4 col-form-label ">Warehouse</label>
                                  <div class="col-md-6">
                                      <x-input-select name="warehouse_id"
                                       :records="[]" />
                                  </div>
                              </div>
                          </div>
                          <div class="col-4">
                              <div class="mb-3 row">
                                  <label class="col-md-3 col-form-label">Date</label>
                                  <div class="col-md-9">
                                      <x-input-text type="date" name="date"/>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-12">
                          <h4 class="card-title">All Products</h4>
                          <form class="repeater" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-2 p-0 ps-4">
                                      <label for="product">SL</label>
                                  </div>
                                  <div class="col-2 p-0">
                                      <label for="product">Salary Head</label>
                                  </div>
                                  <div class="col-3 p-0 text-center">
                                      <label for="total">Pay Amount</label>
                                  </div>
                                  <div class="col-2 p-0  text-center">
                                      <label for="product">Percent Field</label>
                                  </div>
                                  <div class="col-3 p-0 text-center">
                                      <label for="total">Basic/Provident</label>
                                  </div>
                              </div>
                              <div data-repeater-list="group-a">
                                  <div data-repeater-item class="row removeRow">
                                      <div  class="col-1 d-flex  ps-4 pb-1">
                                          <label>01</label>
                                      </div>
                                      <div class=" col-3  pb-1">
                                          <x-input-select name="student_id"
                                          :records="[]" />
                                      </div>
                                      <div class=" col-3  pb-1">
                                          <x-input-select name="student_id"
                                          :records="[]" />
                                      </div>
                                      <div class=" col-2  pb-1">
                                          <x-input-text type="text" name="percent_field"/>
                                      </div>
                                      <div class="col-3  pb-1 align-self-center d-flex">
                                          <x-input-text type="number" name="basic_provident"/>
                                          <button class="btn btn-outline-danger waves-effect waves-light removeBtn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                      </div>
                                  </div>
                              </div>
                             <div class="">
                              <button data-repeater-create type="button" class="btn btn-outline-info waves-effect waves-light mt-3 me-5 mt-lg-0"><i class="fa fa-plus"></i> Add</button>
                             </div>
                          </form>
                          <div class="row justify-content-center">
                              <div class="col-lg-6">
                                  <div class="row mb-2">
                                      <label for="horizontal-firstname-input" class="col-3 text-end col-form-label">Note</label>
                                      <div class="col-9">
                                      <x-input-text type="text" name="note" placeholder="Enter Note Here"/>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-outline-success  waves-light">
                                  Save</button>
                          </div>
                      </div>
                  
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </p>
</div>
