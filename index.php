<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Plasma Donator</title>


  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


<style>

.confirmed-cases{
width: 200px;
  height: 200px;
   background:linear-gradient(#ffcbcb,#fe8584);
  color: #6e1613;
  border-radius: 10% ;
  text-align:center;
  
}

.active-cases{
  width: 200px;
  height: 200px;
   background:linear-gradient(#f6cb68,#fcab7d);
  color: #733f14;
  border-radius: 10% ;
  text-align:center;
 

}

.recovered-cases{
  width: 200px;
  height: 200px;
   background:linear-gradient(#9ce99c,#ccf77c);
  color: #217535;
  border-radius: 10% ;
  text-align:center;
 

}

.deceased-cases{
  width: 200px;
  height: 200px;
   background:linear-gradient(#d3eefd,#a8ccfd);
  color: #103c65;
  border-radius: 10% ;
  text-align:center;
 

}

</style>



</head>
<body>

<?php include('header.php'); ?>

<?php
$json = file_get_contents('https://api.covid19india.org/data.json');
$obj = json_decode($json,true);


?>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Welcome to Plasma Donator</h1>
        <div class="row center">
          <h5 class="header col s12 light">Donate Plasma Save Life!</h5>
        </div>
        <div class="row center">
          <a href="" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Know More</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="bb2.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
      <h1 class="header center red-text text-red-2">COVID CASES IN INDIA</h1>
        <div class="col s12 m3">
          <div class="icon-block">
           

            <div class="confirmed-cases">
  <img src="https://www.mohfw.gov.in/assets/images/icon-active.png" style="padding-top: 20px">
  <h4>Confirmed </h4>
  <h6><?php echo $obj["statewise"][0]["confirmed"]?></h6>
  </div>


          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            
            <div class="deceased-cases">
  <img src="https://www.mohfw.gov.in/assets/images/icon-infected.png" style="padding-top: 20px">
  <h4>Deceased</h4>
  <h6><?php echo $obj["statewise"][0]["deaths"]?></h6>
  </div>
          </div>
        </div>

   

        <div class="col s12 m3">
          <div class="icon-block">
          <div class="active-cases">
  <img src="https://www.mohfw.gov.in/assets/images/icon-active.png" style="padding-top: 20px;">
  <h4>Active</h4>
  <h6><?php echo $obj["statewise"][0]["active"]?></h6>
  </div>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
          <div class="recovered-cases">
  <img src="https://www.mohfw.gov.in/assets/images/icon-inactive.png" style="padding-top: 20px;">
  <h4>Recovered</h4>
  <h6><?php echo $obj["statewise"][0]["recovered"]?></h6>
  </div>
</div>
          </div>
        </div>

     


      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h4 class="header col s12 black-text light" style="font-weight:bold;">Convalescent plasma therapy may help people recover from COVID-19. It may lessen the severity or shorten the length of the disease.</h4>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="plasma.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Why Plasma Therapy.</h4>
          <p class="left-align light"> As the need for a COVID vaccine grows, most medical practitioners have recommended an old method for fighting the infectious disease. This treatment used is called plasma therapy. 
          It is a medical process where blood is donated by recovered patients to establish antibodies that fight the infection.
          A convalescent plasma therapy uses antibodies (a type of protein i.e produced by plasma) from patients who have completely recovered from COVID-19 infection. Here is how this procedure will fight coronavirus in your body.

Blood is taken from a previously infected but completely recovered patient, the plasma component of that blood is separated and that contains the antibodies against SARS-CoV-2 virus. This plasma is injected into an infected person’s body that will fight the virus and neutralise it from spreading.
Once the patient has recovered, he/she will be asked to donate their blood so that their antibodies will be used to treat other infected patients.
The blood sample will be checked for any existing harmful diseases such as Hepatitis B & C including HIV.
The recovered blood will be taken into study and a researcher will extract plasma from the blood that can be injected into an infected person.
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 black-text light" style="font-weight:bold;">Data from small clinical trials and a national access program suggest that convalescent plasma may lessen the severity or shorten the duration of COVID-19. </h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="plasmabackground1.jpg" alt="Unsplashed background img 3"></div>
  </div>

  

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



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
