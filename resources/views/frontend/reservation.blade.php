@extends('layouts.main')
@section('content')
  <div class="max-w-4xl mx-auto px-4 py-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row items-center justify-between mb-6 border-b pb-4">
      <div class="flex items-center space-x-4">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/d/d2/Indian_Railways_logo.svg/1920px-Indian_Railways_logo.svg.png" alt="Indian Railways" class="w-16 h-16 object-contain">
        <div>
          <h1 class="text-2xl font-semibold text-gray-800">INDIAN RAILWAYS PASSENGER RESERVATION ENQUIRY</h1>
          <p class="text-sm text-gray-600">Please help Indian railways and government of India in moving towards a digitized and cashless economy. Eradicate black money.</p>
        </div>
      </div>
      <div class="mt-4 sm:mt-0">
        <img src="https://cris.org.in/images/cris_logo.png" alt="CRIS" class="w-20 object-contain">
      </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="flex gap-4 mb-6">
      <button class="bg-white border px-4 py-2 rounded shadow hover:bg-gray-50">Services</button>
      <button class="bg-white border px-4 py-2 rounded shadow hover:bg-gray-50">Information</button>
    </div>

    <!-- Form Section -->
    <div class="bg-white rounded shadow p-6">
      <h2 class="text-xl font-semibold text-white bg-blue-700 px-4 py-2 rounded-t">Reserved Train Between Stations</h2>

      <div class="p-4 space-y-4">
        <p class="text-sm text-gray-500">05-May-2025 [12:35:25 IST]</p>

        <form class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block text-gray-700 font-medium mb-1">Enter Journey Date</label>
            <input type="date" value="2025-05-05" class="w-full border rounded px-3 py-2">
          </div>

          <div>
            <label class="block text-gray-700 font-medium mb-1">Enter Source Station</label>
            <input type="text" placeholder="Enter Source Station" class="w-full border rounded px-3 py-2">
          </div>

          <div>
            <label class="block text-gray-700 font-medium mb-1">Enter Destination Station</label>
            <input type="text" placeholder="Enter Destination Station" class="w-full border rounded px-3 py-2">
          </div>

          <div class="flex items-center mt-6">
            <input type="checkbox" id="flexibleDate" class="mr-2">
            <label for="flexibleDate" class="text-gray-700">Flexible with Date</label>
          </div>
        </form>

        <div class="mt-4">
          <button type="submit" class="bg-blue-700 text-white font-semibold px-6 py-2 rounded hover:bg-blue-800 transition">GO</button>
        </div>
      </div>
    </div>
  </div>
@endsection