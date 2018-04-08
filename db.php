<?php
//CONNECT TO DATABASE USING MYSQLI
//(CONNECTION, USERNAME, PASSWORD, NAME OF DATABASE)
$connection = mysqli_connect('localhost', 'root', '', 'login');

if(!$connection)
{
  die("Cannot connect to the database " . mysqli_error($connection));
}

?>
