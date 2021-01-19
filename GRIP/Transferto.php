<?php
session_start();
$_SESSION['totalcost']=0;
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=internship', 'bindhu', 'bindhu');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>


<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=0.8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Basic Banking system.</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="index.html" style="color: #17252A;font-size: 30px;font-weight: bold;">Basic Banking System</a>
            <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 20px;">
              <ul class="navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="customers.php">All Customers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="transactionhistory.php">Transaction history</a>
                </li>
                
              </ul>
            </div>
          </nav>
        <span style="margin-left:25px;margin-bottom:25px;"><?php
         if(isset($_POST["amount"]))$_SESSION["amount"]=$_POST["amount"];
         else $_SESSION["amount"]=0;
        echo'  <h2 style="text-align:center;">Enter amount and select Receiver</h2>
          <h3 style="display:inline;margin-left:20px;">Amount : </h3> 
          <form method="POST" style="display:inline;"> <input type="number" name="amount" placeholder='.$_SESSION['amount'].'><input type="submit" value="Confirm"></form>';
          
         
    if(isset($_SESSION["deladd"])){echo'<div style="color:green".$_SESSION["deladd"]."<div>';}
    ?>
        </span>
          
          <?php
    $stmt = $pdo->query("SELECT * FROM customers WHERE NOT sl=".$_SESSION['currentsl']);
      print'<table class="table table-bordered table-striped table-hover"><tr class="thead-dark"><th>Customer Name</th><th>Email</th><th>Current Balance</th><th></th></tr>';
      while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
          print "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row['balance']."<td>
          <a style='color:white' href='Transfer.php?receiversl=".$row["sl"]."'>Select</a></td></tr>";
      }
  ?> 
          
    </body>
</html>