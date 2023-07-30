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

  <!-- Content -->
  <div id="default-carousel" class="relative w-full animate-fade" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative lg:h-[660px] overflow-hidden h-96">
      <!-- Item 1 -->
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
        <img src="assets/images/c1.jpg"
          class="absolute block brightness-50 w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        <h1 class="absolute inset-x-[8%] hidden py-2 mt-[250px] text-center text-white md:block text-5xl font-bold">We
          Bring Precision to <span class="text-yellow-500">EVENTS</span></h1>
        <p
          class="absolute inset-x-[8%] hidden mt-[330px] text-center bg-transparent text-yellow-500 md:block text-xl font-bold uppercase">
          An Agency to make your even a big hit</p>
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
        <img src="assets/images/c9.jpg"
          class="absolute block brightness-50 w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        <h1 class="absolute inset-x-[8%] hidden py-2 mt-[250px] text-center text-white md:block text-5xl font-bold">We
          Bring Precision to <span class="text-yellow-500">WEDDINGS</span></h1>
        <p
          class="absolute inset-x-[8%] hidden mt-[310px] text-center bg-transparen  text-yellow-500 md:block text-xl font-bold uppercase">
          An Agency to make your even a big hit</p>
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
        <img src="assets/images/c3.jpg"
          class="absolute block brightness-50 w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        <h1 class="absolute inset-x-[8%] hidden py-2 mt-[250px] text-center text-white md:block text-5xl font-bold">We
          Bring Precision to <span class="text-yellow-500">SPECIAL OCCASIONS</span></h1>
        <p
          class="absolute inset-x-[8%] hidden mt-[310px] text-center bg-transparen  text-yellow-500 md:block text-xl font-bold uppercase">
          An Agency to make your even a big hit</p>
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
        <img src="assets/images/c7.jpg"
          class="absolute block brightness-50 w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        <h1 class="absolute inset-x-[8%] hidden py-2 mt-[250px] text-center text-white md:block text-5xl font-bold">We
          Bring Precision to <span class="text-yellow-500">PARTIES</span></h1>
        <p
          class="absolute inset-x-[8%] hidden mt-[310px] text-center bg-transparen  text-yellow-500 md:block text-xl font-bold uppercase">
          An Agency to make your even a big hit</p>
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
        <img src="assets/images/c10.jpg"
          class="absolute block brightness-50 w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        <h1 class="absolute inset-x-[8%] hidden py-2 mt-[250px] text-center text-white md:block text-5xl font-bold">We
          Bring Precision to <span class="text-yellow-500">FAMILY GATHERINGS</span></h1>
        <p
          class="absolute inset-x-[8%] hidden mt-[310px] text-center bg-transparen  text-yellow-500 md:block text-xl font-bold uppercase">
          An Agency to make your even a big hit</p>
      </div>
    </div>

    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
        data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
        data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
        data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
        data-carousel-slide-to="3"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
        data-carousel-slide-to="4"></button>
    </div>

    <button type="button"
      class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-prev>
      <span
        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
          stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        <span class="sr-only">Previous</span>
      </span>
    </button>
    <button type="button"
      class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-next>
      <span
        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
          stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
        <span class="sr-only">Next</span>
      </span>
    </button>
  </div>

  <div class="max-w-[1100px] mx-auto lg:mt-[-40px] md:mt-4 md:py-[80px] py-2">
    <p class="text-3xl font-bold uppercase text-black text-center mt-6 mb-10 tracking-wide">About <span class="text-yellow-600">Ark: Middle East</span></p>
    <div class="text-m font-medium text-gray-900 text-center text-justify tracking-wider my-6 px-2">
      <strong>ARK: Middle East</strong> is a highly reputable event organizer company based in the vibrant city of Dubai. With their
      extensive expertise and meticulous attention to detail, they have become a preferred choice for individuals and
      businesses seeking top-tier event management services. ARK: Middle East offers a comprehensive range of services,
      including event planning and coordination, with a particular focus on weddings, video production events, and much
      more.<br><br>

      From intimate gatherings to large-scale corporate functions, ARK: Middle East has a proven track record of
      delivering exceptional experiences that surpass expectations. Their team of skilled professionals brings a wealth
      of creativity, innovation, and cultural understanding to each project, ensuring that every event is tailored to
      reflect the client's unique vision and style.<br><br>

      With their strong network of trusted suppliers and vendors, ARK: Middle East is able to provide seamless event
      execution, handling everything from venue selection and décor to entertainment and technical production. Their
      commitment to excellence and customer satisfaction has earned them a stellar reputation in the industry, making
      them a reliable and trusted partner for all event management needs in Dubai.</div>
      <div class="mt-16 mb-8 text-center lg:mx-24 sm:mx-6 grid lg:grid-cols-4 sm:grid-cols-2">
        <div class="">
          <img src="assets/images/people.png" alt="" class="mx-auto hover:scale-125 duration-1000">
          <p class="text-xl text-gray-900 font-medium tracking-wider my-4 uppercase">Events</p>
        </div>
        <div class="">
          <img src="assets/images/meeting.png" alt="" class="mx-auto hover:scale-125 duration-1000">
          <p class="text-xl text-gray-900 font-medium tracking-wider my-4 uppercase">Corporate</p>
        </div>
        <div class="">
          <img src="assets/images/confetti.png" alt="" class="mx-auto hover:scale-125 duration-1000">
          <p class="text-xl text-gray-900 font-medium tracking-wider my-4 uppercase">exhibitions</p>
        </div>
        <div class="">
          <img src="assets/images/wedding-couple.png" alt="" class="mx-auto hover:scale-125 duration-1000">
          <p class="text-xl text-gray-900 font-medium tracking-wider my-4 uppercase">weddings</p>
        </div>
      </div>
  </div>

  <div class="relative lg:h-[300px] overflow-hidden h-96 mt-[-40px]">
