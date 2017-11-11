<?php

//phpinfo();

$inputuser = $_POST['user1'];
$inputpass = $_POST['pass1'];
$user = "";
$password = "";

$connect = mysqli_connect("localhost", $user, $password);
@mysqli_select_db($users) or die ("Database not found");

$query = "SELECT * FROM `users` WHERE `user` = '$inputuser'";
$querypass = "SELECT * FROM `users` WHERE `password` = '$inputpass'";

echo $query;
echo $querypass;

mysql_close();

?>