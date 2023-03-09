const textBox = document.querySelector('.textbox');
const removeIcon = document.querySelector('.remove-icon');

removeIcon.addEventListener('click', function() { 
  textBox.classList.toggle('clicked');
  if (textBox.classList.contains('clicked')) {
    removeIcon.classList.remove('remove-icon');
    removeIcon.classList.add('recover-icon');
  } else {
    removeIcon.classList.remove('recover-icon');
    removeIcon.classList.add('remove-icon');
  }
  
});

 
