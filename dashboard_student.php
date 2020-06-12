<?php include 'includes/studentDashboardUpper.php'; ?><br><br>

<center><h4>Enter Quiz Code to start the quiz</h4></center>

<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <form action="start_quiz.php" method="post">
      <div class="form-group">
        <label for="Quiz code"></label>
        <input type="text" class="form-control" name="quiz_code" placeholder="Enter quiz code to start the quiz">
      </div><br>
      <center><button type="submit" class="btn btn-success">START QUIZ</button></center>
    </form>
  </div>
  <div class="col-sm-4"></div>
</div>

<?php include 'includes/dashboardLower.php'; ?>

</body>
</html>
