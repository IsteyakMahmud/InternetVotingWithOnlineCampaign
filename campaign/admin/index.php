<?php
session_start();
if (isset($_SESSION['admin'])) {
    header('location:home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once ('includes/head.php');
?>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
        <h1 class="text-center">IIUC Election Commission</h1>
        <a href="index.php"><b>Election </b>Camping <b>Protal</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="login.php" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
                    </div>
                </div>
            </form>

            <p class="mb-1">
                <a href="#">I forgot my password</a>
            </p>
            <!--      <p class="mb-0">-->
            <!--        <a href="register.php" class="text-center">Register a new membership</a>-->
            <!--      </p>-->
        </div>
        <!-- /.login-card-body -->
    </div>
    <?php
    if (isset($_SESSION['error'])) {
        echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>" . $_SESSION['error'] . "</p> 
			  	</div>
  			";
        unset($_SESSION['error']);
    }
    ?>
    <p class="text-gray">N.B: Check your email or SMS to login into this campaign panel</p>
</div>
<!-- /.login-box -->

<?php
include_once ('includes/script.php');
?>
</body>
</html>
