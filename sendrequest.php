<html>
<head>
 <!-- Compiled and minified CSS -->
   
    <title>Plasma Donator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <link href="stylesheet.css" rel="stylesheet" type="text/css" />

    <!-- Compiled and minified JavaScript -->
  
     <style>
      a {
  color: black !important;
}
table,tr,td,th {
  border-collapse: collapse;
  padding: 15px;

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
  border:5px solid red;
  border-radius: 100px;
  padding:20px;
  width:50%;
  margin:auto;
  margin-top: 2%;
  margin-bottom: 2%;
  box-shadow:4px 1px 20px black !important;
  text-align: center;
  background-color:#FCE7E6;
  


}
.toasts{
  background:linear-gradient(#FFDD00,#FBB034);
  color: black
}
select{
  display: inline !important;
  background-color:#FCE7E6;
}

.bg-image {
background-image: url("donorbg.jpg");
background-color: #cccccc;
height: 500px;
background-position: center;
background-attachment: fixed;
background-repeat: no-repeat;
background-size: cover;

}


    </style>
    
            
</head>
<body class="bg-image">
	<?php include('admin/function.php'); ?>
	<?php include('header.php'); ?>
	
<div class="mycard">  
       
  <form method="post" enctype="multipart/form-data">
 <table >

   <tr><td colspan="2" style="text-align:center"><h2>Send Request</h2></td></tr>

   

                   

<tr>
  <td  align="center"> Name:</td>
  <td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for donor name" /></td>
</tr>
 
<tr><td class="lefttd" align="center">Gender</td><td><input name="r1" type="radio" value="male" checked="checked">Male   <input name="r1" type="radio" value="female">Female</td></tr>
<tr>
  <td  align="center">Age</td>
  <td><input type="text" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td>
</tr>
 
<tr>
  <td  align="center">Mobile No</td><td><input type="number" name="t3"  required="required" pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td>
</tr>

<tr>
  <td  align="center">City</td><td>
    <input type="text" oninput="this.value=this.value.toLowerCase()" name="city" required="required" /></td>
  </tr>
 
<tr>
 
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
  <td  align="center">Till Required Date</td><td>
<select name="month"  style=" width:70px" >
<option value="1">JAN</option>
<option value="2">FEB</option>
<option value="1">MARCH</option>
<option value="1">APRIL</option>
<option value="1">MAY</option>
<option value="1">JUNE</option>
<option value="1">JULY</option>
<option value="1">AUG</option>
<option value="1">SEPT</option>
<option value="1">OCT</option>
<option value="1">NOV</option>
<option value="1">DEC</option>
</select   >
<select name="day" style=" width:70px">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>

<input type="text" name="year" style=" width:50px"  /></td>
</tr>

<tr>
  <td  align="center">Detail</td><td><textarea name="t7"></textarea></td>
</tr>
 
<tr><td>&nbsp;</td>
  <td><input type="submit" value="Submit" name="sbmt" style="border:0px; background:red
        ; width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>
</table>

</form>  
</div>
      
      <?php
if(isset($_POST["sbmt"])) 
{
      
    
  $cn=makeconnection();
    $d=$_POST["year"]."/".$_POST["month"]."/".$_POST["day"];
      $s="insert into requests(name,gender,age,mobile,bgroup,email,reqdate,detail,city) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $d .  "','" .  $_POST["t7"]  ."','" .  $_POST["city"]  ."')";
      
      
  $q=mysqli_query($cn,$s);
 
  if($q>0)
  {

    $s="select * from donarregistration,bloodgroup where donarregistration.city='". $_POST["city"]."' and donarregistration.b_id='". $_POST["t4"]."' and '". $_POST["t4"]."'=bloodgroup.bg_id";
    
    $result=mysqli_query($cn,$s);
    $r=mysqli_num_rows($result);

    while($data=mysqli_fetch_array($result))
    {
      $name=$_POST["t1"];
      $gender=$_POST["r1"];
      $email=$_POST["t5"];
      $mobile=$_POST["t3"];
      $city=$_POST["city"];
      $bg=$data[11];
      $detail=$_POST["t7"];

      $message="
      <html>
      <body>
      <h2> Plasma Request for: </h2>
        <p><b>Name:</b> $name</p>
        <p><b>Gender:</b> $gender
        </p>
        <p><b>Email:</b> $email</p>
        <p><b>Mobile No:</b> $mobile</p>
        <p><b>City:</b> $city</p>
        <p><b>Blood Group:</b> $bg</p>
        <p><b>Detail: </b>$detail</p>

  
      </body>
      </html>
      ";

      $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <plasmadonator123@gmail.com>' . "\r\n";

  mail($data[7],'Requests For Plasma',$message,$headers);

    mysqli_close($cn);
   
  }
  echo "<script>M.toast({html: 'Record Sent',classes: 'rounded',classes: 'toasts'})</script>";
}
  else
  { echo "<script>M.toast({html: 'Error',classes: 'rounded',classes: 'toasts'})</script>";
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