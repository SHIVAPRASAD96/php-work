<?php

$name = $_FILES['file']['name']; 
//$size = $_FILES['file']['size'];
//$type = $_FILES['file']['type'];
//Temporary name need to be explined
$tmp_name = $_FILES['file']['tmp_name'];

if (isset($name)) {
	# code...
	if (!empty($name)) {
		# code...
		$location ='uploads/';

		if (move_uploaded_file($tmp_name,$location.$name)){
			echo "uploaded Successfully to uploaded";

		}
		else
		{

		 echo "Error Occurred";
	} 
	else {
		# code...
	echo "Please choos a file";
	}
		}
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data"><br><br><br><br>
<input type="file" name="file"></input><br><br><br> 
	<input type="submit" value="Submit"></input>
</form>
</body>
</html>