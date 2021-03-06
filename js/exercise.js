// Very similar code to Notes.js, all the comment explaining the code is included there.




let noteTable = document.querySelector('.note-table');
let add = document.querySelector('.adde');
let noteDeleteButtons;




let noteList = JSON.parse(localStorage.getItem('notes')) || [];


if(noteList !== null){
  appendNotes();
}




add.addEventListener('submit', (e)=>{
  Data(e);
})


function Data(e){

  e.preventDefault();


  let time = document.querySelector("#input-time").value
  let type = document.querySelector("#input-type").value
  let calories = document.querySelector("#input-calories").value

  if (time == "" || type == "" || calories == ""){
    alert("Please fill in all the fields!")
  }
  else{
    note = {
      title: time,
      description: type,
      calories: calories
    }

  }


    document.querySelector("#input-time").value = null;
    document.querySelector("#input-type").value = null;
    document.querySelector("#input-calories").value = null;
  noteList.push(note);
  appendNotes();

  //document.getElementsByClassName("title-note")[0].innerHTML = title;
  //document.getElementsByClassName("description-note")[0].innerHTML = description;


};


function appendNotes(){
   let notes = Array.from(document.querySelectorAll('.noteItem'));
   if(notes.length > 0){
     notes.forEach(note =>{
       note.remove();
     })
   }


   noteList.map(note =>{

    let tr = document.createElement('tr');
    tr.classList = "noteItem";
    let tdTitle = document.createElement('td');
    tdTitle.innerText = note.title;
    let tdNote = document.createElement('td');
    tdNote.innerText = note.description;
    let tdCalories = document.createElement('td');
    tdCalories.innerText = note.calories;
    let tdDelete = document.createElement('td');
    tdDelete.innerHTML ='&times';
    tdDelete.classList.add('delete-item')

    tr.appendChild(tdTitle);
    tr.appendChild(tdNote);
    tr.appendChild(tdCalories);
    tr.appendChild(tdDelete);


    noteTable.appendChild(tr);
    deleteButton();
    localStorage.setItem('notes', JSON.stringify(noteList));


   })

}

function deleteButton(){
  noteDeleteButtons = Array.from(document.querySelectorAll('.delete-item'));
  noteDeleteButtons.forEach(button =>{
  let noteTitle = button.previousSibling.previousSibling.previousSibling.innerText;
  button.addEventListener('click', () => {
    deleteNote(noteTitle);
  })
})
}

function deleteNote(noteTitle){
  for(let i=0; i< noteList.length; i++){
     if(noteList[i].title == noteTitle){
       noteList.splice(i, 1);
     }
  }
  localStorage.setItem('notes', JSON.stringify(noteList))
  appendNotes();
}
