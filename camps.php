<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


  <style>
      a {
  color: black !important;
}
</style>

</head>


<body>
<?php include('header.php'); ?>
<?php include('admin/function.php'); ?>
<section class="text-gray-700 body-font" >
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
 <?php
$cn=makeconnection();
$s="select * from camp,state,city where camp.state=state.state_id and camp.city=city.city_id";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
		?>
		

      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="www.dummyimage.com/720x400" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1"><?php echo $data[1]; ?></h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Organised By:<?php echo $data[2]; ?></h1>
            <p class="leading-relaxed mb-3">State:<?php echo $data[8]; ?></p>
            <div class="flex items-center flex-wrap ">
              <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              
            </div>
          </div>
        </div>
      </div>
   <?php
}?>
</div>
</div>
</section>

</body>
</html>
