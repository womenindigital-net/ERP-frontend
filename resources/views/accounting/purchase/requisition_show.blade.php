@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0 apply-view-only">
                <livewire:requisition-create :requisition="$record" mode="show" />
            </div>
        </div>
    </div>
</div>
@endsection