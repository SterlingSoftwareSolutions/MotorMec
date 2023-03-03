@extends('layouts.app')
@include('sidebar')
@include('header')
@section('content')
<div class="application">
    <form action="app-form"> 
    <h4 class="title text-center">New Application</h4>
<div class="progressBar">
    <div class="progresss" id="progress"></div>
    <div class="progress-step progress-step-active" data-title="CAR INFO"></div>
    <div class="progress-step" data-title="Supporting Documents"></div>
    <div class="progress-step" data-title="Payment"></div>
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
        <button class="btn-save button">Save as Draft</button>
        <button class="btn-next button">Next Page</button>
    </div>
</div>
<!-- form2 -->

<!--  -->
<div class="form-step form-step-active form2">
    <div class="d-row">
        <div class="column">
            <label for="file1">Engine*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" id="file1" onchange="previewImage(this, 'preview1', 'remove1', 'uploadBtn1')" multiple>
                    <div id="preview1"></div>
                    <span class="upload-text" id="uploadBtn1">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                        Uplaod Images
                    </span>
                </div>
                <button type="button" id="remove1" onclick="removeImage('preview1', 'remove1', 'uploadBtn1')" style="display:none">X</button>
            </div>
        </div>
        <div class="column">
            <label for="file2">Chassis/ Frame Photo*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" id="file2" onchange="previewImage(this, 'preview2', 'remove2', 'uploadBtn2')" multiple>
                    <div id="preview2"></div>
                    <span class="upload-text" id="uploadBtn2">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                    </span>
                </div>
                <button type="button" id="remove2" onclick="removeImage('preview2', 'remove2', 'uploadBtn2')" style="display:none">X</button>
            </div>
        </div>
    </div>
    <h4 class="title">Exterior Images</h4>
    <div class="hr">&nbsp;</div>
    <div class="d-row">
        <div class="column">
            <label for="file3">Front Right Corner*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" id="file3" onchange="previewImage(this, 'preview3', 'remove3', 'uploadBtn3')" multiple>
                    <div id="preview3"></div>
                    <span class="upload-text" id="uploadBtn3">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                        Uplaod Images
                    </span>
                </div>
                <button type="button" id="remove3" onclick="removeImage('preview3', 'remove3', 'uploadBtn3')" style="display:none">X</button>
            </div>
        </div>
        <div class="column">
            <label for="file4">Rear Right Corner*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" id="file4" onchange="previewImage(this, 'preview4', 'remove4', 'uploadBtn4')" multiple>
                    <div id="preview4"></div>
                    <span class="upload-text" id="uploadBtn4">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                    </span>
                </div>
                <button type="button" id="remove4" onclick="removeImage('preview4', 'remove4', 'uploadBtn4')" style="display:none">X</button>
            </div>
        </div>
        <div class="column">
            <label for="file5">Rear Left Corner*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" id="file5" onchange="previewImage(this, 'preview5', 'remove5', 'uploadBtn5')" multiple>
                    <div id="preview5"></div>
                    <span class="upload-text" id="uploadBtn5">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                        Uplaod Images
                    </span>
                </div>
                <button type="button" id="remove5" onclick="removeImage('preview5', 'remove5', 'uploadBtn5')" style="display:none">X</button>
            </div>
        </div>
        <div class="column">
            <label for="file6">Rear Right Corner*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" id="file6" onchange="previewImage(this, 'preview6', 'remove6', 'uploadBtn6')" multiple>
                    <div id="preview6"></div>
                    <span class="upload-text" id="uploadBtn6">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                    </span>
                </div>
                <button type="button" id="remove6" onclick="removeImage('preview6', 'remove6', 'uploadBtn6')" style="display:none">X</button>
            </div>
        </div>
    </div>
    <h4 class="title">Interior Images</h4>
    <div class="hr">&nbsp;</div>
    <div class="column">
    <label for="file">Please add at least 4 clear photos</label>
    <div class="d-row">
        <div class="longBox">
            <div id="image-container"></div>
        </div>
        <div class="box">
            <div class="btn_upload">
                <input type="file" id="file-input" multiple>
                <span class="upload-text" id="uploadBtn6">
                    <img src="{{asset('images/upload.png')}}" alt="upload image">
                </span>
            </div>
        </div>

    </div>
    </div>
    <h4 class="title">Documents</h4>
    <div class="hr">&nbsp;</div>
    <div class="d-row">
        <div class="column">
            <label for="file7">Front Right Corner*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" id="file7" onchange="previewImage(this, 'preview7', 'remove7', 'uploadBtn7')" multiple>
                    <div id="preview7"></div>
                    <span class="upload-text" id="uploadBtn7">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                        Uplaod Images
                    </span>
                </div>
                <button type="button" id="remove7" onclick="removeImage('preview7', 'remove7', 'uploadBtn7')" style="display:none">X</button>
            </div>
        </div>
        <div class="column">
            <label for="file8">Rear Right Corner*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" id="file8" onchange="previewImage(this, 'preview8', 'remove8', 'uploadBtn8')" multiple>
                    <div id="preview8"></div>
                    <span class="upload-text" id="uploadBtn8">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                    </span>
                </div>
                <button type="button" id="remove8" onclick="removeImage('preview8', 'remove8', 'uploadBtn8')" style="display:none">X</button>
            </div>
        </div>
        <div class="column">
            <label for="file9">Rear Left Corner*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" id="file9" onchange="previewImage(this, 'preview9', 'remove9', 'uploadBtn9')" multiple>
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
    <button class="btn-prev button">Back</button>
    <div class="right">
        <button class="btn-save button">Save as Draft</button>
        <button class="btn-next button">Next Page</button>
    </div>
</div>
<!-- form3 -->
<div class="form-step form-step-active form3">
    
</div>
</form>
</div>
@endsection