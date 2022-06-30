@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body apply-view-only">
                <livewire:stock-receive-create :stockReceive="$records" mode="show" />
            </div>
        </div>
    </div>
</div>
@endsection