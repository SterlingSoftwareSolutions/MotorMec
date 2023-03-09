@extends('layouts.app')
@include('sidebar')
@include('header')
@section('content')
<div class="application">
    <h4 class="title text-center">New Application {{$step}}</h4>

    <x-progress :percentage="$percentage" :step="$step"/>

    @if($step == 1)
    <x-create_application_step1 />
    @elseif($step == 2)
    <x-create_application_step2 />
    @elseif($step == 3)
    <x-create_application_step3 />
    @endif

</div>
<!-- <script src="{{ asset('js/upload.js') }}"></script>
<script src="{{ asset('js/progress.js') }}"></script> -->
@endsection