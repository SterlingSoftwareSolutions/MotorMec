@extends('layouts.app')
@include('sidebar')
@include('header')
@section('content')
<div class="form-step-active">
    <div class="row">
        <div class="col-12 col-md-6 mb-2">
            <h4>Approval Type</h4>
            <p>25 Year Rule</p>
        </div>
        <div class="col-12 col-md-6 mb-2">
            <h4>VASS Engineering</h4>
            <p>MotorMec Engineering</p>
        </div>
    </div>
    <h4 class="title">Vehicle Info</h4>
    <div class="hr">&nbsp;</div>
    <div class="row mt-3 vehi-info">
        <div class="col-12 col-md-6 mb-2 mt-2">
            <h4>Chassis/Frame Number</h4>
            <p>123</p>
        </div>
        <div class="col-12 col-md-6 mb-2">
            <h4>Estimated date of arrival</h4>
            <p>22/02/2022</p>
        </div>
    </div>
    <div class="row mt-3 vehi-info">
        <div class="col-12 col-md-6 mb-2">
            <h4>Make</h4>
            <p>Toyota</p>
        </div>
        <div class="col-12 col-md-6 mb-2">
            <h4>Model</h4>
            <p>Supra</p>
        </div>
    </div>
    <div class="row mt-3 vehi-info">
        <div class="col-12 col-md-6 mb-2">
            <h4>Build date</h4>
            <p>22/02/2000</p>
        </div>
        <div class="col-12 col-md-6 mb-2">
            <h4>Fuel Type</h4>
            <p>Petrol</p>
        </div>
    </div>
    <div class="row mt-3 vehi-info">
        <div class="col-12 col-md-6 mb-2">
            <h4>Transmission</h4>
            <p>Auto</p>
        </div>
        <div class="col-12 col-md-6 mb-2">
            <h4></h4>
            <p></p>
        </div>
    </div>
</div>
@endsection