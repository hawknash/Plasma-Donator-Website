<html>
<head>
 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

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
  padding:20px;
  width:50%;
  margin:auto;
  margin-top: 2%;
  box-shadow:4px 1px 20px black !important;


}
    </style>
            
</head>

<body>
<?php include('header.php'); ?>


<div  class="mycard">
<table class="striped" style="align:center">

<img src="request.PNG" >

<?php

	
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from requestes";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  >$data[0]</td><td  >$data[1]</td><td  >$data[2]</td><td  >$data[3]</td><td  >$data[4]</td><td  >$data[5]</td><td  >$data[6]</td></tr>";
			}
			mysqli_close($cn);
?>
</table>
</div>
</body>


</html>			