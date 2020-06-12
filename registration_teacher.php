<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registration.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #303641;
             background-image: url("kd.jpg");
             background-repeat:no-repeat;
             background-size:cover;
           }

    </style>
    <marquee><h3>Welcome to BMSCE Online Quiz Portal.</h3></marquee>
</head>

<body>
    <div id="container-register">
        <div id="title">
            <i class="material-icons lock">lock</i>Teacher Register
        </div>

        <form action="teacher_redirect.php" name="myForm" method="post" onsubmit="return(validateEmail());">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="email" placeholder="Email" type="email" name="email" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" type="text" name="name" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" name="pass" required class="validate" autocomplete="off">
            </div>
            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">developer_board</i>
                </div>
                <input id="input-addon" placeholder="Department" type="text" name="dep" required class="validate" autocomplete="off">
            </div>
<br>

            <input type="submit" value="Register">
        </form>



        <div class="register">
            Do you already have an account?
            <a href="login.php"><button id="register-link">Log In here</button></a>
        </div>
    </div>
    <script type="text/javascript">
      function validateEmail() {
         var emailID = document.myForm.student_email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");

         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myForm.student_email.focus() ;
            return false;
         }
         return( true );
      }

    </script>
</body>

</html>