<img src="assets/images/pink-rose.jpg"class="absolute block brightness-50 w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
<h1 class="absolute inset-x-[8%] hidden py-2 mt-[25px] text-center text-white md:block text-4xl font-bold uppercase tracking-wider">Ark Middle East Events & Production</h1>
<p class="absolute inset-x-[8%] hidden py-2 mt-[70px] text-center text-white md:block text-m font-medium tracking-wider">At ARK: Middle East, we specialize in crafting bespoke events that are entirely customized to our clients' specific needs, ensuring that every detail reflects their vision and objectives. We listen attentively, offer personalized solutions, and deliver unforgettable experiences.</p>
<p class="absolute inset-x-[8%] hidden py-2 mt-[140px] text-center text-white md:block text-xl font-bold tracking-wider uppercase">Click below to enquire.</p>
<p class="absolute inset-x-[8%] hidden py-2 mt-[170px] text-center text-yellow-500 md:block text-3xl font-bold tracking-wider uppercase"><i class="fas fa-arrow-down"></i></p>
<a href="contacts.php" class="absolute inset-x-[8%] hidden py-2 mt-[220px] text-center md:block font-bold tracking-wider uppercase"><button class="text-m font-bold uppercase text-white bg-transparent hover:bg-yellow-500 px-8 py-1.5 rounded-lg border-2 hover:text-black border-yellow-500">enquire</button></a>
</div>

  <div class="max-w-[1100px] mx-auto lg:mt-[-60px] md:mt-4 md:py-[80px] py-2">
    <p class="text-3xl font-bold uppercase text-black text-center mt-6 mb-10 tracking-wide">Our <span class="text-yellow-600">Services</span></p>
    <div class="text-m font-medium text-gray-900 text-center text-justify tracking-wider my-6 px-2">
    Middle East encompass a wide range of event management expertise. Whether you are planning a wedding, corporate event, or video production event, we have the knowledge and experience to bring your vision to life. From conceptualization and planning to flawless execution, we handle every detail with precision and creativity. Our dedicated team ensures seamless coordination, exceptional vendor management, and a focus on delivering unforgettable experiences for our clients. Trust us to handle your event needs with professionalism and expertise.</div>
      <div class="mt-16 mb-8 text-center grid lg:grid-cols-3 sm:grid-cols-2 gap-4">

      <div class="max-w-sm mx-auto p-6 bg-white border border-transparent rounded-lg hover:bg-yellow-300 hover:-translate-y-6 hover:duration-700">
      <img src="assets/images/red-carpet.png" alt="" class="mx-auto mb-8">
    <a href="services.php">
        <h5 class="mb-6 text-2xl font-bold tracking-tight text-gray-900">Event Management</h5>
    </a>
    <p class="mb-3 font-normal text-justify mx-6 text-gray-700">Event management involves planning, organizing, and executing events, ensuring smooth operations and creating memorable experiences for attendees.</p>
    <a href="services.php#event" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-500">
        Read more
        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
