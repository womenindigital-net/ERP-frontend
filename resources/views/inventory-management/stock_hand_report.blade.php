@extends('layouts.master')

@section('title') @endsection
@section('css')
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered w-100">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Item Code</th>
                            <th>Item Desc</th>
                            <th>Stock Qnty</th>
                            <th>Unit Name</th>
                            <th>Cat Ware</th>
                            <th>Recorder Qty</th>
                            <th>Store Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>CAT0034</td>
                            <td><small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam,
                                    fugiat?</small></td>
                            <td>100</td>
                            <td>KG</td>
                            <td>Canteen Raw Material</td>
                            <td>99</td>
                            <td>Lorem ipsum dolor sit</td>
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