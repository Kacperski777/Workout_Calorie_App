// This Was meant to be use for background on Home Page but changed my mind


var myIndex = 0;

function slide() {
  var x = document.getElementsByClassName("mySlides");
  for (var i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }

// for loop, if i is smaller than mySlides.length then i increases, mySlides[number i] displays none


  myIndex++;

// variable myIndex increases by 1
  if (myIndex > x.length) {
    myIndex = 1}
  x[myIndex-1].style.display = "block";


  // if variable myIndex is bigger than mySlides.length then myIndex equals 1,
  //mySlides whatever number is stored in variable myIndex - 1, displays block;
  setTimeout(slide, 5000); // Change image every 5 seconds
}
