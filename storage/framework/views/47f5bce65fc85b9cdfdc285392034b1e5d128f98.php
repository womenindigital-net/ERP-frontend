

<?php $__env->startSection('title'); ?> MATERIAL COLLECTS <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('/assets/libs/datepicker/datepicker.min.css')); ?>">

    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Sweet Alert-->
    <link href="<?php echo e(URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Utility <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> MATERIAL COLLECTS <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="pb-3 card-body text-end">
                    <button type="button" class="btn btn-outline-info waves-effect waves-light "
                    data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add"> <i
                        class="fas fa-plus-circle"></i> Add</button>
                </div>

                <table id="datatable-buttons"
                    class="table table-striped table-bordered dt-responsive nowrap w-100">
                    <thead>
                        <tr class="table-primary">
                            <th>Stock Receive By</th>
                            <th>Receive From</th>
                            <th>Receive Date</th>
                            <th>Total Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td class="text-center">
                                <button type="button"
                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light"> <i
                                        class="fas fa-check"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                                    <i class="fas fa-pen"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light"> <i
                                        class="fas fa-trash-alt" id="sa-warning"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td class="text-center">
                                <button type="button"
                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light"> <i
                                        class="fas fa-check"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target="#material-callects-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                                    <i class="fas fa-pen"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light"> <i
                                        class="fas fa-trash-alt" id="sa-warning"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td class="text-center">
                                <button type="button"
                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light"> <i
                                        class="fas fa-check"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target="#material-callects-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                                    <i class="fas fa-pen"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light"> <i
                                        class="fas fa-trash-alt" id="sa-warning"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->



    <!--  Edit Journal -->
    <div class="modal fade material-callects-modal-xl-add" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Add Material Collects <i class="fas fa-plus-circle bx-spin"></i>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- journal form start -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Select Name</label>
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
                                    <label>Select Date</label>
                                    <div class="input-group" id="datepicker1">
                                        <input type="text" class="form-control" placeholder="dd M, yyyy"
                                            data-date-format="dd M, yyyy" data-date-container='#datepicker1'
                                            data-provide="datepicker">

                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Materials Taken From</label>
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
                        </div>
                        
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class=" text-center mb-4">Raw Material Lists</h2>
                                        <form class="repeater" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <label for="name">SL</label>
                                                    <label for="name">Category Name	</label>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <label for="product">Material Name</label>
                                                </div>
                                                <div class="col-lg-1 p-0 pe-1">
                                                    <label for="product">Avl Stock</label>
                                                </div>
                                                <div class="col-lg-1 p-0 pe-1">
                                                    <label for="total">Quantity</label>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <label for="total">Produce Category</label>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <label for="total">Produce Product</label>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <label for="total">Will Produce</label>
                                                </div>
                                            </div>
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row">
                                                    <div  class="col-lg-2 d-flex p-0 pe-1 pb-1 align-items-center">
                                                        <span class="pe-2 pb-1">01</span>
                                                        <select id="formrow-inputState" class="form-select">
                                                            <option selected="">Select</option>
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                        </select>
                                                    </div>
                                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                        <select id="formrow-inputState" class="form-select">
                                                            <option selected="">Select</option>
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                        </select>
                                                    </div>
                                                    <div  class=" col-lg-1 p-0 pe-1 pb-1">
                                                        <input type="text" class="form-control"/>
                                                    </div>
                                                    <div  class=" col-lg-1 p-0 pe-1 pb-1">
                                                        <input type="text" class="form-control"/>
                                                    </div>
                                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                        <select id="formrow-inputState" class="form-select">
                                                            <option selected="">Select</option>
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                        </select>
                                                    </div>
                                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                        <select id="formrow-inputState" class="form-select">
                                                            <option selected="">Select</option>
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                                        <input type="text" class="form-control"/>
                                                        <button class="btn btn-danger btn-rounded ms-2">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                           <div class="ms-2">
                                            <button data-repeater-create type="button" class="btn btn-success font-size-16 waves-effect waves-light"><i class="bx bx-plus-circle bx-spin align-middle me-1 mb-1"></i> Add</button>
                                           </div>
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
    <div class="modal fade material-callects-modal-xl-view" id="" tabindex="-2" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">View MATERIAL COLLECTS <i class="fas fa-eye bx-tada"></i>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- journal form start -->
                    <!-- journal form start -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Select Name</label>
                                <p  class="form-control">Select Name</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="validationCustom02" class="form-label">Select Date</label>
                                    <p class="form-control">2021-09-30 00 00.00</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Materials Taken From</label>
                                <p class="form-control" >Materials Taken From</p>
                            </div>
                        </div>
                    </div>
                    <!-- journal form end -->
                    <!-- table start -->
                    <div class="row">
                        <h2 class=" text-center mb-4">Raw Material Lists</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Category Name</th>
                                                    <th>Material Name</th>
                                                    <th>Avl Stock</th>
                                                    <th>Quantity</th>
                                                    <th>Produce Category</th>
                                                    <th>Produce Product</th>
                                                    <th>Will Produce</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-id="1">
                                                    <td style="width: 80px">1</td>
                                                    <td>4255-Assessment fees</td>
                                                    <td>Ismam Reza</td>
                                                    <td></td>
                                                    <td>5000</td>
                                                    <td>5000</td>
                                                    <td>5000</td>
                                                    <td>5000</td>
                                                </tr>
                                                <tr data-id="2" style="border-bottom-style: none;">
                                                    <td style="width: 80px">2</td>
                                                    <td>1010-Cash Operating Account</td>
                                                    <td>Ismam Reza</td>
                                                    <td>5000</td>
                                                    <td>5000</td>
                                                    <td>5000</td>
                                                    <td>5000</td>
                                                    <td></td>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\github\ERP-frontend-wid\resources\views/material_callects.blade.php ENDPATH**/ ?>