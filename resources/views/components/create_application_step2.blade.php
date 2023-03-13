<form action="/create_step_two" enctype="multipart/form-data" method="post">
   @csrf
<div class="form-step form-step-active form2">

    <div class="d-row">
        <div class="column col-6 col-md-3">
            <label for="file1">Engine*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" name="img_engine" id="file1"  onchange="previewImage(this, 'preview1', 'remove1', 'uploadBtn1')" multiple>
                    <div id="preview1"></div>
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
                    <input type="file" name="img_chassis" id="file2" onchange="previewImage(this, 'preview2', 'remove2', 'uploadBtn2')" multiple>
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
        <div class="column col-6 col-md-3">
            <label for="file3">Front Left Corner*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" name="img_front_left" id="file3" onchange="previewImage(this, 'preview3', 'remove3', 'uploadBtn3')" multiple>
                    <div id="preview3"></div>
                    <span class="upload-text" id="uploadBtn3">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                        Uplaod Images
                    </span>
                </div>
                <button type="button" id="remove3" onclick="removeImage('preview3', 'remove3', 'uploadBtn3')" style="display:none">X</button>
            </div>
        </div>
        <div class="column col-6 col-md-3">
            <label for="file4">Front Right Corner*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" name="img_front_right" id="file4" onchange="previewImage(this, 'preview4', 'remove4', 'uploadBtn4')" multiple>
                    <div id="preview4"></div>
                    <span class="upload-text" id="uploadBtn4">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                    </span>
                </div>
                <button type="button" id="remove4" onclick="removeImage('preview4', 'remove4', 'uploadBtn4')" style="display:none">X</button>
            </div>
        </div>
        <div class="column col-6 col-md-3">
            <label for="file5">Rear Left Corner*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" name="img_rear_left" id="file5" onchange="previewImage(this, 'preview5', 'remove5', 'uploadBtn5')" multiple>
                    <div id="preview5"></div>
                    <span class="upload-text" id="uploadBtn5">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                        Uplaod Images
                    </span>
                </div>
                <button type="button" id="remove5" onclick="removeImage('preview5', 'remove5', 'uploadBtn5')" style="display:none">X</button>
            </div>
        </div>
        <div class="column col-6 col-md-3">
            <label for="file6">Rear Right Corner*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" name="img_rear_right" id="file6" onchange="previewImage(this, 'preview6', 'remove6', 'uploadBtn6')" multiple>
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
                    <input type="file" name="img_interior" id="file-input" multiple>
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
            <label for="file7">Invoice*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" name="doc_invoice" id="file7" onchange="previewImage(this, 'preview7', 'remove7', 'uploadBtn7')" multiple>
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
            <label for="file8">Export Certificate*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" name="doc_export_certificate" id="file8" onchange="previewImage(this, 'preview8', 'remove8', 'uploadBtn8')" multiple>
                    <div id="preview8"></div>
                    <span class="upload-text" id="uploadBtn8">
                        <img src="{{asset('images/upload.png')}}" alt="upload image">
                    </span>
                </div>
                <button type="button" id="remove8" onclick="removeImage('preview8', 'remove8', 'uploadBtn8')" style="display:none">X</button>
            </div>
        </div>
        <div class="column">
            <label for="file9">Auction Report*</label>
            <div class="box">
                <div class="btn_upload">
                    <input type="file" name="doc_auction_report" id="file9" onchange="previewImage(this, 'preview9', 'remove9', 'uploadBtn9')" multiple>
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
</form>