@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-5 apply-view-only">
                <livewire:stock-transfer-create :stockTransfer="$records" mode="show" />
            </div>
        </div>
    </div>
</div>
@endsection