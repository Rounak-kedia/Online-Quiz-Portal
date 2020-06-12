<?php
session_start();
$email = $_POST['email'];
$pass = $_POST['pass'];

include 'includes/connection.php';

if ($_SESSION['LOGIN'] == "t"){
  $query2 = "SELECT t_email,t_pass FROM teacher";
  $result2 = mysqli_query($connection, $query2);
  if (mysqli_num_rows($result2) > 0){
    $flag1 = 0;
    while ($row2 = mysqli_fetch_assoc($result2)) {
      if (($row2['t_email'] == $email) && ($row2['t_pass'] == $pass)){
        $flag1 = 1;
        header('Location: dashboard_teacher.php');
      }
    }
    if ($flag1 == 0){
      header('Location: login.php?msg=run');
    }
  }
}

if ($_SESSION['LOGIN'] == "s"){
  $query1 = "SELECT student_email,student_pass FROM student";
  $result1 = mysqli_query($connection, $query1);
  if (mysqli_num_rows($result1) > 0) {
    $flag2 = 0;
    while ($row1 = mysqli_fetch_assoc($result1)) {
      if (($row1['student_email'] == $email) && ($row1['student_pass'] == $pass)){
        $flag2 = 1;
        header('Location: dashboard_student.php');
      }
    }
    if ($flag2 == 0){
      header('Location: login.php?msg=run');
    }
  }
}
 ?>
