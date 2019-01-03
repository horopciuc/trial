function myFunction() {
	var numberInput = document.getElementById("myNumber").value;
	var paritate = document.getElementById("showResult");
	if (numberInput%2 == 0) {
		paritate.innerHTML = "par";
	}
	else {
		paritate.innerHTML = "impar";
	}
}

