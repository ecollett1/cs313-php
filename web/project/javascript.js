// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function () {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function load() {
  var opacity = 0.0;
  document.body.style.opacity = 1;
  document.body.style.transition = '2s opacity';
}

var slide = 0;

changePicture();

function changePicture() {
  var number = 0;
  var slideNumber = document.getElementsByClassName("slides");
        
  for (var i = 0; i < slideNumber.length; i++) {
    slideNumber[i].style.display = "none";    
  }      

  slide++;
  if (slide > slideNumber.length) {
    slide = 1;
  }
        
  slideNumber[slide-1].style.display = "inline-block";
  setTimeout(changePicture, 4000);
}