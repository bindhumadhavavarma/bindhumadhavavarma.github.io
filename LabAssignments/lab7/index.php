<?php
  session_start();
  $_SESSION['fruitscost']=['apple'=>10,'orange'=>20,'mango'=>30];
  if(!isset($_SESSION['fruitquantity'])){
  $_SESSION['fruitquantity']=['apple'=>0,'orange'=>0,'mango'=>0];}
  if(!isset($_SESSION['balance'])){
    $_SESSION['balance']=0;
  }
  if(!isset($_SESSION['userInputAmount'])){
    $_SESSION['userInputAmount']=0;
  }
  if(!isset($_SESSION['total'])){
    $_SESSION['total']=0;
  }
  $_SESSION['total']=$_SESSION['fruitscost']['apple']*$_SESSION['fruitquantity']['apple']+$_SESSION['fruitscost']['orange']*$_SESSION['fruitquantity']['orange'] +$_SESSION['fruitscost']['mango']*$_SESSION['fruitquantity']['mango'] ;
  $_SESSION['balance']=$_SESSION['userInputAmount']-$_SESSION['total'];
  if(isset($_POST['submit'])){
    if($_POST['userAmount']!=null && $_POST['userAmount']>0){
      $_SESSION['balance']=$_SESSION['balance']-$_SESSION['userInputAmount']+$_POST['userAmount'];
      $_SESSION['userInputAmount']=$_POST['userAmount'];
    }
    else{ $_SESSION['error']="enter valid amount";}
    header('Location:index.php');
    return;
  }
  if(isset($_POST['addapple'])){
    if($_SESSION['balance']>=10){
    $_SESSION['fruitquantity']['apple']++;}
    else{$_SESSION['error']="You dont have enough balance";}
    
    header('Location:index.php');return;
  }
  if(isset($_POST['addorange'])){
    if($_SESSION['balance']>=20){
    $_SESSION['fruitquantity']['orange']++;}
    else{$_SESSION['error']="You dont have enough balance";}
    header('Location:index.php');return;
  }
  if(isset($_POST['addmango'])){
    if($_SESSION['balance']>=30){
    $_SESSION['fruitquantity']['mango']++;}
    else{$_SESSION['error']="You dont have enough balance";}
    header('Location:index.php');return;
  }
  if(isset($_POST['removeapple'])){
    if($_SESSION['fruitquantity']['apple']==0){$_SESSION['error']="item quantity cannot be negative.";}
    else{ $_SESSION['fruitquantity']['apple']--;}
    header('Location:index.php');return;
  }
  if(isset($_POST['removeorange'])){
    if($_SESSION['fruitquantity']['orange']==0){$_SESSION['error']="item quantity cannot be negative.";}
    else{ $_SESSION['fruitquantity']['orange']--;}
    header('Location:index.php');return;
  }
  if(isset($_POST['removemango'])){
    if($_SESSION['fruitquantity']['mango']==0){$_SESSION['error']="item quantity cannot be negative.";}
    else{ $_SESSION['fruitquantity']['mango']--;}
    header('Location:index.php');return;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fruit Shop </title>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css" />
  </head>

  <body>
    <main>
      <header>
        <!-- Logo -->
        <a href="./index.html" class="logo">BMV's Fruit Shop</a>

        <!-- Navigation -->
        <nav>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </nav>

        <!-- Search & Cart -->
        <div class="left-nav">
          <a href="#"><i class="fas fa-search"></i></a>
          <a href="#"><i class="fas fa-cart-arrow-down"></i></a>
        </div>

        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
      </header>

      <!-- User Input Section -->
      <form method=POST>
      <section class="user-input">
        <div class="user-amount">
        
          <div><h1>Submit Your Amount:</h1></div>
          
          <div class="amount">
            <input id="userAmount" name="userAmount" type="text" />
            <button name="submit" id="submit">Submit</button>
            <p>Your Amount Rs: <span id="amountEntered"><?php echo $_SESSION['userInputAmount'] ?></span></p>
            <div> <?php
            if(isset($_SESSION['error'])){echo"<div style='color:red;'>".$_SESSION['error']."</div>";unset($_SESSION['error']);}
          ?></div>
          </div>
          
        
         </div>
          
      </section>

      <!-- Products Section -->
      <section class="products">
        <div class="product-item">
          <div class="product-img">
            <img src="./images/Apple.png" alt="apple" />
          </div>

          <div class="product-description">
            <h2 class="product-name"><a href="#">Apple</a></h2>

            <div class="rating">
              <span>☆</span><span>☆</span><span>☆</span><span>☆</span
              ><span>☆</span>
            </div>

            <p id="applePrice">Rs: 10</p>
            <div class="buttons">
              <button class="btn-plus" id="addapple" name="addapple">+</button>
              <input type="text" id="apple" value="<?php echo $_SESSION['fruitquantity']['apple'] ?>" readonly/>
              <button class="btn-minus" name="removeapple">-</button>
            </div>
          </div>
        </div>

        <div class="product-item">
          <div class="product-img">
            <img src="./images/Orange.png" alt="apple" />
          </div>

          <div class="product-description">
            <h2 class="product-name"><a href="#">Orange</a></h2>

            <div class="rating">
              <span>☆</span><span>☆</span><span>☆</span><span>☆</span
              ><span>☆</span>
            </div>

            <p id="orangePrice">Rs: 20</p>
            <div class="buttons">
              <button class="btn-plus" name="addorange">+</button>
              <input type="text" id="orange" value="<?php echo $_SESSION['fruitquantity']['orange'] ?>" readonly/>
              <button class="btn-minus" name="removeorange">-</button>
            </div>
          </div>
        </div>

        <div class="product-item">
          <div class="product-img">
            <img src="./images/Mango.png" alt="apple" />
          </div>

          <div class="product-description">
            <h2 class="product-name"><a href="#">Mango</a></h2>

            <div class="rating">
              <span>☆</span><span>☆</span><span>☆</span><span>☆</span
              ><span>☆</span>
            </div>

            <p id="mangoPrice">Rs: 30</p>
            <div class="buttons">
              <button class="btn-plus" name="addmango">+</button>
              <input type="text" id="mango" value="<?php echo $_SESSION['fruitquantity']['mango'] ?>" readonly/>
              <button class="btn-minus" name="removemango">-</button>
            </div>
          </div>
        </div>
      </section>
</form>
      <div class="amount-details">
        
        <h3>Your Total: Rs <span id="userTotalAmount"><?php echo $_SESSION['total'] ?></span></h3>
        <h3>No: Of Items: <span id="numOfItem"><?php echo   $_SESSION['fruitquantity']['apple']+$_SESSION['fruitquantity']['orange']+$_SESSION['fruitquantity']['mango'] ?></span></h3>
        <h3>Your Balance: Rs <span id="balance"><?php echo $_SESSION['balance'] ?></span></h3>
      </div>
    </main>

    <!-- JS File -->
    
  </body>
</html>
