<?php

    session_start();
    $quiz_code = $_SESSION['QUIZCODE'];
    $ques = htmlentities($_POST['ques']);
    $op1 = htmlentities($_POST['op1']);
    $op2 = htmlentities($_POST['op2']);
    $op3 = htmlentities($_POST['op3']);
    $op4 = htmlentities($_POST['op4']);
    $ans = htmlentities($_POST['ans']);

    include 'includes/connection.php';

    $query = "INSERT INTO quiz_questions (quiz_code,question,option1,option2,option3,option4,answer)
              VALUES ('$quiz_code','$ques','$op1','$op2','$op3','$op4','$ans')";
    $result = mysqli_query($connection,$query);

    if ($result){
        header("Location: create_quiz.php?msg=run");
    }

 ?>
