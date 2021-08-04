
	<?php
	
	//Value Initializing
	$conversionType = $unit = $rate = "";
	$convertionError = $unitError = $rateError = "";
	$flag = false;
	$successfull = $error = "";

	//define file name
	define("filepath", "../dt.txt");

	//Post method checking
	if($_SERVER['REQUEST_METHOD']==="GET")
	{

		//Validating--

		if(empty($_GET['conversionType']))
		{
			echo "Field cant be empty";
			$flag = true;
		}
		if (empty($_GET['unit'])) {
			echo "Field can't be empty";
			$flag= true;
		}
		if(empty($_GET['rate']))
		{
			echo "Field can't be empty";
			$flag = true;
		}

		// if validation successfully
		if(!$flag)
		{
			$conversionType = input_data($_GET['conversionType']);

			//Numeric value checking
			if(is_numeric($_GET['unit']))
			{
				$unit = input_data($_GET['unit']);
			}
			else
			{
				$unitError = "Please enter numeric value";
			}

			if(is_numeric($_GET['rate']))
			{
				$rate = input_data($_GET['rate']);
			}
			else
			{
				$rateError = "Please enter numeric value";
			}

 $fileData = read(); 
 if(empty($fileData))
  {
   $data[] = array("converType" => $conversionType, "unit" => $unit,"rate" => $rate); 
 } 
 else { 
 	$data = json_decode($fileData);
  array_push($data, array("converType" => $conversionType, "unit" => $unit,"rate" => $rate));
   } 
  $data_encode = json_encode($data); 
  write(""); 
  $res = write($data_encode);

			//Checking Writing Successful or not

			if ($res) {
				
				echo "Saved Successfully";
			}
			else{
				echo "Can't save it";
			}


		}

	}

	//Input Formate
function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }


  //File writing
  function write($content) {
$file = fopen(filepath, "w");
$fw = fwrite($file, $content . "\n");
fclose($file);
return $fw;
}
	function read() {
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