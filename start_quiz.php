<?php
  session_start();
  $quiz_code = $_POST['quiz_code'];
  $_SESSION['STARTCODE'] = $quiz_code;
  include 'includes/connection.php';
  $query = "SELECT * FROM quiz_questions
            WHERE  quiz_code = '$quiz_code'";
  $result = mysqli_query($connection, $query);

  if (mysqli_num_rows($result) > 0){

      while ($row = mysqli_fetch_assoc($result)) {
        $quiz[] = $row;
      }
  }else{
    echo "0 results";
  }
  $query1 = "SELECT quiz_time FROM quiz_detail
            WHERE  quiz_code = '$quiz_code'";
  $result1 = mysqli_query($connection, $query1);
  if (mysqli_num_rows($result1) > 0){

     $row1 = mysqli_fetch_assoc($result1);

  }else{
    echo "0 results";
  }
 ?>

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

  <body onload="timeout()" id="page-top">


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
               <span>Student's Dashboard</span>
             </a>
           </li>

         </ul>

         <div id="content-wrapper">

           <div class="container-fluid">

             <!-- Breadcrumbs-->
             <ol class="breadcrumb">
               <li class="breadcrumb-item">
                 <h1>Student's Dashboard</h1>
               </li>
             </ol>

           <!-- /.container-fluid -->

 <script type="text/javascript">
   function timeout() {
     var hour = Math.floor(timeLeft/3600);
     var minute = Math.floor((timeLeft%3600)/60);
     var second = timeLeft % 60;
     var sec = checkTime(second);
     var min = checkTime(minute);
     var hr = checkTime(hour);
     if (timeLeft <= 0){
       clearTimeout(tm);
       document.getElementById('form1').submit();
     } else {
       document.getElementById('time').innerHTML = hr+":"+min+":"+sec;
     }
     timeLeft--;
     var tm = setTimeout(function () {timeout()}, 1000);
   }

   function checkTime(msg) {
     if (msg < 10){
       msg = "0"+msg;
     }
     return msg;
   }
 </script>

  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="container">
        <h2>Start Answering
          <script type="text/javascript">
            var timeLeft = <?php echo 60*$row1['quiz_time'] ?>;
          </script>
          <div id="time" style="float:right;">timeout</div></h2><br>

        <?php
        $i=1;
        foreach ($quiz as $ques) {?>
        <form action="answer.php" id="form1" method="post">
        <table class="table table-bordered">
          <thead>
            <tr class="bg-info">
              <th><?php echo $i; ?>.&nbsp;<?php echo $ques['question']; ?></th>
            </tr>
          </thead>
          <tbody>
            <?php if(isset($ques['option1'])){ ?>
            <tr class="table-info">
              <td>&nbsp;1.&emsp;<input type="radio" name="<?php echo $ques['question_id']; ?>" value="<?php echo $ques['option1']; ?>">&nbsp;<?php echo $ques['option1']; ?></td>
            </tr>
          <?php } ?>
          <?php if(isset($ques['option2'])){ ?>
            <tr class="table-info">
              <td>&nbsp;2.&emsp;<input type="radio" name="<?php echo $ques['question_id']; ?>" value="<?php echo $ques['option2']; ?>">&nbsp;<?php echo $ques['option2']; ?></td>
            </tr>
            <?php } ?>
            <?php if(isset($ques['option3'])){ ?>
            <tr class="table-info">
              <td>&nbsp;3.&emsp;<input type="radio" name="<?php echo $ques['question_id']; ?>" value="<?php echo $ques['option3']; ?>">&nbsp;<?php echo $ques['option3']; ?></td>
            </tr>
            <?php } ?>
            <?php if(isset($ques['option4'])){ ?>
            <tr class="table-info">
              <td>&nbsp;4.&emsp;<input type="radio" name="<?php echo $ques['question_id']; ?>" value="<?php echo $ques['option4']; ?>">&nbsp;<?php echo $ques['option4']; ?></td>
            </tr>
            <?php } ?>
            <tr class="table-info">
              <td><input type="radio" checked="checked" style="display:none;" name="<?php echo $ques['question_id']; ?>" value="not_attempted"></td>
            </tr>
          </tbody>
        </table>
      <?php $i++; } ?><br>
      <center><input type="submit" class="btn btn-success" value="SUBMIT QUIZ"></center>
    </form>
      </div>
    </div>
    <div class="col-sm-2"></div>
  </div>
<br>
<br>
<?php include 'includes/dashboardLower.php'; ?>

</body>
</html>
