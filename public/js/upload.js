
// --------------------------------------------------------------------------------------------------------------------

// Function to preview the uploaded image
function previewImage(input, previewId, removeId, uploadBtnId) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      var preview = document.getElementById(previewId);
      preview.innerHTML = '<img src="' + e.target.result + '">';
      var removeBtn = document.getElementById(removeId);
      removeBtn.style.display = 'inline-block';
      var uploadBtn = document.getElementById(uploadBtnId);
      uploadBtn.style.display = 'none';
    }

    reader.readAsDataURL(input.files[0]);
  }
}

// Function to remove the uploaded image
function removeImage(previewId, removeId, uploadBtnId) {
  var preview = document.getElementById(previewId);
  preview.innerHTML = '';
  var removeBtn = document.getElementById(removeId);
  removeBtn.style.display = 'none';
  var uploadBtn = document.getElementById(uploadBtnId);
  uploadBtn.style.display = '';
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

//--------------------------------------------Multiple Images----------------------------------------------------------------
const fileInput = document.getElementById('file-input');
const imageContainer = document.getElementById('image-container');

fileInput.addEventListener('change', (event) => {
  const files = event.target.files;
  for (let i = 0; i < files.length; i++) {
    const file = files[i];
    const reader = new FileReader();
    reader.onload = (event) => {
      const imageUrl = event.target.result;
      const imagePreview = createImagePreview(imageUrl);
      imageContainer.appendChild(imagePreview);
    };
    reader.readAsDataURL(file);
  }
});

function createImagePreview(imageUrl) {
  const imagePreview = document.createElement('div');
  imagePreview.classList.add('image-preview');
  const image = document.createElement('img');
  image.src = imageUrl;
  const removeButton = document.createElement('div');
  removeButton.classList.add('remove-button');
  removeButton.textContent = 'X';
  removeButton.addEventListener('click', () => {
    imagePreview.remove();
  });
  imagePreview.appendChild(image);
  imagePreview.appendChild(removeButton);
  return imagePreview;
}

