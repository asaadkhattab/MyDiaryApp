<?php include "db.php"?>
<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

    <h1>Hello, world!</h1>

    <div class="container">
      <div class="col-sm-6">
        <pre>
          <?php readRows();  ?>
        </pre>
      </div>
<?php include "includes/footer.php"; ?>
