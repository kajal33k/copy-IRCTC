@extends('layouts.main')
@section('content')
    <!--::::::::::::: Banner section:::::::::: -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Left Side - Booking Form -->
            <div class="lg:col-span-3">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- Form Tabs -->
                    <div class="flex border-b border-gray-200">
                        <div class="w-1/2 bg-irctc-blue text-white py-3 flex items-center justify-center space-x-2 font-medium cursor-pointer hover:bg-blue-800 transition-colors">
                            <i class="fas fa-check-circle"></i>
                            <span>PNR STATUS</span>
                        </div>
                        <div class="w-1/2 bg-irctc-blue text-white py-3 flex items-center justify-center space-x-2 font-medium cursor-pointer hover:bg-blue-800 transition-colors">
                            <i class="fas fa-table"></i>
                            <span>CHARTS / VACANCY</span>
                        </div>
                    </div>
                    
                    <!-- Booking Form -->
                    <div class="p-6">
                        <h1 class="text-3xl font-bold text-center text-irctc-blue mb-8">BOOK TRAIN TICKET</h1>
                        
                        <form id="bookingForm" class="space-y-6">
                            <!-- From/To Fields -->
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="relative">
                                    <label class="block text-gray-700 font-medium mb-1">From</label>
                                    <div class="flex items-center border border-gray-300 rounded bg-white">
                                        <span class="pl-3 text-gray-500">
                                            <i class="fas fa-train"></i>
                                        </span>
                                        <input 
                                            type="text" 
                                            id="fromStation" 
                                            placeholder="Departure Station" 
                                            class="w-full p-3 focus:outline-none"
                                            required
                                        >
                                    </div>
                                    <div id="fromSuggestions" class="absolute z-10 w-full bg-white mt-1 border border-gray-200 rounded shadow-lg hidden">
                                        <!-- Suggestions will be populated here -->
                                    </div>
                                </div>

                                <div class="relative">
                                    <label class="block text-gray-700 font-medium mb-1">To</label>
                                    <div class="flex items-center border border-gray-300 rounded bg-white">
                                        <span class="pl-3 text-gray-500">
                                            <i class="fas fa-train"></i>
                                        </span>
                                        <input 
                                            type="text" 
                                            id="toStation" 
                                            placeholder="Destination Station" 
                                            class="w-full p-3 focus:outline-none"
                                            required
                                        >
                                    </div>
                                    <div id="toSuggestions" class="absolute z-10 w-full bg-white mt-1 border border-gray-200 rounded shadow-lg hidden">
                                        <!-- Suggestions will be populated here -->
                                    </div>
                                </div>
                            </div>

                            <!-- Swap Button -->
                            <div class="flex justify-center">
                                <button 
                                    type="button" 
                                    id="swapStations"
                                    class="bg-gray-100 p-2 rounded-full border border-gray-300 hover:bg-gray-200 focus:outline-none transition-colors"
                                >
                                    <i class="fas fa-exchange-alt text-irctc-blue"></i>
                                </button>
                            </div>

                            <!-- Date and Class Selection -->
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Journey Date</label>
                                    <div class="flex items-center border border-gray-300 rounded bg-white">
                                        <span class="pl-3 text-gray-500">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                        <input 
                                            type="date" 
                                            id="journeyDate" 
                                            class="w-full p-3 focus:outline-none"
                                            required
                                        >
                                    </div>
                                    <p class="mt-1 text-xs text-gray-500">DD/MM/YYYY *</p>
                                </div>

                                <div class="relative">
                                    <label class="block text-gray-700 font-medium mb-1">Class</label>
                                    <div 
                                        id="classDropdown" 
                                        class="flex items-center justify-between border border-gray-300 rounded bg-white p-3 cursor-pointer"
                                    >
                                        <div class="flex items-center">
                                            <span class="text-gray-500 mr-3">
                                                <i class="fas fa-train"></i>
                                            </span>
                                            <span id="selectedClass">All Classes</span>
                                        </div>
                                        <i class="fas fa-chevron-down text-gray-500"></i>
                                    </div>
                                    
                                    <div id="classOptions" class="absolute z-10 w-full bg-white mt-1 border border-gray-200 rounded shadow-lg hidden">
                                        <div class="p-3 hover:bg-gray-100 cursor-pointer">All Classes</div>
                                        <div class="p-3 hover:bg-gray-100 cursor-pointer">Sleeper (SL)</div>
                                        <div class="p-3 hover:bg-gray-100 cursor-pointer">AC 3 Tier (3A)</div>
                                        <div class="p-3 hover:bg-gray-100 cursor-pointer">AC 2 Tier (2A)</div>
                                        <div class="p-3 hover:bg-gray-100 cursor-pointer">AC First Class (FC)</div>
                                        <div class="p-3 hover:bg-gray-100 cursor-pointer">Second Sitting (2S)</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Travel Quota -->
                            <div>
                                <label class="block text-gray-700 font-medium mb-1">Quota</label>
                                <select id="travelQuota" class="w-full border border-gray-300 rounded bg-white p-3 focus:outline-none">
                                    <option value="GENERAL">GENERAL</option>
                                    <option value="TATKAL">TATKAL</option>
                                    <option value="LADIES">LADIES</option>
                                    <option value="SENIOR_CITIZEN">SENIOR CITIZEN</option>
                                    <option value="PREMIUM_TATKAL">PREMIUM TATKAL</option>
                                </select>
                            </div>

                            <!-- Booking Options -->
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                    <span class="text-sm text-gray-700">Person With Disability Concession</span>
                                </label>
                                
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                    <span class="text-sm text-gray-700">Flexible With Date</span>
                                </label>
                                
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                    <span class="text-sm text-gray-700">Train with Available Berth</span>
                                </label>
                                
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                    <span class="text-sm text-gray-700">Railway Pass Concession</span>
                                </label>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex flex-col md:flex-row gap-4 pt-4">
                                <button
                                    type="submit"
                                    class="bg-irctc-orange hover:bg-orange-600 text-white py-3 px-6 rounded font-medium transition duration-200 w-full md:w-auto"
                                >
                                    Search Trains
                                </button>

                                <button
                                    type="button"
                                    class="bg-irctc-blue hover:bg-blue-800 text-white py-3 px-6 rounded font-medium transition duration-200 w-full md:w-auto"
                                >
                                    Easy Booking on AskDISHA
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Recent Searches Section -->
                <div class="mt-6 bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Recent Searches</h2>
                    <div id="recentSearches" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Recent searches will be populated here -->
                    </div>
                </div>
            </div>
            
            <!-- Right Side - Cached Results & Promotions -->
            <div class="space-y-6">
                <!-- Cached Results Card -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-irctc-blue text-white px-4 py-3 font-medium">
                        <i class="fas fa-bolt mr-2"></i> CACHED RESULTS
                    </div>
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-3">
                            <div>
                                <div class="font-medium">Delhi (DLI) → Mumbai (CSTM)</div>
                                <div class="text-sm text-gray-600">02 May 2025 | General Quota</div>
                            </div>
                            <button class="text-irctc-blue hover:text-blue-800">
                                <i class="fas fa-redo"></i>
                            </button>
                        </div>
                        
                        <div class="space-y-3">
                            <div class="border border-gray-200 rounded p-3 hover:border-irctc-blue transition-colors cursor-pointer">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <div class="font-bold">Rajdhani Express</div>
                                        <div class="text-sm text-gray-600">12951 | 16:35 → 08:30 (+1)</div>
                                    </div>
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Available</span>
                                </div>
                                <div class="flex justify-between mt-2 text-sm">
                                    <span>Sleeper: ₹1,250</span>
                                    <span>3A: ₹2,150</span>
                                    <span>2A: ₹3,200</span>
                                </div>
                            </div>
                            
                            <div class="border border-gray-200 rounded p-3 hover:border-irctc-blue transition-colors cursor-pointer">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <div class="font-bold">Shatabdi Express</div>
                                        <div class="text-sm text-gray-600">12009 | 06:00 → 14:05</div>
                                    </div>
                                    <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">RAC</span>
                                </div>
                                <div class="flex justify-between mt-2 text-sm">
                                    <span>CC: ₹1,850</span>
                                    <span>EC: ₹2,450</span>
                                </div>
                            </div>
                        </div>
                        
                        <button class="w-full mt-4 bg-gray-100 hover:bg-gray-200 text-gray-800 py-2 rounded font-medium transition-colors">
                            View All Cached Results
                        </button>
                    </div>
                </div>
                
                <!-- Promotions Card -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-irctc-orange text-white px-4 py-3 font-medium">
                        <i class="fas fa-tag mr-2"></i> SPECIAL OFFERS
                    </div>
                    <div class="p-4 space-y-4">
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <img src="https://via.placeholder.com/300x150?text=Summer+Special+Offer" alt="Promotion" class="w-full">
                            <div class="p-3">
                                <h3 class="font-bold text-gray-800">Summer Special Trains</h3>
                                <p class="text-sm text-gray-600 mt-1">Book now and get 10% cashback on select routes.</p>
                                <button class="mt-2 text-sm text-irctc-orange hover:underline">View Details</button>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <img src="https://via.placeholder.com/300x150?text=Weekend+Getaway" alt="Promotion" class="w-full">
                            <div class="p-3">
                                <h3 class="font-bold text-gray-800">Weekend Getaway Packages</h3>
                                <p class="text-sm text-gray-600 mt-1">Combo deals on train + hotel bookings.</p>
                                <button class="mt-2 text-sm text-irctc-orange hover:underline">Explore Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Popular Stations -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-irctc-blue text-white px-4 py-3 font-medium">
                        <i class="fas fa-star mr-2"></i> POPULAR STATIONS
                    </div>
                    <div class="p-4 grid grid-cols-2 gap-2">
                        <div class="station-chip bg-gray-100 hover:bg-gray-200 p-2 rounded text-center text-sm font-medium cursor-pointer transition-colors">
                            Delhi (DLI)
                        </div>
                        <div class="station-chip bg-gray-100 hover:bg-gray-200 p-2 rounded text-center text-sm font-medium cursor-pointer transition-colors">
                            Mumbai (CSTM)
                        </div>
                        <div class="station-chip bg-gray-100 hover:bg-gray-200 p-2 rounded text-center text-sm font-medium cursor-pointer transition-colors">
                            Chennai (MAS)
                        </div>
                        <div class="station-chip bg-gray-100 hover:bg-gray-200 p-2 rounded text-center text-sm font-medium cursor-pointer transition-colors">
                            Kolkata (HWH)
                        </div>
                        <div class="station-chip bg-gray-100 hover:bg-gray-200 p-2 rounded text-center text-sm font-medium cursor-pointer transition-colors">
                            Bangalore (SBC)
                        </div>
                        <div class="station-chip bg-gray-100 hover:bg-gray-200 p-2 rounded text-center text-sm font-medium cursor-pointer transition-colors">
                            Hyderabad (HYB)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- ::::::::::services section:::::::: --}}
    <div class="max-w-4xl mx-auto p-6">
        <!-- Header Section -->
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Have you not found the right one?</h1>
            <p class="text-lg text-gray-600">Find a service suitable for you here.</p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mb-10">
            <!-- Service Boxes -->
            <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
              <div class="flex justify-center">
                <img src="{{asset('asset/image/s1.png')}}" alt="" class="w-12 h-12 object-center">
              </div>
                <div class="text-blue-600 font-semibold">FLIGHTS</div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                <div class="flex justify-center">
                    <img src="{{asset('asset/image/hotel.png')}}" alt="" class="w-12 h-12 object-center">
                  </div>
                <div class="text-blue-600 font-semibold">HOTELS</div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                <div class="flex justify-center">
                    <img src="{{asset('asset/image/s3.png')}}" alt="" class="w-12 h-12 object-center">
                  </div>
                <div class="text-blue-600 font-semibold">RAIL DRISHTI</div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                <div class="flex justify-center">
                    <img src="{{asset('asset/image/hotel.png')}}" alt="" class="w-12 h-12 object-center">
                  </div>
                <div class="text-blue-600 font-semibold">E-CATERING</div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                <div class="flex justify-center">
                    <img src="{{asset('asset/image/hotel.png')}}" alt="" class="w-12 h-12 object-center">
                  </div>
                <div class="text-blue-600 font-semibold">BUS</div>
            </div>
        </div>

        <!-- Second Services Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
            <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                <div class="flex justify-center">
                    <img src="{{asset('asset/image/hotel.png')}}" alt="" class="w-12 h-12 object-center">
                  </div>
                <div class="text-blue-600 font-semibold">HOLIDAY PACKAGES</div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                <div class="flex justify-center">
                    <img src="{{asset('asset/image/hotel.png')}}" alt="" class="w-12 h-12 object-center">
                  </div>
                <div class="text-blue-600 font-semibold">TOURIST TRAIN</div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                <div class="flex justify-center">
                    <img src="{{asset('asset/image/hotel.png')}}" alt="" class="w-12 h-12 object-center">
                  </div>
                <div class="text-blue-600 font-semibold">HILL RAILWAYS</div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                <div class="flex justify-center">
                    <img src="{{asset('asset/image/hotel.png')}}" alt="" class="w-12 h-12 object-center">
                  </div>
                <div class="text-blue-600 font-semibold">CHARTER TRAIN</div>
            </div>
        </div>

        <!-- Additional Links -->
        <div class="flex flex-wrap justify-center gap-4 mb-10">
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">GALLERY</a>
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">BRITISH</a>
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">NEWYORK</a>
        </div>

        <!-- Warning Banner -->
        <div class="bg-red-50 border-l-4 border-red-500 p-4">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-red-700">
                        <span class="font-bold">REVIVANCE OF FRAUDSTERS!</span>
                        <span>"Beware of fake emails and messages: Verify authenticity before responding."</span>
                    </p>
                </div>
            </div>
        </div>
    </div>


   
    <div class="container mx-auto px-4 py-12 max-w-7xl">
        <!-- Header Section -->
        <header class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">HOLIDAYS</h1>
            <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
        </header>
    
        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Maharajas' Express Card -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="https://www.irctc.co.in/nget/assets/images/exterior.jpg" alt="Maharajas' Express" class="w-full h-56 object-cover sm:h-64 md:h-72">
                <div class="bg-gradient-to-r from-amber-700 via-amber-800 to-amber-900 py-4 px-6">
                    <h2 class="text-white text-2xl md:text-3xl font-bold text-center">Maharajas' Express</h2>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 text-base md:text-lg mb-6">
                        Redefining Royalty, Luxury and Comfort, Maharajas' Express takes you on a sojourn to the era of bygone stately splendour. Winner of the "World's Leading Luxury Train" award for six years.
                    </p>
                    <a href="#" class="text-amber-600 font-semibold hover:text-amber-700 transition-colors duration-300 inline-flex items-center">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
    
            <!-- International Packages Card -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('https://www.irctc.co.in/nget/assets/images/Thailand.jpg') }}" alt="International Packages" class="w-full h-56 object-cover sm:h-64 md:h-72">
                <div class="bg-gradient-to-r from-blue-700 via-blue-800 to-blue-900 py-4 px-6">
                    <h2 class="text-white text-2xl md:text-3xl font-bold text-center">International Packages</h2>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 text-base md:text-lg mb-6">
                        Handpicked holiday packages for destinations like Thailand, Dubai, Europe, and the USA. Inclusive of sightseeing, meals, visa charges, and insurance.
                    </p>
                    <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300 inline-flex items-center">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
    
            <!-- Domestic Air Packages Card -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('https://www.irctc.co.in/nget/assets/images/Kashmir.jpg') }}" alt="Domestic Air Packages" class="w-full h-56 object-cover sm:h-64 md:h-72">
                <div class="bg-gradient-to-r from-green-700 via-green-800 to-green-900 py-4 px-6">
                    <h2 class="text-white text-2xl md:text-3xl font-bold text-center">Domestic Air Packages</h2>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 text-base md:text-lg mb-6">
                        From temples to treks, IRCTC offers spiritual and scenic domestic air packages covering Tirupati, Shirdi, Himalayas, Rajasthan, and more.
                    </p>
                    <a href="#" class="text-green-600 font-semibold hover:text-green-700 transition-colors duration-300 inline-flex items-center">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>

             <!-- International Packages Card -->
             <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('https://www.irctc.co.in/nget/assets/images/Bharat_Gaurav.jpg') }}" alt="International Packages" class="w-full h-56 object-cover sm:h-64 md:h-72">
                <div class="bg-gradient-to-r from-blue-700 via-blue-800 to-blue-900 py-4 px-6">
                    <h2 class="text-white text-2xl md:text-3xl font-bold text-center">Bharat Gaurav Tourist Train</h2>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 text-base md:text-lg mb-6">
                        Handpicked holiday packages for destinations like Thailand, Dubai, Europe, and the USA. Inclusive of sightseeing, meals, visa charges, and insurance.
                    </p>
                    <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300 inline-flex items-center">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
    
            <!-- Domestic Air Packages Card -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('https://www.irctc.co.in/nget/assets/images/Manali.jpg') }}" alt="Domestic Air Packages" class="w-full h-56 object-cover sm:h-64 md:h-72">
                <div class="bg-gradient-to-r from-green-700 via-green-800 to-green-900 py-4 px-6">
                    <h2 class="text-white text-2xl md:text-3xl font-bold text-center">Rail Tour Packages</h2>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 text-base md:text-lg mb-6">
                        From temples to treks, IRCTC offers spiritual and scenic domestic air packages covering Tirupati, Shirdi, Himalayas, Rajasthan, and more.
                    </p>
                    <a href="#" class="text-green-600 font-semibold hover:text-green-700 transition-colors duration-300 inline-flex items-center">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    

@endsection