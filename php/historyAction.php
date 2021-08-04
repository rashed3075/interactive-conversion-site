<?php
		//define file name
		define("filepath", "../dt.txt");

		$fileData = read(); 
		$users=json_decode($fileData);
		if(empty($_GET['type'])){
		//create list to read data
		echo "<table border='1'>";
		echo "<tr>";
        echo "<th>Conversion type</th>";
        echo "<th>Unit</th>";
          echo "<th>Rate</th>";
		echo "</tr>";
//read all Data 1 by 1
 if(isset($users)){
foreach($users as $user) 
			{ 
				echo"<tr>";
				echo"<td>$user->converType</td>";
				echo"<td>$user->unit</td>";
				echo"<td>$user->rate</td>";
				echo"</tr>";
			 }
 }
		

		

		echo "</table>";
	}
	else{
			//create list to read data
		echo "<table border='1'>";
		echo "<tr>";
        echo "<th>Conversion type</th>";
        echo "<th>Unit</th>";
          echo "<th>Rate</th>";
		echo "</tr>";
//read all Data 1 by 1
 if(isset($users)){
foreach($users as $user) 
			{ 
				if($user->converType===$_GET['type']){
	echo"<tr>";
				echo"<td>$user->converType</td>";
				echo"<td>$user->unit</td>";
				echo"<td>$user->rate</td>";
				echo"</tr>";
				}
			
			 }
 }
		

		

		echo "</table>";

	}

		//read function login applying
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
function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }


		?>