<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once('includes/head.php');

$id = $_GET['id'];

$sql = "SELECT * FROM elections where id = ".$id;
$query = mysqli_query($conn, $sql);
$election = $query->fetch_assoc();
$sql = "SELECT * FROM positions where election_id =".$election['id']."  ORDER BY priority ASC";
$result = mysqli_query($conn, $sql);
$positions = $result->fetch_all(MYSQLI_ASSOC);
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
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Election Result- <?= $election['title'] ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                            <li class="breadcrumb-item active">Elections</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container">
                <?php
                $psql = "SELECT * FROM publish where election_id = " . $id;
                $pquery = mysqli_query($conn, $psql);
                $publish = $pquery->fetch_assoc();
                if ($publish['is_published'] == 1):
                ?>
                <div class="row">
                    <?php
                    foreach ($positions as $position):
                    $sql = "SELECT * FROM candidates WHERE position_id = '" . $position['id'] . "'";
                    $result = mysqli_query($conn, $sql);
                    $cans = $result->fetch_all(MYSQLI_ASSOC);
                    ?>
                    <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?= $position['description'] ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Task</th>
                                    <th>Total Votes</th>
                                    <th>Vote%</th>
                                    <th style="width: 40px">Progress</th>
                                </tr>
                                </thead>
                                <?php
                                $sl =1;
                                foreach ($cans as $can):
                                $sql = "SELECT * FROM votes";
                                $result = mysqli_query($conn, $sql);
                                $total_votes = mysqli_num_rows($result);
                                $sql = "SELECT * FROM votes WHERE candidate_id = '" . $can['id'] . "'";
                                $result = mysqli_query($conn, $sql);
                                $num_votes = mysqli_num_rows($result);
                                $per = ($num_votes / $total_votes) * 100;
                                ?>
                                <tbody>
                                <tr>
                                    <td><?= $sl ?>.</td>
                                    <td><?= $can['firstname'] ?> <?= $can['lastname'] ?></td>
                                    <td><span class="badge bg-danger"><?= $num_votes ?></span></td>
                                    <td><span class="badge bg-danger"><?= number_format($per, 2) ?>%</span></td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: <?= $per ?>%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                $sl=$sl+1;
                                endforeach;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <?php
                    endforeach;
                    ?>
                </div>
                <?php
                else:
                    ?>
                    <h2>Result is not yet published.</h2>

                <?php
                endif;
                ?>
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