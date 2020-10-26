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


.bg-image {
background-image: url("searchbg.jpg");
background-color: #cccccc;
height: 500px;
background-position: center;
background-attachment: fixed;
background-repeat: no-repeat;
background-size: cover;

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
  background-color:#98DCF3;
  border-radius: 100px;
  width:50%;

  margin:auto;
  margin-top: 2%;

  box-shadow:4px 1px 20px black !important;
  


}
.toasts{
  background:linear-gradient(#FFDD00,#FBB034);
  color: black
}

.newcard{
  width:80%;
  background-color: #CEEDFF;
  margin:auto;
  border-radius: 100px;
  box-shadow:4px 1px 20px #277AAC !important;
  border:4px solid #277AAC;
  margin-top: 30px;
  margin-bottom: 20px;
}

    </style>
            
</head>

<body class="bg-image">
  <?php include('admin/function.php'); ?>
 <?php include('header.php'); ?>




  <div class="mycard">
    <h2>Registered Donors.</h2>
     <?php

$cn=makeconnection();

    if($_REQUEST["bg"]!="" and $_REQUEST["city"]==""){


$s="select * from donarregistration,bloodgroup where donarregistration.b_id='". $_REQUEST["bg"]."' and donarregistration.b_id=bloodgroup.bg_id";


    }
    else if($_REQUEST["bg"]=="" and $_REQUEST["city"]!=""){
      $s="select * from donarregistration,bloodgroup where donarregistration.city='". $_REQUEST["city"]."' and donarregistration.b_id=bloodgroup.bg_id";

    }
    else{
      $s="select * from donarregistration,bloodgroup where donarregistration.city='". $_REQUEST["city"]."' and donarregistration.b_id='". $_REQUEST["bg"]."' and '". $_REQUEST["bg"]."'=bloodgroup.bg_id";

    }


    $result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
if ($r==0){
  echo "<p><b>No Donor Found</b></p>";
  echo "<script>M.toast({html: 'Sorry no donor found.',classes: 'rounded',classes: 'toasts'})</script>";
}
$n=0;
while($data=mysqli_fetch_array($result))
{

 
?>
  <div class="newcard">
    <div style="display: inline-block;">
    <img src="doner_pic/<?php echo $data[9] ?>" style="width:200px;height: 150px;padding-right: 20px">
    </div>
    <div style="display: inline-block;">
    <p><b>Name:</b> <?php echo $data[1]; ?></p>
      <p><b>Gender:</b> <?php echo $data[2]; ?>
      </p>
      <p><b>Email:</b> <?php echo $data[7]; ?></p>
      <p><b>Mobile No:</b> <?php echo $data[4]; ?></p>
      <p><b>City:</b> <?php echo $data[5]; ?></p>
      <p><b>Blood Group:</b> <?php echo $data[11]; ?></p>

    </div>

  </div>

 
    <?php }
   ?>
  </div>
    

   

</body>


</html>			