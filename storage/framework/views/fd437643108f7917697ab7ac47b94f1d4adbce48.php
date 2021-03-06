

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

    <!-- Plugins css -->
    <link href="<?php echo e(URL::asset('/assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Utility <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Direct Payment <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#direct_payment" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Direct Payment</span>    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#cash_payment_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Cash Payment List</span>    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#advance_payment_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Advance Payment List</span>    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#bank_payment_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Bank to bank Transfer List</span>    
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="direct_payment" role="tabpanel">
                            <!-- form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Payment Type</label>
                                        <select class="form-control select2">
                                            <option>--Select--</option>
                                            <option value="">Cash Payment</option>
                                            <option value="">Advance Payment</option>
                                            <option value="">Bank to bank Transfer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="validationCustom02" class="form-label">From Account</label>
                                            <input type="text" class="form-control" id="validationCustom02"
                                                placeholder="Enter From Account here">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">To Account</label>
                                        <input type="text" class="form-control" id="validationCustom02"
                                            placeholder="Enter To Account here">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Amount</label>
                                        <input type="text" class="form-control" id="validationCustom02"
                                            placeholder="Enter Amount here">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Purpose</label>
                                        <textarea type="text" class="form-control" id="validationCustom02"
                                        placeholder="Enter Purpose here" cols="5" rows=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-danger w-100">Reset</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-success w-100">Save</button>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <div class="tab-pane" id="cash_payment_list" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Purpose</th>
                                                    <th>From Account</th>
                                                    <th>To account</th>
                                                    <th>Amount</th>
                                                    <th>Check Book Name</th>
                                                    <th>Check No</th>
                                                    <th>Trans Date</th>
                                                    <th>Is Sent For Approval</th>
                                                    <th>Is Approved</th>
                                                    <th>Approved By</th>
                                                    <th>Approved Date</th>
                                                    <th>Is Transfer Done</th>
                                                    <th>Transfer Date</th>
                                                    <th>Log</th>
                                                    <th>Action</th>
                                                 </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>1235</td>
                                                    <td>puja</td>
                                                    <td>Hridoy</td>
                                                    <td>01</td>
                                                    <td>12/03</td>
                                                    <td>coffee</td>
                                                    <td>1205</td>
                                                    <td>459909</td>
                                                    <td>ok</td>
                                                    <td>yes</td>
                                                    <td>12</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><button type="button"
                                                        class="btn btn-sm btn-info btn-rounded waves-effect waves-light"> <i
                                                            class="fas fa-check"></i></button>
                                                    <button type="button"
                                                    class="btn btn-sm  m-1 btn-primary btn-rounded waves-effect waves-light"
                                                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-x"> <i
                                                        class="fas fa-eye"></i></button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                                        data-bs-toggle="modal" data-bs-target=".journal-modal-xl-edit">
                                                        <i class="fas fa-pen"></i></button>
                                                    <button type="button"
                                                        class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light"> <i
                                                            class="fas fa-trash-alt"></i></button></td>
                                                </tr>
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        
                        </div>
                        <div class="tab-pane" id="advance_payment_list_payment_list" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Purpose</th>
                                                    <th>From Account</th>
                                                    <th>To account</th>
                                                    <th>Amount</th>
                                                    <th>Check Book Name</th>
                                                    <th>Check No</th>
                                                    <th>Trans Date</th>
                                                    <th>Is Sent For Approval</th>
                                                    <th>Is Approved</th>
                                                    <th>Approved By</th>
                                                    <th>Approved Date</th>
                                                    <th>Is Transfer Done</th>
                                                    <th>Transfer Date</th>
                                                    <th>Log</th>
                                                    <th>Action</th>
                                                 </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>1235</td>
                                                    <td>puja</td>
                                                    <td>Hridoy</td>
                                                    <td>01</td>
                                                    <td>12/03</td>
                                                    <td>coffee</td>
                                                    <td>1205</td>
                                                    <td>459909</td>
                                                    <td>ok</td>
                                                    <td>yes</td>
                                                    <td>12</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><button type="button"
                                                        class="btn btn-sm btn-info btn-rounded waves-effect waves-light"> <i
                                                            class="fas fa-check"></i></button>
                                                    <button type="button"
                                                    class="btn btn-sm  m-1 btn-primary btn-rounded waves-effect waves-light"
                                                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-x"> <i
                                                        class="fas fa-eye"></i></button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                                        data-bs-toggle="modal" data-bs-target=".journal-modal-xl-edit">
                                                        <i class="fas fa-pen"></i></button>
                                                    <button type="button"
                                                        class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light"> <i
                                                            class="fas fa-trash-alt"></i></button></td>
                                                </tr>
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        
                        </div>
                        <div class="tab-pane" id="bank_payment_list" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Purpose</th>
                                                    <th>From Account</th>
                                                    <th>To account</th>
                                                    <th>Amount</th>
                                                    <th>Check Book Name</th>
                                                    <th>Check No</th>
                                                    <th>Trans Date</th>
                                                    <th>Is Sent For Approval</th>
                                                    <th>Is Approved</th>
                                                    <th>Approved By</th>
                                                    <th>Approved Date</th>
                                                    <th>Is Transfer Done</th>
                                                    <th>Transfer Date</th>
                                                    <th>Log</th>
                                                    <th>Action</th>
                                                 </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>1235</td>
                                                    <td>puja</td>
                                                    <td>Hridoy</td>
                                                    <td>01</td>
                                                    <td>12/03</td>
                                                    <td>coffee</td>
                                                    <td>1205</td>
                                                    <td>459909</td>
                                                    <td>ok</td>
                                                    <td>yes</td>
                                                    <td>12</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><button type="button"
                                                        class="btn btn-sm btn-info btn-rounded waves-effect waves-light"> <i
                                                            class="fas fa-check"></i></button>
                                                    <button type="button"
                                                    class="btn btn-sm  m-1 btn-primary btn-rounded waves-effect waves-light"
                                                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-x"> <i
                                                        class="fas fa-eye"></i></button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                                        data-bs-toggle="modal" data-bs-target=".journal-modal-xl-edit">
                                                        <i class="fas fa-pen"></i></button>
                                                    <button type="button"
                                                        class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light"> <i
                                                            class="fas fa-trash-alt"></i></button></td>
                                                </tr>
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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

    

    <!-- Responsive Table js -->
    <script src="<?php echo e(URL::asset('/assets/libs/rwd-table/rwd-table.min.js')); ?>"></script>

    <!-- Init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/table-responsive.init.js')); ?>"></script>

    <!-- Table Editable plugin -->
    <script src="<?php echo e(URL::asset('/assets/libs/table-edits/table-edits.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/pages/table-editable.int.js')); ?>"></script>

    <!-- Required datatable js -->
    <script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
    <!-- Datatable init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>

    <!-- Plugins js -->
    <script src="<?php echo e(URL::asset('/assets/libs/dropzone/dropzone.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-bottom'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\github\ERP-frontend-wid\resources\views/direct_payment.blade.php ENDPATH**/ ?>