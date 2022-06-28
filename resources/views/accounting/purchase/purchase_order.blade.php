@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#purchase_order" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Purchase Order Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#purchase_order_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Purchase Order List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <livewire:purchase-order-create :requisition="$requisition"/>
                    <livewire:purchase-order-list/>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Extra Large modal example -->
<div class="modal fade purchase-order-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">View PURCHASE ORDER <i class=" fas fa-eye bx-tada"></i>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- journal form start -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <p class="form-label">Posted By: <strong class="">Md. Kutubuddin</strong></p>
                            <p class="form-label">Approved By: <strong class="">Sajida Rahman</strong></p>
                            <p class="form-label">Requisition ID: <strong class="">69</strong></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <p class="form-label">Requested Date: <strong class="">2022-01-31</strong></p>
                            <p class="form-label">Approved Date: <strong class="">2022-01-31</strong></p>
                            <p class="form-label">Warehouse: <strong class="">Office Store</strong></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <p class="form-label">Project: <strong class="">Administration</strong></p>
                            <p class="form-label">Approved Amount: <strong class="">1591148.00</strong></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive p-0 m-0">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive table-responsive w-100">
                            <thead>
                                <tr class="table-primary nowrap">
                                    <th>Sl No</th>
                                    <th>Product</th>
                                    <th>Base Price</th>
                                    <th>Cost Price</th>
                                    <th>Quantity</th>
                                    <th>Received Quantity</th>
                                    <th>Remaining</th>
                                    <th>Stock Quantity</th>
                                    <th>Subtotal</th>
                                    <th>Budget Head</th>
                                    <th>Budget Sub Head</th>
                                    <th>Budget Account</th>
                                    <th>Budget Available</th>
                                    <th>Expected Date</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Fabrics Mask</td>
                                    <td>48.00</td>
                                    <td>26.00</td>
                                    <td>21502.00</td>
                                    <td>0.00</td>
                                    <td>21502</td>
                                    <td>0</td>
                                    <td>559052.00</td>
                                    <td>Cost of Goods Sold</td>
                                    <td>COGS of Masks</td>
                                    <td></td>
                                    <td>6753827</td>
                                    <td>2022-02-01</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 my-4">
                        <p class="form-control">Qty= 21502 Febric Mask (Urgent Delivery Dt-10-02-2022)</p>
                    </div>
                    <div class="col-xl-12">
                        <h4>Approval History</h4>
                        <table id="datatable-buttons" class="table table-bordered dt-responsive table-responsive w-100">
                            <thead>
                                <tr class="table-primary nowrap">
                                    <th>Sl</th>
                                    <th>Approvar</th>
                                    <th>Status</th>
                                    <th>Comments</th>
                                    <th>Status Changed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Sajida Rahman</td>
                                    <td>Approved</td>
                                    <td></td>
                                    <td>2022-01-25</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-xl-12 my-4">
                        <label for="">Comments</label>
                        <input type="text" class="form-control" placeholder="Enter Your Your Comment">
                    </div>
                </div>
                <!-- journal form end -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal"><i
                        class="bx bx-exit"></i> Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
