<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once('includes/head.php');
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Nav Bars -->
    <?php
    include_once('includes/topnavbar.php');
    include_once('includes/sidebar.php');
    ?>
    <!-- Nav Bars -->

    <!-- Main Section -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
<!--            <div class="container-fluid">-->
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <!-- Voter -->
                    <div class="col-lg-3 col-6">
                        <?php
                        $sql = "SELECT * FROM voters";
                        $query = $conn->query($sql);
                        ?>
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?=$query->num_rows?></h3>

                                <p>Voters</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-vote-yea"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- /Voter -->

                    <!-- Candidates -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <?php
                        $sql = "SELECT * FROM candidates";
                        $query = $conn->query($sql);
                        ?>
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?=$query->num_rows?></h3>
                                <p>Candidates</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./Candidates -->

                    <!-- Posts -->
                    <div class="col-lg-3 col-6">
                        <?php
                        $sql = "SELECT * FROM posts WHERE candidate_id!=0";
                        $query = $conn->query($sql);
                        $_SESSION['posts'] = $query->num_rows;
                        ?>
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><?=$query->num_rows?></h3>
                                <p>Posts</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-chart-bar"></i>
                            </div>
                            <a href="post.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./Posts -->

                    <!-- Announcements -->
                    <div class="col-lg-3 col-6">
                        <?php
                        $sql = "SELECT * FROM posts WHERE candidate_id=0";
                        $query = $conn->query($sql);
                        $_SESSION['announcements'] = $query->num_rows;
                        ?>
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><?=$query->num_rows?></h3>
                                <p>Announcements</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./Announcements -->

                    <!-- Email -->
                    <div class="col-lg-3 col-6">
                        <?php
                        $sql = "SELECT * FROM contactus";
                        $query = $conn->query($sql);
                        $_SESSION['inboxes'] = $query->num_rows;
                        ?>
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?=$query->num_rows?></h3>
                                <p>Email</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <a href="inbox.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./Email -->
                </div>
        </section>
    </div>
    <!-- Main Section -->
</div>
  <!-- Footer -->
    <?php
    include_once('includes/footer.php');
    ?>
  <!-- Footer -->



<!-- ./wrapper -->

<!-- jQuery -->
<?php
include_once('includes/script.php');
?>
</body>
</html>
