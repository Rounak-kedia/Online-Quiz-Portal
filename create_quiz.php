<?php include 'includes/teacherDashboardUpper.php'; ?>
       <div class="row">
         <div class="col-sm-2"></div>
         <div class="col-sm-8">
           <h3>Start Creating Questions</h3><br>
           <?php
              if(isset($_GET['msg'])){
                  echo "<div class='alert alert-success' id='flash'>";
                  echo "<b>Question Created!</b> Input next Question.";
                  echo "</div>";
              }
            ?>
           <form action="quiz_created.php" method="post">
             <div class="form-group">
               <label for="Question">Question :-</label>
               <input type="text" class="form-control" name="ques" placeholder="Enter Question" required>
             </div>
             <div class="form-group">
               <label for="Option1">Option 1 :-</label>
               <input type="text" class="form-control" name="op1" placeholder="Enter option first" required>
             </div>
             <div class="form-group">
               <label for="Option2">Option 2 :-</label>
               <input type="text" class="form-control" name="op2" placeholder="Enter option second" required>
             </div>
             <div class="form-group">
               <label for="Option3">Option 3 :-</label>
               <input type="text" class="form-control" name="op3" placeholder="Enter option third" required>
             </div>
             <div class="form-group">
               <label for="Option4">Option 4 :-</label>
               <input type="text" class="form-control" name="op4" placeholder="Enter option fourth" required>
             </div>
             <div class="form-group">
               <label for="Answer">Answer :-</label>
               <input type="text" class="form-control" name="ans" placeholder="Enter the correct answer" required>
             </div>
             <button type="submit" class="btn btn-success">Submit</button>
          </form>
         </div>
         <div class="col-sm-2"></div>
       </div>
       <br>
       <br>

       <?php include 'includes/dashboardLower.php'; ?>
       <script>
       $(".alert-success").alert();
       window.setTimeout(function() { $(".alert-success").alert('close'); }, 2000);
       </script>
     </body>

    </html>
