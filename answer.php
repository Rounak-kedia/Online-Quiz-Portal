<?php
  session_start();
  $quiz_code = $_SESSION['STARTCODE'];
  $right_answer = 0;
  $wrong_answer = 0;
  $not_answered = 0;
  include 'includes/connection.php';
  $query = "SELECT question_id,answer FROM quiz_questions WHERE quiz_code='$quiz_code'";
  $result = mysqli_query($connection,$query);
  if (mysqli_num_rows($result) > 0){

    while ($row = mysqli_fetch_assoc($result)) {

      if (html_entity_decode($row['answer']) == html_entity_decode($_POST[$row['question_id']])){
        $right_answer++;
      }else if ($_POST[$row['question_id']] == "not_attempted"){
        $not_answered++;
      }else {
        $wrong_answer++;
      }
    }
  }
  $total_ques = $right_answer+$wrong_answer+$not_answered;
  $attempted_ques = $total_ques - $not_answered;
  $percentage = ($right_answer/$total_ques)*100;
  $precision = 2;
 ?>

<?php include 'includes/studentDashboardUpper.php'; ?><br><br>
<br>
<center><h2>RESULT</h2></center><br>
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Total Question</th>
          <th><?php echo $total_ques; ?></th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-warning">
          <th scope="row">Question Attempted</th>
          <td><?php echo $attempted_ques; ?></td>
        </tr>
        <tr class="table-primary">
          <th scope="row">Ringht Answer</th>
          <td><?php echo $right_answer; ?></td>
        </tr>
        <tr class="table-danger">
          <th scope="row">Wrong Answer</th>
          <td><?php echo $wrong_answer; ?></td>
        </tr>
        <tr class="table-active">
          <th scope="row">Not Attempted</th>
          <td><?php echo $not_answered; ?></td>
        </tr>
        <tr class="table-info">
          <th scope="row">Percentage</th>
          <td><?php echo number_format((float) $percentage, $precision, '.', ''); ?>%</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-sm-4"></div>
</div>

 <br>
 <br>
 <?php include 'includes/dashboardLower.php'; ?>

 </body>
 </html>
