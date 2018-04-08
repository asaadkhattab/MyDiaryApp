<?php
//CONNECT TO DATABASE USING MYSQLI
//(CONNECTION, USERNAME, PASSWORD, NAME OF DATABASE)

$database['db_host'] = "localhost";
$database['db_user'] = "root";
$database['db_pass'] = "";
$database['db_name'] = "mydiaryapp";

foreach($database as $key => $value) {
  define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$connection)
{
  die("Cannot connect to the database " . mysqli_error($connection));
}

?>
