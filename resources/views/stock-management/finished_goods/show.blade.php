@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body pt-5 apply-view-only">
                <livewire:finished-good-create :finishedGood="$record" mode="show" />
            </div>
        </div>
    </div>
</div>
@endsection