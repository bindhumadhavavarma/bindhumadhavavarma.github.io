<?php
session_start();
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=bmv_res', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['add9']))$_SESSION['item_id']=9;
if(isset($_POST['add10']))$_SESSION['item_id']=10;
if(isset($_POST['add11']))$_SESSION['item_id']=11;
if(isset($_POST['add12']))$_SESSION['item_id']=12;
if(isset($_POST['add13']))$_SESSION['item_id']=13;
if(isset($_POST['add9'])||isset($_POST['add10'])||isset($_POST['add11'])||isset($_POST['add12'])||
isset($_POST['add13'])){
  if(isset($_SESSION['user_id'])){
  $stmt=$pdo->prepare("select * from items where item_id=:item_id");
  $stmt->execute(array(
    ':item_id'=>$_SESSION['item_id']
  ));
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
  $stmt=$pdo->prepare("insert into cart (user_id,item_id,item_name,quantity,item_cost) values (:user_id,:item_id,:item_name,:quantity,:item_cost)");
  $stmt->execute(array(
    ':user_id'=>$_SESSION['user_id'],
      ':item_id'=>$row['item_id'],
      ':item_name'=>$row['item_name'],
      ':quantity'=>1,
      ':item_cost'=>$row['item_cost']
  ));
  header("Location:cart.php");
  return;
}}
?>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <title>BMV's Restaurant</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="combostyle.css">
  </head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="nvbr">
    <a class="navbar-brand" href="index.php" style="color: rgb(247, 89, 31);">
      <img src="images/logo.jpg" width="60" height="45" class="d-inline-block align-top" alt="">
      BMV's Restaurant   
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.php">Menu</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="combo.php">Combo Offers</a>
        </li>
      </ul>
      <div class="navbar-text">
      <?php
      if(isset($_SESSION['user_id'])==false){
        echo"<a class='nav-link' href='login.php'>";
        echo"<img src='images/user.jpg' width='30' height='30' class='d-inline-block align-center' alt=''> Login/Signup </a>";
      }
      if(isset($_SESSION['user_id'])){
        echo"<div class='btn-group dropdown'>";
        echo'<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="images/user.jpg" width="30" height="30" class="d-inline-block align-center" alt="">  
        '.$_SESSION['name'].'            
        </a>
        <span class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cart.php">Cart</a>
          <a class="dropdown-item" href="orders.php">Orders</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Sign Out</a>
        </span></div>';
      
      }
      ?>
      </div>
    </div>
  </nav>
<form method="POST">
  <div class="container" id="con">
    <div class="row">
    <div class="col-lg-6" id="item">
      <div id="item1">
        <img src="images/bir1.jpg" alt="" id="itim">
        <span>Chicken Dum Biriyani+Chicken Fry</span>
        <span id="cost">Rs.440 <input class="btn btn-primary btn-sm" type="submit" name="add9" value="Add to Cart" ></span>
      </div>
    </div>

    <div class="col-lg-6" id="item">
      <div id="item1">
        <img src="images/bir3.jpg" alt="" id="itim">
        <span>Special Chicken Biriyani+Chicken Lollipop</span>
        <span id="cost">Rs.480 <input class="btn btn-primary btn-sm" type="submit" name="add10" value="Add to Cart" ></span>
      </div>
    </div>
    
    <div class="col-lg-6" id="item">
      <div id="item1">
        <img src="images/bir4.jpg" alt="" id="itim">
        <span>Chicken Wings Biriyani+Curd Rice</span>
        <span id="cost">Rs.330 <input class="btn btn-primary btn-sm" type="submit" name="add11" value="Add to Cart" ></span>
      </div>
    </div>

    <div class="col-lg-6" id="item">
      <div id="item1">
        <img src="images/bir5.jpg" alt="" id="itim">
        <span>Chicken Kebab Biriyani+Mushroom Fry</span>
        <span id="cost">Rs.360 <input class="btn btn-primary btn-sm" type="submit" name="add12" value="Add to Cart" ></span>
      </div>
    </div>

    <div class="col-lg-6" id="item">
      <div id="item1">
        <img src="images/bir6.jpg" alt="" id="itim">
        <span>3 Butter Kulcha+Paneer Masala</span>
        <span id="cost">Rs.300 <input class="btn btn-primary btn-sm" type="submit" name="add13" value="Add to Cart" ></span>
      </div>
    </div>

   
    </div>
  </div>
</form>
  
  <footer class="panel-footer" id="foot">
    <div class="container">
      <div class="row">
        <section id="hours" class=" col-sm-4">
          <span>Hours:</span><br>
          Sun-Thurs: 11:15am - 10:00pm <br>
          Fri: 11:15am - 2:30pm <br>
          Saturday Closed <br>
          <hr class="visible-xs" style="color: white;">
        </section> 
        
        
        <section id="address" class=" col-sm-4">
          
          <span>Address:</span><br>
          Kapila Teertham Road, <br>
          Anna Rao Circle, <br>
          Tirupati. <br>
          <p id="limit">* Delivery area within 8-10 kilometers, with minimum order of Rs.200 plus Rs.15 charge for all deliveries.</p>
          <hr class="visible-xs" style="color: white;">
        </section>
        <section id="quotes" class=" col-sm-4">
          <span><q>People who love to eat are always the best people</q></span><br>
          <span><q>You dont need inspirational quotes when you have good food</q></span>
          <hr class="visible-xs" style="color: white;">
        </section>
        <hr class="visible-xs" style="color: white;">
      </div><div class=" col-sm-12" style="text-align: center;" >&copy; Copyright Bindhu Madhava Varma 2020</div>

    </div>
  </footer>
  <?php
  if(isset($_POST['add9'])||isset($_POST['add10'])||isset($_POST['add11'])||isset($_POST['add12'])||
  isset($_POST['add5'])||isset($_POST['add6'])||isset($_POST['add7'])||isset($_POST['add13'])){
  if(!isset($_SESSION['user_id'])){
    echo'<script type="text/javascript">alert("You have to Login to add items to cart");</script>';
  }}
  ?>
  <script src="jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</body>
</html>