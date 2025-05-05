@extends('layouts.main')
@section('content')

<body class="bg-gray-100 text-gray-800">
  <header class="bg-indigo-800 text-white py-4 shadow-md">
    <div class="max-w-6xl mx-auto px-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold">RAILWAY ENQUIRY - 139</h1>
    </div>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-10">
    <section class="bg-white p-6 rounded-2xl shadow-lg">
      <h2 class="text-2xl font-semibold mb-6 text-indigo-800">Reservation Enquiry</h2>

      <form class="space-y-6">
        <div class="grid md:grid-cols-2 gap-4">
          <div>
            <label class="block mb-2 text-sm font-medium text-gray-700">PNR Number</label>
            <input type="text" placeholder="Enter 10-digit PNR" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" />
          </div>
          <div>
            <label class="block mb-2 text-sm font-medium text-gray-700">Train Number/Name</label>
            <input type="text" placeholder="e.g. 12951 / Mumbai Rajdhani" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" />
          </div>
        </div>

        <div class="grid md:grid-cols-2 gap-4">
          <div>
            <label class="block mb-2 text-sm font-medium text-gray-700">Source Station</label>
            <input type="text" placeholder="e.g. NDLS" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" />
          </div>
          <div>
            <label class="block mb-2 text-sm font-medium text-gray-700">Destination Station</label>
            <input type="text" placeholder="e.g. BCT" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" />
          </div>
        </div>

        <div class="grid md:grid-cols-2 gap-4">
          <div>
            <label class="block mb-2 text-sm font-medium text-gray-700">Date of Journey</label>
            <input type="date" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" />
          </div>
          <div>
            <label class="block mb-2 text-sm font-medium text-gray-700">Class</label>
            <select class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
              <option>Select Class</option>
              <option>1A - First AC</option>
              <option>2A - Second AC</option>
              <option>3A - Third AC</option>
              <option>SL - Sleeper</option>
              <option>2S - Second Sitting</option>
            </select>
          </div>
        </div>

        <div>
          <button type="submit" class="w-full bg-indigo-700 hover:bg-indigo-800 text-white font-semibold py-3 rounded-lg transition duration-200">Check Availability</button>
        </div>
      </form>
    </section>

    <section class="mt-10 text-sm text-gray-600">
      <h3 class="text-lg font-semibold text-indigo-700 mb-2">Need Help?</h3>
      <p>Call or SMS <strong>139</strong> to get information about:</p>
      <ul class="list-disc pl-6 mt-2">
        <li>PNR Enquiry</li>
        <li>Train Arrival / Departure</li>
        <li>Accommodation Availability</li>
        <li>Fare Enquiry</li>
        <li>Train Timetable</li>
        <li>Train Name/Number</li>
      </ul>
    </section>
  </main>

@endsection