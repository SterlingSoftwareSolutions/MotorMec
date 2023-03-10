@extends('layouts.app')
@include('sidebar')
@include('header')
@section('content')
<div class="container">
	@foreach($fields as $key=>$value)
		{{$key}} = {{$value}} <br>
	@endforeach
</div>
@endsection