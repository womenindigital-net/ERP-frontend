@extends('layouts.master')

@section('title') @endsection
@section('css')

@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="datatable-buttons" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Item Code</th>
                            <th>Item Desc</th>
                            <th>Stock Qnty</th>
                            <th>Unit Name</th>
                            <th>Cat Ware</th>
                            <th>Recorder Qty</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Slipper-0006</td>
                            <td><SMAll>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores,
                                    cupiditate.</SMAll></td>
                            <td>4500.00</td>
                            <td>pair</td>
                            <td>Raw materials (Carpet slipper</td>
                            <td>3000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<!-- end row -->

@endsection
@section('script')
@endsection
@section('script-bottom')
@endsection