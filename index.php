
<link rel="stylesheet" type="text/css" href="main.css">

<div>
	<h1>Welcome</h1>
</div>
<table>
	<div>

	<div>
	<tr>
		<td>
			FirstName
		</td>
		<td>	
			LastName	
		</td>
	</tr>
	
	<tr>
	<td class="dropdown">
		<button class="dropbtn">Food</button>
		<div class="dropdown-content">
			<a href="element1.php">Element1</a>			
			<a href="#">Element2</a>			
			<a href="#">Element3</a>			
		</div>		
	</td>

	<td class="dropdown">
		<button class="dropbtn">Seasons</button>
		<div class="dropdown-content">
			<a href="#">Element1</a>			
			<a href="#">Element2</a>			
			<a href="#">Element3</a>			
		</div>		
	</td>
	</tr>
	</div>

	<div>
	<form>
		<fieldset>
			<legend>Using the datalist input type</legend>
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

		</fieldset>
	</form>
	</div>

	<div class="first common">First</div>
	<div class="second common">Second</div>
	<div class="third common">Third</div>

</div>


</table>

