<?php
session_start();
    $answers=["opt2","opt1","opt2","opt2","opt1"];
    $points=0;
    for ($i=0; $i < 5; $i++) { 
        if(isset($_SESSION['submitted_answers'][$i]))
            if($answers[$i]===$_SESSION['submitted_answers'][$i]){$points++;}
    }
    

   
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <title>Bmv's Quiz</title>
    <link rel="stylesheet" href="style.css">
    <style>
    h2{display:inline;}</style>
  </head>
<body>
  <div class="navbar">
    <div><h1 style="margin:0;">BMV's Quiz</h1></div>
    <div class="details" style="position:absolute;right:0;top:0;">
        <?php 

            echo"<div>Student Name:".$_SESSION['name']."</div><div>Student Email:". $_SESSION['email']."</div><div>Student Phone:".$_SESSION['mobile']."</div>";
        ?>
    </div>
  </div>
  <div class="question_cont">
   <h1>Your Score is <?php echo $points; ?></h1>
   <a class="btn" href="index.php">Home</a>

  </div>
    
  
</body>
</html>