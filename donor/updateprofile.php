<?php if(!isset($_SESSION)) {session_start();}  ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="stylesheet.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


  <style>
      a {
  color: black !important;
}
h2 {
  padding: 10px;
  padding-top: 50px;
  font-family: "Grand Hotel", cursive;
  font-size: 40px !important;
  font-weight: bold !important;
}
</style>

</head>
<body>

<nav style="height:100px;background:white;">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img src="../pasmaLogo.PNG" style="width:150px;height:100px" ></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="viewrequest.php">Home</a></li>
       
        <li><a href="sendrequest.php">Send Request</a></li>
        <li><a href="index.php">View Request</a></li>
        <li><a href="updateprofile.php">Update Profile</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
        
         <li><a href="../contact.php">Contact Us</a></li>
      </ul>
    </div>
  </nav>

<?php

if($_SESSION['donorstatus']=="")
{
  header("location:../login.php");
  print("noooo");
}
?>
<?php include('function.php'); ?>
<?php
      
  $cn=mysqli_connect("localhost","root","","bloodbank");
      $s="select * from donarregistration where email='" . $_SESSION["email"] . "'";
      
  $q=mysqli_query($cn,$s);
  $r=mysqli_num_rows($q);
  
  $data=mysqli_fetch_array($q);
  $name=$data[1];
  $gender=$data[2];
  $age=$data[3];
  $mobile=$data[4];
  $pic=$data[8];
  //echo $name;
  mysqli_close($cn);
  
    
    
  
  

?> 
<div style="text-align: center">
<h2>Welcome <?php echo @$name;  ?></h2>
</div>

<section class="text-gray-700 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded" alt="hero" src="../doner_pic/<?php echo @$pic; ?>">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">

      <form class="w-full max-w-sm" method="post">
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Full Name
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"  name="t1">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Age
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="number" placeholder="0" name="t2">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Mobile No
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"  name="t3">
    </div>
  </div>

  

 <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3"><label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Gender
      </label></div>
    <label class="inline-flex items-center">
      <input type="radio" class="form-radio" name="r1" value="male">
      <span class="ml-2">Male</span>
    </label>
    <label class="inline-flex items-center ml-6">
      <input type="radio" class="form-radio" name="r1" value="female">
      <span class="ml-2">Female</span>
    </label>
  </div>





  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" name="sbmt">
        Update Profile!
      </button>
    </div>
  </div>
</form>
      
      </div>
    </div>
  </div>
</section>


<?php
  
  if(isset($_POST["sbmt"])) 
  {
    $cn=makeconnection();
    
    
          $s="update donarregistration set name='" .$_POST["t1"]. "' ,gender='" .$_POST["r1"]."' , age='" .$_POST["t2"]. "',mobile='" .$_POST["t3"]. "' where email='" .$_SESSION["email"]. "'";
    
$i=mysqli_query($cn,$s);
  mysqli_close($cn);
  echo "<script>location.replace('updateprofile.php');</script>";
  location.reload();
}
?> 


</body>
</html>