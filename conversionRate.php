<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Conversion Rate</title>
	<script src="js/covertion.js"></script>
</head>
<body>


	<!--Page Name -->
	<h3 style="color: red;">Page 3 [Conversion Rate]</h3>

	<!-- link include -->
	<?php
	include 'conversionSite.php';
	?>

	<h3 style="color: red;">Conversion Rate : </h3>

	<!-- Form Start -->
	<form action="php/convertionAction.php" method = "GET" name="form" onsubmit="ajax(this);return false;">

		<!--Conversion Type -->
		<input type="text" name="conversionType"  id="conversionType" placeholder="Conversion Type">
		<span style="color: red;" id="conversionTypeError"></span>

		<!--Unit intput taking -->
		<input type="text" name="unit"  value="1" id="unit" readonly>
		<span style="color: red;" id="unitError"></span>

		<!--Rate -->
		<input type="text" name="rate"  id="rate" placeholder="rate">
		<span style="color: red;" id="rateError"></span><br><br>
		
		<!--Submit Button -->
		<input type="submit" name="submit" style="color: orange ;" value="submit"><br><br>
	</form>

	<!--Form Writing Successfull or not printing -->
	<span style="color: green;" id="result" name="result"></span>
	

	


</body>
</html>