</div>

<div class="max-w-sm mx-auto p-6 bg-white border border-transparent rounded-lg hover:bg-yellow-300 hover:-translate-y-6 hover:duration-700">
      <img src="assets/images/wedding-arch.png" alt="" class="mx-auto mb-8">
    <a href="services.php">
        <h5 class="mb-6 text-2xl font-bold tracking-tight text-gray-900">Wedding Planners</h5>
    </a>
    <p class="mb-3 font-normal text-justify mx-6 text-gray-700">Wedding planners expertly coordinate and manage all aspects of weddings, making the process stress-free and turning dreams into reality.</p>
    <a href="services.php#wedding" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-500">
        Read more
        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
</div>

<div class="max-w-sm mx-auto p-6 bg-white border border-transparent rounded-lg hover:bg-yellow-300 hover:-translate-y-6 hover:duration-700">
      <img src="assets/images/charity.png" alt="" class="mx-auto mb-8">
    <a href="services.php">
        <h5 class="mb-6 text-2xl font-bold tracking-tight text-gray-900">Non-Profit Events</h5>
    </a>
    <p class="mb-3 font-normal text-justify mx-6 text-gray-700">Non-profit events aim to raise awareness and funds for charitable causes, bringing communities together to make a positive impact and drive social change.</p>
    <a href="services.php#charity" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-500">
        Read more
        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
</div>

<div class="max-w-sm mx-auto p-6 bg-white border border-transparent rounded-lg hover:bg-yellow-300 hover:-translate-y-6 hover:duration-700">
      <img src="assets/images/events.png" alt="" class="mx-auto mb-8">
    <a href="services.php">
        <h5 class="mb-6 text-2xl font-bold tracking-tight text-gray-900">Corporate Events</h5>
    </a>
    <p class="mb-3 font-normal text-justify mx-6 text-gray-700">Corporate events facilitate networking, team-building, and brand promotion, offering opportunities for businesses to engage clients, employees, and stakeholders in a professional environment.</p>
    <a href="services.php#corporate" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-500">
        Read more
        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
</div>

<div class="max-w-sm mx-auto p-6 bg-white border border-transparent rounded-lg hover:bg-yellow-300 hover:-translate-y-6 hover:duration-700">
      <img src="assets/images/family.png" alt="" class="mx-auto mb-8">
    <a href="services.php">
        <h5 class="mb-6 text-2xl font-bold tracking-tight text-gray-900">Family Gatherings</h5>
    </a>
    <p class="mb-3 font-normal text-justify mx-6 text-gray-700">Family gatherings foster strong bonds and cherished memories, allowing loved ones to come together, celebrate milestones, and create lasting connections.<br><br><br></p>
    <a href="services.php#event" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-500">
        Read more
        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
</div>

<div class="max-w-sm mx-auto p-6 bg-white border border-transparent rounded-lg hover:bg-yellow-300 hover:-translate-y-6 hover:duration-700">
      <img src="assets/images/clipboard.png" alt="" class="mx-auto mb-8">
    <a href="services.php">
        <h5 class="mb-6 text-2xl font-bold tracking-tight text-gray-900">And Many More</h5>
    </a>
    <p class="mb-3 font-normal text-justify mx-6 text-gray-700">Many more events encompass a wide range of occasions, from concerts and trade shows to product launches and social celebrations, offering unique experiences and entertainment.<br><br></p>
    <a href="services.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-500">
        Read more
        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
