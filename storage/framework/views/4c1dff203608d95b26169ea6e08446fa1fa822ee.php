

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Starter_Page'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('/assets/libs/datepicker/datepicker.min.css')); ?>">

    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive Table css -->
    <link href="<?php echo e(URL::asset('/assets/libs/rwd-table/rwd-table.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Sweet Alert-->
    <link href="<?php echo e(URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Utility <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Starter Page <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between pb-3">
                        <div>
                            <h4 class="card-title">All Approved Journals list</h4>
                        </div>
                        <div class="">
                            <a href="journal" class="btn btn-primary">All Journals</a>
                        </div>
                    </div>

                    <table id="datatable-buttons"
                        class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Proj. id</th>
                                <th>Particulars</th>
                                <th>Trans. Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td class="text-center">
                                    <button type="button"
                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".journal-modal-xl-view">
                                        <i class=" fas fa-eye"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".journal-modal-xl-add">
                                        <i class="fas fa-pen"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light" id="sa-warning"> <i
                                            class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!--  Edit Journal -->
    <div class="modal fade journal-modal-xl-add" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Add OR Edit Journal <i class="fas fa-plus-circle bx-spin"></i>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- journal form start -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Project</label>
                                    <select class="form-control select2">
                                        <option>--Select--</option>
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Trans.Amount</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                        placeholder="Trans.Amount" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label>Vaucher date</label>
                                    <div class="input-group" id="datepicker1">
                                        <input type="text" class="form-control" placeholder="dd M, yyyy"
                                            data-date-format="dd M, yyyy" data-date-container='#datepicker1'
                                            data-provide="datepicker">

                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Particulars</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                        placeholder="Particulars" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="validationCustom04" class="form-label">Reference</label>
                                    <input type="text" class="form-control" id="validationCustom04"
                                        placeholder="Reference" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <h2 class=" text-center mb-4">Posting Transaction Details</h2>
                                        </div>
                                        <form class="repeater" enctype="multipart/form-data">
                                            <div class="row">
                                               <div class="col-lg-3  p-0 pe-1">
                                                   <label class="pe-2 pb-1">SL</label>
                                                   <label for="name">Acc. Number</label>
                                                </div>
                                               <div class="col-lg-4  p-0 pe-1">
                                                    <label for="email">Acc. Particular</label>
                                               </div>
                                               <div class="col-lg-2 p-0 pe-1">
                                                <label for="subject">Debit</label>
                                               </div>
                                               <div class="col-lg-3  p-0 pe-1">
                                                    <label for="resume">Credit</label>
                                               </div>
                                            </div>
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row">
                                                    <div class=" col-lg-3 d-flex p-0 p-0 pe-1 pb-1 align-items-center">
                                                        <span class="pe-2 pb-1">01</span>
                                                        <input type="text" id="name" name="untyped-input"
                                                            class="form-control" placeholder="Acc. Number" />
                                                    </div>

                                                    <div class=" col-lg-4 p-0 pe-1 pb-1">
                                                        <input type="email" id="email" class="form-control"
                                                            placeholder="Acc. Particular" />
                                                    </div>

                                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                        <input type="text" id="subject" class="form-control"
                                                            placeholder="Debit" />
                                                    </div>

                                                    <div class=" col-lg-3 p-0 pe-1 pb-1 align-self-center d-flex">
                                                        <input type="text" id="subject" class="form-control"
                                                            placeholder="Credit" />
                                                        <button class="btn btn-danger btn-rounded ms-2">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                            <input data-repeater-create type="button"
                                                class="btn btn-success mt-3 px-4 mt-lg-0" value="Add" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- journal form end -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal"><i class="bx bx-exit"></i> Close</button>
                    <button type="button" class="btn font-size-16 btn-success" id="sa-position"><i class="bx bx-save"></i> Save</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    <!--  Extra Large modal example -->
    <div class="modal fade journal-modal-xl-view" id="" tabindex="-2" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">View Journal <i class="fas fa-eye bx-tada"></i>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- journal form start -->
                    <!-- journal form start -->
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Project</label>
                                    <p  class="form-control">Project</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Voucher
                                        Date</label>
                                        <p class="form-control">2021-09-30 00 00.00</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label>Trans Amount</label>
                                    <p class="form-control" >5000 </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Particulars</label>
                                        <p class="form-control">payment for student</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom04" class="form-label">Reference</label>
                                        <p class="form-control">Reference</p>
                                    </div>
                                </div>


                            </div>
                    </form>
                    <!-- journal form end -->
                    <!-- table start -->
                    <div class="row">
                        <h2 class=" text-center mb-4">Posting Transaction Details</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Acc. Number</th>
                                                    <th style="width: 20%;">Acc.Particular</th>
                                                    <th>Debit</th>
                                                    <th>Credit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-id="1">
                                                    <td data-field="id" style="width: 80px">1</td>
                                                    <td data-field="name">4255-Assessment fees</td>
                                                    <td data-field="age">Ismam Reza</td>
                                                    <td data-field="credit"></td>
                                                    <td data-field="debit">5000</td>
                                                </tr>
                                                <tr data-id="2" style="border-bottom-style: none;">
                                                    <td data-field="id" style="width: 80px">2</td>
                                                    <td data-field="name">1010-Cash Operating Account</td>
                                                    <td data-field="age">Ismam Reza</td>
                                                    <td data-field="credit">5000</td>
                                                    <td data-field="debit"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">Total: </td>
                                                    <td>5000</td>
                                                    <td>5000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- table start -->
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <!-- journal form end -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal"><i class="bx bx-exit"></i> Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- form advanced init -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/form-advanced.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/select2/select2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/datepicker/datepicker.min.js')); ?>"></script>

    <!-- form repeater js -->
    <script src="<?php echo e(URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/pages/form-repeater.int.js')); ?>"></script>


    <!-- Required datatable js -->
    <script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
    <!-- Datatable init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>

    <!-- Responsive Table js -->
    <script src="<?php echo e(URL::asset('/assets/libs/rwd-table/rwd-table.min.js')); ?>"></script>

    <!-- Init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/table-responsive.init.js')); ?>"></script>

    <!-- Table Editable plugin -->
    <script src="<?php echo e(URL::asset('/assets/libs/table-edits/table-edits.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/pages/table-editable.int.js')); ?>"></script>

    
    <!-- Sweet Alerts js -->
    <script src="<?php echo e(URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>

    <!-- Sweet alert init js-->
    <script src="<?php echo e(URL::asset('/assets/js/pages/sweet-alerts.init.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\github\ERP-frontend-wid\resources\views/approved_journals_list.blade.php ENDPATH**/ ?>