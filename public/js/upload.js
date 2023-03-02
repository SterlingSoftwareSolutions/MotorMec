

// --------------------------------------------------------------------------------------------------------------------

function previewImage(input, previewId, removeId) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      var preview = document.getElementById(previewId);
      preview.innerHTML = '<img src="' + e.target.result + '">';
      var removeBtn = document.getElementById(removeId);
      removeBtn.style.display = 'inline-block';
    }

    reader.readAsDataURL(input.files[0]);
  }
}

// Function to remove the uploaded image
function removeImage(previewId, removeId) {
  var preview = document.getElementById(previewId);
  preview.innerHTML = '';
  var removeBtn = document.getElementById(removeId);
  removeBtn.style.display = 'none';
}



// Handle form submission
var form = document.querySelector("form");
form.addEventListener("submit", function (e) {
    e.preventDefault();

    // Collect all uploaded files
    var files = [];
    var fileInputs = document.querySelectorAll("input[type=file]");
    for (var i = 0; i < fileInputs.length; i++) {
        var input = fileInputs[i];
        for (var j = 0; j < input.files.length; j++) {
            files.push(input.files[j]);
        }
    }

    // Do something with the files, e.g. upload to a server
    console.log(files);
});
