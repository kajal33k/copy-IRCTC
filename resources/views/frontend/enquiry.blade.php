@extends('layouts.main')
@section('content')

  <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-xl p-6">
    <h1 class="text-2xl font-bold mb-4 text-indigo-600">IRCTC Important Updates</h1>

    <!-- Tabs -->
    <div class="flex border-b border-gray-300 space-x-4 mb-4">
      <button class="tab-btn py-2 px-4 text-sm font-semibold text-indigo-700 border-b-2 border-indigo-700" data-tab="alerts">Alerts</button>
      <button class="tab-btn py-2 px-4 text-sm font-semibold hover:text-indigo-600" data-tab="updates">Updates</button>
      <button class="tab-btn py-2 px-4 text-sm font-semibold hover:text-indigo-600" data-tab="info">General Info</button>
      <button class="tab-btn py-2 px-4 text-sm font-semibold hover:text-indigo-600" data-tab="quicklinks">Quick Links</button>
      <button class="tab-btn py-2 px-4 text-sm font-semibold hover:text-indigo-600" data-tab="railway">Railway Updates</button>
    </div>

    <!-- Content -->
    <div id="alerts" class="tab-content active space-y-2">
      <p><strong>Beware of Fraudsters:</strong> IRCTC never shares unsolicited APKs, links, or asks for remote access. Only download apps from official stores. Report cyber frauds to <strong>1930</strong>.</p>
      <p><strong>Customer Care:</strong> 14646 / 08044647999 / 08035734999</p>
      <p><strong>Identity Theft Alert:</strong> IRCTC staff never calls or asks for card info, OTP, CVV, or remote access apps like AnyDesk.</p>
    </div>

    <div id="updates" class="tab-content space-y-2">
      <p><strong>Advance Reservation Change:</strong> Reduced from 120 days to 60 days (excluding journey date) w.e.f. 01 Nov 2024.</p>
      <p><strong>Meal Opt-in:</strong> Vande Bharat passengers can use the “Opt Meal” option post-booking.</p>
      <p><strong>Reverification:</strong> Users may be prompted to reverify email/mobile with OTP after login.</p>
    </div>

    <div id="info" class="tab-content space-y-2">
      <p><strong>Children under 5:</strong> Travel free without berth.</p>
      <p><strong>Refunds:</strong> Fully automated. Don't share banking details.</p>
      <p><strong>Booking Delay Refunds:</strong> Refunds applicable if train is late > 3 hrs (TDR required).</p>
    </div>

    <div id="quicklinks" class="tab-content space-y-2">
      <p><a href="https://equery.irctc.co.in" class="text-indigo-600 underline">IRCTC Query Interface</a></p>
      <p><a href="https://www.irctctourism.com/BookFood" class="text-indigo-600 underline">Book Meals Online</a></p>
      <p><a href="http://irctc.co.in" class="text-indigo-600 underline">Official IRCTC Website</a></p>
    </div>

    <div id="railway" class="tab-content space-y-2">
      <p><strong>Pet Booking:</strong> Guidelines available for dogs/cats in passenger trains.</p>
      <p><strong>Class Change:</strong> Re-allotment to 3AC Economy gets refund difference automatically.</p>
      <p><strong>Bedroll Notice:</strong> Special trains from SCR running without bedroll. Make own arrangements.</p>
    </div>
  </div>

  <!-- Script for Tabs -->
  <script>
    document.querySelectorAll('.tab-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('border-indigo-700', 'text-indigo-700'));
        document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));

        btn.classList.add('border-indigo-700', 'text-indigo-700');
        document.getElementById(btn.dataset.tab).classList.add('active');
      });
    });
  </script>

@endsection