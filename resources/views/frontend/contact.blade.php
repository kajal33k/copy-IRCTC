@extends('layouts.main')
@section('content')
<div class="max-w-7xl mx-auto px-4 py-12">
    <!-- Header -->
    <header class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">Contact Us</h1>
        <p class="text-gray-600 text-lg">We are here to help with all IRCTC related services.</p>
        <div class="w-24 h-1 bg-amber-500 mx-auto mt-4"></div>
    </header>

    <!-- Customer Care Section -->
    <section class="mb-12">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">IRCTC Customer Care</h2>
        <p class="text-gray-700 mb-2">For Railway tickets booked through IRCTC:</p>
        <ul class="list-disc pl-6 text-gray-700 mb-4">
            <li><strong>Customer Care Numbers:</strong> 14646 / 08044647999 / 08035734999</li>
            <li><strong>Languages Supported:</strong> Hindi, English, Punjabi, Bengali, Assamese, Odia, Marathi, Gujarati, Tamil, Telugu, Kannada, Malayalam</li>
        </ul>
        <p class="text-blue-600 font-semibold">
            Enhanced query interface: 
            <a href="https://equery.irctc.co.in" target="_blank" class="hover:underline">https://equery.irctc.co.in</a>
        </p>
    </section>

    <!-- Ticket & Service Info -->
    <section class="mb-12">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">General Information</h2>
        <ul class="list-disc pl-6 text-gray-700 space-y-2">
            <li><strong>I-tickets / E-tickets:</strong> <a href="https://equery.irctc.co.in" class="text-blue-600 hover:underline">https://equery.irctc.co.in</a></li>
            <li><strong>Cancellation of E-tickets:</strong> <a href="mailto:etickets@irctc.co.in" class="text-blue-600 hover:underline">etickets@irctc.co.in</a></li>
            <li><strong>IRCTC iMudra Wallet:</strong> <a href="https://equery.irctc.co.in" class="text-blue-600 hover:underline">https://equery.irctc.co.in</a></li>
        </ul>
    </section>

    <!-- Loyalty Cards -->
    <section class="mb-12">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Loyalty Credit Cards Support</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- SBI -->
            <div class="bg-white shadow rounded-xl p-6">
                <h3 class="text-lg font-bold text-gray-800 mb-2">IRCTC-SBI</h3>
                <p class="text-gray-700 mb-1"><strong>Phone:</strong> 0124-39021212 / 18001801295</p>
                <p class="text-gray-700"><strong>Email:</strong> <a href="mailto:customercare@sbicard.com" class="text-blue-600 hover:underline">customercare@sbicard.com</a></p>
            </div>
            <!-- BOB -->
            <div class="bg-white shadow rounded-xl p-6">
                <h3 class="text-lg font-bold text-gray-800 mb-2">IRCTC-BOB</h3>
                <p class="text-gray-700 mb-1"><strong>Phone:</strong> 1800225100 / 18001031006</p>
                <p class="text-gray-700"><strong>Email:</strong> <a href="mailto:crm@bobfinancial.com" class="text-blue-600 hover:underline">crm@bobfinancial.com</a></p>
            </div>
            <!-- HDFC -->
            <div class="bg-white shadow rounded-xl p-6">
                <h3 class="text-lg font-bold text-gray-800 mb-2">IRCTC-HDFC</h3>
                <p class="text-gray-700 mb-1"><strong>Phone:</strong> 18002026161 / 18602676161</p>
                <p class="text-gray-700"><strong>Website:</strong> <a href="https://www.hdfcbank.com/personal/need-help/contact-us" target="_blank" class="text-blue-600 hover:underline">Contact HDFC</a></p>
            </div>
            <!-- RBL -->
            <div class="bg-white shadow rounded-xl p-6">
                <h3 class="text-lg font-bold text-gray-800 mb-2">IRCTC-RBL</h3>
                <p class="text-gray-700 mb-1"><strong>Phone:</strong> +91 2262327777 / +91 2271190900</p>
                <p class="text-gray-700"><strong>Email:</strong> <a href="mailto:cardservices@rblbank.com" class="text-blue-600 hover:underline">cardservices@rblbank.com</a></p>
            </div>
        </div>
        <p class="mt-4 text-gray-700">
            For other queries related to IRCTC Loyalty Co-branded Program, email: 
            <a href="mailto:loyaltyprogram@irctc.co.in" class="text-blue-600 hover:underline">loyaltyprogram@irctc.co.in</a>
        </p>
    </section>

    <!-- Registered Office -->
    <section>
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Registered Office</h2>
        <address class="text-gray-700 not-italic">
            <strong>Indian Railway Catering and Tourism Corporation Ltd.</strong><br>
            4th Floor, Tower-D, World Trade Centre,<br>
            Nauroji Nagar, New Delhi - 110029
        </address>
    </section>
</div>
{{-- Argent login --}}
<div class="max-w-3xl mx-auto px-4 py-10 bg-white shadow rounded-xl">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Agent Confirmation</h2>

    <div class="space-y-4 text-gray-700 text-base leading-relaxed">
        <p>☑️ I confirm that I will <strong>not use my IRCTC personal User ID</strong> to book tickets for any customer.</p>
        <p>☑️ I confirm that I will <strong>not overcharge</strong> the customer over and above the <strong>IRCTC prescribed ticket fare</strong>.</p>
        <p>☑️ I confirm that I will <strong>not alter the contents</strong> of the Electronic Reservation Slip (ERS).</p>
        <p>☑️ I confirm that I will abide by all <strong>IRCTC rules, regulations, and guidelines</strong> related to ticket booking, cancellations, refunds, etc., as issued by IRCTC/Ministry of Railways from time to time.</p>
    </div>

    <!-- Agreement Checkbox -->
    <div class="mt-6 flex items-center">
        <input type="checkbox" id="agree" name="agree" class="w-5 h-5 text-amber-600 border-gray-300 rounded focus:ring-amber-500">
        <label for="agree" class="ml-3 text-gray-800 font-medium">
            I Agree
        </label>
    </div>

    <!-- Submit Button -->
    <div class="mt-8 text-center">
        <button type="submit" class="px-6 py-3 bg-amber-600 text-white font-semibold rounded-lg hover:bg-amber-700 transition duration-300">
            Submit Confirmation
        </button>
    </div>
</div>

@endsection