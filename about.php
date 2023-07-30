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
<img src="assets/images/about.jpg"class="absolute block brightness-50 w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
<h1 class="absolute inset-x-[8%] hidden py-2 mt-[210px] text-center text-white md:block text-4xl font-bold uppercase tracking-wider">About Ark Middle East</h1>
</div>

<div class="max-w-[1100px] mx-auto lg:mt-[-40px] md:mt-4 md:py-[80px] py-2">
    <div class="text-m font-medium text-gray-900 text-center text-justify tracking-wider my-6 px-2">
      ARK: Middle East is a highly reputable event organizer company based in the vibrant city of Dubai. With their
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

<div class="max-w-[1250px] mx-auto">
  <!-- Container for demo purpose -->
  <p class="text-4xl font-bold uppercase text-black text-center mt-6 mb-2 tracking-wide">Our <span class="text-yellow-600">Founders</span></p>
  <div class="border-b-2 w-1/2 mt-16 mb-8 mx-auto"></div>
<div class="container my-24 mx-auto md:px-6">
  <!-- Section: Design Block -->
  <section class="mb-32 text-center lg:text-left">
    <div class="py-12 md:px-6 md:px-12">
      <div class="container mx-auto xl:px-32">
        <div class="flex grid items-center lg:grid-cols-2">
          <div class="mb-12 md:mt-12 lg:mt-0 lg:mb-0">
            <div
              class="relative z-[1] block rounded-lg bg-[hsla(0,0%,100%,0.55)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] backdrop-blur-[25px] dark:bg-[hsla(0,0%,5%,0.7)] dark:shadow-black/20 md:px-12 lg:-mr-14">
              <h2 class="mb-2 text-3xl font-bold text-primary dark:text-primary-400">
                John Doe
              </h2>
              <p class="mb-4 font-semibold">CEO & Managing Director</p>
              <p class="mb-6 text-neutral-500 dark:text-neutral-300">
              The CEO & Managing Director of Ark: Middle East is a dynamic and experienced leader, driving the company's success with strategic vision and impeccable management skills. Their leadership has propelled Ark to new heights in the event and entertainment industry.
              </p>
              <p class="mb-6 text-neutral-500 dark:text-neutral-300">
              The founder of Ark: Middle East is a visionary leader with a passion for creating extraordinary experiences. With a deep understanding of the event industry and a commitment to excellence, they established the company as a premier event, production, and entertainment management powerhouse. Their innovative ideas and strategic approach have propelled Ark to the forefront of the industry, leaving a lasting impact on clients and guests alike.
              </p>
              <ul class="flex justify-center lg:justify-start">
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960"
                    class="w-5 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                  </svg>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960"
                    class="w-5 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                  </svg>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960"
                    class="w-5 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                  </svg>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960"
                    class="w-5 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                  </svg>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960"
                    class="w-5 text-primary dark:text-primary-400">
                    <path fill="currentColor"
                      d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                  </svg>
                </li>
              </ul>
            </div>
          </div>
          <div class="md:mb-12 lg:mb-0">
            <img src="assets/images/owner.jpg"
              class="lg:rotate-[6deg] w-full rounded-lg shadow-lg dark:shadow-black/20" alt="image" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose -->
</div>

<?php
include('footer.php');
?>
</body>

</html>