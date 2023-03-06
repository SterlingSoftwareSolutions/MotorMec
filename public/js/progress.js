//--------------------------------next previous buttons---------------------------------------------------------------------------

const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step")

let formStepsNum= 0;

nextBtns.forEach((btn) =>{
    btn.addEventListener("click", () =>{
        formStepsNum++;
        updateFormSteps();
        updateProgessbar();
    });
});

prevBtns.forEach((btn) =>{
    btn.addEventListener("click", () =>{
        formStepsNum--;
        updateFormSteps();
        updateProgessbar();
    });
});


function updateFormSteps() {

    formSteps.forEach(formStep =>{
        formStep.classList.contains("form-step-active") &&
        formStep.classList.remove("form-step-active");
    });

    formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgessbar(){
    progressSteps.forEach((progressStep, idx) =>{
        if(idx < formStepsNum + 1){
            progressStep.classList.add('progress-step-active');
        }else{
            progressStep.classList.remove('progress-step-active');
        }
    });
    
    const progressActive = document.querySelectorAll(".progress-step-active");

    progress.style.width = ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}









//--------------------------------------------------------------back to top button--------------------------------------

let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}