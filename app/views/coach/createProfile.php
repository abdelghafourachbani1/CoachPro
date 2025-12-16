<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Coach Profile - CoachHub</title>
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
          <a href="login.html" class="text-stone-600 hover:text-stone-900 font-medium transition-colors">Logout</a>
        </div>
      </div>
    </div>
  </nav>
  
  <!-- Main Content -->
  <div class="pt-32 pb-16">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      
      <!-- Header -->
      <div class="mb-12">
        <h1 class="text-5xl font-serif text-stone-900 mb-3">Create Your Coach Profile</h1>
        <p class="text-xl text-stone-600">Set up your profile so clients can discover and book your services.</p>
      </div>
      
      <!-- Profile Form -->
      <form class="space-y-8">
        
        <!-- Profile Picture -->
        <div class="bg-white rounded-2xl border border-stone-200 p-8 shadow-sm">
          <label class="block text-base font-semibold text-stone-900 mb-6">Profile Picture</label>
          <div class="flex items-center gap-8">
            <div class="w-28 h-28 bg-stone-100 rounded-full flex items-center justify-center ring-4 ring-stone-50">
              <svg class="w-14 h-14 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
              </svg>
            </div>
            <button type="button" class="px-6 py-3 bg-stone-900 text-white rounded-xl hover:bg-stone-800 font-medium transition-colors shadow-sm">
              Upload Photo
            </button>
          </div>
        </div>
        
        <!-- Basic Information -->
        <div class="bg-white rounded-2xl border border-stone-200 p-8 shadow-sm">
          <h2 class="text-2xl font-serif text-stone-900 mb-8">Basic Information</h2>
          
          <div class="space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-semibold text-stone-900 mb-3">First Name</label>
                <input type="text" class="w-full px-5 py-3.5 border-2 border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-700 focus:border-amber-700 outline-none transition-all text-stone-900" placeholder="John">
              </div>
              <div>
                <label class="block text-sm font-semibold text-stone-900 mb-3">Last Name</label>
                <input type="text" class="w-full px-5 py-3.5 border-2 border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-700 focus:border-amber-700 outline-none transition-all text-stone-900" placeholder="Smith">
              </div>
            </div>
            
            <div>
              <label class="block text-sm font-semibold text-stone-900 mb-3">Bio</label>
              <textarea rows="5" class="w-full px-5 py-3.5 border-2 border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-700 focus:border-amber-700 outline-none resize-none transition-all text-stone-900 leading-relaxed" placeholder="Tell clients about yourself, your experience, and your coaching philosophy..."></textarea>
              <p class="text-sm text-stone-500 mt-2">This will be displayed on your public profile.</p>
            </div>
          </div>
        </div>
        
        <!-- Sports & Specializations -->
        <div class="bg-white rounded-2xl border border-stone-200 p-8 shadow-sm">
          <h2 class="text-2xl font-serif text-stone-900 mb-8">Sports & Specializations</h2>
          
          <div class="space-y-6">
            <div>
              <label class="block text-sm font-semibold text-stone-900 mb-3">Primary Sport</label>
              <select class="w-full px-5 py-3.5 border-2 border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-700 focus:border-amber-700 outline-none transition-all text-stone-900 bg-white">
                <option>Select a sport</option>
                <option>Running</option>
                <option>Tennis</option>
                <option>Swimming</option>
                <option>Basketball</option>
                <option>Football</option>
                <option>Yoga</option>
                <option>Cycling</option>
                <option>Boxing</option>
              </select>
            </div>
            
            <div>
              <label class="block text-sm font-semibold text-stone-900 mb-3">Specializations</label>
              <input type="text" class="w-full px-5 py-3.5 border-2 border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-700 focus:border-amber-700 outline-none transition-all text-stone-900" placeholder="e.g., Marathon Training, Speed Work, Injury Recovery">
              <p class="text-sm text-stone-500 mt-2">Separate multiple specializations with commas.</p>
            </div>
            
            <div>
              <label class="block text-sm font-semibold text-stone-900 mb-3">Years of Experience</label>
              <input type="number" class="w-full px-5 py-3.5 border-2 border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-700 focus:border-amber-700 outline-none transition-all text-stone-900" placeholder="10">
            </div>
          </div>
        </div>
        
        <!-- Certifications -->
        <div class="bg-white rounded-2xl border border-stone-200 p-8 shadow-sm">
          <h2 class="text-2xl font-serif text-stone-900 mb-8">Certifications</h2>
          
          <div class="space-y-6">
            <div>
              <label class="block text-sm font-semibold text-stone-900 mb-3">Certification Name</label>
              <input type="text" class="w-full px-5 py-3.5 border-2 border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-700 focus:border-amber-700 outline-none transition-all text-stone-900" placeholder="e.g., NASM Certified Personal Trainer">
            </div>
            
            <button type="button" class="text-amber-700 hover:text-amber-900 font-semibold text-sm flex items-center gap-2 transition-colors">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
              </svg>
              Add Another Certification
            </button>
          </div>
        </div>
        
        <!-- Pricing & Availability -->
        <div class="bg-white rounded-2xl border border-stone-200 p-8 shadow-sm">
          <h2 class="text-2xl font-serif text-stone-900 mb-8">Pricing & Availability</h2>
          
          <div class="space-y-6">
            <div>
              <label class="block text-sm font-semibold text-stone-900 mb-3">Hourly Rate ($)</label>
              <div class="relative">
                <span class="absolute left-5 top-1/2 -translate-y-1/2 text-stone-500 font-medium">$</span>
                <input type="number" class="w-full pl-10 pr-5 py-3.5 border-2 border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-700 focus:border-amber-700 outline-none transition-all text-stone-900" placeholder="85">
              </div>
            </div>
            
            <div>
              <label class="block text-sm font-semibold text-stone-900 mb-3">Session Location</label>
              <input type="text" class="w-full px-5 py-3.5 border-2 border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-700 focus:border-amber-700 outline-none transition-all text-stone-900" placeholder="e.g., Central Park, Online, Client Location">
            </div>
            
            <div>
              <label class="block text-sm font-semibold text-stone-900 mb-4">Available Days</label>
              <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="checkbox" class="w-5 h-5 text-amber-700 border-2 border-stone-300 rounded-md focus:ring-2 focus:ring-amber-700 cursor-pointer">
                  <span class="text-stone-700 font-medium">Monday</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="checkbox" class="w-5 h-5 text-amber-700 border-2 border-stone-300 rounded-md focus:ring-2 focus:ring-amber-700 cursor-pointer">
                  <span class="text-stone-700 font-medium">Tuesday</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="checkbox" class="w-5 h-5 text-amber-700 border-2 border-stone-300 rounded-md focus:ring-2 focus:ring-amber-700 cursor-pointer">
                  <span class="text-stone-700 font-medium">Wednesday</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="checkbox" class="w-5 h-5 text-amber-700 border-2 border-stone-300 rounded-md focus:ring-2 focus:ring-amber-700 cursor-pointer">
                  <span class="text-stone-700 font-medium">Thursday</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="checkbox" class="w-5 h-5 text-amber-700 border-2 border-stone-300 rounded-md focus:ring-2 focus:ring-amber-700 cursor-pointer">
                  <span class="text-stone-700 font-medium">Friday</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="checkbox" class="w-5 h-5 text-amber-700 border-2 border-stone-300 rounded-md focus:ring-2 focus:ring-amber-700 cursor-pointer">
                  <span class="text-stone-700 font-medium">Saturday</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="checkbox" class="w-5 h-5 text-amber-700 border-2 border-stone-300 rounded-md focus:ring-2 focus:ring-amber-700 cursor-pointer">
                  <span class="text-stone-700 font-medium">Sunday</span>
                </label>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Submit Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 pt-4">
          <button type="submit" class="flex-1 px-8 py-4 bg-gradient-to-r from-amber-700 to-amber-900 text-white rounded-xl hover:from-amber-800 hover:to-amber-950 font-semibold text-lg transition-all shadow-lg shadow-amber-900/20">
            Create Profile
          </button>
          <button type="button" class="px-8 py-4 border-2 border-stone-300 text-stone-700 rounded-xl hover:bg-stone-50 font-semibold transition-all">
            Cancel
          </button>
        </div>
      </form>
    </div>
  </div>
  
</body>
</html>
