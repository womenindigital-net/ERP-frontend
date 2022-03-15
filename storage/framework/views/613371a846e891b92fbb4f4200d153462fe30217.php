

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
        <?php $__env->slot('title'); ?> Received Payment <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#receive_payment" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Receive Payment</span>    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#received_payment_details" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Received Payment Details</span>    
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="receive_payment" role="tabpanel">
                                   <!-- journal form start -->
       <form class="needs-validation" novalidate>
        <div class="row">
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
                    <label class="form-label">Customer</label>
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
            <div class="col-md-6">
                <div class="mb-3">
                    <label>Date</label>
                        <div class="input-group" id="datepicker1">
                        <input type="text" class="form-control" value="" placeholder="dd M, yyyy"
                         data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker">

                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                        </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="validationCustom02" class="form-label">Ship to addr</label>
                    <input type="text" class="form-control" id="validationCustom02"
                        placeholder="Enter ship to address here"  required>
                </div>
            </div>
            
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Warehouses</label>
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
        
        
        
    </form>
    <!-- journal form end -->
    <div class="row">
        <div class="col-12 p-0">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">All product</h4>
                    <form class="repeater" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="name">SL</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="name">Catagory</label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="product">Product</label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="product">Avlilable Quality </label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="quality">Quality</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="total">Sub-total</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="discount">Price</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="subtotal">Discount</label>
                            </div>
                        </div>
                        <div data-repeater-list="group-a">
                            <div data-repeater-item class="row">
                                <div  class=" col-lg-1 p-0 pe-1 pb-1">
                                    <div ><span>1</span></div>
                                </div>

                                <div  class=" col-lg-1 p-0 pe-1 pb-1">
                                    <select id="formrow-inputState" class="form-select">
                                        <option selected=""></option>
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </select>
                                </div>
                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                    <input type="text" class="form-control"/>
                                </div>
                                <div  class=" col-lg-2 p-0 pe-1 pb-1">
                                    <input type="text" class="form-control"/>
                                </div>

                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                    <input type="text"  class="form-control"/>
                                </div>

                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <input type="number"  class="form-control"/>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <input type="number" class="form-control"/>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <input type="text" class="form-control"/>
                                </div>
                                <div class="col-lg-1 p-0 pe-1 pb-1 align-self-center">
                                      
                                    <div class="d-grid">
                                        <input data-repeater-delete type="button" class="btn btn-primary" value="Delete"/>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <!-- another row start -->
    <div class="row">
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
    </div>
    <!-- another row start -->
                            <!-- end row -->
                        </div>
                        <div class="tab-pane" id="received_payment_details" role="tabpanel">
                            <p class="mb-0">
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                single-origin coffee squid. Exercitation +1 labore velit, blog
                                sartorial PBR leggings next level wes anderson artisan four loko
                                farm-to-table craft beer twee. Qui photo booth letterpress,
                                commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                aesthetic magna delectus.
                            </p>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\github\ERP-frontend-wid\resources\views/received_payment.blade.php ENDPATH**/ ?>