</div>
      </div>
    </div>
  </div>

  <div class="max-w-[1440px] mx-auto">
        <img src="assets/images/back.jpg" alt="" class="">
    </div>

  <div class="max-w-[1100px] mx-auto lg:mt-[-40px] md:mt-4 md:py-[80px] py-2">
    <p class="text-4xl font-bold uppercase text-black text-center mt-6 mb-2 tracking-wide">Happy <span class="text-yellow-600">Clients</span></p>
    <p class="text-sm font-extrabold text-black text-center mt-2 mb-0 tracking-wider">What Our Clients Say About Us</p>
  </div>

  <div class="border-b-2 w-1/2 mt-0 mb-12 mx-auto"></div>

  <div class="max-w-[1100px] mx-auto grid lg:grid-cols-3 md:grid-cols-2 gap-6">
    
<div class="max-w-sm p-6 cursor-pointer mx-auto">
        <h5 class="mb-4 text-2xl text-center font-normal uppercase tracking-wide text-black">Sam Carrens</h5>
    <p class="mb-3 text-sm font-normal text-black text-center">""Absolutely thrilled with Ark Middle East Events & Production! They made our event seamless and spectacular. Their team's expertise and enthusiasm brought our vision to life, leaving us with cherished memories. Highly recommended!""</p>
</div>
<div class="max-w-sm p-6 cursor-pointer mx-auto">
        <h5 class="mb-4 text-2xl text-center font-normal uppercase tracking-wide text-black">Bilal ahmed</h5>
    <p class="mb-3 text-sm font-normal text-black text-center">""Ark Middle East Events & Production exceeded all expectations! Their creative flair, impeccable organization, and friendly team made our event a roaring success. Thank you for making it an unforgettable experience!""</p>
</div>
<div class="max-w-sm p-6 cursor-pointer mx-auto">
        <h5 class="mb-4 text-2xl text-center font-normal uppercase tracking-wide text-black">Shiv Nadar</h5>
    <p class="mb-3 text-sm font-normal text-black text-center">""Ark Middle East Events & Production made our dream wedding come true! Their meticulous planning, elegant decor, and seamless coordination made our special day absolutely perfect. We couldn't have asked for a better team to create magical memories.""</p>
</div>
<div class="max-w-sm p-6 cursor-pointer mx-auto">
        <h5 class="mb-4 text-2xl text-center font-normal uppercase tracking-wide text-black">Sammuel jonas</h5>
    <p class="mb-3 text-sm font-normal text-black text-center">""Thanks to Ark Middle East Events & Production, our restaurant opening was a resounding success! Their innovative ideas, attention to detail, and flawless execution created a captivating ambiance that left a lasting impression on our guests. Highly recommended for any event!""</p>
</div>
<div class="max-w-sm p-6 cursor-pointer mx-auto">
        <h5 class="mb-4 text-2xl text-center font-normal uppercase tracking-wide text-black">Sara ali khan</h5>
    <p class="mb-3 text-sm font-normal text-black text-center">""Ark Middle East Events & Production made our wedding day truly magical! With their exceptional planning, exquisite decorations, and seamless coordination, they turned our vision into reality. Our heartfelt gratitude for creating cherished memories that will last a lifetime.""</p>
</div>
<div class="max-w-sm p-6 cursor-pointer mx-auto">
        <h5 class="mb-4 text-2xl text-center font-normal uppercase tracking-wide text-black">Salman khan</h5>
    <p class="mb-3 text-sm font-normal text-black text-center">""Thanks to Ark Middle East Events & Production, our club launch was a roaring success! Their innovative concepts, top-notch entertainment, and flawless organization set the stage for an unforgettable night. They brought our vision to life in the most spectacular way!""</p>
