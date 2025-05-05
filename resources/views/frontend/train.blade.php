@extends('layouts.main')
@section('content')
  <div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-indigo-700 text-white flex-shrink-0 hidden md:block">
      <div class="p-6 text-center">
        <h2 class="text-xl font-bold">NTES</h2>
        <p class="text-sm">National Train Enquiry System</p>
      </div>
      <nav class="space-y-2 px-4">
        <a href="#" class="flex items-center gap-2 py-2 px-3 hover:bg-indigo-600 rounded">
          🔍 Spot Your Train
        </a>
        <a href="#" class="flex items-center gap-2 py-2 px-3 hover:bg-indigo-600 rounded">
          📍 Live Station
        </a>
        <a href="#" class="flex items-center gap-2 py-2 px-3 hover:bg-indigo-600 rounded">
          📅 Train Schedule
        </a>
        <a href="#" class="flex items-center gap-2 py-2 px-3 hover:bg-indigo-600 rounded">
          🚉 Trains B/w Stations
        </a>
        <a href="#" class="flex items-center gap-2 py-2 px-3 hover:bg-indigo-600 rounded">
          ⚠️ Train Exception Info
        </a>
        <div class="border-t border-indigo-500 my-4"></div>
        <div class="text-sm px-3 text-gray-300">Get Mobile App</div>
        <div class="flex gap-2 mt-2 px-3">
          <button class="bg-green-500 text-white px-3 py-1 rounded text-sm">Android</button>
          <button class="bg-purple-500 text-white px-3 py-1 rounded text-sm">iOS</button>
        </div>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <div class="bg-white rounded-lg shadow-md p-6 max-w-3xl mx-auto">
        <h2 class="text-xl font-semibold mb-4 text-blue-700">Spot Your Train</h2>

        <!-- Toggle buttons -->
        <div class="flex gap-2 mb-6">
          <button class="bg-blue-600 text-white px-4 py-2 rounded font-semibold text-sm hover:bg-blue-700">Train Instances</button>
          <button class="bg-white text-blue-600 border border-blue-600 px-4 py-2 rounded font-semibold text-sm hover:bg-blue-50">Journey Station Basis</button>
        </div>

        <!-- Input -->
        <div class="mb-4">
          <label for="trainNumber" class="block text-sm font-medium text-gray-700 mb-1">Train No./Name</label>
          <div class="flex items-center gap-2">
            <input id="trainNumber" type="text" placeholder="Enter Train Number or Name" class="flex-1 border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded">Search</button>
          </div>
        </div>

        <p class="text-xs text-gray-500">Note: Data shown with (*) are dynamic in nature and may change.</p>

        <!-- Footer / Info -->
        <div class="mt-10 text-center text-xs text-gray-500">
          <p class="text-sm mb-1 font-medium">india.gov.in</p>
          <p>Property of Indian Railways</p>
          <p>Designed and Hosted by CRIS</p>
          <p>&copy; 2013–2025 Centre for Railway Information Systems</p>
        </div>
      </div>
    </main>
  </div>

@endsection