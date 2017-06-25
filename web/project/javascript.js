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