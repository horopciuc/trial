// Get the modal
var cndnModal = document.getElementById('canadianModal');

// Get the button that opens the modal
var cndnBtn = document.getElementById("canadianBtn");

// Get the <span> element that closes the modal
var cndnSpan = document.getElementsByClassName("close")[1];

// When the user clicks the button, open the modal 
cndnBtn.onclick = function() {
  cndnModal.style.display = "block";
}

cndnSpan.onclick = function() {
  cndnModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == cndnModal) {
    cndnModal.style.display = "none";
  }
}