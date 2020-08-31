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
  margin:auto;
  box-shadow:4px 1px 20px #999900 !important;
  border:2px solid yellow;
  margin-top: 30px;
}

    </style>
            
</head>

<body>
  <?php include('admin/function.php'); ?>
 <?php include('header.php'); ?>




  <div class="mycard">
    <h2>Results</h2>
     <?php
$cn=makeconnection();
$s="select * from donarregistration,bloodgroup where donarregistration.b_id='". $_REQUEST["bg"]."' and donarregistration.b_id=bloodgroup.bg_id";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);
  //echo $r;
  $n=0;
  while($data=mysqli_fetch_array($result))
  {
?>
    <div class="newcard">
      <div style="display: inline-block;">
      <img src="doner_pic/<?php echo $data[8] ?>" style="width:120px;height: 150px;padding-right: 20px">
      </div>
      <div style="display: inline-block;">
      <p><b>Name:</b> <?php echo $data[1]; ?></p>
        <p><b>Gender:</b> <?php echo $data[2]; ?>
        </p>
        <p><b>Email:</b> <?php echo $data[6]; ?></p>
        <p><b>Mobile No:</b> <?php echo $data[4]; ?></p>
        <p><b>Blood Group:</b> <?php echo $data[10]; ?></p>

      </div>

    </div>
    <?php }
   ?>
  </div>
    

    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

</body>


</html>			