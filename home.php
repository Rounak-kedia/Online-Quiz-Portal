<html>

<head>
    <meta charset="UTF-8">
    <title>Home</title>
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
    <marquee><h1>Welcome to BMSCE Online Quiz Portal.</h1></marquee>
</head>

<body><br>


    <div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> Welcome
        </div>


          <div class="register">

              <a href="session.php?login=s"><button id="register-link">Student Login</button></a><br>
              <a href="session.php?login=t"><button id="register-link">Teacher Login</button></a>
          </div>
            <div class="clearfix"></div>


        <div class="register">
            Don't have an account yet?
            <a href="registration_student.php"><button id="register-link">Register as Student</button></a>
            <a href="registration_teacher.php"><button id="register-link">Register as Teacher</button></a>
        </div>
    </div>

</body>

</html>
