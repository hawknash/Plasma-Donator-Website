<?php if(!isset($_SESSION)) {session_start();}  ?>
<!DOCTYPE html>
<html>
<head>
<title>Plasma Donator</title>
<script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="stylesheet.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
 


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

.toasts{
  background:linear-gradient(#FFDD00,#FBB034) !important;
  color: black !important;
}


.bg-image {
background-image: url("changebg.jpeg");
background-color: #cccccc;
height: 500px;
background-position: center;
background-attachment: fixed;
background-repeat: no-repeat;
background-size: cover;

}

</style>

</head>


<body class="bg-image">
  <?php include('header.php'); ?>

<?php

if($_SESSION['donorstatus']=="")
{
	//header("location:../login.php");
  echo "<script>location.replace('../login.php');</script>";
    }

    $cn=mysqli_connect("localhost","root","","plasma");
      $s="select * from donarregistration where email='" . $_SESSION["email"] . "'";
      
  $q=mysqli_query($cn,$s);
  $r=mysqli_num_rows($q);
  
  $data=mysqli_fetch_array($q);
  $name=$data[1];
  $gender=$data[2];
  $age=$data[3];
  $mobile=$data[4];
  $pic=$data[9];
  //echo $name;
  mysqli_close($cn);
?>






<section class="text-gray-700 body-font" style="padding-top: 60px;">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded" alt="hero" src="../doner_pic/<?php echo @$pic; ?>">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">

      <form class="w-full max-w-sm" method="post">
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-black font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Current Password
      </label>
    </div>
    <div class="md:w-2/3">
      <input required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="password"  name="t2">
    </div>
  </div>

   <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-black font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        New Password
      </label>
    </div>
    <div class="md:w-2/3">
      <input required class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" style="text-color:white !important;" id="inline-full-name" type="password"  name="t3">
    </div>
  </div>

   <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-black font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Confirm Password
      </label>
    </div>
    <div class="md:w-2/3">
      <input required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="password"  name="t4">
    </div>
  </div>
  

  







  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" name="sbmt">
        Change Password!
      </button>
    </div>
  </div>
</form>
      
      </div>
    </div>
  </div>
</section>





  <?php include('function.php'); ?>
<?php


if($_SESSION['donorstatus']=="")
{
  header("location:../login.php");
  
}

if(isset($_POST["sbmt"])) 
{
	
  $cn=makeconnection();			
  $hashed=md5($_POST["t2"]);

			$s="select *from donarregistration where email='" .$_SESSION["email"] . "' and  pwd='$hashed'";
			
	$q=mysqli_query($cn,$s);
  $r=mysqli_num_rows($q);
  echo "$r";
	
	if($r>0 && $_POST["t3"]==$_POST["t4"] )
	{
    $newhashed=md5($_POST["t3"]);
	
	$s1="update donarregistration set pwd='$newhashed' where email='" .$_SESSION["email"] ."'";
	mysqli_query($cn,$s1);
	mysqli_close($cn);
  echo  "<script>M.toast({html: 'Password Updated.',classes: 'rounded',classes: 'toasts'})</script>";
  

	}
	else
	{
		echo  "<script>M.toast({html: 'Error',classes: 'rounded',classes: 'toasts'})</script>";
  
	}
		
		}	
	

?> 

</body>
</html>