<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','chatboard');

$connection = mysqli_connect(HOST,USER,PASS,DB);

if(!$connection){
	echo "Failed : ". mysqli_connect_error();
//}else{
//	echo "Success";
}

?>