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

<div class="relative lg:h-[440px] overflow-hidden h-96">
<img src="assets/images/portfolio.jpg"class="absolute block brightness-50 w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
<h1 class="absolute inset-x-[8%] hidden py-2 mt-[210px] text-center text-white md:block text-4xl font-bold uppercase tracking-wider">What we Provide</h1>
</div>

<div class="max-w-[1200px] mx-auto py-5 mb-12">
<p class="text-4xl font-bold uppercase text-black text-center mt-16 mb-2 tracking-wide">Image <span class="text-yellow-600">Galleries</span></p>
  <div class="border-b-2 w-1/2 mt-16 mb-16 mx-auto"></div>

        <div class="mt-3 mb-4 border-b border-gray-200">
            <ul class="flex flex-wrap -mb-px text-m justify-between font-medium text-center" id="myTab"
                data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg"
                        id="class3-tab" data-tabs-target="#class-3" type="button" role="tab" aria-controls="class-3"
                        aria-selected="false">Weddings</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="class4-tab" data-tabs-target="#class-4" type="button" role="tab" aria-controls="class-4"
                        aria-selected="false">Corporate</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="class5-tab" data-tabs-target="#class-5" type="button" role="tab" aria-controls="class-5"
                        aria-selected="false">Parties</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="class7-tab" data-tabs-target="#class-7" type="button" role="tab" aria-controls="class-7"
                        aria-selected="false">Charity Events</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="class8-tab" data-tabs-target="#class-8" type="button" role="tab" aria-controls="class-8"
                        aria-selected="false">Launch Parties</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="class9-tab" data-tabs-target="#class-9" type="button" role="tab" aria-controls="class-9"
                        aria-selected="false">Family Gatherings</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="class10-tab" data-tabs-target="#class-10" type="button" role="tab" aria-controls="class-10"
                        aria-selected="false">Entertainment Events</button>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
        <div class="hidden p-4 rounded-lg bg-gray-50" id="class-3" role="tabpanel"
                aria-labelledby="class3-tab">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-10 mx-auto">
                  <div class="">
                    <img src="assets/images/c8.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c8.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c8.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c8.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c8.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c8.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c8.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c8.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" id="class-4" role="tabpanel"
                aria-labelledby="class4-tab">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-10 mx-auto">
                  <div class="">
                    <img src="assets/images/c5.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c5.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c5.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c5.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c5.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c5.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c5.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c5.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" id="class-5" role="tabpanel"
                aria-labelledby="class5-tab">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-10 mx-auto">
                  <div class="">
                    <img src="assets/images/gallery.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/gallery.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/gallery.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/gallery.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/gallery.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/gallery.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/gallery.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/gallery.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" id="class-6" role="tabpanel"
                aria-labelledby="class6-tab">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-10 mx-auto">
                  <div class="">
                    <img src="assets/images/c7.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c7.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c7.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c7.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c7.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c7.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c7.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c7.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" id="class-7" role="tabpanel"
                aria-labelledby="class7-tab">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-10 mx-auto">
                  <div class="">
                    <img src="assets/images/c6.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c6.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c6.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c6.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c6.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c6.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c6.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c6.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" id="class-8" role="tabpanel"
                aria-labelledby="class8-tab">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-10 mx-auto">
                  <div class="">
                    <img src="assets/images/c2.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c2.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c2.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c2.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c2.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c2.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c2.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c2.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" id="class-9" role="tabpanel"
                aria-labelledby="class9-tab">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-10 mx-auto">
                  <div class="">
                    <img src="assets/images/c3.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c3.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c3.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c3.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c3.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c3.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c3.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c3.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" id="class-10" role="tabpanel"
                aria-labelledby="class10-tab">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-10 mx-auto">
                  <div class="">
                    <img src="assets/images/c1.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c1.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c1.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c1.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c1.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c1.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c1.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                  <div class="">
                    <img src="assets/images/c1.jpg" alt="" class="lg:w-full md:w-3/5 mx-auto h-44 hover:brightness-50">
                  </div>
                </div>
            </div>
  </div>
  </div>


<?php
include('footer.php');
?>

</body>

</html>