<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Choose Your Role - CoachHub</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'DM Sans', sans-serif;
    }
    .font-serif {
      font-family: 'DM Serif Display', serif;
    }
  </style>
</head>
<body class="bg-stone-50">
  
  <!-- Navigation -->
  <nav class="fixed top-0 w-full bg-white/90 backdrop-blur-md border-b border-stone-200 z-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="flex justify-between items-center h-20">
        <a href="index.html" class="flex items-center gap-3">
          <div class="w-10 h-10 bg-gradient-to-br from-amber-700 to-amber-900 rounded-xl flex items-center justify-center shadow-lg">
            <span class="text-stone-50 font-bold text-xl">C</span>
          </div>
          <span class="text-2xl font-serif text-stone-900">CoachHub</span>
        </a>
        
        <div class="flex items-center gap-6">
          <a href="login.html" class="text-stone-600 hover:text-stone-900 font-medium transition-colors">Login</a>
        </div>
      </div>
    </div>
  </nav>
  
  <!-- Main Content -->
  <div class="min-h-screen flex items-center justify-center pt-20 px-4">
    <div class="max-w-6xl w-full py-16">
      <div class="text-center mb-16">
        <h1 class="text-5xl md:text-6xl font-serif text-stone-900 mb-4 leading-tight">Join CoachHub</h1>
        <p class="text-xl text-stone-600 max-w-2xl mx-auto">Choose how you want to get started on your journey</p>
      </div>
      
      <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <!-- Client Card -->
        <a href="signup.html?type=client" class="group block">
          <div class="bg-white rounded-3xl border-2 border-stone-200 p-10 hover:border-amber-700 hover:shadow-2xl transition-all duration-300 h-full">
            <div class="w-20 h-20 bg-stone-100 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-amber-700 transition-all duration-300">
              <svg class="w-10 h-10 text-amber-700 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
              </svg>
            </div>
            <h2 class="text-3xl font-serif text-stone-900 mb-4">I'm a Client</h2>
            <p class="text-stone-600 mb-8 text-lg leading-relaxed">Find and book professional coaches to help you achieve your fitness and wellness goals</p>
            <ul class="space-y-4 mb-8">
              <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-amber-700 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-stone-700 text-base">Browse hundreds of expert coaches</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-amber-700 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-stone-700 text-base">Book and manage sessions easily</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-amber-700 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-stone-700 text-base">Track your progress over time</span>
              </li>
            </ul>
            <div class="text-amber-700 font-semibold text-lg group-hover:text-amber-900 flex items-center gap-2">
              Get started as a client 
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>
        </a>
        
        <!-- Coach Card -->
        <a href="signup.html?type=coach" class="group block">
          <div class="bg-gradient-to-br from-amber-700 to-amber-900 rounded-3xl border-2 border-amber-900 p-10 hover:shadow-2xl transition-all duration-300 h-full">
            <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-8 group-hover:bg-white/30 transition-all duration-300">
              <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
            </div>
            <h2 class="text-3xl font-serif text-white mb-4">I'm a Coach</h2>
            <p class="text-amber-100 mb-8 text-lg leading-relaxed">Share your expertise and grow your coaching business with our platform</p>
            <ul class="space-y-4 mb-8">
              <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-white flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-amber-50 text-base">Reach thousands of motivated clients</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-white flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-amber-50 text-base">Manage schedule and bookings</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-white flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-amber-50 text-base">Secure payments and payouts</span>
              </li>
            </ul>
            <div class="text-white font-semibold text-lg flex items-center gap-2 group-hover:gap-3 transition-all">
              Get started as a coach 
              <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </div>
          </div>
        </a>
      </div>
      
      <div class="text-center mt-12">
        <p class="text-stone-600 text-lg">
          Already have an account? 
          <a href="login.html" class="text-amber-700 hover:text-amber-900 font-semibold transition-colors">Log in</a>
        </p>
      </div>
    </div>
  </div>
  
</body>
</html>
