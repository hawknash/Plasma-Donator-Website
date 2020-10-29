<?php if(!isset($_SESSION)) {session_start();}  ?>
<html>
<head>
 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Plasma Donator</title>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <style>
      a {
  color: black !important;
}

.brand-logo,
h2 {
  font-family: "Grand Hotel", cursive;
}


.input-field input[type="text"]:focus {
  border-bottom: 1px solid #1f1feb !important;
  box-shadow: 0 1px 0 0 #1f1feb !important;
}
.input-field input[type="password"]:focus {
  border-bottom: 1px solid #1f1feb !important;
  box-shadow: 0 1px 0 0 #1f1feb !important;
}

.mycard{
  border:2px solid yellow;
  background-color:white;
  border-radius:50px;
  padding:20px;
  width:50%;
  margin:auto;
  margin-top: 2%;
  box-shadow:4px 1px 20px black !important;
}

.bg-image {
background-image: url("requestbg.jpg");

background-color: #cccccc;
height: 500px;
background-position: center;
background-repeat: no-repeat;
background-size: cover;

}

    </style>
            
</head>

<body class="bg-image">
<?php include('header.php'); ?>


<div  class="mycard">
<table class="striped" style="text-align:center">

<img src="../request.PNG" style="text-align: center;padding-left: 35%" >
<tr><td  >Name</td><td  >Gender</td><td  >Age</td><td  >Mobile</td><td  >Email</td><td  >Blood Group</td><td  >City</td></tr>

<?php


if($_SESSION['donorstatus']=="")
{
  header("location:../login.php");
  
}

  


$cn=mysqli_connect("localhost","root","","plasma");
$s="select * from requestes";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);
  //echo $r;
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