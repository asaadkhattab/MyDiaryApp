<?php include "includes/header.php" ?>

    <div id="wrapper">

<!-- Navigation -->
<?php include "includes/navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Admin Dashboard
                            <small>Author</small>
                        </h1>

                        <div class="col-xs-6">
                          <form class="" action="index.html" method="post">

                            <label for="cat_title">Categories</label>
                            <div class="form-group">
                              <input type="text" name="cat_title" value="" class="form-control">
                            </div>

                            <div class="form-group">
                              <input type="submit" name="submit" value="Add Category" class="btn btn-warning">
                            </div>

                          </form>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "includes/footer.php" ?>
