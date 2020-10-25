<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


  <style>
      a {
  color: black !important;
}
</style>

</head>


<body>
<?php include('header.php'); ?>
<?php include('admin/function.php'); ?>

    
<form method="post" enctype="multipart/form-data">


<section class="text-gray-700 body-font relative">
  <div class="absolute inset-0 bg-gray-300">
    <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0013695749512!2d79.15722781482202!3d12.971763900946254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad479f0ccbe067%3A0xfef222e5f36ecdeb!2sVellore%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1598268145123!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="filter: grayscale(1) contrast(1.2) opacity(0.4);" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
  <div class="container px-5 py-24 mx-auto flex">
    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Contact Us</h2>
      <p class="leading-relaxed mb-5 text-gray-600">Will love to here from you!</p>
      <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" name="t1" placeholder="Name" type="Name">
      <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" name="t2" placeholder="Email" type="name">
      <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" name="t3" placeholder="Mobile" type="name">
      <textarea class="bg-white rounded border border-gray-400 focus:outline-none h-32 focus:border-indigo-500 text-base px-4 py-2 mb-4 resize-none" name="t4"  placeholder="Message"></textarea>
      <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit" name="sbmt">SUBMIT</button>
      <p class="text-xs text-gray-500 mt-3">Thank You.</p>
    </div>
  </div>
</section>

</form>

<?php
if(isset($_POST["sbmt"])) 
{
  
  $cn=makeconnection();     

      $s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
      
      
  $q=mysqli_query($cn,$s);
  mysqli_close($cn);
  if($q>0)
  {
  echo "<script>alert('Record Save');</script>";
  }
  else
  {echo "<script>alert('Saving Record Failed');</script>";
  }
    
    } 
  

?> 

</body>
</html>