@extends('layouts.main')
@section('content')
<div class="bg-black text-white min-h-screen flex items-center justify-center">

    <div class="flex flex-col md:flex-row w-full max-w-6xl shadow-2xl rounded-xl overflow-hidden bg-gray-900">
      
      <!-- Left Side - Image -->
      <div class="md:w-1/2 w-full h-96 md:h-auto relative">
        <img src="https://equery.irctc.co.in/irctc_equery/assets/IRCTC_14646_banner_webp-D-elUOK7.webp" alt="Train" class="w-full h-full object-cover grayscale"/>
        {{-- <div class="absolute top-4 left-4 bg-black bg-opacity-50 px-4 py-2 text-white font-semibold text-xl rounded">
          "Lifeline of the Nation"
        </div> --}}
      </div>
  
      <!-- Right Side - Form -->
      <div class="md:w-1/2 w-full p-8 flex flex-col justify-center">
        <h1 class="text-3xl font-bold mb-2">Welcome To <span class="text-gray-300">IRCTC - eQuery</span></h1>
        <h2 class="text-xl font-semibold text-orange-500 mb-6">Login</h2>
  
        <form class="space-y-4">
          <input type="text" placeholder="Enter Mobile Number" class="w-full px-4 py-3 rounded border border-gray-600 bg-gray-800 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500"/>
          
          <div class="text-center text-sm text-gray-400">or</div>
  
          <input type="email" placeholder="Enter Email ID" class="w-full px-4 py-3 rounded border border-gray-600 bg-gray-800 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500"/>
          
          <button type="submit" class="w-full py-3 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded transition duration-300">
            Submit
          </button>
        </form>
  
        <p class="mt-6 text-sm text-gray-300 text-center">
          For swifter resolution of your query you may call our 24-hour Customer Care: 
          <br />
          <span class="font-semibold text-white">14646 / 080-35734999 / 080-44647999</span>
        </p>
      </div>
  
    </div>
</div>
@endsection