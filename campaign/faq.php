<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php
include_once('includes/head.php');
?>

<body>
<!-- Nav Bar -->
<?php
include_once('includes/navbar.php');
?>
<!-- /Nav Bar -->

<!-- F.A.Q Section -->
<section class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card card-style1 border-0">
                    <div class="card-body p-4 p-md-5 p-xl-6">
                        <div class="text-center mb-2-3 mb-lg-6">
<!--                            <span class="section-title text-primary">FAQ's</span>-->
                            <h2 class="h1 mb-0 text-secondary">Frequently Asked Questions</h2><br>
                        </div>
                        <div id="accordion" class="accordion-style">
                            <div class="card mb-3">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne"><span
                                                    class="text-theme-secondary me-2">Q.</span>How can I get ID &
                                            Password?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-bs-parent="#accordion">
                                    <div class="card-body">
                                        Our system will generate an ID and Password for you. This ID and Password will be sent on your
                                        mobile and email. This generated ID & Password will be randomly generated with words.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo"><span
                                                    class="text-theme-secondary me-2">Q.</span> How can I send complain to the admin?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-bs-parent="#accordion">
                                    <div class="card-body">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree"><span
                                                    class="text-theme-secondary me-2">Q.</span> When will our election be held?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-bs-parent="#accordion">
                                    <div class="card-body">
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                        their default model text, and a search for 'lorem ipsum' will uncover many web
                                        sites still in their infancy. Various versions have evolved over the years.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                            <span class="text-theme-secondary me-2">Q.</span>
                                            Why I am not getting any SMS or Email about our project?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                     data-bs-parent="#accordion">
                                    <div class="card-body">
                                        course usually has its golf cart rules on its scorecard or posted in the
                                        clubhouse or near the first tee, so be sure to check those out but don’t sweat
                                        it! The fact that you are getting some exercise, and hanging out with some good
                                        friends!
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive"><span
                                                    class="text-theme-secondary me-2">Q.</span> How can I can register my account?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                     data-bs-parent="#accordion">
                                    <div class="card-body">
                                        It was popularised in the with the release of Letraset sheets containing Lorem
                                        Ipsum passages, and more recently with desktop publishing software like Aldus
                                        PageMaker including versions of Lorem Ipsum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /F.A.Q Section -->

<!----- footer ----->
<?php
include_once('includes/footer.php');
?>
<!---- footer ----->
<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->
<?php
include_once('includes/scripts.php');
?>
</body>
</html>
