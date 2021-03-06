<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="login_register.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>



<body>

    <div class="container site_name">
        <h1>ALSY.com</h1>
    </div>
    <div class="container login-common-container registration-container">
        <div class="row container_box">



            <!-- REGISTRATION  SECTION -->

            <div class="col-md-12 login-form-2">
                <h3>Register</h3>
                <?php
                if (isset($_SESSION["error"])) {
                    echo ('<p style="color:black">' . $_SESSION["error"] . "</p>\n");
                    unset($_SESSION["error"]);
                }
                ?>
                <form action="registration.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name" name="fname" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name" name="lname" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email *" name="email" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password *" name="password" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Phone number" name="phone" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Room Number" name="room" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Address" name="address" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" name="submit2" value="Register" />
                    </div>

                </form>
            </div>
        </div>
    </div>









    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>