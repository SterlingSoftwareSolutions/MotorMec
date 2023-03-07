@extends('layouts.app')
@include('sidebar')
@include('header')
@section('content')
<div class="form-step-active">
    <div class="row">
        <div class="col-12 col-md-6">
            <h4>Approval Type</h4>
            <p>25 Year Rule</p>
        </div>
        <div class="col-12 col-md-6">
            <h4>VASS Engineering</h4>
            <p>MotorMec Engineering</p>
        </div>
    </div>
    <h4 class="title">Vehicle Info</h4>
    <div class="hr">&nbsp;</div>
    <div class="row mt-3 vehi-info"></div>
    <div class="row">
        <div class="col-12 col-md-6">
            <h4>Chassis/Frame Number</h4>
            <p>123</p>
        </div>
        <div class="col-12 col-md-6">
            <h4>Estimated date of arrival</h4>
            <p>22/02/2022</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <h4>Make</h4>
            <p>Toyota</p>
        </div>
        <div class="col-12 col-md-6">
            <h4>Model</h4>
            <p>Supra</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <h4>Build date</h4>
            <p>22/02/2000</p>
        </div>
        <div class="col-12 col-md-6">
            <h4>Fuel Type</h4>
            <p>Petrol</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <h4>Transmission</h4>
            <p>Auto</p>
        </div>
        <div class="col-12 col-md-6">
            <h4>Body Type</h4>
            <p>Crossover</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4>Drive Type</h4>
            <p>Front Wheel Drive</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4>Seating Placement</h4>
            <p>Seats 1</p>
        </div>
    </div>
    <h4 class="title">Support Documents</h4>
    <div class="hr">&nbsp;</div>
    <div class="row mt-3 support-doc"></div>
    <div class="d-row row">
        <div class="column col-6 col-md-3">
            <label for="file1">Engine Photo*</label>
            <div class="box">
                <div class="btn_upload">
                    <span class="upload-text" id="uploadBtn1">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                        Uplaod Images
                    </span>
                </div>
                <button type="button" id="remove1" onclick="removeImage('preview1', 'remove1', 'uploadBtn1')" style="display:none">X</button>
            </div>
        </div>
        <div class="column col-6 col-md-3">
            <label for="file2">Chassis/ Frame Photo*</label>
            <div class="box">
                <div class="btn_upload">
                    <span class="upload-text" id="uploadBtn2">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                    </span>
                </div>
                <button type="button" id="remove2" onclick="removeImage('preview2', 'remove2', 'uploadBtn2')" style="display:none">X</button>
            </div>
        </div>
    </div>
</div>
@endsection