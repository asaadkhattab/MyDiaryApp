<?php include "db.php";?>
<?php

  function createRows() {
    global $connection;
    if(isset($_POST['submit'])) {

      $username = $_POST['username'];
      $password = $_POST['password'];


      $query = "INSERT INTO users(username, password) ";
      $query .= "VALUE ('$username ', '$password')";

      $result = mysqli_query($connection, $query);

      if(!$result) {
        die('Query not working' . mysqli_error());
      } else
      {
        echo "User Created.";
      }

      if($username && $password){
        echo $username;
        echo $password;
      } else {
        echo "Make sure you set the fields!";
      }
    }
  }

  function readRows(){
    global $connection;
    $query = "SELECT * FROM users ";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die('query failed ' . mysqli_error())
    }

    while($row = mysqli_fetch_assoc($result)){
      print_r($row);
    }
  }

  function showAllData() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die('Query not working' . mysqli_error());
    }


    while($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      echo "<option value='$id'>$id</option>";
    }
  }


function UpdateTable() {
if(isset($_POST['submit'])){
  global $connection;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  $query = "UPDATE users SET "
  $query .= "username = '$username', ";
  $query .= "password = '$password' ";
  $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if(!$result) {
      die("Query failed" . mysqli_error($connection));
    } else
    {
      echo "Updated Successfully!"
    }
  }
}

function deleteRows() {

if(isset($_POST['Submit'])) {
  global $connection;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  $query = "DELETE FROM users "

  $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die("Query failed" . mysqli_error($connection));
    } else {
      echo "Deleted!"
    }
  }
}
