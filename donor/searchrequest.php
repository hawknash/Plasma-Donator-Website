<html>
<head>
 <!-- Compiled and minified CSS -->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <title>Plasma Donator</title>

    <!-- Compiled and minified JavaScript -->
    
    
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
  border:5px solid #277AAC;
  border-radius: 100px;
  padding:20px;
  width:40%;
  margin:auto;
  text-align: center;
  margin-top: 2%;
  box-shadow:4px 1px 20px black !important;
  background-color: #CEEDFF;
  


}
input{
  background-color: #CEEDFF;
}

select{
  background-color: #CEEDFF !important;
  
}

.bg-image {
background-image: url("../searchbg.jpg");
background-color: #cccccc;
height: 500px;
background-position: center;
background-attachment: fixed;
background-repeat: no-repeat;
background-size: cover;

}

.toasts{
  background:linear-gradient(#FFDD00,#FBB034);
  color: black
}
    </style>
            
</head>

<body class="bg-image">
  <?php include('function.php'); ?>
 <?php include('header.php'); ?>




  <div class="mycard">
  
    <h2>Search Requests!</h2>
    <div style="padding: 40px">

     <form method="post" enctype="multipart/form-data">
     
<div>
  <div style="display: inline-block;padding-right:40px;padding-left:150px;font-size:20;float:left;text-align:center">Blood Group:    </div><div > <select class="browser-default" style="width: 100px;" name="s2" ><option value="">Select</option>
</div>
</div>
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
<br>
<div style="display: inline-block;padding-right:  40px;padding-left:220px;float:left;font-size:20">City: </div><div style="float:left"> <input type="text" style="width: 100px;" name="city"></div>
<br>
</div>
<br>
<br>
<br>


<input type="submit" value="Search" name="sbmt" style="border:0px; background:#277AAC; width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">

                        
           



    
</form>
    

      
      
 
  </div>


<?php 
if(isset($_POST["sbmt"]))
{
  //header("location:result.php?bg=".$_POST["s2"]);
  if($_POST["s2"]!="" or $_POST["city"]!=""){
    echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."&city=". $_POST["city"] ."');</script>";


  }
  else{
    echo "<script>M.toast({html: 'Select atleast one value.',classes: 'rounded',classes: 'toasts'})</script>";
  }
 // echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."');</script>";
}

?>



</body>


</html>			