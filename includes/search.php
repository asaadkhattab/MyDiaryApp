<?php include "includes/database.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/search.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
              <?php
              if(isset($_POST['submit'])) {
                $search = $_POST['search'];

                //SEARCH DATABASE
                $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                $search_query = mysqli_query($connection, $query);

                if(!$search_query){
                  die("Query could not connect to database" . mysqli_error($connection));
                }

                $count = mysqli_num_rows($search_query);
                if($count == 0) {
                  echo "<h1>Not available </h1>"
                } else {


                  while($row = mysqli_fetch_assoc($search_query)){
                    $post_title  = $row['post_title'];
                    $post_author  = $row['post_author'];
                    $post_date    = $row['post_date'];
                    $post_image   = $row['post_image'];
                    $post_content = $row['post_content'];
                    ?>

                    <h1 class="page-header">
                        Page Heading
                        <small>Secondary Text</small>
                    </h1>

                    <!-- First Blog Post -->
                    <h2>
                        <a href="#"><?php echo $post_title ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?php echo $post_author ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                    <hr>
                    <img class="img-responsive" src="images/<<?php echo $post_image; ?>" alt="">
                    <hr>
                    <p><?php $post_content ?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>

                  <?php }
                }
              }
               ?>




              </div><!--End col-md-8 -->
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>


<?php include "includes/sidebar.php" ?>

        </div>
        <!-- /.row -->

        <hr>
<!--Footer-->
<?php include "includes/footer.php"; ?>
