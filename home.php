<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<script src="js/home.js"></script>
</head>
<body>

	<!--PHP Section -->
	<?php
	//Define Folder
	define("filepath", "dt.txt");

	?>




	<!--Page name -->

	<h3 style="color: red;">Page 1 [Home]</h3>

	<!--Linking Page -->

	<?php include 'conversionSite.php'; ?>

	<h3 style="color: red;">Converter : </h3>

	<!--Form Starting -->
	<form action="php/homeAction.php" method="GET" name="mForm" onsubmit="ajax(this);return false;">

		<!--Category Selection -->
	<select name="convertion" id="covertion">

		<?php
		$fileData = read();
		$users = json_decode($fileData);
		foreach ($users as $user) {
			echo "<option value='$user->converType'>$user->converType </option>" ;
		}

		?>
		
	</select>
	<span style="color: red;" name="convertionError" id="conversionError"></span>
	<br><br>

<!--converting input taking -->
	<label for="numberValue">Value :</label>
	<input type="text" name="numberValue" placeholder="Enter numeric number" id="numberValue">
	<span style="color: red;" id="valueError">
		

	</span><br><br>

	<!-- Submit Button -->
	<input type="submit" name="submit"value="Submit"><br><br>
	<!-- Result Printing area -->

	
		
	</form>
<h1 id="result"></h1>
	
<?php
function read() 
{
$file = fopen(filepath, "r");
$fz = filesize(filepath);
$fr = "";
if($fz > 0) {
$fr = fread($file, $fz);
}
fclose($file);
return $fr;
}
?>



</body>
</html>