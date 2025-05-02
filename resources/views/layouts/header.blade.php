<!-- Top Utility Bar -->
<div class="bg-white text-gray-700 text-sm border-b border-gray-200 shadow-sm px-4 py-2">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-2 md:space-y-0">
      <!-- Left Side -->
      <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-5 space-y-2 sm:space-y-0">
        <a href="#" class="flex items-center">
          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/83/Indian_Railways.svg/1200px-Indian_Railways.svg.png" alt="IR Logo" class="h-8 w-auto hover:opacity-90 transition-opacity">
        </a>
        <div class="flex flex-wrap gap-2">
          <button class="bg-irctc-blue hover:bg-blue-800 text-white px-3 py-1.5 rounded text-xs font-medium transition-colors">
            <i class="fas fa-sign-in-alt mr-1"></i> LOGIN
          </button>
          <a href="#" class="text-gray-600 hover:text-irctc-blue hover:underline transition-colors text-xs font-medium">
            <i class="fas fa-user-plus mr-1"></i> REGISTER
          </a>
          <a href="#" class="text-gray-600 hover:text-irctc-blue hover:underline transition-colors text-xs font-medium">
            <i class="fas fa-user-tie mr-1"></i> AGENT LOGIN
          </a>
          <a href="#" class="text-gray-600 hover:text-irctc-blue hover:underline transition-colors text-xs font-medium">
            <i class="fas fa-phone-alt mr-1"></i> CONTACT US
          </a>
          <a href="#" class="text-gray-600 hover:text-irctc-blue hover:underline transition-colors text-xs font-medium">
            <i class="fas fa-question-circle mr-1"></i> HELP & SUPPORT
          </a>
          <a href="#" class="text-irctc-red font-semibold hover:underline flex items-center text-xs">
            <i class="fas fa-bolt mr-1"></i> DAILY DEALS
            <span class="ml-2 bg-irctc-red text-white text-xs px-2 py-0.5 rounded-full">HOT</span>
          </a>
          <button class="bg-gray-100 hover:bg-gray-200 px-2.5 py-1 text-gray-700 rounded text-xs font-medium flex items-center transition-colors">
            <i class="fas fa-bell mr-1 text-gray-600"></i> ALERTS
          </button>
        </div>
      </div>
  
      <!-- Right Side -->
      <div class="flex flex-wrap items-center justify-between md:justify-end gap-2">
        <div class="flex items-center space-x-1 text-gray-600 text-sm">
          <i class="fas fa-clock"></i>
          <span id="currentDateTime" class="font-medium">02-May-2025 [12:53:00]</span>
        </div>
        <div class="flex items-center space-x-1 bg-gray-100 rounded p-0.5">
          <button class="text-gray-700 hover:bg-gray-200 px-2 py-0.5 rounded text-xs">A-</button>
          <button class="text-gray-700 font-semibold hover:bg-gray-200 px-2 py-0.5 rounded text-xs">A</button>
          <button class="text-gray-700 font-bold hover:bg-gray-200 px-2 py-0.5 rounded text-xs">A+</button>
        </div>
        <button class="text-gray-700 hover:text-irctc-blue text-sm font-medium transition-colors flex items-center">
          <i class="fas fa-language mr-1"></i> हिंदी
        </button>
        <a href="#" class="flex items-center">
          <img src="{{asset('asset/image/logo2.jpg')}}" alt="IRCTC Logo" class="h-8 w-auto hover:opacity-90 transition-opacity">
        </a>
      </div>
    </div>
  </div>
  
  <!-- Main Navigation -->
  <nav class="bg-white border-b border-gray-200 shadow-md">
    <div class="max-w-screen-xl mx-auto px-4 py-3 flex items-center justify-between">
      <!-- Left: Menu -->
      <div class="hidden lg:flex items-center space-x-4 text-sm font-medium">
        <a href="#" class="text-gray-700 hover:text-irctc-blue transition-colors flex items-center" title="Home">
          <i class="fas fa-home mr-1 text-lg"></i>
        </a>
        <a href="#" class="bg-irctc-blue hover:bg-blue-800 text-white px-3 py-1.5 rounded text-xs font-medium flex items-center">
          <i class="fas fa-crown mr-1 text-yellow-300"></i> IRCTC EXCLUSIVE
        </a>
        <a href="#" class="text-irctc-orange font-bold border-b-2 border-irctc-orange pb-1.5 flex items-center">
          <i class="fas fa-train mr-1"></i> TRAINS
        </a>
        <a href="#" class="text-gray-700 hover:text-irctc-blue flex items-center">
          <i class="fas fa-medal mr-1"></i> LOYALTY
        </a>
        <a href="#" class="text-gray-700 border-b border-gray-400 hover:text-irctc-blue flex items-center">
          <i class="fas fa-wallet mr-1"></i> IRCTC eWallet
        </a>
        <a href="#" class="text-gray-700 hover:text-irctc-blue flex items-center">
          <i class="fas fa-bus mr-1"></i> BUSES
        </a>
        <a href="#" class="text-gray-700 hover:text-irctc-blue flex items-center">
          <i class="fas fa-plane mr-1"></i> FLIGHTS
        </a>
        <a href="#" class="text-gray-700 hover:text-irctc-blue flex items-center">
          <i class="fas fa-hotel mr-1"></i> HOTELS
        </a>
        <a href="#" class="text-gray-700 hover:text-irctc-blue flex items-center">
          <i class="fas fa-umbrella-beach mr-1"></i> HOLIDAYS
        </a>
        <a href="#" class="text-gray-700 hover:text-irctc-blue flex items-center">
          <i class="fas fa-utensils mr-1"></i> MEALS
        </a>
        <a href="#" class="text-gray-700 hover:text-irctc-blue flex items-center">
          <i class="fas fa-tag mr-1"></i> PROMOTIONS
        </a>
        <div class="relative group">
          <button class="text-gray-700 hover:text-irctc-blue flex items-center">
            <i class="fas fa-ellipsis-h mr-1"></i> MORE
            <i class="fas fa-chevron-down ml-1 text-xs"></i>
          </button>
          <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md mt-1 py-1 w-48 z-10 border border-gray-200">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Rail Tour Packages</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Retiring Rooms</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Catering Services</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tourist Trains</a>
          </div>
        </div>
      </div>
  
      <!-- Mobile Menu Button -->
      <div class="lg:hidden flex items-center">
        <button id="mobileMenuBtn" class="text-gray-700 hover:text-irctc-blue focus:outline-none text-xl">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>
  
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="lg:hidden hidden px-4 pb-4 space-y-2 text-sm font-medium">
      <a href="#" class="block text-gray-700 hover:text-irctc-blue">Home</a>
      <a href="#" class="block text-irctc-orange font-bold">TRAINS</a>
      <a href="#" class="block text-gray-700 hover:text-irctc-blue">IRCTC EXCLUSIVE</a>
      <a href="#" class="block text-gray-700 hover:text-irctc-blue">LOYALTY</a>
      <a href="#" class="block text-gray-700 hover:text-irctc-blue">eWallet</a>
      <a href="#" class="block text-gray-700 hover:text-irctc-blue">BUSES</a>
      <a href="#" class="block text-gray-700 hover:text-irctc-blue">FLIGHTS</a>
      <a href="#" class="block text-gray-700 hover:text-irctc-blue">HOLIDAYS</a>
      <a href="#" class="block text-gray-700 hover:text-irctc-blue">MEALS</a>
      <a href="#" class="block text-gray-700 hover:text-irctc-blue">PROMOTIONS</a>
    </div>
  </nav>
  
  <!-- Script to toggle mobile menu -->
  <script>
    document.getElementById('mobileMenuBtn').addEventListener('click', function () {
      document.getElementById('mobileMenu').classList.toggle('hidden');
    });
  </script>
  