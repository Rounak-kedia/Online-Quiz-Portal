<?php

$teacher_name = $_POST['name'];
$teacher_email = $_POST['email'];
$teacher_pass = $_POST['pass'];
$teacher_dep = $_POST['dep'];

include 'includes/connection.php';

$query = "INSERT INTO teacher (t_name,t_email,t_pass,t_dep)
          VALUES ('$teacher_name','$teacher_email','$teacher_pass','$teacher_dep')";
$result = mysqli_query($connection,$query);
if ($result) {
  header('Location: dashboard_teacher.php');
}

 ?>
