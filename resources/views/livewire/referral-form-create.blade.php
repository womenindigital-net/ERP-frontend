<div>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Referral From</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="vertical-example" class="vertical-wizard">
                    <!-- Seller Details -->
                    <section>
                        <form>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-firstname-input">Collection Date:</label>
                                        <x-input-text wireModel="collection_date" type="date" placeholder="mm/dd/yyyy">
                                        </x-input-text><!-- input-group -->
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-lastname-input">Teacher:</label>
                                        <x-input-select name="teacher_id" :records="$teachers"></x-input-select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-phoneno-input">Candidate ID:</label>
                                        <select class="form-control select2-search-disable">
                                            <option>--Select--</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-phoneno-input">Referral To Dr.</label>
                                        <x-input-select name="doctor_id" :records="$doctors"></x-input-select>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <label for="basicpill-phoneno-input">Experties</label>
                                    <input type="text" readonly class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="basicpill-phoneno-input">Organization</label>
                                    <input type="text" readonly class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="basicpill-phoneno-input">Contact</label>
                                    <input type="text" readonly class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="basicpill-phoneno-input">Address</label>
                                    <textarea name="" class="form-control" id="" readonly rows="1"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="verticalnav-phoneno-input">Description:</label>
                                        <p>Referral form : diet, psychology, doctor, counseling,</p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="verticalnav-phoneno-input">Instruction:</label>
                                        <p>This form should be used for all contacts with Doctor in times of illness or
                                            emergency. The
                                            completed form should be kept with the client's records and made available
                                            only to those who need
                                            the Information :</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-primary waves-effect waves-light">Referral</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>