</div>
<div class="max-w-sm p-6 cursor-pointer mx-auto">
        <h5 class="mb-4 text-2xl text-center font-normal uppercase tracking-wide text-black">Andrey williams</h5>
    <p class="mb-3 text-sm font-normal text-black text-center">""Ark Middle East Events & Production made our hotel launch an absolute triumph! Their impeccable planning, elegant decor, and seamless execution wowed our guests and left a lasting impression. A truly remarkable team to work with!""</p>
</div>
<div class="max-w-sm p-6 cursor-pointer mx-auto">
        <h5 class="mb-4 text-2xl text-center font-normal uppercase tracking-wide text-black">Mona L.</h5>
    <p class="mb-3 text-sm font-normal text-black text-center">""Unforgettable experience with Ark Middle East Events & Production! They exceeded expectations with creativity, precision, and professionalism. Highly recommended!""</p>
</div>

<div class="max-w-sm p-6 cursor-pointer mx-auto">
        <h5 class="mb-4 text-2xl text-center font-normal uppercase tracking-wide text-black">Cummnis D.</h5>
    <p class="mb-3 text-sm font-normal text-black text-center">""Exceptional event by Ark Middle East Events & Production! Flawless execution, creative brilliance, and a delightful team. Highly impressed and grateful!""</p>
</div>

  </div>
  <div class="p-6 items-center justify-center text-center">
  <a href="clients.php#clients" class=""><button class="text-sm px-6 py-2 bg-yellow-500 text-black font-extrabold tracking-wide shadow-lg uppercase">full client list</button></a>
</div>

