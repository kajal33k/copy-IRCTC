@extends('layouts.main')
@section('content')
  <!-- Header -->
  <header class="bg-black text-white">
    <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col md:flex-row items-center justify-between space-y-2 md:space-y-0">
      <h1 class="text-xl font-semibold">Indian Railways Enquiry</h1>
      <nav class="flex flex-wrap gap-4 text-sm">
        <a href="#" class="hover:underline">PNR Enquiry</a>
        <a href="#" class="hover:underline">Train Between Stations</a>
        <a href="#" class="hover:underline">Seat Availability</a>
        <a href="#" class="hover:underline">Fare Enquiry</a>
        <a href="#" class="hover:underline">Train Schedule</a>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="py-10 px-4 md:px-0">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
      <div class="text-center mb-6">
        <h2 class="text-2xl font-bold mb-1">Passenger Current Status Enquiry</h2>
        <p class="text-sm text-gray-500">As of <span id="datetime">05-May-2025 [12:13:06 IST]</span></p>
      </div>

      <form class="space-y-6">
        <div>
          <label for="pnr" class="block text-sm font-medium text-gray-700 mb-1">Enter PNR No.</label>
          <input
            id="pnr"
            name="pnr"
            type="text"
            placeholder="Enter your 10-digit PNR"
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500"
          />
        </div>

        <div class="flex items-center justify-center gap-4">
          <button type="submit" class="bg-black hover:bg-gray-700 text-white font-semibold px-6 py-2 rounded-lg transition">
            Submit
          </button>
          <button type="reset" class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-semibold px-6 py-2 rounded-lg transition">
            Clear
          </button>
        </div>
      </form>
    </div>
  </main>
@endsection