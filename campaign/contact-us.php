<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once ('includes/head.php');
?>

<body>
<!-- Navbar -->
<?php
include_once('includes/navbar.php');
?>
<!-- /.navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Contact Us</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active">Contact us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="container">
        <!-- Default box -->
        <div class="card">
            <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                    <div class="">
                        <h2><strong>Internet Voting System with Online Campaign Panel</strong></h2>
                        <p class="lead mb-5">Dept of CSE, IIUC<br>
                            Phone: +8801843180191<br>
                            Email: mahabubiiuc45@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-7">
                    <form action="contact.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputName">Subject:</label>
                            <input type="text" class="form-control" id="inputName" name="subject"/>
                        </div>
                        <div class="form-group">
                            <label for="formFileMultiple" class="form-label">Credentials/Evidences:</label>
                            <input type="file" class="form-control" id="formFileMultiple" name="proof">
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Message</label>
                            <textarea id="inputMessage" class="form-control" name="message" rows="4"></textarea>
                        </div>
                        <input name="user" value="<?php
                        if(isset($_SESSION['voter'])){
                            echo 'Voter';
                        }else{
                            echo 'Candidate';
                        }

                        ?>" hidden>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


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
