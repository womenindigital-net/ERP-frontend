

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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Utility <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Sale Voucher <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#sale_voucher" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Sale Voucher</span>    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#sale_voucher_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Sale Voucher List</span>    
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="sale_voucher" role="tabpanel">
                            <!-- form start -->
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
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">All product</h4>
                                            <form class="repeater" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="name">SL</label>
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
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="subtotal">Discount</label>
                                                    </div>
                                                </div>
                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item class="row">

                                                        <div  class=" col-lg-2 d-flex p-0 pe-1 pb-1">
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
                                                        <div class=" col-lg-2 p-0 pe-1 pb-1 d-flex">
                                                            <input type="text" class="form-control"/>
                                                            <button class="btn btn-danger ms-2">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <input data-repeater-create type="button" class="btn btn-success mt-3 px-4 mt-lg-0" value="Add"/>
                                            </form>
                                            <!-- 5th row start -->
                                            <div class="row justify-content-center pt-3">
                                                
                                                <div class="col-lg-6">
                                                    <div class="row mb-4">
                                                        <div class="row">
                                                            <label for="horizontal-firstname-input" class="col-4 text-end col-form-label text-end">Reference</label>
                                                            <div class="col-8">
                                                                <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Enter reference if any ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                    
                                            </div>
                                            <!-- 5th row end -->
                                            <!-- 6th row start  -->
                                            <div class="row py-3 bg-secondary text-light rounded-3 mb-4">
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-4 text-end col-form-label"> Discount</label>
                                                        <div class="col-8">
                                                        <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-4 text-end col-form-label"> Item</label>
                                                        <div class="col-8">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-4 text-end col-form-label"> Cost</label>
                                                        <div class="col-8">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-4 text-end col-form-label"> Paid</label>
                                                        <div class="col-8">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 6th row end  -->
                                            <!-- 7th row start  -->
                                            <div class="row justify-content-center">
                                                
                                                <div class="col-lg-6">
                                                    <div class="row mb-2">
                                                        <label for="horizontal-firstname-input" class="col-3 text-end col-form-label">Cash Pay</label>
                                                        <div class="col-9">
                                                        <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Enter Cash Amount ">
                                                        </div>
                                                    </div>
                                                </div>
                    
                                            </div>
                                            <!-- 7th row end  -->
                                            <!-- 8th row start  -->
                                            <div class="row">
                                                <div class="form-check form-check-primary mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheckBox" >
                                                    <label class="form-check-label" for="formCheckcolor1">Cheque Pay</label>
                                                </div>
                                                <div class="row" id="formCheckBoxForm">
                                                    <div class="row">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Amount</label>
                                                                    <input type="text" class="form-control" placeholder="Enter Bank Name Here">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Cheque No</label>
                                                                    <input type="text" class="form-control" placeholder="Phone One Here ">
                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label"> Acc No</label>
                                                                    <input type="text" class="form-control" placeholder="Enter  Phone Two Here">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Account Name</label>
                                                                    <input type="text" class="form-control" placeholder="Enter Acc.Name Here">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Bank Name</label>
                                                                    <input type="text" class="form-control" placeholder="Enter Bank Name Here">
                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 8th row end  -->
                                            <!-- 9th row start  -->
                                            <div class="row">
                                                <div class="form-check form-check-primary mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheckBox2">
                                                    <label class="form-check-label" for="formCheckcolor1"> Credit Card Pay</label>
                                                </div>
                                                <div class="row" id="formCheckBoxForm2">
                                                    <div class="row">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Amount</label>
                                                                    <input type="text" class="form-control" placeholder="Enter  Amount">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label"> Card No</label>
                                                                    <input type="text" class="form-control" placeholder="Enter  Credit Card Number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Card Name</label>
                                                                    <input type="text" class="form-control" placeholder="Enter  Card Name">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Card Type</label>
                                                                    <input type="text" class="form-control" placeholder="Enter  Card Type here">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 9th row end  -->
                                        </div>
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
                        <div class="tab-pane" id="sale_voucher_list" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive w-100">
                                                <thead>
                                                    <tr class="table-primary">
                                                        <th>Project</th>
                                                        <th>Customer</th>
                                                        <th>Is Draft</th>
                                                        <th>Date</th>
                                                        <th>Cost</th>
                                                        <th>Discount</th>
                                                        <th>Is Pay Completed</th>
                                                        <th>Cash Amount</th>
                                                        <th>Cheque Amount</th>
                                                        <th>Credit Amount</th>
                                                        <th>Total Paid</th>
                                                        <th>Log</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Hello HelloHelloHelloHelloHelloHello</td>
                                                        <td>Hello</td>
                                                        <td>Hello</td>
                                                        <td>Hello</td>
                                                        <td>Hello</td>
                                                        <td>Hello</td>
                                                        <td>Hello</td>
                                                        <td>Hello</td>
                                                        <td>Hello</td>
                                                        <td>Hello</td>
                                                        <td>Hello</td>
                                                        <td>Hello</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
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


    <!-- Init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/table-responsive.init.js')); ?>"></script>

    <!-- Table Editable plugin -->
    <script src="<?php echo e(URL::asset('/assets/libs/table-edits/table-edits.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/pages/table-editable.int.js')); ?>"></script>

     
     <script>
        $(document).ready(function(){
            $("#formCheckBoxForm").hide();
            $("#formCheckBoxForm2").hide();

            $("#formCheckBox").click(function(){
                $("#formCheckBoxForm").toggle();
            });
            $("#formCheckBox2").click(function(){
                $("#formCheckBoxForm2").toggle();
            });
        });
     </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\github\ERP-frontend-wid\resources\views/sale_voucher.blade.php ENDPATH**/ ?>