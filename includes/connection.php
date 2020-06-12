<?php
  $connection = mysqli_connect('localhost','root','','quiz_portal');
  if (!$connection){
    die("NOt connected" . mysqli_connect_error());
  }

?>