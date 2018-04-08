<?php include "db.php"; ?>
<?php include "funcitons.php"; ?>
<?php include "includes/header.php"; ?>

<?php
  createRows();
?>


    <h1>Create</h1>

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
          <input class="btn btn-primary" type="submit" name="submit" value="Add User">
        </form>
      </div>
<?php include "includes/footer.php" ?>
