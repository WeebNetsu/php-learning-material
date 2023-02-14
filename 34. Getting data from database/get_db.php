<?php
error_reporting(E_ALL); ini_set('display_errors', '1');
	require 'connect_db.php';

	$sql = "SELECT * FROM tblStudent;";

	$result = mysqli_query($con, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['name'] . "<br>";	
		}
	}

	echo "oof<br>";
?>