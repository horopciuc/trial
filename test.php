<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="testSt.css">
	<script src="js.js"></script>
</head>
<body>

	<div>
		<ul>
			<li><a href="#">Bikes</a>
				<ul>
					<li>
						<button id="myBtn">Model XZ</button>
						<div id="myModal" class="modal">
							<div class="modal-content">
								<span class="close">&times;</span>
								<img src="baudi.jpg">
								<div class="myDescription">Description
									<br/>
									<div id="bikePrice">Price</div>
									<br/>
									<p class="myPara">500$</p>
								</div>
								<script type="text/javascript" src="mdl.js"></script>
							</div>							
						</div>
					</li>
					<li><a href="#">Model Y</a></li>
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
		<input type="number" id="myNumber" min="1" max="100" ondrop="return false;" onpaste="return false;">
		<button onclick="myFunction()">Try</button>
		<p id="showResult"></p>
		<script type="text/javascript" src="inputJS.js"></script>
	</div>


</body>
</html>


