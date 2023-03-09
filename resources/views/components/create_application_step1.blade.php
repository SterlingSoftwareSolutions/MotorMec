<form action="/create_step_one" enctype="multipart/form-data" method="post">
    @csrf
    <div class="form-step form-step-active form1">
        <!-- Approval Type  -->
        <div class="field field1">
            <h5>Approval Type</h5>
            <div class="input-group radio">
                <div class="col-md-6">
                    <input class="" type="radio" id="approvel" name="approvel" value="SEV" @if(old('approvel') == 'SEV') checked @endif>
                    <label class="ms-2" for="SEV">SEV's Entry / RAW's Modification</label><br>
                </div>
                <div class="col-md-6">
                    <input type="radio" id="approvel" name="approvel" value="Older Vehicles" @if(old('approvel') == 'Older Vehicles') checked @endif>
                    <label class="ms-2" for="older_vehicle">Vehicle is older than 25 years</label><br>
                </div>

            </div>
        </div>
        <!-- VASS Engineering  -->
        <div class="field field2">
            <h5>VASS Engineering</h5>
            <div class="input-group radio">
                <div class="col-md-6">
                    <input type="radio" id="vass1" name="vass" value="MotorMec Engineering" @if(old('vass') == 'MotorMec Engineering') checked @endif>
                    <label class="ms-2" for="vass1">MotorMec Engineering </label><br>
                </div>
                <div class="col-md-6">
                    <input type="radio" id="vass2" name="vass" value="Own Engineering" @if(old('vass') == 'MotorMec Engineering') checked @endif>
                    <label class="ms-2" for="vass2">Own Engineering</label><br>
                </div>
            </div>
        </div>
        <!-- Vehicle Information  -->
        <h4 class="title">Vehicle Information</h4>
        <div class="hr">&nbsp;</div>
        <div class="row mt-3 vehi-info">
            <!-- Chassis number  -->
            <div class="col-12 col-md-6 input">
                <label for="Chassis">Chassis/Frame Number*</label>
                <input value="{{ old('chassis_no') }}" type="text" id="Chassis" name="chassis_no" class="form-control">
            </div>
            <!-- Estimated date of arrival  -->
            <div class="col-12 col-md-6 input">
                <label for="arrival-date">Estimated date of arrival*</label>
                <input value="{{ old('arrival_date') }}" type="date" id="arrival-date" name="arrival_date" class="form-control">
            </div>
            <!-- make  -->
            <div class="col-12 col-md-6 input">
                <label for="make">Make*</label>
                <select class="form-control" id="make" name="make">
                    <option disabled selected  value="volvo">Select</option>
                    <option value="saab" @if(old('make') == 'saab') selected @endif>Honda</option>
                    <option value="fiat" @if(old('make') == 'fiat') selected @endif>Toyota</option>
                    <option value="audi" @if(old('make') == 'audi') selected @endif>Ford</option>
                </select>
            </div>
            <!-- Model -->
            <div class="col-12 col-md-6 input">
                <label for="model">Model*</label>
                <select class="form-control" id="model" name="model">
                    <option disabled selected  value="volvo">Select</option>
                    <option value="saab" @if(old('model') == 'saab') selected @endif>Honda</option>
                    <option value="fiat" @if(old('model') == 'fiat') selected @endif>Toyota</option>
                    <option value="audi" @if(old('model') == 'audi') selected @endif>Ford</option>
                </select>
            </div>
            <!-- Build Date -->
            <div class="col-12 col-md-6 input">
                <label for="buildDate">Bulid date*</label>
                <input value="{{ old('buildDate') }}" type="date" id="buildDate" name="buildDate" class="form-control">
            </div>
            <!-- Fuel Type -->
            <div class="col-12 col-md-6 input">
                <label for="fuelType">Fuel Type*</label>
                <select class="form-control" id="fuelType" name="fuelType">
                    <option disabled selected value="volvo">Select</option>
                    <option value="saab" @if(old('fuelType') == 'saab') selected @endif>Honda</option>
                    <option value="fiat" @if(old('fuelType') == 'fiat') selected @endif>Toyota</option>
                    <option value="audi" @if(old('fuelType') == 'audi') selected @endif>Ford</option>
                </select>
            </div>
            <!-- Transmission -->
            <div class="col-12 col-md-6 input">
                <label for="transmission">Transmission*</label>
                <select class="form-control" id="transmission" name="transmission">
                    <option  disabled selected value="volvo">Select</option>
                    <option value="saab" @if(old('transmission') == 'saab') selected @endif>Honda</option>
                    <option value="fiat" @if(old('transmission') == 'fiat') selected @endif>Toyota</option>
                    <option value="audi" @if(old('transmission') == 'audi') selected @endif>Ford</option>
                </select>
            </div>
            <!-- Body Type -->
            <div class="col-12 col-md-6 input">
                <label for="bodyType">Body Type*</label>
                <select class="form-control" id="bodyType" name="bodyType">
                    <option  disabled selected value="volvo">Select</option>
                    <option value="saab" @if(old('bodyType') == 'saab') selected @endif>Honda</option>
                    <option value="fiat" @if(old('bodyType') == 'fiat') selected @endif>Toyota</option>
                    <option value="audi" @if(old('bodyType') == 'audi') selected @endif>Ford</option>
                </select>
            </div>
            <!-- Drive Type -->
            <div class="col-12 col-md-6 input">
                <label for="driveType">Drive Type*</label>
                <select class="form-control" id="driveType" name="driveType">
                    <option  disabled selected value="volvo">Select</option>
                    <option value="saab" @if(old('driveType') == 'saab') selected @endif>Honda</option>
                    <option value="fiat" @if(old('driveType') == 'fiat') selected @endif>Toyota</option>
                    <option value="audi" @if(old('driveType') == 'audi') selected @endif>Ford</option>
                </select>
            </div>
            <!-- Seating Rows  -->
            <div class="space-even">
                <label for="">Seating Placement*</label>
                <button type="button" class="btn btn-outline-success">Add seating row</button>
            </div>
            <div class="col-10 input">
                <label for="driveType">Seat row 1</label>
                <input type="number" name="seatRow1" id="seatRow1">
                </select>
            </div>
        </div>
        <!-- Button Set  -->
        <div class="right">
            <button class="btn-save button">Save as Draft</button>
            <button class="btn-next button" id="btn-back-to-top">Next Page</button>
        </div>
    </div>
</form>