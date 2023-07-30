<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
  <link rel="icon" type="icon" href="assets/images/favicon.ico">
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
  <style>
    .dropdown-menu {
      display: none;
    }

    .navbar-item:hover .dropdown-menu {
      display: block;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
<?php
include('header.php');
?>

<div class="relative lg:h-[400px] overflow-hidden h-96">
<img src="assets/images/c3.jpg"class="absolute block brightness-50 w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
<h1 class="absolute inset-x-[8%] hidden py-2 mt-[210px] text-center text-white md:block text-4xl font-bold uppercase tracking-wider">some of our esteemed clients</h1>
</div>

<div id="clients" class="max-w-[1100px] mx-auto">
<p class="text-4xl font-bold uppercase text-black text-center mt-16 mb-2 tracking-wide">Our <span class="text-yellow-600">Clients</span></p>
  <div class="border-b-2 w-1/2 mt-16 mb-16 mx-auto"></div>
  <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-16 mb-16 mx-auto">
    <div class="items-center justify-center">
      <img src="assets/clients/1.png" alt="" class="w-60 h-40 p-4 mx-auto">
    </div>
    <div class="items-center justify-center">
      <img src="assets/clients/2.png" alt="" class="w-60 h-40 p-6 mx-auto">
    </div>
    <div class="items-center justify-center">
      <img src="assets/clients/3.png" alt="" class="w-60 h-40 p-4 mx-auto">
    </div>
    <div class="items-center justify-center">
      <img src="assets/clients/4.png" alt="" class="w-50 h-40 mx-auto">
    </div>
    <div class="items-center justify-center">
      <img src="assets/clients/5.png" alt="" class="w-60 h-20 mt-8 mx-auto">
    </div>
    <div class="items-center justify-center">
      <img src="assets/clients/6.jpg" alt="" class="w-60 h-40 p-4 mx-auto">
    </div>
    <div class="items-center justify-center">
      <img src="assets/clients/7.jpg" alt="" class="w-60 h-40 p-4 mx-auto">
    </div>
    <div class="items-center justify-center">
      <img src="assets/clients/8.png" alt="" class="w-60 h-40 p-4 mx-auto">
    </div>
    <div class="items-center justify-center">
      <img src="assets/clients/9.png" alt="" class="w-50 h-40 mx-auto p-4">
    </div>
    <div class="items-center justify-center">
      <img src="assets/clients/10.png" alt="" class="w-60 h-20 mt-8 mx-auto">
    </div>
    <div class="items-center justify-center">
      <img src="assets/clients/11.png" alt="" class="w-60 h-20 mt-8 mx-auto">
    </div>
    <div class="items-center justify-center">
      <img src="assets/clients/12.jpg" alt="" class="w-50 h-40 mx-auto p-2">
    </div>
  </div>
</div>

<?php
include('footer.php');
?>

</body>

</html>