<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
if ($mysqli->connect_error) {
	# code...
	die('Connect Error (' . $mysqli->connect_errno . ')'
		. $mysqli->connect_error);
}
else{
	//echo "Connection made";
}
$mysqli->close();

?>