<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once('includes/head.php');
$sql = "SELECT posts.*, candidates.firstname, candidates.lastname
FROM posts
INNER JOIN candidates
ON posts.candidate_id = candidates.id ORDER BY created_at DESC";

$result = mysqli_query($conn, $sql);
$posts = $result->fetch_all(MYSQLI_ASSOC);
$sqll = "SELECT * from posts where candidate_id = 0 ORDER BY created_at DESC";
$result1 = mysqli_query($conn, $sqll);
$anns = $result1->fetch_all(MYSQLI_ASSOC);
function get_time_ago($time)
{
    $time_difference = time() - $time;

    if ($time_difference < 1) {
        return 'less than 1 second ago';
    }
    $condition = array(12 * 30 * 24 * 60 * 60 => 'year',
        30 * 24 * 60 * 60 => 'month',
        24 * 60 * 60 => 'day',
        60 * 60 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($condition as $secs => $str) {
        $d = $time_difference / $secs;

        if ($d >= 1) {
            $t = round($d);
            return 'about ' . $t . ' ' . $str . ($t > 1 ? 's' : '') . ' ago';
        }
    }
}

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
                        <?php
                        foreach ($anns as $ann):
                        ?>
                                <div class="card card-primary card-outline mt-3">
                                    <div class="card-body">

                                        <h4><b>Announcment:</b></h4>
                                        <h4 class="card-title text-center"><b><?= $ann['title'] ?></b></h4>
                                        <p class="card-text mx-3">
                                            <?= $ann['description'] ?>
                                        </p>
                                        <a href="show.php?id=<?=$ann['id']?>" class="card-link mx-3">Read More</a>

                                    </div>
                                    <div class="card-footer text-muted">
                                        Posted at <?= $ann['created_at'] ?>
                                    </div>

                                </div>
                            <?php
                        endforeach;
                        ?>
                    </div>
                    <div class="col-lg-5">
                        <?php
                        foreach ($posts as $post):
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title m-0"><?=$post['firstname']?> <?=$post['lastname']?></h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?=$post['title']?> </h5>

                                <p class="card-text">
                                    <?=$post['description']?>
                                </p>
                                <a href="show.php?id=<?=$post['id']?>" class="btn btn-primary">Read details</a>
                            </div>
                            <div class="card-footer text-muted">
                                Posted at <?= $post['created_at'] ?>
                            </div>
                        </div>
                        <?php
                        endforeach;
                        ?>

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
