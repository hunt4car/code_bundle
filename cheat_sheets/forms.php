<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forms</title>
	<link rel="stylesheet" href="includes/css/form_style.css">
</head>
<body>

<form action="#">
	<label>Simple input:</label>
	<input class="input" name="name" placeholder="Placeholder" type="text">

	<label>Expandable input:</label>
	<textarea class="input_expandable" name="name" placeholder="Placeholder" type="text"></textarea>

	<label>Radio buttons:</label>
	<span class="radio_button">
	Choice<input name="choice" type="radio" value="Placeholder">
	</span>
	<span class="radio_button">
	Choice<input name="choice" type="radio" value="Placeholder">
	</span>
	<span class="radio_button">
	Choice<input name="choice" type="radio" value="Placeholder">
	</span>

	<label>Check boxes:</label><br>
	<span class="checkbox">
	Choice<input type="checkbox" name="vehicle" value="Bike">
	</span>
	<span class="checkbox">
  	Choice<input type="checkbox" name="vehicle" value="Car" checked>
  	</span>

  	<br>

	<label>Drop down:</label>
	<select>
	<option value="Product Inquiry">Product Inquiry</option>
	<option value="Feedback">Feedback</option>
	<option value="Complaint">Complaint</option>
	</select>

	<label>Small button:</label>
	<button class="small_button">Small button</button>

	<label>Medium button:</label>
	<button class="medium_button">Medium button</button>

	<label>Large button:</label>
	<button class="large_button">Large button</button>

</form>
	
</body>
</html>