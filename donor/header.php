<html>
<head>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 

<style>
.dropdown-content{
   width: max-content !important;
   height:auto !important;
}
</style>
<script>
    $(document).ready(function(){
        $('.modal').modal();
        $('.dropdown-trigger').dropdown();
    });
</script>
</head>


<body>

<ul id="dropdown" class="dropdown-content">
  <li><a href="viewrequest.php">All requests</a></li>
  <li><a href="searchrequest.php">Search Requests</a></li>
  
</ul>
<nav style="height:100px;background:white;">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img src="../pasmaLogo.PNG" style="width:150px;height:100px" ></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
       
        <li><a href="sendrequest.php">Send Request</a></li>
      
        <li><a class = "dropdown-button" href = "#" data-activates = "dropdown">Requests
        <i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="updateprofile.php">Update Profile</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
        
         <li><a href="contact.php">Contact Us</a></li>
         <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>
  </body>
  </html>