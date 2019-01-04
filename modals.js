//The button used to open the modal
var btns = document.querySelectorAll("button.modalBtn");

//The modals
var modals = document.querySelectorAll(".modal");

//The close buttons
var spans = document.getElementsByClassName("close");

console.log(btns);

//If the user clicks on the button, the modal is opened
for (var i = 0; i < btns.length; i++) {
	btns[i].onclick = function (e) {
		e.preventDefault();
		modal = document.querySelector(e.target.getAttribute("href"));
		modal.style.display = "block";
	}
}

//If the user clicks on the span, the modal is closed
for (var i = 0; i < spans.length; i++) {
	spans[i].onclick = function() {
		for (var index in modals) {
			if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
		}
	}
}

//If the user clicks outside the modal, close it
window.onclick = function(event) {
	if (event.target.classList.contains('modal')) {
		for (var index in modals) {
			if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
		}
	}
}