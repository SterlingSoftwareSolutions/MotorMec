@extends('layouts.app')
@include('sidebar')
@include('header')

@section('content')
<x-application-table :applications="$applications"/>
@endsection