<div class="mt-10">
            <!-- Code block starts -->
                <div class="w-full bg-gray-100 px-10 pt-4">
                <dh-component>
                <div class="container flex justify-center mx-auto pt-2 pb-14">
                    <div>
                    <p class="text-4xl font-bold uppercase text-black text-center mt-6 mb-2 tracking-wide pb-2">Building <span class="text-yellow-600">team</span></p>
                        <h1 class="text-sm text-center text-gray-800 font-extrabold pb-6 sm:w-4/6 w-5/6 mx-auto">The Talented People Behind the Scenes of the Organization</h1>
                    </div>
                </div>
                    <div class="container mx-auto">
                        <div role="list" aria-label="Behind the scenes People " class="lg:flex md:flex sm:flex items-center xl:justify-between flex-wrap md:justify-around sm:justify-around lg:justify-around">
                            <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                                <div class="rounded overflow-hidden shadow-md bg-white">
                                    <div class="absolute -mt-20 w-full flex justify-center">
                                        <div class="h-32 w-32">
                                            <img src="https://cdn.tuk.dev/assets/photo-1564061170517-d3907caa96ea.jfif" alt="Display Picture of Andres Berlin" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                                        </div>
                                    </div>
                                    <div class="px-6 mt-16">
                                        <h1 class="font-bold text-3xl text-center mb-1">Andres Berlin</h1>
                                        <p class="text-gray-800 text-sm text-center">Chief Executive Officer</p>
                                        <p class="text-center text-gray-600 text-base pt-3 font-normal">The CEO's role in raising a company's corporate IQ is to establish an atmosphere that promotes knowledge sharing and collaboration.</p>
                                        <div class="w-full flex justify-center pt-5 pb-5">
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Github" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Twitter" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Instagram" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="listitem" class="xl:w-1/3 lg:mx-3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                                <div class="rounded overflow-hidden shadow-md bg-white">
                                    <div class="absolute -mt-20 w-full flex justify-center">
                                        <div class="h-32 w-32">
                                            <img src="https://cdn.tuk.dev/assets/photo-1530577197743-7adf14294584.jfif" alt="Display Picture of Silene Tokyo" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                                        </div>
                                    </div>
                                    <div class="px-6 mt-16">
                                        <h1 class="font-bold text-3xl text-center mb-1">Silene Tokyo</h1>
                                        <p class="text-gray-800 text-sm text-center">Product Design Head</p>
                                        <p class="text-center text-gray-600 text-base pt-3 font-normal">The emphasis on innovation and technology in our companies has resulted in a few of them establishing global benchmarks in product design and development.</p>
                                        <div class="w-full flex justify-center pt-5 pb-5">
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Github" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Twitter" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Instagram" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                                <div class="rounded overflow-hidden shadow-md bg-white">
                                    <div class="absolute -mt-20 w-full flex justify-center">
                                        <div class="h-32 w-32">
                                            <img src="https://cdn.tuk.dev/assets/photo-1566753323558-f4e0952af115.jfif" alt="Display Picture of Johnson Stone" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                                        </div>
                                    </div>
                                    <div class="px-6 mt-16">
                                        <h1 class="font-bold text-3xl text-center mb-1">Johnson Stone</h1>
                                        <p class="text-gray-800 text-sm text-center">Manager Development</p>
                                        <p class="text-center text-gray-600 text-base pt-3 font-normal">Our services encompass the assessment and repair of property damage caused by water, fire, smoke, or mold.</p>
                                        <div class="w-full flex justify-center pt-5 pb-5">
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Github" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Twitter" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Instagram" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                                <div class="rounded overflow-hidden shadow-md bg-white">
                                    <div class="absolute -mt-20 w-full flex justify-center">
                                        <div class="h-32 w-32">
                                            <img src="https://cdn.tuk.dev/assets/boy-smiling_23-2148155640.jpg" alt="Display Picture of Dean Jones" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                                        </div>
                                    </div>
                                    <div class="px-6 mt-16">
                                        <h1 class="font-bold text-3xl text-center mb-1">Dean Jones</h1>
                                        <p class="text-gray-800 text-sm text-center">Principal Software Engineer</p>
                                        <p class="text-center text-gray-600 text-base pt-3 font-normal">An avid open-source developer who loves to be creative and inventive. I have 20 years of experience in the field.</p>
                                        <div class="w-full flex justify-center pt-5 pb-5">
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Github" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Twitter" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Instagram" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                                <div class="rounded overflow-hidden shadow-md bg-white">
                                    <div class="absolute -mt-20 w-full flex justify-center">
                                        <div class="h-32 w-32">
                                            <img src="https://cdn.tuk.dev/assets/blond-man-happy-expression_1194-2873.jpg" alt="Display Picture of Rachel Adams" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                                        </div>
                                    </div>
                                    <div class="px-6 mt-16">
                                        <h1 class="font-bold text-3xl text-center mb-1">Rachel Adams</h1>
                                        <p class="text-gray-800 text-sm text-center">Product Design Head</p>
                                        <p class="text-center text-gray-600 text-base pt-3 font-normal">Product designer with interests in immersive computing and XR, political ventures, and emerging technologies. Able to take ideas and give them a life.</p>
                                        <div class="w-full flex justify-center pt-5 pb-5">
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Github" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Twitter" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Instagram" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                                <div class="rounded overflow-hidden shadow-md bg-white">
                                    <div class="absolute -mt-20 w-full flex justify-center">
                                        <div class="h-32 w-32">
                                            <img src="https://cdn.tuk.dev/assets/photo-1570211776045-af3a51026f4a.jfif" alt="Display Picture of Charles Keith" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                                        </div>
                                    </div>
                                    <div class="px-6 mt-16">
                                        <h1 class="font-bold text-3xl text-center mb-1">Charles Keith</h1>
                                        <p class="text-gray-800 text-sm text-center">UX Designer</p>
                                        <p class="text-center text-gray-600 text-base pt-3 font-normal">A UX designer is the voice of the customer. Our job is to look beyond the business goals. We don't just experience</p>
                                        <div class="w-full flex justify-center pt-5 pb-5">
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Github" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Twitter" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="mx-5">
                                                <div aria-label="Instagram" role="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </dh-component>
            <!-- Code block ends -->
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        </div>

<?php
include('footer.php');
?>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>

</html>