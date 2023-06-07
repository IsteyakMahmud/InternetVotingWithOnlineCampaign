<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once('includes/head.php');
$_id =  $_GET['id'];
$sql = "Select * from posts where id=".$_id;
$query = $conn->query($sql);
$post = $query->fetch_assoc();
?>

<body class="hold-transition layout-top-nav">
<div class="wrapper">
    <!-- Navbar -->
    <?php
    include_once('includes/navbar.php');
    ?>
    <!-- Navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Welcome to our <small>Campiagn Panel</small></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                            <li class="breadcrumb-item active">Welcome</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-text">
                                    <?php
                                    if($post['candidate_id']!=0) {
                                        $sql = "Select * from candidates where id=" . $post['candidate_id'];
                                        $query = $conn->query($sql);
                                        $candidat = $query->fetch_assoc();
                                        echo "Posted By: ".$candidat['firstname'] . " " . $candidat['lastname'];
                                    }
                                    else{
                                        echo "Posted By: Admin ";
                                    }
                                    ?>
                                </h4>
                            </div>
                            <div class="card-body">

                                <h5 ><?=$post['title']?> </h5>

                                <p class="card-text">
                                    <?=$post['body']?>
                                </p>
                                <a href="home.php" class="btn btn-primary">Go Back</a>



                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title m-0">Mahabub Rahaman</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Hello my friends,</h5>

                                <p class="card-text">
                                    It’s time to cheer, keep your consciousness clear and give vote without any fear.
                                    Young or Old, Black or White, Cast your Vote, It’s your right.
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer text-muted">
                                1 days ago
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0">Nasif Muqarrabin</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Hello my voters,</h5>

                                <p class="card-text">
                                    Vote today for a better tomorrow.
                                    Vote for the right by the right of voting.
                                    Give vote oh my dear, without any fear.
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer text-muted">
                                2 days ago
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Footer -->
    <?php
    include_once('includes/footer.php');
    ?>
    <!-- Footer -->


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<?php
include_once('includes/scripts.php');
?>
</body>
</html>
