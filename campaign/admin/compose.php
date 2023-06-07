<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once ('includes/head.php');
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Preloader -->

    <?php
    include_once ('includes/topnavbar.php');
    include_once ('includes/sidebar.php');
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
                        <form action="store.php" method="post">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Compose New Message</h3>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Title" name="title">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Description" name="description">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <textarea id="compose-textarea" class="form-control" style="height: 200px" placeholder="Announcement" name="body"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="float-right">
                                    <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>
                                    <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                                </div>
                                <a href="inbox.php" class="btn btn-default"><i class="fas fa-times"></i> Discard</a>
                            </div>

                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                        </form>
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
    include_once ('includes/footer.php');
    ?>
    <!-- Footer -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php
include_once ('includes/script.php');
?>
</body>
</html>
