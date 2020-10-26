<?php if(!isset($_SESSION)) {session_start();}  ?>
<html>
<head>
<title>Plasma Donator</title>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<style>
a{
    color: black !important;
}


.bg-image {
background-image: url("indexbg2.jpeg");
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

<?php include('header.php'); ?>


<section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h2 class="text-m text-indigo-500 tracking-widest font-medium title-font mb-1">WELCOME TO</h2>
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">DONORS PORTAL</h1>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/3">
        <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col" style="background:#E6E8E7">
          <div class="flex items-center mb-3">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <h2 class="text-gray-900 text-lg title-font font-medium">View Requests</h2>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed text-base">Help the people in need.Donate plasma if u have been covid positive in past and havent donated in last 120 days.</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center" href="viewrequest.php">See requests
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col" style="background:#E6E8E7">
          <div class="flex items-center mb-3">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <h2 class="text-gray-900 text-lg title-font font-medium">Send request</h2>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed text-base">Need Help? There are many donors who can donate plasma when in need. Just send a request and someone will contact you.</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center" href="sendrequest.php">Send request
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3" >
        <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col" style="background:#E6E8E7">
          <div class="flex items-center mb-3">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <circle cx="6" cy="6" r="3"></circle>
                <circle cx="6" cy="18" r="3"></circle>
                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
              </svg>
            </div>
            <h2 class="text-gray-900 text-lg title-font font-medium">Update Profile</h2>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed text-base">Want to update profile? You can update your profile here.</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center" href="updateprofile.php">Go
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

</html>