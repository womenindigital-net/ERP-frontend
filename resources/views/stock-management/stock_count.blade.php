@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') STOCK ASSIGN @endslot
    @endcomponent

    <!-- form start -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Warehouse</label>
                <select class="form-control select2">
                    <option>--Select--</option>
                    <option value="AK">Canteen Logistic Materials</option>
                    <option value="HI">Canteen Raw material</option>
                    <option value="CA">Office Outlet</option>
                    <option value="NV">Office Programme</option>
                    <option value="OR">Office Store</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label>Date</label>
                    <div class="input-group" id="datepicker1">
                    <x-input-text name="hh" type="date"></x-input-text>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <div class="card">
                <div class="card-body">
                    <h2 class=" text-center mb-4">All Products</h2>
                    <div class="">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category</th>
                                    <th>Product</th>
                                    <th>Unit</th>
                                    <th>Available Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-id="1">
                                    <td style="width: 80px">1</td>
                                    <td>
                                        <select class="form-control border border-0 p-0 select2">
                                            <option>--Select--</option>
                                            <option value="1">4 Water Purifier & 6 Fire Exti</option>
                                            <option value="2">Angel Chef Hot Kitchen</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control border border-0 p-0 select2">
                                            <option>--Select--</option>
                                            <option value="1">Jhuri Puti (Culser)- Red::3</option>
                                            <option value="2">Jhuri Puti (Culser)- Blue::4</option>
                                        </select>
                                    </td>
                                    <td>Price</td>
                                    <td>88</td>
                                </tr>
                                <tr data-id="2">
                                    <td style="width: 80px">2</td>
                                    <td>
                                        <select class="form-control border border-0 p-0 select2">
                                            <option>--Select--</option>
                                            <option value="1">4 Water Purifier & 6 Fire Exti</option>
                                            <option value="2">Angel Chef Hot Kitchen</option>
                                        </select>
                                    </td>
                                    <td><select class="form-control border border-0 p-0 select2">
                                        <option>--Select--</option>
                                        <option value="1">Jhuri Puti (Culser)- Red::3</option>
                                        <option value="2">Jhuri Puti (Culser)- Blue::4</option>
                                    </select></td>
                                    <td>Kilogram</td>
                                    <td>225</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- table start -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <!--  Extra Large modal example -->
    <div class="modal fade finished-goods-modal-xl-view" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Finished Goods <i class=" fas fa-eye bx-tada"></i>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- journal form start -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Warehouse</label>
                                    <p class="form-control">Warehouse</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <p class="form-control">24-4-2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h2 class=" text-center mb-4">All Products</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 p-0">
                                <div class="card">
                                    <div class="card-body py-0">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr class="table-primary text-center">
                                                        <th>SL</th>
                                                        <th>Category</th>
                                                        <th>Product</th>
                                                        <th>Unit</th>
                                                        <th>Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>0</td>
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
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <p class="p-0"><Strong>Note: </Strong> Note Note Note Note Note Note Note Note </p>
                            </div>
                        </div>
                    <!-- journal form end -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal"><i class="bx bx-exit"></i> Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('script')

@endsection
@section('script-bottom')
@endsection