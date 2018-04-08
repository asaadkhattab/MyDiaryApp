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

<?php include "includes/header.php"; ?>

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
<?php include "includes/footer.php"; ?>
