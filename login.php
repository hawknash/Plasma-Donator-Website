<?php session_start();  ?>
<html>
<head>
 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Plasma Donator</title>

   

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <link href="stylesheet.css" rel="stylesheet" type="text/css" />
    <style>
      a {
  color: black !important;
}

.brand-logo,
h2 {
  font-family: "Grand Hotel", cursive;
}


.input-field input[type="text"]:focus {
  border-bottom: 1px solid yellow !important;
  box-shadow: 0 1px 0 0 yellow !important;
}
.input-field input[type="password"]:focus {
  border-bottom: 1px solid yellow !important;
  box-shadow: 0 1px 0 0 yellow !important;
}
.input-field input[type="email"]:focus {
  border-bottom: 1px solid yellow !important;
  box-shadow: 0 1px 0 0 yellow !important;
}

.mycard{
  border:5px solid #2D7586;
  border-radius: 100px;
  padding:20px;
  width:40%;
  margin:auto;
  margin-top: 2%;
  box-shadow:4px 1px 20px black !important;
  background-color:#D0EBED;
  text-align: center;


}
.toasts{
  background:linear-gradient(#FFDD00,#FBB034);
  color: black
}

.bg-image {
background-image: url("login.jpg");

background-color: #cccccc;
height: 500px;
background-position: center;
background-repeat: no-repeat;
background-size: cover;

}
 

    </style>
            
</head>

<body class="bg-image">
  <?php include('admin/function.php'); ?>
 <?php include('header.php'); ?>




  <div class="mycard">
    <h2>Donor Login</h2>
    <div class="row">
    <form class="col s12" method="post" enctype="multipart/form-data">
      
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="t1" class="validate" required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="t2" class="validate" pattern="[a-zA-Z0-9]{5,10}" oninvalid="setCustomValidity('Length should be minimum 5 characters and contain number and alphabets')" onchange="setCustomValidity('')" required>
          <label for="password">Password</label>
        </div>
      </div>
      
        <input type="submit" value="Log In" name="sbmt" style="border:0px; background:#2D7586
        ; width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">
    

      
      
    </form>


  </div>
  </div>



<?php

$_SESSION['donorstatus']="";

if(isset($_POST["sbmt"])) 
{
  
  $cn=makeconnection();     
  $hashed=md5($_POST["t2"]);

      $s="select *from donarregistration where email='" . $_POST["t1"] . "' and pwd='$hashed'";
      
  $q=mysqli_query($cn,$s);
  $r=mysqli_num_rows($q);
  mysqli_close($cn);
  if($r>0)
  {
    $_SESSION["email"]=$_POST["t1"];
       $_SESSION['donorstatus']="yes";
//header("location:donor/index.php");
echo  "<script>location.replace('donor/index.php');</script>";
  }
  else
  {
    echo "<script> M.toast({html: 'Invalid Email/Password',classes: 'rounded',classes: 'toasts'})</script>";
  }
    
    } 
?> 

</body>


</html>			