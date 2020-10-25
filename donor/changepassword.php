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
  <?php include('header.php'); ?>

<?php

if($_SESSION['donorstatus']=="")
{
	//header("location:../login.php");
	echo "<script>location.replace('login.php');</script>";
}
?>






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
        Current Password
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="password"  name="t2">
    </div>
  </div>

   <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        New Password
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="password"  name="t3">
    </div>
  </div>

   <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Confirm Password
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="password"  name="t4">
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
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="select *from donarregistration where email='" .$_SESSION["email"] . "' and  pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	
	if($r>0)
	{
	
	$s1="update donarregistration set pwd='" . $_POST["t3"]  ."' where email='" .$_SESSION["email"] ."'";
	mysqli_query($cn,$s1);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";

	}
	else
	{
		echo "<script>alert('Invalid old Password');</script>";
	}
		
		}	
	

?> 

</body>
</html>