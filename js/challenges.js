// sets variable for each section true


let section1 = true;
let section2 = true;
let section3 = true;
let section4 = true;
let section5 = true;
let section6 = true;






// On click get the value from section, switch/case used to check which one it is, set the HTML, css and add Class List when clicked for each.


function Done(clickedDone){
  let setDone = clickedDone;
  switch (setDone) {
    case "one-done":
    document.getElementsByClassName("first-challenge")[0].innerHTML = "well done!";
    document.getElementsByClassName("first-challenge")[0].style.fontSize = "100px";
      document.getElementsByClassName("desc-1")[0].classList.add("display-none")
      setTimeout(() =>{
          document.getElementsByClassName("section-1")[0].classList.add("display-none")
      }, 1000)
      section1 = false;
      noMoreChallenges()
      break;
      case "two-done":
      document.getElementsByClassName("second-challenge")[0].innerHTML = "well done!";
      document.getElementsByClassName("second-challenge")[0].style.fontSize = "100px";
        document.getElementsByClassName("desc-2")[0].classList.add("display-none")
        setTimeout(() =>{
            document.getElementsByClassName("section-2")[0].classList.add("display-none")
        }, 1000)
            section2 = false;
            noMoreChallenges()
        break;
        case "three-done":
        document.getElementsByClassName("third-challenge")[0].innerHTML = "well done!";
        document.getElementsByClassName("third-challenge")[0].style.fontSize = "100px";
          document.getElementsByClassName("desc-3")[0].classList.add("display-none")
          setTimeout(() =>{
              document.getElementsByClassName("section-3")[0].classList.add("display-none")
          }, 1000)
              section3 = false;
              noMoreChallenges()
          break;
          case "four-done":
          document.getElementsByClassName("fourth-challenge")[0].innerHTML = "well done!";
          document.getElementsByClassName("fourth-challenge")[0].style.fontSize = "100px";
            document.getElementsByClassName("desc-4")[0].classList.add("display-none")
            setTimeout(() =>{
                document.getElementsByClassName("section-4")[0].classList.add("display-none")
            }, 1000)
                section4 = false;
                noMoreChallenges()
            break;
            case "five-done":
            document.getElementsByClassName("fifth-challenge")[0].innerHTML = "well done!";
            document.getElementsByClassName("fifth-challenge")[0].style.fontSize = "100px";
              document.getElementsByClassName("desc-5")[0].classList.add("display-none")
              setTimeout(() =>{
                  document.getElementsByClassName("section-5")[0].classList.add("display-none")
              }, 1000)
                  section5 = false;
                  noMoreChallenges()
              break;
              case "six-done":
              document.getElementsByClassName("sixth-challenge")[0].innerHTML = "well done!";
              document.getElementsByClassName("sixth-challenge")[0].style.fontSize = "100px";
                document.getElementsByClassName("desc-6")[0].classList.add("display-none")
                setTimeout(() =>{
                    document.getElementsByClassName("section-6")[0].classList.add("display-none")
                }, 1000)
                    section6 = false;
                    noMoreChallenges()
                break;
    default:

  }


}



// checks if all the buttons been clicked.

function noMoreChallenges(){
  if (section1 === false && section2 === false && section3 === false && section4 === false && section5 === false && section6 === false){
    setTimeout(() =>{
      document.getElementsByClassName("no-challenges")[0].style.display = "block";
      document.getElementsByClassName("no-challenges")[1].style.display = "block";
    }, 1000)
  }
}




// Same code as the first function just for the Forfeit button

