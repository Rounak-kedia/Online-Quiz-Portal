
<?php include 'includes/teacherDashboardUpper.php'; ?>

     <!-- quiz detail  -->
     <div class="container">
       <h4>Enter Quiz Details:-</h4><br>
       <div class="row">
         <div class="col-sm-6">
           <form action="quiz_detail.php" name="myForm" method="post" onsubmit="return(validateEmail());">
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
