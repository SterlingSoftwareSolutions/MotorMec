@extends('layouts.app')
@include('sidebar')
@include('header')
@section('content')
<div class="form-step-active review-app">
    <div class="row">
        <div class="col-12 col-md-6">
            <h4>Approval Type</h4>
            <div class="textbox">
                <p>25 Year Rule</p>
                <span class="remove-icon">&#10006;</span>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h4>VASS Engineering</h4>
            <div class="textbox">
            <p>MotorMec Engineering</p>
                <span class="remove-icon">&#10006;</span>
            </div>
        </div>
    </div>
    <h4 class="title">Vehicle Info</h4>
    <div class="hr">&nbsp;</div>
    <div class="row mt-3 vehi-info"></div>
    <div class="row">
        <div class="col-12 col-md-6">
            <h4>Chassis/Frame Number</h4>
            <div class="textbox">
            <p>123</p>
                <span class="remove-icon">&#10006;</span>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h4>Estimated date of arrival</h4>
            <div class="textbox">
            <p>22/02/2022</p>
                <span class="remove-icon">&#10006;</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <h4>Make</h4>
            <div class="textbox">
            <p>Toyota</p>
                <span class="remove-icon">&#10006;</span>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h4>Model</h4>
            <div class="textbox">
            <p>Supra</p>
                <span class="remove-icon">&#10006;</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <h4>Build date</h4>
            <div class="textbox">
            <p>22/02/2000</p>
                <span class="remove-icon">&#10006;</span>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h4>Fuel Type</h4>
            <div class="textbox">
            <p>Petrol</p>
                <span class="remove-icon">&#10006;</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <h4>Transmission</h4>
            <div class="textbox">
            <p>Auto</p>
                <span class="remove-icon">&#10006;</span>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h4>Body Type</h4>
            <div class="textbox">
            <p>Crossover</p>
                <span class="remove-icon">&#10006;</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4>Drive Type</h4>
            <div class="textbox">
            <p>Front Wheel Drive</p>
                <span class="remove-icon">&#10006;</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4>Seating Placement</h4>
            <div class="textbox">
            <p>Seats 1</p>
                <span class="remove-icon">&#10006;</span>
            </div>
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
            </div>
        </div>
    </div>
    <h4 class="title">Exterior Images</h4>
    <div class="hr">&nbsp;</div>
    <div class="row mt-3 support-doc"></div>
    <div class="d-row row">
        <div class="column col-5 col-md-2">
            <label for="file1">Engine Photo*</label>
            <div class="box">
                <div class="btn_upload">
                    <span class="upload-text" id="uploadBtn1">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                        Uplaod Images
                    </span>
                </div>
            </div>
        </div>
        <div class="column col-5 col-md-2">
            <label for="file2">Chassis/ Frame Photo*</label>
            <div class="box">
                <div class="btn_upload">
                    <span class="upload-text" id="uploadBtn2">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                    </span>
                </div>
            </div>
        </div>
        <div class="column col-5 col-md-2">
            <label for="file1">Engine Photo*</label>
            <div class="box">
                <div class="btn_upload">
                    <span class="upload-text" id="uploadBtn1">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                        Uplaod Images
                    </span>
                </div>
            </div>
        </div>
        <div class="column col-5 col-md-2">
            <label for="file2">Chassis/ Frame Photo*</label>
            <div class="box">
                <div class="btn_upload">
                    <span class="upload-text" id="uploadBtn2">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <h4 class="title">Interior Images</h4>
            <div class="hr">&nbsp;</div>
            <div class="column">
                <label for="file">Please add at least 4 clear photos</label>
                <div class="d-row mt-3">
                    <div class="longBox">
                        <div id="image-container"><div class="image-preview"><img src=""><div class="remove-button"></div></div></div>
                    </div>
                </div>
            </div>
            <h4 class="title">Documents</h4>
            <div class="hr">&nbsp;</div>
            <div class="d-row row mt-3">
                <div class="column col-5 col-md-3">
                    <label for="file7">Invoice*</label>
                    <div class="box">
                        <div class="btn_upload">
                            <div id="preview7"></div>
                            <span class="upload-text" id="uploadBtn7">
                                <img src="{{asset('images/upload.png')}}" alt="upload image">
                                Uplaod Images
                            </span>
                        </div>
                        <button type="button" id="remove7" onclick="removeImage('preview7', 'remove7', 'uploadBtn7')" style="display:none">X</button>
                    </div>
                </div>
                <div class="column col-5 col-md-3">
                    <label for="file8">Export Certificate</label>
                    <div class="box">
                        <div class="btn_upload">
                            <div id="preview8"></div>
                            <span class="upload-text" id="uploadBtn8">
                                <img src="{{asset('images/upload.png')}}" alt="upload image">
                            </span>
                        </div>
                        <button type="button" id="remove8" onclick="removeImage('preview8', 'remove8', 'uploadBtn8')" style="display:none">X</button>
                    </div>
                </div>
                <div class="column col-5 col-md-3">
                    <label for="file9">Auction Report</label>
                    <div class="box">
                        <div class="btn_upload">
                            <div id="preview9"></div>
                            <span class="upload-text" id="uploadBtn9">
                                <img src="{{asset('images/upload.png')}}" alt="upload image">
                                Uplaod Images
                            </span>
                        </div>
                        <button type="button" id="remove9" onclick="removeImage('preview9', 'remove9', 'uploadBtn9')" style="display:none">X</button>
                    </div>
                </div>
            </div>
            <button class="btn-prev button" id="btn-back-to-top">Back</button>
            <div class="right">
                <button class="btn-save button">Save as Draft</button>
                <button class="btn-next button" id="btn-back-to-top">Next Page</button>
            </div>
</div>
<script src="{{ asset('js/review.js') }}"></script>
@endsection