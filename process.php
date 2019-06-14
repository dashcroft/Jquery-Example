<?php

include('db.php');

if(isset($_POST['name']) && isset($_POST['replaced'])){
	// echo 'success'; check to see if the $_POST is set
	$name = mysqli_real_escape_string($connection, $_POST['name']);
	$replaced = mysqli_real_escape_string($connection, $_POST['replaced']);
	$date = mysqli_real_escape_string($connection, $_POST['date']);

	ini_set('date.timezone','America/New_York');
	$date = date('F j, Y, G:i a');

	$query = "INSERT INTO posts(name,post,date)
						VALUES ('$name','$replaced','$date')";

			if(!mysqli_query($connection,$query)){
				echo 'failed :' . mysqli_error($connection);
			}else{
				echo "<li class='list-group-item'>".$date.'--'.$name.' wrote <br>'.$replaced."</li>";
			}



}

?>