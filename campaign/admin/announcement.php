<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once('includes/head.php');
$sql = "SELECT * FROM posts WHERE candidate_id=0";
$result = mysqli_query($conn, $sql);
$posts = $result->fetch_all(MYSQLI_ASSOC);
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
                        <h1>Inbox</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                            <li class="breadcrumb-item active">Posts</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <a href="compose.php" class="btn btn-primary btn-block mb-3">Compose</a>
                    <?php
                    include 'includes/mail-components.php';
                    ?>
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Announcements</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Search Mail">
                                    <div class="input-group-append">
                                        <div class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <?php
                            include 'includes/mailbox.php';
                            ?>
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped">
                                    <tbody>
                                    <?php
                                    foreach ($posts as $post):
                                        ?>
                                        <tr>
                                            <td>

                                                <div class="icheck-primary">
                                                    <a href="read-announcement.php?id=<?= $post['id'] ?>"><i
                                                            class="fas fa-eye text-warning"></i></a>
                                                    <a href="post_delete.php?id=<?= $post['id'] ?>"><i
                                                            class="pl-2 fas fa-trash text-danger"></i></a>
                                                </div>
                                            </td>
                                            <td class="mailbox-subject"><b><?= $post['title'] ?></b></td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date"><?= $post['created_at'] ?></td>
                                        </tr>
                                    <?php
                                    endforeach;
                                    ?>
                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>
                        <!-- /.card-body -->
                        <?php
                        include 'includes/mail-footer.php';
                        ?>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
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
