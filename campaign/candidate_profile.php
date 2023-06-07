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
<!--                                <p class="text-muted font-size-sm">--><?//=$candidat['platform']?><!--, --><?//=$elect['title']?><!--</p>-->
<!--                                <button class="btn btn-primary">Follow</button>-->
<!--                                <button class="btn btn-outline-primary">Message</button>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                </svg>
                                Website
                            </h6>
                            <span class="text-secondary">https://bootdey.com</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                </svg>
                                Github
                            </h6>
                            <span class="text-secondary">mahabub</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-linkedin mr-2 icon-inline text-info">
                                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                </svg>
                                LinkedIn
                            </h6>
                            <span class="text-secondary">@mahabub</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-instagram mr-2 icon-inline text-danger">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>
                                Instagram
                            </h6>
                            <span class="text-secondary">mahabub_piash</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-facebook mr-2 icon-inline text-primary">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                                Facebook
                            </h6>
                            <span class="text-secondary">Mahabub</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?=$candidat['firstname']?> <?=$candidat['lastname']?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?=$candidat['email']?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?=$candidat['phone']?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Mobile</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?=$candidat['phone']?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                Battery Goli, Dampara, Chattagram
                            </div>
                        </div>
                        <hr>
<!--                        <div class="row">-->
<!--                            <div class="col-sm-12">-->
<!--                                <a class="btn btn-info " href="edit-profile.php?id=--><?//=$candidat['id']?><!--">Edit</a>-->
<!--                            </div>-->
<!--                        </div>-->
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
