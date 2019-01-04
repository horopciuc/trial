// Get the modal
var ttnModal = document.getElementById('titanModal');

// Get the button that opens the modal
var ttnBtn = document.getElementById('titanBtn');

// Get the <span> element that closes the modal
// var ttnSpan = document.getElementsByClassName('close')[0];

// Get the modal
var cndnModal = document.getElementById('canadianModal');

// Get the button that opens the modal
var cndnBtn = document.getElementById('canadianBtn');

// Get the <span> element that closes the modal
// var cndnSpan = document.getElementsByClassName('close')[1];

// When the user clicks the button, open the modal 
ttnBtn.onclick = function() {
  ttnModal.style.display = "block";
}

// When the user clicks the button, open the modal 
cndnBtn.onclick = function() {
  cndnModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
// cndnSpan.onclick = function() {
//   cndnModal.style.display = "none";
// }

// // When the user clicks on <span> (x), close the modal
// ttnSpan.onclick = function() {
//   ttnModal.style.display = "none";
// }

var closeBtns = document.getElementsByClassName("close");
var closeArray;
for (closeArray = 0; closeArray < closeBtns.length; closeArray++) {
	closeBtns[closeArray].addEventListener("click", function() {
		this.parentElement.style.display = "none";
	});
}

var openBtns = document.getElementsByClassName("openBtn")
var openArray;
for (openArray = 0; openArray < openBtns.length; openArray++) {
	openBtns[openArray].addEventListener("click", function() {
		this.parentElement.style.display = "block";
	})
}

// cndnBtn.onclick = function {
// 	cndnModal.style.display = "block"; 
// }

// cndnSpan.onclick = function {
// 	cndnModal.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == ttnModal) {
    ttnModal.style.display = "none";    
  }
  else if (event.target == cndnModal) {
  	cndnModal.style.display = "none";
  }
}