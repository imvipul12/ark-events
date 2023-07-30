<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
<nav class="navbar fixed top-0 left-0 w-full z-50 backdrop-blur-xl">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center py-4">
        <div class="text-white font-bold text-xl">
          <a href="index.php" class=""><img src="assets/images/logo.png" alt="" class="w-32 h-20"></a>
        </div>
        <div class="hidden md:flex space-x-5">
          <a href="index.php"
            class="text-sm font-bold tracking-wider uppercase text-yellow-500 hover:text-black hover:bg-yellow-500 border-2 border-yellow-500 px-4 py-1.5 rounded-lg shadow-lg bg-transparent">Home</a>
          <a href="about.php"
            class="text-sm font-bold tracking-wider uppercase text-yellow-500 <?php if($curPageName=="about.php"){ echo "bg-white"; } ?> hover:text-black hover:bg-yellow-500 border-2 border-yellow-500 px-4 py-1.5 rounded-lg shadow-lg bg-transparent">About</a>
          <div class="relative inline-block navbar-item mt-1.5">
            <a href="services.php"
              class="text-sm font-bold tracking-wider uppercase text-yellow-500 <?php if($curPageName=="services.php"){ echo "bg-white"; } ?> hover:text-black hover:bg-yellow-500 border-2 border-yellow-500 px-4 py-1.5 rounded-lg shadow-lg bg-transparent">Services</a>
            <div class="dropdown-menu w-56 text-center absolute hidden bg-white rounded-md shadow-lg mt-2">
              <a href="services.php#wedding"
                class="block px-4 py-2 text-gray-800 hover:bg-yellow-500 border-b uppercase rounded-md tracking-wider">weddings</a>
              <a href="services.php#corporate"
                class="block px-4 py-2 text-gray-800 hover:bg-yellow-500 border-b uppercase rounded-md tracking-wider">corporate</a>
              <a href="services.php#party"
                class="block px-4 py-2 text-gray-800 hover:bg-yellow-500 border-b uppercase rounded-md tracking-wider">parties</a>
              <a href="services.php#event"
                class="block px-4 py-2 text-gray-800 hover:bg-yellow-500 border-b uppercase rounded-md tracking-wider">events</a>
              <a href="services.php#video"
                class="block px-4 py-2 text-gray-800 hover:bg-yellow-500 border-b uppercase rounded-md tracking-wider">video
                production</a>
              <a href="services.php#charity"
                class="block px-4 py-2 text-gray-800 hover:bg-yellow-500 border-b uppercase rounded-md tracking-wider">non-profit</a>
              <a href="services.php#venue"
                class="block px-4 py-2 text-gray-800 hover:bg-yellow-500 uppercase rounded-md tracking-wider">venue
                management</a>
            </div>
          </div>
          <a href="clients.php"
            class="text-sm font-bold tracking-wider uppercase text-yellow-500 <?php if($curPageName=="clients.php"){ echo "bg-white"; } ?> hover:text-black hover:bg-yellow-500 border-2 border-yellow-500 px-4 py-1.5 rounded-lg shadow-lg bg-transparent">Clients</a>
          <a href="portfolio.php"
            class="text-sm font-bold tracking-wider uppercase text-yellow-500 <?php if($curPageName=="portfolio.php"){ echo "bg-white"; } ?> hover:text-black hover:bg-yellow-500 border-2 border-yellow-500 px-4 py-1.5 rounded-lg shadow-lg bg-transparent">Portfolio</a>
            <a href="contacts.php"
            class="text-sm font-bold tracking-wider uppercase text-yellow-500 <?php if($curPageName=="contacts.php"){ echo "bg-white"; } ?> hover:text-black hover:bg-yellow-500 border-2 border-yellow-500 px-4 py-1.5 rounded-lg shadow-lg bg-transparent">Contacts</a>
        </div>
      </div>
      <div class="md:hidden flex items-center justify-end">
          <button id="mobile-menu-toggle" class="text-white focus:outline-none">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>
      </div>
      <div id="mobile-menu" class="md:hidden hidden">
        <a href="index.php" class="block py-2 px-4 text-white hover:bg-yellow-500">Home</a>
        <a href="about.php" class="block py-2 px-4 text-white hover:bg-yellow-500">About</a>
        <a href="services.php" class="block py-2 px-4 text-white hover:bg-yellow-500">Services</a>
        <a href="clients.php" class="block py-2 px-4 text-white hover:bg-yellow-500">Clients</a>
        <a href="portfolio.php" class="block py-2 px-4 text-white hover:bg-yellow-500">Portfolio</a>
        <a href="contacts.php" class="block py-2 px-4 text-white hover:bg-yellow-500">Contacts</a>
      </div>
    </div>
  </nav>

  <script>
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>