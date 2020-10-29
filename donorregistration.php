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
table,tr,td,th {
  border-collapse: collapse;
  padding: 20px
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
  border:5px solid #2D7586;
  border-radius: 100px;
  padding:20px;
  width:50%;
  margin:auto;
  margin-top: 2%;
  margin-bottom: 2%;
  box-shadow:4px 1px 20px black !important;
  background-color: #D0EBED;
  text-align: center;


}
.toasts{
  background:linear-gradient(#FFDD00,#FBB034);
  color: black
}
select{
  display: inline !important;
  background-color: #D0EBED;
}

.bg-image {
background-image: url("login.jpg");

background-color: #cccccc;
height: 100%;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;



}

    </style>
    
            
</head>
<body class="bg-image">
	<?php include('admin/function.php'); ?>
	<?php include('header.php'); ?>
	
<div class="mycard">  
       
  <form method="post" enctype="multipart/form-data">
 <table >

   <tr><td colspan="2" style="text-align:center"><h2>Donor Registration</h2></td></tr>

   

                   

<tr>
  <td  align="center">Donor Name</td>
  <td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for donor name" /></td>
</tr>
 <tr><td class="lefttd">Gender</td><td><input name="r1" type="radio" value="male" checked="checked">Male  <input name="r1" type="radio" value="female" >Female</td></tr>

 
<tr>
  <td  align="center">Age</td>
  <td><input type="number" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td>
</tr>
 
<tr>
  <td  align="center">Mobile No</td><td><input type="number" name="t3"  required="required" pattern="[0-9]{10,10}" title="please enter only numbers between for mobile no." /></td>
</tr>

<tr>
  <td  align="center">City</td><td><input type="text" name="city"  required="required" oninput="this.value=this.value.toLowerCase()" title="Please enter city" /></td>
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
  <td><input type="password" name="t6" required="required" pattern="[a-zA-Z0-9]{5,10}" oninvalid="setCustomValidity('Length should be minimum 5 characters and contain number and alphabets')" /></td>
</tr>
<tr>
  <td >Confirm Password</td>
  <td><input type="password" name="t7" required="required" pattern="[a-zA-Z0-9]{5,10}" oninvalid="setCustomValidity('Length should be minimum 5 characters and contain number and alphabets')" /></td>
</tr>

<tr>
  <td >Uplode Pic</td><td><input type="file" name="t8" /></td>
</tr>
 
<tr><td>&nbsp;</td>
  <td><input type="submit" value="Register" name="sbmt" style="border:0px; background:#2D7586; width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>
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
    } 
    else 
    {
      echo "<script>M.toast({html: 'File is not a image',classes: 'rounded',classes: 'toasts'})</script>";
        $uploadOk = 0;
    }



  if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif" && $imageFileType !="PNG" && $uploadOk==1)
  {
    
    echo "<script>M.toast({html: 'Sorry, only jpg, jpeg, Png & gif files are allowed.',classes: 'rounded',classes: 'toasts'})</script>";
    $uploadOk=0;
  
  }
  else
  {
    if($uploadOk==1)
    {
      $cn=makeconnection();     

      $s="select *from donarregistration where email='" . $_POST["t5"] . "'";
      
  $q=mysqli_query($cn,$s);
  $r=mysqli_num_rows($q);
  mysqli_close($cn);
  if($r<=0)
  {
    $uploadOk=1;
    }
    else{
      $uploadOk=0;
      echo "<script>M.toast({html: 'Account with this email already exists.',classes: 'rounded',classes: 'toasts'})</script>";

    }

    if(move_uploaded_file($_FILES["t8"]["tmp_name"], $target_file) && $uploadOk==1)
    {
    $cn=makeconnection();
    $hashed=md5($_POST["t6"]);
    echo "$hashed";
      $s="insert into donarregistration(name,gender,age,mobile,city,b_id,email,pwd,pic) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["city"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','$hashed','" . basename($_FILES["t8"]["name"])  ."')";
      
      //$s="INSERT INTO donarregistration(name,gender,age,mobile,b_id,email,pswd,pic) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])"
  mysqli_query($cn,$s);
  mysqli_close($cn);
  if($s>0)
  {
  echo "<script>M.toast({html: 'Record Saved',classes: 'rounded',classes: 'toasts'})</script>";
  }
  else
  {
    echo "<script>M.toast({html: 'Record Saved',classes: 'rounded',classes: 'toasts'})</script>";
  }
    } 
   
  
  }
}
}
?> 


<footer class="page-footer purple">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Plasma Donator</h5>
                <p class="grey-text text-lighten-4">Plasma Donator website is made with the aim to provide a platform where people needing plasma can request and donors can donate.
                This might be very helpful for people in need adn can save their lives.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Know Us.</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="login.php">Login.</a></li>
                  <li></li>
                  <li><a class="grey-text text-lighten-3" href="sendrequest.php">Send Request.</a></li>
                  <li></li>
                  <li><a class="grey-text text-lighten-3" href="search.php">Search.</a></li>
                  <li><a class="grey-text text-lighten-3" href="contact.php">Contact Us.</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            Made by <a class="brown-text text-lighten-3" href="index.php">Naman and Aryamaan.</a>
          
            </div>
          </div>
        </footer>


</body>
</html>