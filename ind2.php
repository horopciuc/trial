<!DOCTYPE html>
<html>
<head>
	<title>Explore</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link rel="stylesheet" type="text/css" href="ind2.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>

<body>
	<table>
		<h1 class="exploreSt">Explore<br></h1>
		<h2 class="yourSt">your<br></h2>
		<h1 class="worldSt">World</h1>
		
				
		<div>
		<form autocomplete="off">
			<fieldset>
				<legend>Start a new Journey</legend>
				<label>From:
				<input type="text" name="startCountry" list="countries"/>
				<datalist id="countries">
					<option value="Wakanda"/>
					<option value="Atlantida"/>
					<option value="Ammme"/>
					<option value="Orgrimmar"/>
					<option value="Las Fierbinti"/>				
				</datalist>
				</label>
				<label>To:
				<input type="text" name="startCountry" list="countries"/>
				<datalist id="countries">
					<option value="Wakanda"/>
					<option value="Atlantida"/>
					<option value="Ammme"/>
					<option value="Orgrimmar"/>
					<option value="Las Fierbinti"/>				
				</datalist>
				</label>

			</fieldset>
		</form>
		</div> 

		
		<div class="nav">
			<input type="checkbox" id="menu"/>
			<label for="menu">&#9776; Menu</label>

			<div class="multi-level">
				<div class="item">
					<input type="checkbox" id="A"/>
					<img src="arrow.jpg" class="arrow"><label for="A"><!-- <i class="fas fa-plane"></i> -->Planes</label>

						<ul>
							<li><a href="#">Boeing737</a></li>
							<li><a href="#">Boeing747</a></li>
							<li><a href="#">Boeing767</a></li>
						</ul>
				</div>

				<div class="item">
					<input type="checkbox" id="B"/>
					<img src="arrow.jpg" class="arrow"><label for="B"><!-- <i class="fas fa-flag"></i> -->Destinations</label>

					<ul>
						<li>
							<div class="sub-item">
								<input type="checkbox" id="B-A"/>
								<img src="arrow.jpg" class="arrow"><label for="B-A">Spain</label>

								<ul>
									<li><a href="#">Places to visit</a></li>
									<li><a href="#">Hotels</a></li>
									<li><a href="#">Restaurants</a></li>
								</ul>
							
							</div>
						</li>

						<li>
							<div class="sub-item">
								<input type="checkbox" id="B-B"/>
								<img src="arrow.jpg" class="arrow"><label for="B-B">Italy</label>

								<ul>
									<li><a href="#">Places to visit</a></li>
									<li><a href="#">Hotels</a></li>
									<li><a href="#">Restaurants</a></li>
								</ul>
							
							</div>
						</li>

						<li>
							<div class="sub-item">
								<input type="checkbox" id="B-C"/>
								<img src="arrow.jpg" class="arrow"><label for="B-C">France</label>

								<ul>
									<li><a href="#">Places to visit</a></li>
									<li><a href="#">Hotels</a></li>
									<li><a href="#">Restaurants</a></li>
								</ul>
							
							</div>
						</li>
											
					</ul>

				</div>



			</div>
		</div>
	</table>

</body>
</html>