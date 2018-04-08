<?php include "db.php";?>
<?php include "functions.php";?>
<?php include "includes/header.php"; ?>

<?php
  deleteRows();
 ?>

    <h1>Delete</h1>

    <div class="container">
      <div class="col-sm-6">


        <form class="" action="login_delete.php" method="post">


          <label for="username">Username</label>
          <div class="form-group">
            <input class="form-group" type="text" name="username" value="">
          </div>


          <label for="password">Password</label>
          <div class="form-group">
            <input class="form-group" type="password" name="password" value="">
          </div>

          <div class="form-group">
            <select name="id" id="" class="" name="">
              <?php
                showAllData();
              ?>

            </select>
          </div>

          <input class="btn btn-primary" type="submit" name="submit" value="Delete">
        </form>

      </div>
<?php include "includes/footer.php"; ?>
