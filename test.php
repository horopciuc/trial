<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="testSt.css">
</head>
<body>

	<div>
		<ul>
			<li><a href="#">Bikes</a>
				<ul>
					<li>
						<button class="modalBtn" href="#modal1">Titan</button>
						<div id="modal1" class="modal">
							<div class="modal-content">
								<span class="close">&times;</span>
								<img src="baudi.jpg">
								<div class="myDescription">Description
									<br/>
									<div id="bikePrice">Price</div>
									<br/>
									<p class="myPara">500$</p>
								</div>
							</div>							
						</div>
					</li>
					<li>
						<button class="modalBtn" href="#modal2">Canadian</button>
						<div id="modal2" class="modal">
							<div class="modal-content">
								<span class="close">&times;</span>
								<img src="canadian.jpg">
								<!-- <div class="myDescription">Description
									<br/>
									<div id="bikePrice">Price</div>
									<br/>
									<p class="myPara">500$</p>
								</div> -->
							</div>							
						</div>
					</li>
					<li><a href="#">Model Z</a></li>
				</ul>
			</li>
			<li><a href="#">Accesories</a>
				<ul>
					<li><a href="#">Helmets</a></li>
					<li><a href="#">Suits</a></li>
					<li><a href="#">Gloves</a></li>
				</ul>
			</li>

			<li><a href="#">Trip with us</a>
				<ul>
					<li><a href="#">Las Fierbinti Trip</a></li>
					<li><a href="#">Vaslui Trip</a></li>
					<li><a href="#">Atlantida Trip</a></li>					
				</ul>
			</li>
		</ul>
	</div>
	<div class="numberCls">
		<div>Enter your number</div>
		<input type="number" id="myNumber1" min="1" max="1000" ondrop="return false;" onpaste="return false;">
		<p id="showResult1"></p>
		<input type="number" id="myNumber2" min="1" max="1000" ondrop="return false;" onpaste="return false;">
		<p id="showResult2"></p>
		<p id="showResult3"></p>
		<button class="checkBtn" onclick="myFunction()">Check</button>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js.js"></script>
	<script type="text/javascript" src="modals.js"></script>
	<script language="Javascript" type="text/javascript" src="inputJS.js"></script>
</body>
</html>