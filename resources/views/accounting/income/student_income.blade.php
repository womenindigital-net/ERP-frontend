@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')

@endsection

@section('content')
<x-breadcrumb pageHeader="INCOME FROM STUDENTS" :base="['utility' => '#']" :sub="['INCOME FROM STUDENTS' => '#',]">
</x-breadcrumb>

<livewire:student-income.student-income />

@endsection
@section('script')
<!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>

@endsection