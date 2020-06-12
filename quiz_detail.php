<?php
  session_start();
  if (isset($_POST['submit_details'])){
    $teacherName = $_POST['teacher_name'];
    $teacherMail = $_POST['teacher_email'];
    $sem = $_POST['teacher_sem'];
    $subject = $_POST['teacher_subject'];
    $section = $_POST['teacher_section'];
    $quizCode = $_POST['quiz_code'];
    $quizTime = $_POST['quiz_time'];
    $_SESSION['QUIZCODE'] = $quizCode;
   include "includes/connection.php";

    $query = "INSERT INTO quiz_detail (teacher_name,teacher_email,teacher_subject,teacher_sem,teacher_section,quiz_code,quiz_time)
              VALUES ('$teacherName','$teacherMail','$subject','$sem','$section','$quizCode','$quizTime')";
    $result = mysqli_query($connection,$query);
    if (!$result){
      die("Not Inserted" . mysli_error($result));
    }

  }

?>

<?php include 'includes/dashboardUpper.php'; ?>
     <div class="row">
       <div class="col-sm-2"></div>
        <div class="col-sm-8">
         <div class="container">
            <h2>Quiz Details</h2><br>
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td><b>Teacher name</b></td>
                  <td><?php echo "$teacherName"; ?></td>
                </tr>
                <tr>
                  <td><b>Teacher email</b></td>
                  <td><?php echo "$teacherMail"; ?></td>
                </tr>
                <tr>
                  <td><b>Subject</b></td>
                  <td><?php echo "$subject"; ?></td>
                </tr>
                <tr>
                  <td><b>Student's Sem</b></td>
                  <td><?php echo "$sem"; ?></td>
                </tr>
                <tr>
                  <td><b>Student's Section</b></td>
                  <td><?php echo "$section"; ?></td>
                </tr>
                <tr>
                  <td><b>Quiz Code</b></td>
                  <td><?php echo "$quizCode"; ?></td>
                </tr>
                <tr>
                  <td><b>Quiz Duration</b></td>
                  <td><?php echo "$quizTime"; ?> min</td>
                </tr>
              </tbody>
            </table>
            <br>
              <button type="button" class="btn btn-success" onclick="redirect()">Start creating Quiz</button>
          </div>
       </div>
       <div class="col-sm-2"></div>
     </div>



      <?php include 'includes/dashboardLower.php'; ?>
    <script type="text/javascript">
      function redirect() {
        window.location = "create_quiz.php";
      }
    </script>
 </body>

</html>
