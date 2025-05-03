<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white shadow-lg rounded-lg w-full max-w-md p-6">
    <h2 class="text-center text-2xl font-bold text-blue-900 border-b pb-2 mb-4">LOGIN</h2>

    <form class="space-y-4">
      <!-- Username -->
      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1" for="username">User Name</label>
        <input id="username" type="text" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter Username">
      </div>

      <!-- Password -->
      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1" for="password">Password</label>
        <input id="password" type="password" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter Password">
      </div>

      <!-- Forgot Link -->
      <div class="text-right">
        <a href="#" class="text-blue-700 text-sm font-medium hover:underline">Forgot Account Details?</a>
      </div>

      <!-- Captcha -->
      <div>
        <div class="flex items-center justify-between bg-blue-900 text-white px-4 py-2 rounded mb-1">
          <span class="font-mono tracking-widest">DEruEb</span>
          <button type="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-gray-300" viewBox="0 0 20 20" fill="currentColor">
              <path d="M4 4v5h.582a6 6 0 111.107 6.36l-1.285 1.517A8 8 0 104 4z"/>
            </svg>
          </button>
        </div>
        <input type="text" placeholder="Enter Captcha" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
      </div>

      <!-- OTP Checkbox -->
      <div class="flex items-center">
        <input id="otp" type="checkbox" class="mr-2">
        <label for="otp" class="text-sm font-medium text-gray-700">Login & Booking With OTP</label>
      </div>

      <!-- Sign In Button -->
      <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded transition">
        SIGN IN
      </button>

      <!-- Bottom Buttons -->
      <div class="flex justify-between mt-4 space-x-4">
        <a href="#" class="w-1/2 text-center bg-blue-900 hover:bg-blue-800 text-white py-2 rounded font-semibold text-sm">REGISTER</a>
        <a href="#" class="w-1/2 text-center bg-blue-900 hover:bg-blue-800 text-white py-2 rounded font-semibold text-sm">AGENT LOGIN</a>
      </div>
    </form>
  </div>

</body>
</html>