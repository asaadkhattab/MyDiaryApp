<?php
//CONNECT TO DATABASE USING MYSQLI
//(CONNECTION, USERNAME, PASSWORD, NAME OF DATABASE)

$database['database_host'] = "localhost";
$database['database_user'] = "root";
$database['database_pass'] = "";
$database['database_name'] = "mydiaryapp";

foreach($database as $key => $value) {
  define(strtoupper($key), $value);
}

$connection = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
if(!$connection)
{
  die("Cannot connect to the database " . mysqli_error($connection));
}

?>
