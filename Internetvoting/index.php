<?php
session_start();
if (isset($_SESSION['admin'])) {
    header('location: admin/home.php');
}

if (isset($_SESSION['voter'])) {
    header('location: verify-otp.php');
}
?>
<?php include 'includes/header.php'; ?>

<?php
$parse = parse_ini_file('admin/config.ini', FALSE, INI_SCANNER_RAW);
$title = $parse['election_title'];
?>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <b><?php echo strtoupper($title); ?></b>
        <h1>Voting Panel</h1>
    </div>

    <div class="login-box-body">
        <p class="login-box-msg">Sign in to give your vote</p>

        <form action="login.php" method="POST">
            <div class="form-group has-feedback">
                <label>Voter ID:</label>
                <input type="text" class="form-control" name="voter" placeholder="Voter's ID" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <label>Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i
                                class="fa fa-sign-in"></i> Login
                    </button>
                </div>
            </div>
        </form>
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
</div>

<?php include 'includes/scripts.php' ?>
</body>

<footer>
    <p>
    <center><b>NOTE:</b> If you didn't get ID and Password. Contact to your election committee. Our System Automatically
        Generates VotersID and Password.
    </p></center>
</footer>
</html>