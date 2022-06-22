@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <div class="tab-content p-3 text-muted">
                        <form method="post" action="{{route('sale-voucher.update', $record->id)}}">
                        @method('put')
                        @csrf
                        <!-- form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <x-input-select name="project_id" :records="$projects"
                                                        :selected="$record->project_id"
                                                        targetColumn="title"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Customer</label>
                                        <x-input-select name="customer_id" :records="$customers"
                                                        :selected="$record->saleIncome->customer_id"
                                                        additional="mobile"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Date</label>
                                        <x-input-text type="date" name="date" placeholder="" value="{{$record->date}}">
                                        </x-input-text>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Ship to addr</label>
                                        <x-input-text name="ship_to_address"
                                                      value="{{$record->saleIncome->ship_to_address}}"
                                                      placeholder="Enter ship to address here">
                                        </x-input-text>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Warehouses</label>
                                        <x-input-select name="warehouse_id" :records="$warehouses"
                                                        selected="{{$record->saleIncome->warehouse_id}}"
                                                        targetColumn="title"></x-input-select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">All product</h4>
                                            <div class="repeater" enctype="multipart/form-data">
                                                <div class="row">
                                                    {{--<div class="col-lg-2 p-0 pe-1">
                                                        <label for="name">Catagory</label>
                                                    </div>--}}
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="product">Product</label>
                                                    </div>
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="product">Available Qty </label>
                                                    </div>
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="quality">Qty</label>
                                                    </div>
                                                    <div class="col-lg-1 p-0 pe-1">
                                                        <label for="discount">Price</label>
                                                    </div>
                                                    {{--<div class="col-lg-1 p-0 pe-1">
                                                        <label for="subtotal">Discount</label>
                                                    </div>--}}
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="total">Sub-total</label>
                                                    </div>
                                                </div>
                                                <div data-repeater-list="details" id="ProductGroup">
                                                    @foreach($record->saleIncome->details as $detail)
                                                        <div data-repeater-item class="row removeRow">
                                                            {{--<div class=" col-lg-2 d-flex p-0 pe-1 pb-1">
                                                                <x-input-select name="category_id" :records="$categories"/>
                                                            </div>--}}
                                                            <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                                <x-input-select class="select-product" name="product_id"
                                                                                :selected="$detail->product_id"
                                                                                :records="$products"
                                                                                additional="code"></x-input-select>
                                                            </div>

                                                            <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                                <x-input-text name="available_qty" placeholder=""
                                                                              value="{{$detail->available_qty}}"
                                                                              :readonly="true" class="available-qty">
                                                                </x-input-text>
                                                            </div>

                                                            <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                                <x-input-text name="qty" placeholder=""
                                                                              value="{{$detail->qty}}" class="qty">
                                                                </x-input-text>
                                                            </div>
                                                            <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                                <x-input-text name="price" placeholder="" class="price"
                                                                              value="{{$detail->price}}"
                                                                              :readonly="true">
                                                                </x-input-text>
                                                            </div>
                                                            {{--<div class=" col-lg-1 p-0 pe-1 pb-1">
                                                                <x-input-text name="discount" placeholder="">
                                                                </x-input-text>
                                                            </div>--}}
                                                            <div class=" col-lg-2 p-0 pe-1 pb-1 d-flex">
                                                                <x-input-text name="sub_total" placeholder=""
                                                                              value="{{$detail->sub_total}}"
                                                                              class="sub-total">
                                                                </x-input-text>
                                                                <button class="btn btn-danger ms-2 removeBtn">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <input data-repeater-create type="button"
                                                       class="btn btn-success mt-3 px-4 mt-lg-0" value="Add"
                                                       id="AddMore"/>
                                            </div>
                                            <!-- 5th row start -->
                                            <div class="row justify-content-center pt-3">
                                                <div class="col-lg-6">
                                                    <div class="row mb-4">
                                                        <div class="row">
                                                            <label for="horizontal-firstname-input"
                                                                   class="col-4 text-end col-form-label text-end">Reference</label>
                                                            <div class="col-8">
                                                                <x-input-text name="note" value="{{$record->note}}"
                                                                              placeholder="Enter reference if any">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 5th row end -->
                                            <!-- 6th row start  -->
                                            <div class="row py-3 bg-secondary text-light rounded-3 mb-4">
                                                {{--<div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input"
                                                               class="col-4 text-end col-form-label">Discount</label>
                                                        <div class="col-8">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>--}}
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input"
                                                               class="col-4 text-end col-form-label">Item</label>
                                                        <div class="col-8">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input"
                                                               class="col-4 text-end col-form-label"> Cost</label>
                                                        <div class="col-8">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input"
                                                               class="col-4 text-end col-form-label"> Paid</label>
                                                        <div class="col-8">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 6th row end  -->
                                            <!-- 7th row start  -->
                                            @php($history = $record->history->info)
                                            {{--                                            @dd($history)--}}
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6">
                                                    <div class="row mb-2">
                                                        <label for="horizontal-firstname-input"
                                                               class="col-3 text-end col-form-label">Cash
                                                            Pay</label>
                                                        <div class="col-9">
                                                            <x-input-text name="cash" value="{{$history->cash}}"
                                                                          placeholder="Enter Cash Amount">
                                                            </x-input-text>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @include('partials.cheque-pay-edit')
                                            @include('partials.card-pay-edit')
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- form repeater js -->
    <script src="{{ asset('assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>

    {{-- Custom Js form --}}
    <script>
        $ ( document ).ready ( function () {
            function addEventForAllProductChange() {
                let allSelects = $ ( "#ProductGroup select" );
                for (let i = 0; i < allSelects.length; i++) {
                    allSelects[i].addEventListener ( 'change', function (e) {
                        let rowParent = e.target.parentNode.parentNode.parentNode;

                        rowParent.querySelector ( ".qty input" ).addEventListener ( 'keyup', handleQtyChange, false );
                        // rowParent.querySelector(".price input").addEventListener('keyup', handleQtyChange, false);

                        let productId = e.currentTarget.value;
                        let projectId = $ ( "#project_id" ).val ();
                        let warehouseId = $ ( "#warehouse_id" ).val ();

                        if ( productId ) {
                            let url = '{{route('getDetailAccordingly')}}?' + `product_id=${productId}&project_id=${projectId}&warehouse_id=${warehouseId}`;
                            $.get ( url, function (data, status) {
                                if ( data ) {
                                    rowParent.querySelector ( ".available-qty input" ).value = data.qty;
                                    rowParent.querySelector ( ".price input" ).value = data.product.selling_price;
                                } else {
                                    rowParent.querySelector ( ".available-qty input" ).value = '';
                                    rowParent.querySelector ( ".price input" ).value = '';
                                }
                            } )
                        }
                    } )
                }
            }

            function handleQtyChange(e) {
                let rowParent = e.target.parentNode.parentNode.parentNode;
                let currentQty = parseFloat ( e.currentTarget.value );
                let price = parseFloat ( rowParent.querySelector ( ".price input" ).value );

                let subTotalVal = currentQty * price;
                rowParent.querySelector ( '.sub-total input' ).value = parseFloat ( subTotalVal );
            }

            // addEventForAllProductChange ();

            $ ( "#AddMore" ).click ( function () {
                setTimeout ( addEventForAllProductChange, 800 );
            } )
        } );
    </script>
@endsection
