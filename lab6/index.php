<?php 
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <title>Bmv's Quiz</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="loginstyle.css">
  </head>
<body>
  <div class="navbar">
    <div style="float:left;display:inline"><h1 style="margin:0;">BMV's Quiz</h1></div>
    <div class="details"><a href="index.php">Login/signup</a></div>
  </div>
  <div class="formcont">
  <form action="quiz.php" method="POST"> 
        <label for="Name">Name</label>
        <input type="text" name="name">
        <label for="Username">UserName</label>
        <input type="email" name="email">
        <label for="mobile">Mobile Number</label>
        <input type="text" name="mobile">
        <input type="submit">
    </form>
  </div>
    
  
</body>
</html>