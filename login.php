<?php

$user = $_POST["user"];
$pass = $_POST["pass"];

if ($user == "miquaz" && $pass == "mowingmiquaz321"){

	header('Location: dashboard.php');

} else {

	header('Location: Failed.html');

}

?>