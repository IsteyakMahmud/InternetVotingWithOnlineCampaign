<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once('includes/head.php');
$_id =  $_GET['id'];

$sql = "Select * from candidates where id=".$_id;
$query = $conn->query($sql);
$candidat = $query->fetch_assoc();

$sql = "Select * from positions where id=".$candidat['position_id'];
$query = $conn->query($sql);
$position = $query->fetch_assoc();

$sql = "Select * from elections where id=".$position['election_id'];
$query = $conn->query($sql);
$elect = $query->fetch_assoc();
$sql = "SELECT * from posts where candidate_id = ".$_id." ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
$posts = $result->fetch_all(MYSQLI_ASSOC);
?>
<body>
<!-- Navbar -->
<?php
include_once('includes/navbar.php');
?>
<!-- /.navbar -->

<div class="container">
    <div class="main-body">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Candidates</a></li>
                <li class="breadcrumb-item active" aria-current="page">Candidate Profile</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="<?='img/'.$candidat['photo']?>" alt="Admin"
                                 class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4><?=$candidat['firstname']?> <?=$candidat['lastname']?></h4>
                                <p class="text-secondary mb-1"><?=$position['description']?></p>
                                <p class="text-muted font-size-sm"><?=$candidat['platform']?>, <?=$elect['title']?></p>
                                <button class="btn btn-primary">Follow</button>
                                <button class="btn btn-outline-primary">Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="John Doe">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Website:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="John Doe">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Github:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="John Doe">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">LinkedIn:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="John Doe">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Facebook:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="John Doe">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Instagram:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="John Doe">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <a class="btn btn-info " target="__blank" href="#">Save Changes</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gutters-sm">
                    <?php
                    foreach ($posts as $post):
                        ?>
                        <div class="col-sm-6 mb-3">
                            <div class="card">
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
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<?php
include_once('includes/footer.php');
?>
<!-- Footer -->

<!-- REQUIRED SCRIPTS -->
<?php
include_once('includes/scripts.php');
?>
</body>
</html>


