@extends('layouts.app')
@include('sidebar')
@include('header')

@section('content')
<h1></h1>
<x-application-table :applications="$applications"/>
@endsection