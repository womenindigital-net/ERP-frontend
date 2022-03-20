

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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Utility <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> INCOME FROM STUDENTS <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="d-flex justify-content-between pb-3 card-body">
                    <div>
                        <h4 class="card-title">INCOME FROM STUDENTS</h4>
                    </div>
                    <div class="">
                        <a href="student_receivable" class="btn btn-sm btn-danger">Student Receivable</a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-sm btn-outline-info waves-effect waves-light mb-2"
                            data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add"> <i
                                class="fas fa-plus-circle"></i> Add</button>
                    </div>
                </div>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive w-100">
                    <thead>
                        <tr class="table-primary">
                            <th>Project Name</th>
                            <th>Voucher Date</th>
                            <th>Particulars</th>
                            <th>Trans Amount</th>
                            <th>Log</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Core Programme</td>
                            <td>2021-09-30</td>
                            <td>Payment for Student. Student ID: 220, Name: Ishmam Reza</td>
                            <td>700</td>
                            <td>Create: A.K.M Shahidullah @ 2021-09-30 14:15:54</td>
                            <td class="text-center">
                                <button type="button"
                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-check"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add">
                                    <i class="fas fa-pen"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Core Programme</td>
                            <td>2021-09-30</td>
                            <td>Payment for Student. Student ID: 220, Name: Ishmam Reza</td>
                            <td>700</td>
                            <td>Create: A.K.M Shahidullah @ 2021-09-30 14:15:54</td>
                            <td class="text-center">
                                <button type="button"
                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-check"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add">
                                    <i class="fas fa-pen"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Core Programme</td>
                            <td>2021-09-30</td>
                            <td>Payment for Student. Student ID: 220, Name: Ishmam Reza</td>
                            <td>700</td>
                            <td>Create: A.K.M Shahidullah @ 2021-09-30 14:15:54</td>
                            <td class="text-center">
                                <button type="button"
                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-check"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add">
                                    <i class="fas fa-pen"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->


        <!--  Extra Large modal example -->
        <div class="modal fade student-income-modal-xl-add" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary">Add OR Edit Student Income Create <i
                                class="fas fa-plus-circle bx-spin"></i>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- journal form start -->
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <select class="form-control select2">
                                            <option>Select</option>
                                            <option value="">Select</option>
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Student</label>
                                        <select class="form-control select2">
                                            <option>Select</option>
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Student ID</label>
                                        <div class="input-group" id="datepicker1">
                                            <input type="text" class="form-control" placeholder="Student ID">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Payment Date</label>
                                        <div class="input-group" id="datepicker1">
                                            <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                data-date-format="dd M, yyyy" data-date-container='#datepicker1'
                                                data-provide="datepicker">
    
                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ms-3">
                                <div class="col-4">
                                    <h4 class="text-danger">Total Amount : </h4>
                                    <h5>5000 TK</h5>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-success"> Total Paid : </h4>
                                    <h5>5000 TK</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table nowrap mb-0">
    
                                                    <thead>
                                                        <tr class="table-primary text-center">
                                                            <th>Food Subsidy</th>
                                                            <th>Monthly Fees Subsidy</th>
                                                            <th>Transport Subsidy</th>
                                                            <th>Other Subsidy</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-center">
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="repeater" enctype="multipart/form-data">
                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item class="row">
                                                        <div class="mb-3 col-lg-5">
                                                            <label for="name">Payment For</label>
                                                            <select class="form-control select2">
                                                                <option>Select</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </select>
                                                        </div>
    
                                                        <div class="mb-3 col-lg-4">
                                                            <label for="email">Payment Amount </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Payment Amount" />
                                                        </div>
    
                                                        <div class="mb-3 col-lg-3">
                                                            <label for="subject">Receive Amount For</label>
                                                            <input type="text" id="subject" class="form-control"
                                                                placeholder="Debit" />
                                                        </div>
                                                    </div>
    
                                                </div>
                                                <input data-repeater-create type="button"
                                                    class="btn btn-sm btn-success mt-3 mt-lg-0" value="Add" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </form>
                        <!-- journal form end -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--  Extra Large modal example -->
        <div class="modal fade student-income-modal-xl-view" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary">View Student Income Create <i class=" fas fa-eye bx-tada"></i>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- journal form start -->
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <p class="form-control">Project</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Student</label>
                                        <p class="form-control">Student</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Student ID</label>
                                        <div class="input-group" id="datepicker1">
                                            <p class="form-control">Student ID</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Payment Date</label>
                                        <p class="form-control">22/2/2022</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row ms-3">
                                <div class="col-4">
                                    <h4 class="text-danger">Total Amount : </h4>
                                    <h5>5000 TK</h5>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-success"> Total Paid : </h4>
                                    <h5>5000 TK</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table nowrap mb-0">
    
                                                    <thead>
                                                        <tr class="table-primary text-center">
                                                            <th>Food Subsidy</th>
                                                            <th>Monthly Fees Subsidy</th>
                                                            <th>Transport Subsidy</th>
                                                            <th>Other Subsidy</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-center">
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </form>
                        <!-- journal form end -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-primary">Save</button>
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\github\ERP-frontend-wid\resources\views/student_income.blade.php ENDPATH**/ ?>