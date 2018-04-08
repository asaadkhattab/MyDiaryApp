<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">MyDiaryApp Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
      <li><href="../index.php">Main Page</a></li>


        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>

                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <!-- DASHBOARD -->
            <li>
                <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>

            <!--POSTS -->
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#posts_drop"><i class="fa fa-fw fa-arrows-v"></i> POSTS <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="posts_drop" class="collapse">
                    <li>
                        <a href="#">VIEW POSTS </a>
                    </li>
                    <li>
                        <a href="#">ADD POST</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> CATEGORIES</a>
            </li>

            <li class="active">
                <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> COMMENTS</a>
            </li>

            <!-- USERS -->
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> USERS <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="#">Dropdown Item</a>
                    </li>
                    <li>
                        <a href="#">Dropdown Item</a>
                    </li>
                </ul>
            </li>


            <li class="active">
                <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> PROFILE </a>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
