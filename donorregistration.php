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
table,tr,td,th {
  border-collapse: collapse;
  padding: 15px
}
.brand-logo,
h2 {
  font-family: "Grand Hotel", cursive;
}

input[type="radio"]{
    -webkit-appearance: radio;
    opacity: 100% !important;
    pointer-events: auto !important;
    position: relative !important;
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
  text-align: center;


}
.toasts{
  background:linear-gradient(#FFDD00,#FBB034);
  color: black
}
select{
  display: inline !important;
}
    </style>
    
            
</head>
<body>
	<?php include('admin/function.php'); ?>
	<?php include('header.php'); ?>
	
<div class="mycard">  
       
  <form method="post" enctype="multipart/form-data">
 <table >

   <tr><td colspan="2" style="text-align:center"><h2>Donor Registration</h2></td></tr>

   

                   

<tr>
  <td  align="center">Donor Name:</td>
  <td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for donor name" /></td>
</tr>
 <tr><td class="lefttd">Gender</td><td><input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female" >Female</td></tr>

 
<tr>
  <td  align="center">Age</td>
  <td><input type="text" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td>
</tr>
 
<tr>
  <td  align="center">Mobile No</td><td><input type="number" name="t3"  required="required" pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td>
</tr>
 
<tr>
  <td  align="center">Select Blood Group </td><td><select name="t4" required>
    <option value="">Select</option>
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



</select></td></tr>

<tr>
  <td  align="center">E-Mail</td><td>
    <input type="email" name="t5" required="required" /></td>
  </tr>
 
<tr>
  <td >Password</td>
  <td><input type="password" name="t6" required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td>
</tr>
<tr>
  <td >Confirm Password</td>
  <td><input type="password" name="t7" required="required" pattern="[a-zA-Z0-9 ]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td>
</tr>

<tr>
  <td >Uplode Pic</td><td><input type="file" name="t8" /></td>
</tr>
 
<tr><td>&nbsp;</td>
  <td><input type="submit" value="Register" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>
</table>

</form>  
</div>
      
      
<?php
if(isset($_POST["sbmt"])) 
{
$target_dir = "doner_pic/";
$target_file = $target_dir . basename($_FILES["t8"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["t8"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "<script>M.toast({html: 'Account Already Exist',classes: 'rounded',classes: 'toasts'})</script>";
    $uploadOk = 0;
}
//aloow certain file formats
  if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif" && $imageFileType !="PNG"){
    echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
    $uploadok=0;
  }else{
    if(move_uploaded_file($_FILES["t8"]["tmp_name"], $target_file)){
    $cn=makeconnection();
      $s="insert into donarregistration(name,gender,age,mobile,b_id,email,pwd,pic) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] .  "','" . basename($_FILES["t8"]["name"])  ."')";
      
      //$s="INSERT INTO donarregistration(name,gender,age,mobile,b_id,email,pswd,pic) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])"
  mysqli_query($cn,$s);
  mysqli_close($cn);
  if($s>0)
  {
  echo "<script>M.toast({html: 'Record Saved',classes: 'rounded',classes: 'toasts'})</script>";
  }
  else
  {echo "<script>M.toast({html: 'Record Saved',classes: 'rounded',classes: 'toasts'})</script>";
  }
    } else{
      echo "<script>M.toast({html: 'Error Uploading files',classes: 'rounded',classes: 'toasts'})</script>";
    } 
  
  }
}
?> 

</body>
</html>