function Forfeit(clickedFailure){
  let setFailure = clickedFailure;
  switch (setFailure) {
  case "one-forfeit":
  document.getElementsByClassName("first-challenge")[0].innerHTML = "Maybe, Next time!";
  document.getElementsByClassName("first-challenge")[0].style.fontSize = "70px";
    document.getElementsByClassName("desc-1")[0].classList.add("display-none")
    setTimeout(() =>{
        document.getElementsByClassName("section-1")[0].classList.add("display-none")
    }, 1000)
          section1 = false;
            noMoreChallenges()
    break;
    case "two-forfeit":
    document.getElementsByClassName("second-challenge")[0].innerHTML = "Maybe, Next time!";
    document.getElementsByClassName("second-challenge")[0].style.fontSize = "70px";
      document.getElementsByClassName("desc-2")[0].classList.add("display-none")
      setTimeout(() =>{
          document.getElementsByClassName("section-2")[0].classList.add("display-none")
      }, 1000)
            section2 = false;
              noMoreChallenges()
      break;
      case "three-forfeit":
      document.getElementsByClassName("third-challenge")[0].innerHTML = "Maybe, Next time!";
      document.getElementsByClassName("third-challenge")[0].style.fontSize = "70px";
        document.getElementsByClassName("desc-3")[0].classList.add("display-none")
        setTimeout(() =>{
            document.getElementsByClassName("section-3")[0].classList.add("display-none")
        }, 1000)
              section3 = false;
                noMoreChallenges()
        break;
        case "four-forfeit":
        document.getElementsByClassName("fourth-challenge")[0].innerHTML = "Maybe, Next time!";
        document.getElementsByClassName("fourth-challenge")[0].style.fontSize = "70px";
          document.getElementsByClassName("desc-4")[0].classList.add("display-none")
          setTimeout(() =>{
              document.getElementsByClassName("section-4")[0].classList.add("display-none")
          }, 1000)
                section4 = false;
                  noMoreChallenges()
          break;
          case "five-forfeit":
          document.getElementsByClassName("fifth-challenge")[0].innerHTML = "Maybe, Next time!";
          document.getElementsByClassName("fifth-challenge")[0].style.fontSize = "70px";
            document.getElementsByClassName("desc-5")[0].classList.add("display-none")
             setTimeout(() =>{
                    document.getElementsByClassName("section-5")[0].classList.add("display-none")
                }, 1000)
                      section5 = false;
                        noMoreChallenges()
            break;
            case "six-forfeit":
            document.getElementsByClassName("sixth-challenge")[0].innerHTML = "Maybe, Next time!";
            document.getElementsByClassName("sixth-challenge")[0].style.fontSize = "70px";
            document.getElementsByClassName("desc-6")[0].classList.add("display-none")
            setTimeout(() =>{
                document.getElementsByClassName("section-6")[0].classList.add("display-none")
            }, 1000)
                  section6 = false;
                    noMoreChallenges()
              break;
  default:


  }


}

// MouseOver and MouseOut Function for image to video and video to image function

let video1 = document.querySelector(".video-1");

video1.addEventListener("mouseover", function( event ) {

  event.target.style.display = "none";
  document.querySelector(".video").classList.remove("display-none")

  setTimeout(function() {
    event.target.style.display = "block";
    document.querySelector(".video").classList.add("display-none")
  }, 2000);
});

let video2 = document.querySelector(".video-2");

video2.addEventListener("mouseover", function( event ) {

  event.target.style.display = "none";
  document.querySelector(".video2").classList.remove("display-none")

  setTimeout(function() {
    event.target.style.display = "block";
    document.querySelector(".video2").classList.add("display-none")
  }, 2000);
});

let video3 = document.querySelector(".video-3");

video3.addEventListener("mouseover", function( event ) {

  event.target.style.display = "none";
  document.querySelector(".video3").classList.remove("display-none")

  setTimeout(function() {
    event.target.style.display = "block";
    document.querySelector(".video3").classList.add("display-none")
  }, 2000);
});


let video4 = document.querySelector(".video-4");

video4.addEventListener("mouseover", function( event ) {

  event.target.style.display = "none";
  document.querySelector(".video4").classList.remove("display-none")

  setTimeout(function() {
    event.target.style.display = "block";
    document.querySelector(".video4").classList.add("display-none")
  }, 2000);
});

let video5 = document.querySelector(".video-5");

video5.addEventListener("mouseover", function( event ) {

  event.target.style.display = "none";
  document.querySelector(".video5").classList.remove("display-none")

  setTimeout(function() {
    event.target.style.display = "block";
    document.querySelector(".video5").classList.add("display-none")
  }, 2000);
});

let video6 = document.querySelector(".video-6");

video6.addEventListener("mouseover", function( event ) {

  event.target.style.display = "none";
  document.querySelector(".video6").classList.remove("display-none")

  setTimeout(function() {
    event.target.style.display = "block";
    document.querySelector(".video6").classList.add("display-none")
  }, 2000);
});



noMoreChallenges()
