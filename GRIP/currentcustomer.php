<?php
session_start();
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=internship', 'bindhu', 'bindhu');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$_SESSION['currentsl']=$_GET['currentsl'];
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
                <li class="nav-item active" >
                  <a class="nav-link" href="customers.php">All Customers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="transactionhistory.php">Transaction history</a>
                </li>
                
              </ul>
            </div>
          </nav>
         <div class="container" style="color:#17252A;margin:0;padding:20px;">
            <h2 style="color:#17252A;text-decoration: underline;">Current User Details :</h2>
            <span><?php
           
            $stmt = $pdo->query("SELECT * FROM customers WHERE sl=".$_SESSION['currentsl']); 
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
           echo "<h3>Name : ".$row['Name']."</h3>";
           echo "<h3>Email : ".$row['Email']."</h3>";
           echo "<h3>Curent Balance : ".$row['balance']."</h3>";
            ?></span>
            
        </div>
        <?php echo' <a href="Transferto.php" id="button" style="margin-left:20px">Transfer&nbsp;Money</a>'; ?>
       
          
    </body>
</html>