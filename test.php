<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>

   <!-- Bootstrap core CSS-->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

   <!-- Page level plugin CSS-->
   <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="css/sb-admin.css" rel="stylesheet">

 </head>

 <body id="page-top">

   <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

     <a class="navbar-brand mr-1" href="#">Quiz Portal</a>

     <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
       <i class="fas fa-bars"></i>
     </button>

     <!-- Navbar Search -->
     <form style='visibility:hidden;'class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       <div class="input-group">
         <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
         <div class="input-group-append">
           <button class="btn btn-primary" type="button">
             <i class="fas fa-search"></i>
           </button>
         </div>
       </div>
     </form>

     <!-- Navbar -->
     <ul class="navbar-nav ml-auto ml-md-0">
       <li class="nav-item dropdown no-arrow">
         <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-user-circle fa-fw"></i>
         </a>
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="home.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
         </div>
       </li>
     </ul>

   </nav>

   <div id="wrapper">

     <!-- Sidebar -->
     <ul class="sidebar navbar-nav">
       <li class="nav-item active">
         <a class="nav-link" href="#">
           <i class="fas fa-fw fa-tachometer-alt"></i>
           <span>Teacher's Dashboard</span>
         </a>
       </li>

     </ul>

     <div id="content-wrapper">

       <div class="container-fluid">

         <!-- Breadcrumbs-->
         <ol class="breadcrumb">
           <li class="breadcrumb-item">
          <center><h1 style="align:center">Teacher's Dashboard</h1></center>
           </li>

         </ol>

       <!-- /.container-fluid -->


     <!-- quiz detail  -->
     <div class="container">
       <h4>Enter Quiz Details:-</h4><br>
       <div class="row">
         <div class="col-sm-6">
           <form action="test2.php" name="myForm" method="post" onsubmit="return(validateEmail());">
             <div class="form-group">
               <label for="Teacher name">Teacher Name:</label>
               <input type="text" class="form-control" placeholder="Enter Name" name="teacher_name" required>
             </div>
               <div class="form-group">
                 <label for="email">Teacher Email:</label>
                 <input type="email" class="form-control" placeholder="Enter email" name="teacher_email" required>
               </div>
               <div class="form-group">
                 <label for="subject">Subject:
                   <input type="text" class="form-control" placeholder="Enter subject" name="teacher_subject" required>
                 </label>
               </div>
               <div class="form-group">
                 <label for="sem">Semester:
                   <input type="text" class="form-control" placeholder="Enter student's semester"  name="teacher_sem" required>
                 </label>
               </div>
               <div class="form-group">
                 <label for="classSection">Section:
                   <input type="text" class="form-control" placeholder="Enter student's section"  name="teacher_section" required>
                 </label>
               </div>
               <div class="form-group">
                 <label for="quizCode">Quiz code:-
                   <input type="text" class="form-control" placeholder=" Enter Quiz code"  name="quiz_code" required>
                 </label>
               </div>
               <div class="form-group">
                 <label for="quiz time">Quiz Duration:-
                   <input type="number" class="form-control" min="1" placeholder="Quiz Duration in minutes"  name="quiz_time" required>
                 </label>
               </div>
               <button type="submit" class="btn btn-primary" name="submit_details">Submit</button>
         </form>
         </div>
         <div class="col-sm-3">

         </div>
         <div class="col-sm-3">
           <button class="btn btn-primary" name="button" onclick="generateCode()">Generate quiz code</button>
           <br><br>
           <label for="quizCode">
             <input id="code" type="text" class="form-control" placeholder="Quiz code"  value="">
           </label>
         </div>
       </div>
     </div>
     <br><br>

<?php include 'includes/dashboardLower.php'; ?>

    <script type="text/javascript">
      function generateCode(){
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$";

        for (var i = 0; i < 10; i++)
          text += possible.charAt(Math.floor(Math.random() * possible.length));

        document.getElementById('code').value = text;

      }
    </script>

    <script type="text/javascript">
      function validateEmail() {
         var emailID = document.myForm.teacher_email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");

         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myForm.teacher_email.focus() ;
            return false;
         }
         return( true );
      }

    </script>
</body>

</html>
