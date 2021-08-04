<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>History Page</title>
	<script src="js/history.js"></script>
</head>
<body>

	<!--Page Name -->
	<h3 style="color: red;">Page 3 [History]</h3>

	<!--link include -->
	<?php include 'conversionSite.php'; ?>

	<h3 style="color: red;">Conversion History : </h3>

	<!--History -->
	<form action="php/historyAction.php" method="GET" name="form" onsubmit="ajax(this);return false;">
		<input type="text" name="type" id="type">
		
		<input type="submit" name="search" value="Search">
	</form>
<div id="result"></div>

		
		


</body>
</html>