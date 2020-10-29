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


.bg-image {
background-image: url("requestbg.jpg");
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
  border:2px solid yellow;
  background-color:white;
  border-radius:50px;
  padding:20px;
  width:50%;
  margin:auto;
  margin-top: 2%;
  margin-bottom: 3%;
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
  <?php include('function.php'); ?>
 <?php include('header.php'); ?>


 <div  class="mycard">
<table class="striped" style="text-align:center">

<img src="../request.PNG" style="text-align: center;padding-left: 35%" >
<tr><td>Name</td><td  >Gender</td><td  >Age</td><td  >Mobile</td><td  >Email</td><td  >Blood Group</td><td  >City</td></tr>


  
     <?php

$cn=makeconnection();

    if($_REQUEST["bg"]!="" and $_REQUEST["city"]==""){


$s="select * from requests,bloodgroup where requests.bgroup='". $_REQUEST["bg"]."' and requests.bgroup=bloodgroup.bg_id";


    }
    else if($_REQUEST["bg"]=="" and $_REQUEST["city"]!=""){
      $s="select * from requests,bloodgroup where requests.city='". $_REQUEST["city"]."' and requests.bgroup=bloodgroup.bg_id";

    }
    else{
      $s="select * from requests,bloodgroup where requests.city='". $_REQUEST["city"]."' and requests.bgroup='". $_REQUEST["bg"]."' and '". $_REQUEST["bg"]."'=bloodgroup.bg_id";

    }


    $result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
if ($r==0){
  echo "<p><b>No Requests Found</b></p>";
  echo "<script>M.toast({html: 'Sorry no requests found.',classes: 'rounded',classes: 'toasts'})</script>";
}
$n=0;
while($data=mysqli_fetch_array($result))

{
  $ss="select bg_name from bloodgroup where bg_id=$data[6]";
  $rr=mysqli_query($cn,$ss);
  $rrr=mysqli_fetch_array($rr);
  
      echo"<tr><td  >$data[1]</td><td  >$data[2]</td><td  >$data[3]</td><td  >$data[4]</td><td  >$data[5]</td><td  >$rrr[0]</td><td  >$data[9]</td></tr>";
    }
    mysqli_close($cn);
?>
</table>
</div>

   

</body>


</html>			