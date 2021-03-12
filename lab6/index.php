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
    <div id="error" style="color:red;"></div>
  <form name="myForm" onSubmit="return(validate());" action="quiz.php" method="POST" > 
        <label for="Name">Name</label>
        <input type="text" name="name">
        <label for="Username">UserName</label>
        <input type="email" name="email">
        <label for="mobile">Mobile Number</label>
        <input type="text" name="mobile">
        <input type="submit" value="Submit">
    </form>
  </div>
    
  <script type="text/javascript">
            function validate() {
                var l=/[a-zA-z]+$/;
                var l1=document.myForm.name.value.match(l);
                    if(!l1){
                        document.getElementById("error").textContent="Name must be only characters";
                        return false;
                    }
                
                if( document.myForm.name.value == "" ) {
                    document.getElementById("error").textContent="Please provide your name!";
                document.myForm.Name.focus() ;
                return false;
                }
                
                if( document.myForm.email.value == "" ) {
                    document.getElementById("error").textContent="Please provide your Email!" ;
                document.myForm.email.focus() ;
                return false;
                }

                if( document.myForm.mobile.value == "" || isNaN( document.myForm.mobile.value ) ||
                document.myForm.mobile.value.length != 10 ) {
                
                    document.getElementById("error").textContent="Please provide a correct mobile num.";
                document.myForm.mobile.focus() ;
                return false;
                }
               
                var emailID = document.myForm.email.value;
                atpos = emailID.indexOf("@");
                dotpos = emailID.lastIndexOf(".");
                
                if (atpos < 1 || ( dotpos - atpos < 2 )) {
                    document.getElementById("error").textContent="Please enter correct email ID";
                document.myForm.EMail.focus() ;
                return false;
                }
                return true;
            }
        </script>
</body>
</html>