<?php include 'includes/session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php
//session_start();
//include 'includes/conn.php';

// Retrieving OTP with session variable
$otp = $_SESSION["OTP"];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=
    "width=device-width, initial-scale=1.0">
    <title>OTP Verfication</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>

<!--      Adding bootstrap-->
<!--    <link rel="stylesheet" href=-->
<!--            "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"-->
<!--                  integrity=-->
<!--                  "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"-->
<!--                  crossorigin="anonymous">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity=
            "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous">
    </script>

    <script src=
            "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity=
            "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>


</head>
<body>
<div class="container py-5 mt-5 justify-content-center">
    <div class="card py-5 mt-5 mx-auto" style="width: 40rem;">
        <div class="mx-auto form">
            <form class="form-login">
                <h3 class="text-center">OTP Verification</h3>
                <span class="text-center">Enter the code we just send on your email or mobile phone</span>
                <div class="form-group py-4">
                    <input class="form-control" type="text" name="otp" id="OTP" aria-describedby="emailHelp"
                           placeholder="Enter OTP" required>
                </div>
                <div class="form-group py-3">
                    <button type="button" class="btn btn-primary" id="verify-otp">Verify OTP</button>
                    <button type="button" class="btn btn-danger" id="resend-otp">Resend OTP</button>
                </div>
            </form>
        </div>
    </div>
</div>




<script>
    $("#resend-otp").click(function () {
        window.location.replace("resend-otp.php");
    });
    $("#verify-otp").click(function () {

        var otp1 = document.getElementById("OTP").value;

        var otp2 = ("<?php echo($otp)?>");

        if (otp1 == otp2) {
            window.location.replace("home.php");
        } else {
            alert("OTP is not matching")
        }
    });
</script>
</body>
</html>

