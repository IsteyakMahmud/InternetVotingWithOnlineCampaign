<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once('includes/head.php');

$_id = $_GET['id'];
$sql = "SELECT * FROM posts where id= ".$_id;
$query = $conn->query($sql);
$announcement = $query->fetch_assoc();
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Preloader -->

    <?php
    include_once('includes/topnavbar.php');
    include_once('includes/sidebar.php');
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Compose</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Compose</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <a href="inbox.php" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

                        <?php
                        include 'includes/mail-components.php';
                        ?>

                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Read Announcement</h3>

                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool" title="Previous"><i
                                            class="fas fa-chevron-left"></i></a>
                                    <a href="#" class="btn btn-tool" title="Next"><i
                                            class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="mailbox-read-info">
                                    <h5>Title: <?= $announcement['title'] ?></h5>
                                    <h6>
                                        <span class="mailbox-read-time float-right">Posted At: <?= $announcement['created_at'] ?></span>
                                    </h6>
                                </div>
                                <!-- /.mailbox-read-info -->
                                <div class="mailbox-controls with-border text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm" data-container="body"
                                                title="Delete">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" data-container="body"
                                                title="Reply">
                                            <i class="fas fa-reply"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" data-container="body"
                                                title="Forward">
                                            <i class="fas fa-share"></i>
                                        </button>
                                    </div>
                                    <!-- /.btn-group -->
                                    <button type="button" class="btn btn-default btn-sm" title="Print">
                                        <i class="fas fa-print"></i>
                                    </button>
                                </div>
                                <!-- /.mailbox-controls -->
                                <div class="mailbox-read-message">
                                    <p> <?= $announcement['description'] ?></p>

                                    <p>
                                        <?= $announcement['body'] ?>
                                    </p>


                                    <p>Thanks,<br>Admin</p>
                                </div>
                                <!-- /.mailbox-read-message -->
                            </div>
                            <!-- /.card-body -->

                            <!-- /.card-footer -->
                            <div class="card-footer">
                                <div class="float-right">
                                    <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Reply
                                    </button>
                                    <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward
                                    </button>
                                </div>
                                <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete
                                </button>
                                <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print
                                </button>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
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

<!-- jQuery -->
<?php
include_once('includes/script.php');
?>
</body>
</html>
