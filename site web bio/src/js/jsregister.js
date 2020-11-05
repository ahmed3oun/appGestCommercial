
//modal register

// Get the modal
var ModalRegister = document.getElementById("ModalRegister");
// Get the button that opens the modal
var btnR = document.getElementById("btnR");

// Get the <span> element that closes the modal
var spa = document.getElementsByClassName("c")[0];
var but = document.getElementsByClassName("cancelb")[0];

// When the user clicks on the button, open the modal
btnR.onclick = function() {
  ModalRegister.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spa.onclick = function() {
  ModalRegister.style.display = "none";
}
but.onclick = function() {
  ModalRegister.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == ModalRegister) {
    ModalRegister.style.display = "none";
  }
}