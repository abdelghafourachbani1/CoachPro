<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sarah Martinez - CoachHub</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=DM+Serif+Display:ital@0;1&display=swap');
    
    * {
      font-family: 'DM Sans', sans-serif;
    }
    
    .serif {
      font-family: 'DM Serif Display', serif;
    }
  </style>
</head>
<body class="bg-[#F5F1ED]">
  
  <!-- Navigation -->
  <nav class="fixed top-0 w-full bg-white z-50 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="flex justify-between items-center h-20">
        <a href="index.html" class="flex items-center space-x-3">
          <div class="w-10 h-10 bg-[#1A1A1A] flex items-center justify-center">
            <span class="text-white font-bold text-xl serif">CH</span>
          </div>
          <span class="text-2xl font-bold text-[#1A1A1A] serif">CoachHub</span>
        </a>
        
        <div class="hidden md:flex items-center space-x-10">
          <a href="index.html" class="text-gray-600 hover:text-[#1A1A1A]">Home</a>
          <a href="coaches.html" class="text-[#1A1A1A] font-medium border-b-2 border-[#D4896D] pb-1">Coaches</a>
          <a href="#" class="text-gray-600 hover:text-[#1A1A1A]">How It Works</a>
          <a href="#" class="text-gray-600 hover:text-[#1A1A1A]">About</a>
        </div>
        
        <div class="flex items-center space-x-4">
          <a href="login.html" class="text-[#1A1A1A] hover:text-[#D4896D] font-medium">Login</a>
          <a href="signup-select.html" class="px-8 py-3 bg-[#D4896D] text-white hover:bg-[#C17A5E] font-medium">Get Started</a>
        </div>
      </div>
    </div>
  </nav>
  
  <!-- Profile Header -->
  <div class="pt-32 pb-12 bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <a href="coaches.html" class="inline-flex items-center text-gray-600 hover:text-[#1A1A1A] mb-8">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
        Back to Coaches
      </a>
      
      <div class="flex flex-col md:flex-row gap-12 items-start">
        <div class="w-40 h-40 bg-gray-300 flex-shrink-0">
          <img src="/placeholder.svg?height=320&width=320" alt="Sarah Martinez" class="w-full h-full object-cover">
        </div>
        
        <div class="flex-1">
          <div class="flex items-start justify-between flex-wrap gap-6">
            <div>
              <h1 class="text-5xl font-bold text-[#1A1A1A] mb-3 serif">Sarah Martinez</h1>
              <div class="flex items-center gap-4 mb-4">
                <div class="flex items-center gap-1">
                  <span class="text-[#D4896D]">★★★★★</span>
                  <span class="text-[#1A1A1A] font-semibold">5.0</span>
                  <span class="text-gray-600">(127 reviews)</span>
                </div>
                <span class="text-gray-400">•</span>
                <span class="text-gray-700">12 years experience</span>
              </div>
              <div class="flex gap-2 mb-6">
                <span class="px-4 py-1 bg-[#E8B298] text-[#1A1A1A] text-sm font-medium">RUNNING</span>
                <span class="px-4 py-1 bg-white border border-gray-300 text-[#1A1A1A] text-sm font-medium">MARATHON</span>
                <span class="px-4 py-1 bg-white border border-gray-300 text-[#1A1A1A] text-sm font-medium">ENDURANCE</span>
              </div>
            </div>
            <div class="text-right">
              <div class="text-4xl font-bold text-[#1A1A1A] mb-2 serif">$85<span class="text-xl font-normal text-gray-600">/hr</span></div>
              <button class="w-full px-10 py-4 bg-[#1A1A1A] text-white hover:bg-[#2A2A2A] font-semibold transition-colors">
                Book Session
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Main Content -->
  <div class="max-w-7xl mx-auto px-6 lg:px-12 py-12">
    <div class="grid lg:grid-cols-3 gap-12">
      
      <!-- Left Column -->
      <div class="lg:col-span-2 space-y-8">
        
        <!-- About Section -->
        <div class="bg-white border border-gray-300 p-8">
          <h2 class="text-3xl font-bold text-[#1A1A1A] mb-6 serif">About</h2>
          <div class="space-y-4 text-gray-700 leading-relaxed">
            <p>
              Hi! I'm Sarah, a certified running coach with over 12 years of experience helping athletes of all levels achieve their goals. I specialize in marathon training, endurance building, and injury prevention.
            </p>
            <p>
              I've completed 15 marathons myself, including Boston and New York City, and have coached over 200 runners to successful race completions. My approach combines science-based training methods with personalized attention to each athlete's unique needs and goals.
            </p>
            <p>
              Whether you're training for your first 5K or aiming for a Boston qualifier, I'll create a customized training plan that fits your schedule and helps you reach your potential.
            </p>
          </div>
        </div>
        
        <!-- Certifications -->
        <div class="bg-white border border-gray-300 p-8">
          <h2 class="text-3xl font-bold text-[#1A1A1A] mb-6 serif">Certifications</h2>
          <ul class="space-y-4">
            <li class="flex items-start">
              <div class="w-2 h-2 bg-[#D4896D] mt-2 mr-4 flex-shrink-0"></div>
              <span class="text-gray-700">USATF Level 2 Endurance Coach</span>
            </li>
            <li class="flex items-start">
              <div class="w-2 h-2 bg-[#D4896D] mt-2 mr-4 flex-shrink-0"></div>
              <span class="text-gray-700">RRCA Certified Running Coach</span>
            </li>
            <li class="flex items-start">
              <div class="w-2 h-2 bg-[#D4896D] mt-2 mr-4 flex-shrink-0"></div>
              <span class="text-gray-700">CPR & First Aid Certified</span>
            </li>
            <li class="flex items-start">
              <div class="w-2 h-2 bg-[#D4896D] mt-2 mr-4 flex-shrink-0"></div>
              <span class="text-gray-700">Sports Nutrition Specialist</span>
            </li>
          </ul>
        </div>
        
        <!-- Reviews Section -->
        <div class="bg-white border border-gray-300 p-8">
          <h2 class="text-3xl font-bold text-[#1A1A1A] mb-8 serif">Reviews</h2>
          
          <!-- Review Item -->
          <div class="pb-8 mb-8 border-b border-gray-300">
            <div class="flex items-start justify-between mb-4">
              <div>
                <p class="font-semibold text-[#1A1A1A] text-lg">Michael Stevens</p>
                <div class="flex items-center gap-2 mt-1">
                  <span class="text-[#D4896D] text-sm">★★★★★</span>
                  <span class="text-gray-500 text-sm">2 weeks ago</span>
                </div>
              </div>
            </div>
            <p class="text-gray-700 leading-relaxed">
              Sarah helped me train for my first marathon and I couldn't be happier with the results! Her personalized training plan was challenging but achievable, and her constant support kept me motivated. I finished in 3:45 - better than I ever expected!
            </p>
          </div>
          
          <!-- Review Item -->
          <div class="pb-8 mb-8 border-b border-gray-300">
            <div class="flex items-start justify-between mb-4">
              <div>
                <p class="font-semibold text-[#1A1A1A] text-lg">Jennifer Lopez</p>
                <div class="flex items-center gap-2 mt-1">
                  <span class="text-[#D4896D] text-sm">★★★★★</span>
                  <span class="text-gray-500 text-sm">1 month ago</span>
                </div>
              </div>
            </div>
            <p class="text-gray-700 leading-relaxed">
              As someone who struggled with running injuries, Sarah's focus on proper form and gradual progression made all the difference. I've been injury-free for 6 months now and running faster than ever. Highly recommend!
            </p>
          </div>
          
          <!-- Review Item -->
          <div class="pb-8">
            <div class="flex items-start justify-between mb-4">
              <div>
                <p class="font-semibold text-[#1A1A1A] text-lg">David Park</p>
                <div class="flex items-center gap-2 mt-1">
                  <span class="text-[#D4896D] text-sm">★★★★★</span>
                  <span class="text-gray-500 text-sm">2 months ago</span>
                </div>
              </div>
            </div>
            <p class="text-gray-700 leading-relaxed">
              Sarah is knowledgeable, patient, and genuinely cares about her athletes' success. She helped me qualify for Boston with a 10-minute PR. Best coaching decision I ever made!
            </p>
          </div>
          
          <button class="w-full px-8 py-3 border-2 border-[#1A1A1A] text-[#1A1A1A] hover:bg-[#1A1A1A] hover:text-white font-medium transition-colors">
            View All 127 Reviews
          </button>
        </div>
        
      </div>
      
      <!-- Right Column -->
      <div class="space-y-8">
        
        <!-- Session Types -->
        <div class="bg-white border border-gray-300 p-8">
          <h3 class="text-2xl font-bold text-[#1A1A1A] mb-6 serif">Session Types</h3>
          <div class="space-y-6">
            <div class="p-6 border border-gray-300">
              <div class="flex justify-between items-start mb-3">
                <h4 class="font-semibold text-[#1A1A1A] text-lg">1-on-1 Training</h4>
                <span class="text-2xl font-bold text-[#1A1A1A] serif">$85</span>
              </div>
              <p class="text-sm text-gray-600">60 minutes of personalized coaching</p>
            </div>
            <div class="p-6 border border-gray-300">
              <div class="flex justify-between items-start mb-3">
                <h4 class="font-semibold text-[#1A1A1A] text-lg">Training Plan</h4>
                <span class="text-2xl font-bold text-[#1A1A1A] serif">$200</span>
              </div>
              <p class="text-sm text-gray-600">Custom 12-week marathon plan</p>
            </div>
            <div class="p-6 border border-gray-300">
              <div class="flex justify-between items-start mb-3">
                <h4 class="font-semibold text-[#1A1A1A] text-lg">Group Session</h4>
                <span class="text-2xl font-bold text-[#1A1A1A] serif">$45</span>
              </div>
              <p class="text-sm text-gray-600">90 minutes, max 6 participants</p>
            </div>
          </div>
        </div>
        
        <!-- Availability -->
        <div class="bg-white border border-gray-300 p-8">
          <h3 class="text-2xl font-bold text-[#1A1A1A] mb-6 serif">Availability</h3>
          <div class="space-y-4">
            <div class="flex justify-between items-center">
              <span class="text-gray-700">Monday</span>
              <span class="text-[#1A1A1A] font-medium">6am - 8pm</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-700">Tuesday</span>
              <span class="text-[#1A1A1A] font-medium">6am - 8pm</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-700">Wednesday</span>
              <span class="text-[#1A1A1A] font-medium">6am - 8pm</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-700">Thursday</span>
              <span class="text-[#1A1A1A] font-medium">6am - 8pm</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-700">Friday</span>
              <span class="text-[#1A1A1A] font-medium">6am - 6pm</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-700">Saturday</span>
              <span class="text-[#1A1A1A] font-medium">8am - 12pm</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-700">Sunday</span>
              <span class="text-[#D4896D] font-medium">Unavailable</span>
            </div>
          </div>
        </div>
        
        <!-- Stats -->
        <div class="bg-white border border-gray-300 p-8">
          <h3 class="text-2xl font-bold text-[#1A1A1A] mb-6 serif">Stats</h3>
          <div class="space-y-4">
            <div class="flex justify-between items-center">
              <span class="text-gray-700">Total Clients</span>
              <span class="text-[#1A1A1A] font-semibold">200+</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-700">Sessions</span>
              <span class="text-[#1A1A1A] font-semibold">1,450+</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-700">Response Time</span>
              <span class="text-[#1A1A1A] font-semibold">< 2 hours</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-700">Member Since</span>
              <span class="text-[#1A1A1A] font-semibold">Jan 2020</span>
            </div>
          </div>
        </div>
        
      </div>
      
    </div>
  </div>
  
</body>
</html>
