<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #303641;
            background-image: url("kd.jpg");
            background-repeat:no-repeat;
            background-size:cover;
        }

    </style>
    <marquee><h1>Welcome to BMSCE Online Quiz Portal</h1></marquee>
</head>

<body>
    <div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> Login
        </div>
        <?php
           if(isset($_GET['msg'])){
               echo "<div class='alert alert-danger'>";
               echo "<b>Email or Password wrong</b>";
               echo "</div>";
           }
         ?>

        <form action="login_redirect.php" method="post">

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="username" placeholder="Email" type="email" name="email" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" name="pass" required class="validate" autocomplete="off">
            </div>

            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">Remember Me</span>
            </div>

            <input type="submit" value="Log In">
        </form>


        <div class="register">
            Don't have an account yet?
            <a href="registration_student.php"><button id="register-link">Register as Student</button></a>
            <a href="registration_teacher.php"><button id="register-link">Register as Teacher</button></a>
        </div>
    </div>

    <script>
    $(".alert-danger").alert();
    window.setTimeout(function() { $(".alert-danger").alert('close'); }, 2000);
    </script>
</body>

</html>
