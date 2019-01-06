function myFunction() {

	var //selectors
		number1 	  = $('#myNumber1').val(),
		number2 	  = $('#myNumber2').val(),
		paritate1 	  = $('#showResult1'),
		paritate2 	  = $('#showResult2'),
		primeNumber   = $('#showResult3'),
		isPrime 	  = true;

	if (number1 == '') {
		// paritate1.html("-");
		paritate1.empty().append("-");
	} else if (number1 % 2 == 0) {
		paritate1.html("par");
	} else {
		paritate1.html("impar");
	}

	if (number2 == '') {
		paritate2.html("-");
	} else if (number2 % 2 == 0) {
		paritate2.html("par");
	} else {
		paritate2.html("impar");
	}

	if (number2 < 2) {
		primeNumber.html("Try again");
	} else {
		for (var i = number2; i >= number1; --i) {
			isPrime = true;
			for (var j = 2; j <= i / 2; ++j) {
				if (i % j == 0) {
					isPrime = false;
					break;
				}
			}
			if (isPrime) {
				primeNumber.html(i);
				break;
			}
		}

		if (!isPrime) {
			primeNumber.html("No prime number found");
		}
	}
}

