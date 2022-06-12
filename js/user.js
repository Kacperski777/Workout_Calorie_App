let update1 = document.querySelector(".upd1")
let update2 = document.querySelector(".upd2")
let update3 = document.querySelector(".upd3")


function showInput(id){
  let ids = id;


  switch (ids) {
    case "update-1":
      update1.classList.remove("display-none");
      break;
      case "update-2":
        update2.classList.remove("display-none");
        break;
        case "update-3":
          update3.classList.remove("display-none");
          break;
    default:

  }

}


function hide(idCancel){
  let cancelIds = idCancel;

  switch (cancelIds) {
    case "hide-1":
      update1.classList.add("display-none");
      break;
      case "hide-2":
        update2.classList.add("display-none");
        break;
        case "hide-3":
          update3.classList.add("display-none");
          break;
    default:

  }

}


function showPwd(){
  let pass = document.querySelector("#pass")
  if (pass.type === "password") {
   pass.type = "text";
 } else {
   pass.type = "password";
 }
}
