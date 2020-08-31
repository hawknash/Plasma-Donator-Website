<html>
<head>
 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

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
  border:2px solid yellow;
  padding:20px;
  width:50%;
  margin:auto;
  margin-top: 2%;
  box-shadow:4px 1px 20px black !important;
  


}
.toasts{
  background:linear-gradient(#FFDD00,#FBB034);
  color: black
}
    </style>
            
</head>

<body>
  <?php include('admin/function.php'); ?>
 <?php include('header.php'); ?>




  <div class="mycard">
    <h4>People With Same Blood Group</h4>
    <div style="padding: 40px">

     <form method="post" enctype="multipart/form-data">
     

  <p style="display: inline-block;padding-right:  40px">Blood Group:    </p> <select style="display: inline-block;width: 100px" name="s2" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from bloodgroup";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);
  //echo $r;
  while($data=mysqli_fetch_array($result))
  {
    if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
    {
      echo "<option value=$data[0] selected>$data[1]</option>";
    }
    else
    {
      echo "<option value=$data[0]>$data[1]</option>";
    }
    
    
    
  }
  mysqli_close($cn);

?>



</select>

<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from bloodgroup where bg_id='" .$_POST["s2"] ."'";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);
  //echo $r;
  $data=mysqli_fetch_array($result);
  $bg_id=$data[0];
  $bg_name=$data[1];
  
    
    
  mysqli_close($cn);
}
?>
</div>

<input type="submit" value="Search" name="sbmt" style="border:0px; background:linear-gradient(#FFDD00,#FBB034); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">

                        
           



    
</form>
    

      
      
 
  </div>


<?php 
if(isset($_POST["sbmt"]))
{
  //header("location:result.php?bg=".$_POST["s2"]);
  echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."');</script>";
}

?>




</body>


</html>			