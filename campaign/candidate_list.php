<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once('includes/head.php');
$sql = "Select * from candidates";
$result = mysqli_query($conn, $sql);
$candidates = $result->fetch_all(MYSQLI_ASSOC);
?>


<body>
<!-- Navbar -->
<?php
include_once ('includes/navbar.php');
?>
<!-- /.navbar -->

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Candidate List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item active">Candidates</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container">
    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row">
                <?php
                foreach ($candidates as $candidat):
                ?>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            <?=$candidat['platform']?>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b><?=$candidat['firstname']?> <?=$candidat['lastname']?></b></h2>
                                    <p class="text-muted text-sm"><b>Position: </b> <?php
                                        $sql = "Select * from positions where id=".$candidat['position_id'];
                                        $query = $conn->query($sql);
                                        $position = $query->fetch_assoc();
                                        echo $position['description'];
                                        ?> </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small">
                                            <span class="fa-li">
                                                <i class="fas fa-lg fa-building"></i>
                                            </span> Address: 27No Battery Goli, Dampara
                                        </li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                            Phone : <?=$candidat['phone']?>
                                        </li>
                                        <li class="small">
                                            <span class="fa-li">
                                                <i class="fas fa-lg fa-envelope"></i></span>
                                            Email : <?=$candidat['email']?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="<?='img/'.$candidat['photo']?>" alt="user-avatar" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a href="candidate_profile.php?id=<?=$candidat['id']?>" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                endforeach;
                ?>

            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <nav aria-label="Contacts Page Navigation">
                <ul class="pagination justify-content-center m-0">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                </ul>
            </nav>
        </div>
    </div>
    </div>
</section>
<!-- /.content -->


<!-- Footer -->
<?php
include_once ('includes/footer.php');
?>
<!-- Footer -->

<!-- REQUIRED SCRIPTS -->
<?php
include_once ('includes/scripts.php');
?>
</body>
</html>
