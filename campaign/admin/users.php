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
                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Candidate List</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <th>Position</th>
                                    <th>Photo</th>
                                    <th>Firstname</th>
                                    <th>Email</th>
                                    <th>Platform</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql = "SELECT *, candidates.id AS canid FROM candidates LEFT JOIN positions ON positions.id=candidates.position_id ORDER BY positions.priority ASC";
                                    $query = $conn->query($sql);
                                    while ($row = $query->fetch_assoc()) {
                                        $image = (!empty($row['photo'])) ? '../img/' . $row['photo'] : '../img/profile.jpg';
                                        ?>
                                        <tr>
                                            <td><?= $row['description'] ?></td>
                                            <td>
                                                <img src="<?=$image?>" width="40px" height="40px">
                                            </td>
                                            <td><?= $row['firstname'] ?> <?= $row['lastname'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['platform'] ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
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
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<?php
//include_once('includes/script.php');
?>
</body>
</html>
