@extends('layouts.main')
@section('content')

  <!-- Hero Section -->
  <section class="relative h-screen w-full bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('https://cdn.pixabay.com/photo/2017/11/25/17/17/sandwich-2977251_1280.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <div class="relative z-10 text-center px-4 max-w-2xl w-full">
      <!-- Logo -->
      <div class="flex justify-center mb-6">
        <img src="https://cdn.pixabay.com/photo/2017/11/25/17/17/sandwich-2977251_1280.jpg" alt="Logo" class="w-20 h-20 rounded-full shadow-lg">
      </div>

      <!-- Headline -->
      <h1 class="text-3xl md:text-4xl font-bold mb-6">
        Get restaurant food delivered right at your seat
      </h1>

      <!-- Search Input -->
      <div class="mb-4">
        <div class="flex items-center bg-white rounded shadow-md overflow-hidden">
          <span class="px-3 text-gray-500">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
            </svg>
          </span>
          <input type="text" placeholder="Search food, brand, station, etc."
            class="w-full py-2 px-2 text-gray-700 focus:outline-none" />
        </div>
      </div>

      <!-- PNR Input -->
      <form class="flex flex-col sm:flex-row items-center gap-2">
        <div class="flex items-center bg-white rounded shadow-md overflow-hidden w-full sm:w-auto">
          <span class="px-3 text-gray-500">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m4 0h-2a2 2 0 01-2-2v-2a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 01-2 2H5" />
            </svg>
          </span>
          <input type="text" placeholder="Enter PNR to order"
            class="w-full py-2 px-2 text-gray-700 focus:outline-none" />
        </div>

        <button type="submit"
          class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-6 rounded shadow">
          SUBMIT
        </button>
      </form>
    </div>
  </section>

  <!-- Header Section -->
  <div class="bg-white shadow-sm p-6 flex flex-col md:flex-row items-center justify-between border-b border-gray-200">
    <div class="flex items-center space-x-4">
      <img src="https://cdn.pixabay.com/photo/2022/10/05/16/37/train-7501073_1280.jpg" alt="IRCTC Logo" class="w-16 h-16">
      <div>
        <h1 class="text-xl md:text-2xl font-bold text-blue-800">Indian Railway Catering and Tourism Corporation Limited</h1>
        <p class="text-sm text-gray-500">A Government of India Enterprise</p>
      </div>
    </div>
    <div class="mt-4 md:mt-0">
      <p class="text-center md:text-right text-lg font-medium text-gray-700">Official website of Indian Railways and IRCTC to order food on trains</p>
    </div>
  </div>

  <!-- Group Order Section -->
  <div class="bg-white rounded-xl shadow-md overflow-hidden mx-4 my-10 md:mx-auto max-w-5xl">
    <div class="grid grid-cols-1 md:grid-cols-2">
      <!-- Image -->
      <div class="h-64 md:h-auto">
        <img src="https://cdn.pixabay.com/photo/2022/09/24/15/12/chair-circle-7476562_1280.jpg" alt="Group Food" class="object-cover w-full h-full">
      </div>

      <!-- Content -->
      <div class="p-6 flex flex-col justify-center">
        <div class="flex items-center space-x-3 mb-4">
          <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-4-4h-1m-4 6H7m4-6a4 4 0 00-4-4H6a4 4 0 00-4 4v2h5m6 0h1a4 4 0 014 4v2m-4-6V4a4 4 0 10-8 0v10"></path>
          </svg>
          <h2 class="text-2xl font-semibold text-gray-800">Group Orders</h2>
        </div>
        <p class="text-gray-600 mb-6 text-base leading-relaxed">
          Ordering for a group of more than 15 people? Easily place group orders, get assisted ordering, and custom prices when ordering in bulk quantities.
        </p>
        <a href="#" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-6 rounded-lg transition duration-300 ease-in-out w-max">
          GROUP BOOKING
        </a>
      </div>
    </div>
  </div>


  <!-- IRCTC Specials Banner -->
  <section class="max-w-7xl mx-auto p-4 md:p-8">
    <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col md:flex-row items-center justify-between p-6">
      <div class="flex-1">
        <span class="inline-block bg-gray-200 text-gray-700 text-xs font-medium px-3 py-1 rounded-full mb-2">New Arrival</span>
        <h2 class="text-2xl font-bold mb-1">Introducing IRCTC Specials</h2>
        <p class="text-gray-600">Specially packed for train journeys</p>
      </div>
      <div class="w-full md:w-auto mt-6 md:mt-0">
        <img src="https://cdn.pixabay.com/photo/2017/12/10/14/47/pizza-3010062_1280.jpg" alt="IRCTC Special Meal" class="w-full max-w-xs mx-auto md:mx-0 md:max-w-sm object-contain">
      </div>
    </div>
  </section>

  <!-- Brands Section -->
  <section class="max-w-7xl mx-auto px-4 md:px-8 pb-12">
    <h3 class="text-xl md:text-2xl font-semibold mb-6">Order from the best brands</h3>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <!-- Brand Cards -->
      <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
        <img src="https://cdn.pixabay.com/photo/2017/12/10/14/47/pizza-3010062_1280.jpg" alt="Domino's Pizza" class="w-24 h-auto mx-auto">
      </div>
      <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
        <img src="https://cdn.pixabay.com/photo/2017/12/10/14/47/pizza-3010062_1280.jpg" alt="Lunch Box" class="w-24 h-auto mx-auto">
      </div>
      <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
        <img src="https://cdn.pixabay.com/photo/2017/12/10/14/47/pizza-3010062_1280.jpg" alt="Behrouz Biryani" class="w-24 h-auto mx-auto">
      </div>
      <!-- Add more brand cards as needed -->
    </div>
  </section>

  <section class="bg-gray-50 py-12">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-2xl md:text-3xl font-bold text-center mb-10">How it works</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
  
        <!-- Step 1 -->
        <div class="flex flex-col items-center">
          <img src="https://cdn-icons-png.flaticon.com/512/891/891462.png" alt="Choose an outlet" class="w-20 h-20 mb-4">
          <div class="flex items-center justify-center bg-orange-500 text-white font-bold w-10 h-10 rounded-full mb-2">1</div>
          <h3 class="text-lg font-semibold italic mb-1 text-gray-700">Choose an outlet</h3>
          <p class="text-sm text-gray-600">Enter PNR & explore restaurants for your journey</p>
        </div>
  
        <!-- Step 2 -->
        <div class="flex flex-col items-center">
          <img src="https://cdn-icons-png.flaticon.com/512/1036/1036395.png" alt="Complete Order" class="w-20 h-20 mb-4">
          <div class="flex items-center justify-center bg-orange-500 text-white font-bold w-10 h-10 rounded-full mb-2">2</div>
          <h3 class="text-lg font-semibold italic mb-1 text-gray-700">Complete Order</h3>
          <p class="text-sm text-gray-600">Choose your food & schedule your order paying online or COD</p>
        </div>
  
        <!-- Step 3 -->
        <div class="flex flex-col items-center">
          <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="Enjoy Tasty Food" class="w-20 h-20 mb-4">
          <div class="flex items-center justify-center bg-orange-500 text-white font-bold w-10 h-10 rounded-full mb-2">3</div>
          <h3 class="text-lg font-semibold italic mb-1 text-gray-700">Enjoy Tasty Food</h3>
          <p class="text-sm text-gray-600">Enjoy your meal delivered to your seat</p>
        </div>
  
      </div>
    </div>
  </section>

  <section class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-2xl md:text-3xl font-semibold text-center text-gray-800 mb-10">Our authorised partners</h2>
  
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 items-center justify-center text-center">
  
        <!-- Partner Logos -->
        <img src="https://cdn.pixabay.com/photo/2021/05/18/15/15/pasta-6263653_1280.jpg" alt="Domino's" class="mx-auto h-12 md:h-16 object-contain">
        <img src="https://cdn.pixabay.com/photo/2016/04/15/17/23/green-asparagus-1331460_1280.jpg" alt="Zomato" class="mx-auto h-12 md:h-16 object-contain">
        <img src="https://cdn.pixabay.com/photo/2020/03/22/16/18/bread-4957679_1280.jpg" alt="Swiggy" class="mx-auto h-12 md:h-16 object-contain">
        <img src="https://cdn.pixabay.com/photo/2022/05/27/10/35/strawberry-7224875_1280.jpg" alt="Oven Story" class="mx-auto h-12 md:h-16 object-contain">
        <img src="https://cdn.pixabay.com/photo/2018/07/03/03/48/avocados-3513048_1280.jpg" alt="Faasos" class="mx-auto h-12 md:h-16 object-contain">
  
        <img src="https://cdn.pixabay.com/photo/2024/04/01/06/57/cookies-8668140_1280.jpg" alt="Lunch Box" class="mx-auto h-12 md:h-16 object-contain">
        <img src="https://cdn.pixabay.com/photo/2023/06/22/22/29/cookies-8082386_1280.jpg" alt="Behrouz" class="mx-auto h-12 md:h-16 object-contain">
        <img src="https://cdn.pixabay.com/photo/2017/03/26/11/53/hors-doeuvre-2175326_1280.jpg" alt="Eat Sure" class="mx-auto h-12 md:h-16 object-contain">
      </div>
    </div>
  </section>
  
  <section class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 mb-10">
        Some of the important stations we deliver at
      </h2>
  
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
        <!-- Station Cards -->
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Vijayawada Jn</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Nagpur</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Kanpur Central</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">BHOPAL JN</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Lucknow Nr</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Itarsi Jn</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">SURAT</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Visakhapatnam</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">V LAKSHMIBAI</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Bhusaval Jn</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Dd Upadhyaya Jn</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">VADODARA JN</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Ratlam Jn</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Balharshah</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Gwalior</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Salem Jn</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Mathura Jn</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Moradabad</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Ambala Cant Jn</div>
        <div class="bg-white rounded-md shadow-sm py-4 px-2 text-gray-700 font-medium">Ahmedabad Jn</div>
      </div>
  
      <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4">
          <h2 class="text-2xl md:text-3xl font-semibold text-center text-gray-800 mb-12">
            What our customers say
          </h2>
      
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Left stats section -->
            <div class="flex justify-center lg:justify-start space-x-10 text-center">
              <!-- Stat 1 -->
              <div>
                <div class="text-4xl text-green-600 mb-2">
                  <svg class="w-10 h-10 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M21 6h-5V4a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14l4-4h9a2 2 0 0 0 2-2V8h3v11H7v2h14a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2z" />
                  </svg>
                </div>
                <p class="text-xl font-semibold text-gray-800">1Cr+ Installs</p>
                <p class="text-sm text-gray-500">On Google Play</p>
              </div>
              <!-- Stat 2 -->
              <div>
                <div class="text-4xl text-orange-500 mb-2">
                  <svg class="w-10 h-10 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 8h-3V5H7v3H4l2 12h12l2-12zM9 7h6v1H9V7zm1 8H9v-2h1v2zm5 0h-1v-2h1v2z" />
                  </svg>
                </div>
                <p class="text-xl font-semibold text-gray-800">3Cr+ Meals</p>
                <p class="text-sm text-gray-500">Ordered</p>
              </div>
              <!-- Stat 3 -->
              <div>
                <div class="text-4xl text-yellow-500 mb-2">
                  <svg class="w-10 h-10 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" />
                  </svg>
                </div>
                <p class="text-xl font-semibold text-gray-800">2K+ Restaurants</p>
                <p class="text-sm text-gray-500">To Order From</p>
              </div>
            </div>
      
            <!-- Right testimonial section -->
            <div class="text-center lg:text-left">
              <h3 class="text-xl font-semibold text-gray-800">Nikki Sharma</h3>
              <p class="text-green-600 font-medium mb-2">Rated 5 ★</p>
              <p class="text-gray-600 leading-relaxed max-w-xl mx-auto lg:mx-0">
                "Great experience. I would suggest travellers to use this app and get hot and tasty food delivered on your seat. Loved the quality of food delivered. Thanks IRCTC for this initiative."
              </p>
            </div>
          </div>
        </div>
      </section>
      
    </div>
  </section>
  

 
  <section class="max-w-7xl mx-auto px-6 py-16 flex flex-col md:flex-row items-center justify-between gap-12">
    <!-- Text Section -->
    <div class="md:w-1/2">
      <h2 class="text-3xl md:text-4xl font-semibold text-gray-800 mb-2">Download the Food on Track app!</h2>
      <p class="text-gray-600 mb-4 text-lg">For order status updates & more</p>
      <p class="text-gray-700 mb-6 leading-relaxed">
        With handy features like timely order status updates, one-tap calling & PNR auto-pasting, lesser data usage,
        faster load times & fluid animations, the app is crafted to delight you with a great eCatering order experience.
      </p>
      <div class="flex gap-4">
        <a href="#">
          <img src="https://cdn.pixabay.com/photo/2021/12/05/16/08/corona-6848115_1280.jpg" alt="App Store" class="h-12">
        </a>
        <a href="#">
          <img src="https://cdn.pixabay.com/photo/2021/12/05/16/08/corona-6848115_1280.jpg" alt="Google Play" class="h-12">
        </a>
      </div>
    </div>

    <!-- Phone Section -->
    <div class="md:w-1/2 flex justify-center">
      <img src="https://cdn.pixabay.com/photo/2021/12/05/16/08/corona-6848115_1280.jpg" alt="Food on Track App Screenshot" class="max-w-xs w-full rounded-xl shadow-xl">
    </div>
  </section>

    <div class="max-w-6xl mx-auto p-4 md:p-6">
        <!-- Main Container -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2">
                <!-- Restaurant Owner Section -->
                <div class="bg-gradient-to-br from-red-600 to-red-800 p-6 md:p-8 text-white">
                    <div class="h-full flex flex-col justify-between">
                        <div>
                            <h2 class="text-xl md:text-2xl font-bold mb-4 font-baskerville">Are you a restaurant owner?</h2>
                            <h3 class="text-lg md:text-xl font-semibold mb-6">Register as a vendor</h3>
                            <p class="text-sm md:text-base opacity-90 mb-8">We are always looking to partner with reputed and quality restaurants</p>
                        </div>
                        <button class="w-full md:w-auto bg-white text-red-700 hover:bg-gray-100 font-bold py-3 px-6 rounded-full transition duration-300 transform hover:scale-105">
                            REGISTER NOW
                        </button>
                    </div>
                </div>

                <!-- Times of India Section -->
                <div class="bg-gradient-to-br from-blue-900 to-blue-700 p-6 md:p-8 text-white">
                    <div class="h-full flex flex-col justify-between">
                        <div>
                            <div class="flex items-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                                <h2 class="text-2xl md:text-3xl font-bold font-baskerville">THE TIMES OF INDIA</h2>
                            </div>
                            <h3 class="text-lg md:text-xl font-semibold mb-4">Your gateway to news exploration</h3>
                            <p class="text-sm md:text-base opacity-90 mb-8">Experience a comprehensive news platform with Times of India, offering unparalleled coverage, analysis, and detailed insights</p>
                        </div>
                        <button class="w-full md:w-auto bg-white text-blue-800 hover:bg-gray-100 font-bold py-3 px-6 rounded-full transition duration-300 transform hover:scale-105">
                            EXPLORE NOW
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Responsive Note (for demonstration) -->
        <div class="mt-8 text-center text-gray-500 text-xs">
            <p>This advertisement is fully responsive. Try resizing your browser window to see how it adapts.</p>
        </div>
    </div>

    
        <div class="max-w-6xl mx-auto p-4 md:p-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 font-baskerville">News and Blogs <span class="gradient-text">About eCatering</span></h2>
                <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-orange-500 mx-auto"></div>
            </div>
    
            <!-- News Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <div class="p-6">
                        <span class="text-xs text-gray-500">8 Jan 2025</span>
                        <h3 class="text-xl font-bold mt-2 mb-4 font-baskerville">Mahakumbh Mela 2025: A Spiritual Journey Enhanced by IRCTC eCatering</h3>
                        <p class="text-gray-600 mb-6">The Mahakumbh Mela 2025, one of the largest religious gatherings in the world, is a grand confluence of spirituality, culture, and devotion.</p>
                        <a href="#" class="flex items-center text-red-600 font-semibold hover:text-red-800">
                            Read More 
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
    
                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <div class="p-6">
                        <span class="text-xs text-gray-500">30 Dec 2024</span>
                        <h3 class="text-xl font-bold mt-2 mb-4 font-baskerville">IRCTC eCatering: Your Ultimate Destination for New Year 2025 Food on...</h3>
                        <p class="text-gray-600 mb-6">New Year is about new beginnings, joy, and memorable celebrations. The fresh Year is a time for fresh beginnings, joy, and...</p>
                        <a href="#" class="flex items-center text-red-600 font-semibold hover:text-red-800">
                            Read More 
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
    
                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <div class="p-6">
                        <span class="text-xs text-gray-500">16 Dec 2024</span>
                        <h3 class="text-xl font-bold mt-2 mb-4 font-baskerville">Celebrate Christmas with Delicious Cakes Delivered to Your Train Seat by...</h3>
                        <p class="text-gray-600 mb-6">Christmas is a time of joy, family, and, of course, delightful treats! One of the best parts of this festive season is indulging in...</p>
                        <a href="#" class="flex items-center text-red-600 font-semibold hover:text-red-800">
                            Read More 
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
    
            <!-- View All Button -->
            <div class="text-center">
                <button class="bg-gradient-to-r from-red-600 to-orange-500 hover:from-red-700 hover:to-orange-600 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-md">
                    View All News and Blogs
                </button>
            </div>
        </div>
   
@endsection