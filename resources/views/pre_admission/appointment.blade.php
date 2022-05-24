@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
@endsection

@section('content')
<x-breadcrumb pageHeader="Sample Page Header" :base="['utility' => '#']" :sub="['another' => '#', 'another1' => '#']">
</x-breadcrumb>

<livewire:appointment />

@endsection
@section('script')

@endsection

