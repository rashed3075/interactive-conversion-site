<?php
//Define Folder

	define("filepath", "../dt.txt");
$convertion = $numberValue = "";
$valueError = "";
$flag = false;


//Post method checking
if ($_SERVER['REQUEST_METHOD']==="GET") {
	//Value Initializing

	//Validation
	if (empty($_GET['numberValue'])||empty($_GET['convertion'])) {
		
		echo "php value can't be empty";
		$flag = true;
	}

	// If validation successfull
	if(!$flag)
	{

		$convertion = input_data($_GET['convertion']);
		if(is_numeric($_GET['numberValue']))
		{
			$numberValue = $_GET['numberValue'];
		}
		else
		{
			echo "Please Enter numeric number";
		}
			$result = "";
	$fileData = read();
		$users = json_decode($fileData);
		foreach ($users as $user) {
			 
			 if($user->converType === $convertion )
			 {
			 	$result = $numberValue * $user->rate;
			 }
		}

echo "Result : " . $result;
	}
}
 function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

  //File Write Logic 
   function write($content) {
$file = fopen(filepath, "a");
$fw = fwrite($file, $content . "\n");
fclose($file);
return $fw;
}




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