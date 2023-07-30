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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
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
<img src="assets/images/contact.jpg"class="absolute block brightness-50 w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
<h1 class="absolute inset-x-[8%] hidden py-2 mt-[210px] text-center text-white md:block text-4xl font-bold uppercase tracking-wider">Let's talk</h1>
</div>

<div class="max-w-[1100px] mx-auto lg:mt-0 md:mt-4 md:py-[80px] py-2">
    <p class="text-m font-medium text-gray-900 text-justify tracking-wider px-2">
    From strategy to execution, we at Ark Middle East are dedicated to and passionate about giving you an exceptional experience. Your concept will become a reality thanks to our team of professionals. Please use the form below to request additional information or to request a price for your event.
    </p>
    <p class="text-2xl font-bold uppercase text-yellow-500 text-center tracking-wider my-8">contact us</p>
    <div class="flex flex-row flex-cols mt-16 mb-2 justify-between mx-auto">
        <div class="">
            <img src="assets/images/smartphone.png" alt="" class="mx-auto mb-4">
            <p class="text-m tracking-wider text-gray-900 font-medium">Phone:9930294839<br>Phone:9293892329</p>
        </div>
        <div class="ml-10">
        <img src="assets/images/placeholder.png" alt="" class="mx-auto mb-4">
            <p class="text-m tracking-wider text-gray-900 font-medium">Office: 43-44, Burj Khalifa Estates, Dubai.</p>
        </div>
        <div class="">
        <img src="assets/images/email.png" alt="" class="mx-auto mb-4">
            <p class="text-m tracking-wider text-gray-900 font-medium">Mail At:arkmeast@gmail.com</p>
        </div>
    </div>
</div>

<div class="max-w-[1200px] mx-auto border-b-2 text-gray-600"></div>

<div class="bg-cover my-12 py-12" style="background-image: url('assets/images/services.jpg')">
<div class="max-w-[1100px] mx-auto backdrop-blur-xl px-12 py-8">
    
<form action="#" method="post">
<label for="name" class="block mb-2 text-m font-medium text-white">Name (required):</label>

<div class="grid md:grid-cols-2 md:gap-6">
<div class="mb-2">
    <label for="name" class="block mb-2 text-xs font-medium text-white">First Name:</label>
    <input type="text" id="name" name="name" class="bg-white border border-gray-800 text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" required>
  </div>
  <div class="mb-2">
    <label for="address" class="block mb-2 text-xs font-medium text-white">Last Name:</label>
    <input type="text" id="address" name="address" class="bg-white border border-gray-800 text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" required>
  </div>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
<div class="mb-2">
    <label for="name" class="block mb-2 text-m font-medium text-white">Phone Number:</label>
    <input type="text" id="name" name="name" class="bg-white border border-gray-800 text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" required>
  </div>
  <div class="mb-2">
    <label for="address" class="block mb-2 text-m font-medium text-white">Email Address:</label>
    <input type="text" id="address" name="address" class="bg-white border border-gray-800 text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" required>
  </div>
  </div>
  <div class="mb-2">
    <label for="name" class="block mb-2 text-m font-medium text-white">Event Type:</label>
    <select id="countries" class="bg-white border border-gray-800 text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5">
  <option>Wedding</option>
  <option>Non-Profit</option>
  <option>Corporate</option>
  <option>Exhibition</option>
  <option>Other</option>
</select>
  </div>
  <div class="mb-2">
    <label for="address" class="block mb-2 text-m font-medium text-white">Guest Count:</label>
    <input type="text" id="address" name="address" class="bg-white border border-gray-800 text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" required>
  </div>
  <div class="mb-2">
    <label for="contactno" class="block mb-2 text-m font-medium text-white">Date:</label>
    <div class="">
  <input datepicker type="text" class="bg-white border border-gray-800 text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" placeholder="Select date">
</div>
  </div>
  <div class="mb-2">
    <label for="pincode" class="block mb-2 text-m font-medium text-white">Budget:</label>
    <input type="number" id="pincode" name="pincode" class="bg-white border border-gray-800 text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" required>
  </div>
  <div class="mb-2">
    <label for="altno" class="block mb-2 text-m font-medium text-white">How did you hear about us:</label>
    <select id="countries" class="bg-white border border-gray-800 text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5">
  <option>Google</option>
  <option>Facebook</option>
  <option>Instagram</option>
  <option>Twitter</option>
  <option>Television</option>
  <option>Referral</option>
  <option>Other</option>
</select>
  </div>
  <div class="mb-2">
    <label for="email" class="block mb-2 text-m font-medium text-white">Message:</label>
    <textarea id="message" rows="4" class="bg-white block p-2.5 w-full text-sm text-black rounded-lg border border-gray-800 focus:ring-yellow-500 focus:border-yellow-500" placeholder="Leave a comment..."></textarea>
  </div>
  <button type="submit" name="submit" class="my-4 text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-600 font-medium rounded-lg text-sm px-20 py-2.5">Submit</button>
</form>

</div>
</div>

<?php
include('footer.php');
?>

</body>

</html>