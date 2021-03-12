<?php
session_start();
    $questions=["What is full form of HTML?","High text Machine Learning","Hyper Text Markup Language","Hyper Text max Language","I dont know",
                "What is the full form of CSS?","Cascading Style sheets","cute style sheets","current Style sheets","I dont know",
                "What is the full form of PHP?","python Hyper Processor","Hypertext Pre Processor","Pre Hypertext Processor","I dont know",
                "What is the full form of JSON","Java Script of net","Java Script Object Notation","Java Script Oracle Network","i dont know",
                "What is the full form of XML","extensible markup language","extra markup language","xion markup language","i dont know"];
   
    
    

   
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
          if(isset($_POST['name'])){
            $_SESSION['name']=$_POST['name'];
            $_SESSION['email']=$_POST['email'];
            $_SESSION['mobile']=$_POST['mobile'];
          }
            echo"<div>Student Name:".$_SESSION['name']."</div><div>Student Email:". $_SESSION['email']."</div><div>Student Phone:".$_SESSION['mobile']."</div>";
        ?>
    </div>
  </div>
  <div class="question_cont">
   
   <span><?php
      if(!isset($_SESSION['i'])){$_SESSION['i']=0;}
      if(isset($_POST['save'])){
        if(!isset($_POST['options'])){$_SESSION['error']="select an option first.";}
         else{$_SESSION['submitted_answers'][$_SESSION['i']/5]=$_POST['options'];
             
              $_SESSION['success']="successfully saved";}
              
         header("Location:quiz.php");return;
      }
      if(isset($_POST['previous'])){
        if($_SESSION['i']!=0){$_SESSION['i']=$_SESSION['i']-5;}
        
        header("Location:quiz.php");return;
      }
      if(isset($_POST['next'])){
        if($_SESSION['i']!=20){$_SESSION['i']=$_SESSION['i']+5;}
        else{$_SESSION['i']=20;}
        header("Location:quiz.php");return;
      }
      if(isset($_POST['finish'])){
        
        header("Location:finish.php");return;
      }
      echo"<h1>".$questions[$_SESSION['i']]."</h1>";
      echo'<form method="POST">
      <input type="radio" name="options" id="opt1" for="opt1" value="opt1">
      <Label><h2>'.$questions[$_SESSION['i']+1].'</h2></Label><br>
      <input type="radio" name="options" id="opt2" for="opt2" value="opt2">
      <Label><h2>'.$questions[$_SESSION['i']+2].'</h2></Label><br>
      <input type="radio" name="options" id="opt3" for="opt4" value="opt3">
      <Label><h2>'.$questions[$_SESSION['i']+3].'</h2></Label><br>
      <input type="radio" name="options" id="opt4" for="opt4" value="opt3">
      <Label><h2>'.$questions[$_SESSION['i']+4].'</h2></Label><br>
      <button class="btn" type="submit" name="save">save</button>
      <button class="btn" type="submit" name="previous">Previous</button>
      <button class="btn" type="submit" name="next">next</button>
      <button class="btn" type="submit" name="finish">finish</button><br>';
      if(isset($_SESSION['error'])){
        echo '<div style="color:red;">'.$_SESSION["error"].'</div>';
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo '<div style="color:green;">'.$_SESSION["success"].'</div>';
        unset($_SESSION['success']);
      }
      
    echo '</form>';
    
    ?></span>

  </div>
    
  
</body>
</html>