

//Declaring variable Storage, JSON string becomes object of saved item "notes2" from a local Storage or empty array.


let storage = JSON.parse(localStorage.getItem('notes2')) || [];




//if variable storage is not equal to null then jump to "show" function

if(storage !== null){
  show();
}




// Two functions "OverlayOn" and "OverlayOff", when clicked note-form style either changes to block or none;


function overlayOn(){
    document.querySelector(".note-form").classList.remove("fadeOut");
  document.querySelector(".note-form").style.display = "block"
}

function quit(){
  document.querySelector(".note-form").style.display = "none"
}

function overlayOff(){

    document.querySelector(".note-form").classList.add("fadeOut");
    setTimeout(quit, 990);
}






// Two variables "NoteTitle" and "noteDescription" storing the value of two inputs "#input-title" and "#input-description"
// Check if input values are empty if yes inform via Alert, if not store those two values into an object called "noted"
// set input values to null;
//store the object into the "storage" array, go to function "show()"

function Submit(){


  let noteTitle = document.querySelector("#input-title").value
  let noteDescription = document.querySelector("#input-description").value

  if(noteTitle == "" ||  noteDescription == ""){
    return alert("Fill in all the Inputs")
  } else{
    noted = {
      title: noteTitle,
      description: noteDescription
    }

}






  document.querySelector("#input-title").value = "";
  document.querySelector("#input-description").value = "";

  storage.push(noted)
  show();
}









// variable declaring returing array object, stops the duplication of objects.
// map function creating and showing the objects on the screen
// Local Storage storing array.


function show(){

  let notes2 = Array.from(document.querySelectorAll('.show-note2'));
  if(notes2.length > 0){
    notes2.forEach(noted =>{
      noted.remove();
    })
  }


  storage.map(noted =>{

    let divi = document.createElement("div");
    divi.classList = "show-note2 draggable"

    let title = document.createElement("h1");
    let desc = document.createElement("p");
    title.innerText = noted.title;
    desc.innerText = noted.description;
    let deleteButton = document.createElement('a');
    deleteButton.innerHTML ='Delete';
    deleteButton.classList.add('delete-button')

    divi.appendChild(title);
    divi.appendChild(desc);
    divi.appendChild(deleteButton)

    var element = document.querySelector(".show-note");
    element.appendChild(divi);


    localStorage.setItem('notes2', JSON.stringify(storage));
    quit();
    deleteButton3();




  })



}





//Declares all the objects, for each object it looks for noteTitle, event listener when clicked goes to function called deleteButton2 with parameter noteTitle2;
// for loop going through all the object stored in "storage" array, if title equals the title noteTitle2 then delete the note;
// updates the Local Storage, goes back to show() function;


function deleteButton3(){
  deleteButtonsF = Array.from(document.querySelectorAll('.delete-button'));
  deleteButtonsF.forEach(button =>{
  let noteTitle2 = button.previousSibling.previousSibling.innerText;
  button.addEventListener('click', () => {

    deleteButton2(noteTitle2);
  })
})
}

function deleteButton2(noteTitle2){
  for(let i=0; i< storage.length; i++){
     if(storage[i].title == noteTitle2){
       storage.splice(i, 1);
     }
  }
  localStorage.setItem('notes2', JSON.stringify(storage))

  show();
}

// Interact JS library used to create this drop and drag feature, referenced in the documentation

// target elements with the "draggable" class
interact('.draggable')
  .draggable({
    // enable inertial throwing
    inertia: true,
    // keep the element within the area of it's parent
    modifiers: [
      interact.modifiers.restrictRect({
        restriction: 'parent',
        endOnly: true
      })
    ],
    // enable autoScroll
    autoScroll: true,

    listeners: {
      // call this function on every dragmove event
      move: dragMoveListener,

      // call this function on every dragend event

    }
  })

function dragMoveListener (event) {
  var target = event.target
  // keep the dragged position in the data-x/data-y attributes
  var x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx
  var y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy

  // translate the element
  target.style.webkitTransform =
    target.style.transform =
      'translate(' + x + 'px, ' + y + 'px)'

  // update the posiion attributes
  target.setAttribute('data-x', x)
  target.setAttribute('data-y', y)
}

// this function is used later in the resizing and gesture demos
window.dragMoveListener = dragMoveListener
