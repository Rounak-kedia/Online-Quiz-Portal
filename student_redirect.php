<?php

  $student_email = $_POST['student_email'];
  $student_name = $_POST['student_name'];
  $student_pass = $_POST['student_password'];
  $student_dep = $_POST['student_dep'];
  $student_sem = $_POST['student_sem'];

  include 'includes/connection.php';

  $query = "INSERT INTO student (student_name,student_email,student_sem,student_dep,student_pass)
            VALUES ('$student_name','$student_email','$student_sem','$student_dep','$student_pass')";

  $result = mysqli_query($connection,$query);
  if ($result) {
      header('Location: dashboard_student.php');
  }
 ?>
