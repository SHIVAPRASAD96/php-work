<!DOCTYPE html>
<html>
<head>
	<title>File knowledge</title>
</head>
<body>
<form method="POST",action="file02.php">
	<input type="text" name="name" value="Daemon"></input><br><br>
	<input type="submit"></input>
</form>
</body>
</html>

<?php

if (isset($_POST["name"])) {
	# code...
	$name = $_POST["name"];

	if (!empty($name)) {
		# code...

		$handle = fopen("nameof.txt\n", "a");
		fwrite($handle, $name);
		fclose($handle);

		echo "\nCurrent names in te file";

		$readin = file("nameof.txt");
		$readin_count = count($readin);

		foreach ($readin as $fname) {
			# code...

			echo trim($fname);
			if ($readin_count-1 == 0) {
				# code...
				echo ",";
			}
		}
	

		echo "Data stord successful";
	}
}
else
{
	echo "please type a name";
}
?>