<html>
<head>
 <!-- Compiled and minified CSS -->
   <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
    
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        
      <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js">
      </script>           
     
      </script>  


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current",{packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        async function getData()
              {
                var active=[['State','Value']];
                var confirmed=[['State','Value',{ role: 'style' }]];
                var deaths=[['State','Value',{ role: 'style' }]];
                var recovered=[['State','Value',{ role: 'style' }]];
                const response=await fetch("https://api.covid19india.org/data.json");
                const data=await response.json();
                for (var i=1;i<38;i++)
                {
                  //console.log(data.statewise[i].state);
                  var a=[data.statewise[i].state,parseInt(data.statewise[i].active)];
                  var c=[data.statewise[i].state,parseInt(data.statewise[i].confirmed),'red'];
                  var d=[data.statewise[i].state,parseInt(data.statewise[i].deaths),'black'];
                  var r=[data.statewise[i].state,parseInt(data.statewise[i].recovered),'green'];
                  //console.log(a);
                  active.push(a);
                  confirmed.push(c);
                  deaths.push(d);
                  recovered.push(r);
                }
                //console.log(active);
                var active=google.visualization.arrayToDataTable(active);
                var options = {
                    title: 'Number of Active Cases - StateWise',
                    legend: { position: 'none' },
                     hAxis: {
                       slantedText: true,
                       slantedTextAngle: 90,
                       showTextEvery:1
                    },                    
                  };
                var chart = new google.visualization.ColumnChart(document.getElementById('active_chart'));
                chart.draw(active,options);


                var confirmed=google.visualization.arrayToDataTable(confirmed);
                var options = {
                    title: 'Number of Confirmed Cases - StateWise',
                    legend: { position: 'none' },
                     hAxis: {
                       slantedText: true,
                       slantedTextAngle: 90,
                       showTextEvery:1
                    },                    
                  };
                var chart = new google.visualization.ColumnChart(document.getElementById('confirmed_chart'));
                chart.draw(confirmed,options);

                var deaths=google.visualization.arrayToDataTable(deaths);
                var options = {
                    title: 'Number of Deaths - StateWise',
                    legend: { position: 'none' },
                     hAxis: {
                       slantedText: true,
                       slantedTextAngle: 90,
                       showTextEvery:1
                    },
                    //width:1500,
                    //height:1150
                  };
                var chart = new google.visualization.ColumnChart(document.getElementById('deaths_chart'));
                chart.draw(deaths,options);


                var recovered=google.visualization.arrayToDataTable(recovered);
                var options = {
                    title: 'Number of Recovered Cases - StateWise',
                    legend: { position: 'none' },
                     hAxis: {
                       slantedText: true,
                       slantedTextAngle: 90,
                       showTextEvery:1
                    },                    
                  };
                var chart = new google.visualization.ColumnChart(document.getElementById('recovered_chart'));
                chart.draw(recovered,options);
              }
        getData();
      }



     


    </script>




     <style>
      a {
  color: black !important;
}






.brand-logo,
h2,h4 {
  font-family: "Grand Hotel", cursive;
}
h2{
  margin-left: -6%;
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
  


}
.toasts{
  background:linear-gradient(#FFDD00,#FBB034);
  color: black
}

.active-cases{
  width: 200px;
  height: 200px;
   background:linear-gradient(#f6cb68,#fcab7d);
  color: #733f14;
  border-radius: 10% ;
  float: left;
  margin: 4%;

}

.recovered-cases{
  width: 200px;
  height: 200px;
   background:linear-gradient(#9ce99c,#ccf77c);
  color: #217535;
  border-radius: 10% ;
  float: left;
  margin: 4%;

}

.confirmed-cases{
width: 200px;
  height: 200px;
   background:linear-gradient(#ffcbcb,#fe8584);
  color: #6e1613;
  border-radius: 10% ;
  float: left;
  margin: 4%;
  margin-left: 12%
}

.deceased-cases{
  width: 200px;
  height: 200px;
   background:linear-gradient(#d3eefd,#a8ccfd);
  color: #103c65;
  border-radius: 10% ;
  float: left;
  margin: 4%;

}

.case{
  width: 100%;
  height: 55%;
  text-align: center;

  
}

.bg-image {
background-image: url("6262.jpg");
background-color: #cccccc;
height: 500px;
background-position: center;
background-repeat: no-repeat;
background-size: cover;

}
 

    </style>
    <!-- Compiled and minified JavaScript -->
  



</head>
<body >
  <?php include('header.php'); ?>
   <?php
$json = file_get_contents('https://api.covid19india.org/data.json');
$obj = json_decode($json,true);





?>



<section class="text-gray-700 body-font bg-image" style="height: 100%">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Why Plasma!
        <br class="hidden lg:inline-block">Its Important!
      </h1>
      <p class="mb-8 leading-relaxed">Plasma is the clear, straw-colored liquid portion of blood that remains after red blood cells, white blood cells, platelets and other cellular components are removed. It is the single largest component of human blood, comprising about 55 percent, and contains water, salts, enzymes, antibodies and other proteins.</p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"><a href="#covid">Covid Cases</a></button>
        
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="plasma.jpg">
    </div>
  </div>
</section>








<div id="covid" style="width: 100px;height: 20px;background: yellow;text-align: center;margin-left: 50%;margin-top: 40px;margin-bottom: 20px;"></div>


  


<section style="background-color: #E6E6FA">


<div class="case">
    <h2>Covid 19 Cases In India</h2>
  <div class="confirmed-cases">
  <img src="https://www.mohfw.gov.in/assets/images/icon-active.png" style="padding-top: 20px;padding-left: 35%">
  <h4>Confirmed </h4>
  <h6><?php echo $obj["statewise"][0]["confirmed"]?></h6>
  </div>

<div class="deceased-cases">
  <img src="https://www.mohfw.gov.in/assets/images/icon-infected.png" style="padding-top: 20px;padding-left: 35%">
  <h4>Deceased</h4>
  <h6><?php echo $obj["statewise"][0]["deaths"]?></h6>
  </div>

<div class="active-cases">
  <img src="https://www.mohfw.gov.in/assets/images/icon-active.png" style="padding-top: 20px;padding-left: 35%">
  <h4>Active</h4>
  <h6><?php echo $obj["statewise"][0]["active"]?></h6>
  </div>

<div class="recovered-cases">
  <img src="https://www.mohfw.gov.in/assets/images/icon-inactive.png" style="padding-top: 20px;padding-left: 35%">
  <h4>Recovered</h4>
  <h6><?php echo $obj["statewise"][0]["recovered"]?></h6>
  </div>
</div>



</section>

<div  style="width: 100px;height: 20px;background: yellow;text-align: center;margin-left: 50%;margin-top: 40px;margin-bottom: 20px;"></div>


<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>
      



  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>









</div>
<div style="text-align: center;padding: 20px">
<h2>Some Graphs!</h2>
</div>
<div id="active_chart" style="width: 900px; height: 600px;float: left;"></div>
    <div id="confirmed_chart" style="width: 900px; height: 500px;float: right;"></div>
    <div id="deaths_chart" style="width: 900px; height: 500px;float: left;"></div>
    <div id="recovered_chart" style="width: 900px; height: 500px;float: right;"></div>
  
  </body>
  </html>











