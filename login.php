<?php

if(isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $connection = mysqli_connect('localhost', 'root', '', 'login');
  if($connection)
  {
    echo "Connected!";
  } else {
    die("Database Connection is lost");
  }

  $query = "INSERT INTO users(username, password) ";
  $query .= "VALUE ('$username ', '$password')";

  $result = mysqli_query($connection, $query);

  if(!$result) {
    die('Query not working' . mysqli_error());
  }

  if($username && $password){
    echo $username;
    echo $password;
  } else {
    echo "Make sure you set the fields!";
  }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <div class="container">
      <div class="col-sm-6">
        <form class="" action="login.php" method="post">

          <!--Username-->
          <label for="username">Username</label>
          <div class="form-group">
            <input class="form-group" type="text" name="username" value="">
          </div>

          <!--Password-->
          <label for="password">Password</label>
          <div class="form-group">
            <input class="form-group" type="password" name="password" value="">
          </div>
          <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
