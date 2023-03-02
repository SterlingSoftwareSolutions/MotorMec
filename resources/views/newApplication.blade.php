@extends('layouts.app')
@include('sidebar')
@include('header')
@section('content')
<div class="application">
    <form action="app-form">
        <!-- progressbar -->
        <div class="progressBar">
            <h4 class="title text-center">New Application</h4>
        </div>
        <!-- form1 -->
        <div class="form-step form-step-active form1">
            <div class="field field1">
                <h5>Approval Type</h5>
                <div class="input-group radio">
                    <div class="col-md-6">
                        <input type="radio" id="approval1" name="approval" value="1">
                        <label for="approval1">SEV's Entry / RAW's Modification</label><br>
                    </div>
                    <div class="col-md-6">
                        <input type="radio" id="approval2" name="approval" value="2">
                        <label for="approval2">SEV's Entry / RAW's Modification</label><br>
                    </div>

                </div>
            </div>
            <div class="field field2">
                <h5>VASS Engineering</h5>
                <div class="input-group radio">
                    <div class="col-md-6">
                        <input type="radio" id="vass1" name="vass" value="1">
                        <label for="vass1">MotorMec Engineering </label><br>
                    </div>
                    <div class="col-md-6">
                        <input type="radio" id="vass2" name="vass" value="2">
                        <label for="vass2">Own Engineering</label><br>
                    </div>
                </div>
            </div>
            <h4 class="title">Vehicle Information</h4>
            <div class="hr">&nbsp;</div>
            <div class="row mt-3 vehi-info">
                <div class="col-12 col-md-6 input">
                    <label for="Chassis">Chassis/Frame Number*</label>
                    <input type="text" id="Chassis" name="Chassis" class="form-control">
                </div>
                <div class="col-12 col-md-6 input">
                    <label for="arrival-date">Estimated date of arrival*</label>
                    <input type="date" id="arrival-date" name="arrival-date" class="form-control">
                </div>
                <div class="col-12 col-md-6 input">
                    <label for="make">Make*</label>
                    <select id="make" name="make">
                        <option value="volvo">Select</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 input">
                    <label for="model">Model*</label>
                    <select id="model" name="model">
                        <option value="volvo">Select</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 input">
                    <label for="buildDate">Bulid date*</label>
                    <select id="buildDate" name="buildDate">
                        <option value="volvo">Select</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 input">
                    <label for="fuelType">Fuel Type*</label>
                    <select id="fuelType" name="fuelType">
                        <option value="volvo">Select</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 input">
                    <label for="transmission">Transmission*</label>
                    <select id="transmission" name="transmission">
                        <option value="volvo">Select</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 input">
                    <label for="bodyType">Body Type*</label>
                    <select id="bodyType" name="bodyType">
                        <option value="volvo">Select</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 input">
                    <label for="driveType">Drive Type*</label>
                    <select id="driveType" name="driveType">
                        <option value="volvo">Select</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="space-even">
                    <label for="">Seating Placement*</label>
                    <button style="border: 1px solid black; padding:3px;">Add seating row</button>
                </div>
                <div class="col-10 input">
                    <label for="driveType">Seat row 1</label>
                    <input type="number" name="seatRow1" id="seatRow1">
                    </select>
                </div>
            </div>
            <div class="right">
                <button class="savebtn button">Save as Draft</button>
                <button class="nextbtn button">Next Page</button>
            </div>
        </div>
        <!-- form2 -->

        <!--  -->
        <div class="form-step form-step-active form2">
            <div class="box">
                <div class="btn_upload" id="uploadBtn1">
                    <input type="file" id="file1" onchange="previewImage(this, 'preview1', 'remove1')" multiple>
                    <div id="preview1"></div>
                    <span class="title">Uplaod Images</span>
                </div>
                <button type="button" id="remove1" onclick="removeImage('preview1', 'remove1')" style="display:none">X</button>
            </div>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" id="file2" onchange="previewImage(this, 'preview2', 'remove2')" multiple>
                    <div id="preview2"></div>
                    <span class="title">Uplaod Images</span>
                </div>
                <button type="button" id="remove2" onclick="removeImage('preview2', 'remove2')" style="display:none">X</button>
            </div>
        </div>
    </form>
</div>
@endsection