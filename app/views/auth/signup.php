<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - CoachHub</title>
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
        
        <div class="flex items-center space-x-4">
          <a href="login.html" class="text-[#1A1A1A] hover:text-[#D4896D] font-medium">Login</a>
        </div>
      </div>
    </div>
  </nav>
  
  <!-- Main Content -->
  <div class="min-h-screen flex items-center justify-center pt-20 px-6">
    <div class="max-w-xl w-full py-16">
      <div class="text-center mb-12">
        <h1 class="text-5xl font-bold text-[#1A1A1A] mb-4 serif">Begin your journey</h1>
        <p class="text-gray-700 text-lg">Create your account and start training</p>
      </div>
      
      <div class="bg-white border border-gray-300 p-10">
        <form class="space-y-6">
          <!-- Full Name Field -->
          <div>
            <label for="name" class="block text-sm font-medium text-[#1A1A1A] mb-2">Full name</label>
            <input 
              type="text" 
              id="name" 
              name="name" 
              required
              class="w-full px-5 py-4 border border-gray-300 focus:border-[#D4896D] focus:outline-none"
              placeholder="John Doe"
            >
          </div>
          
          <!-- Email Field -->
          <div>
            <label for="email" class="block text-sm font-medium text-[#1A1A1A] mb-2">Email address</label>
            <input 
              type="email" 
              id="email" 
              name="email" 
              required
              class="w-full px-5 py-4 border border-gray-300 focus:border-[#D4896D] focus:outline-none"
              placeholder="you@example.com"
            >
          </div>
          
          <!-- Password Field -->
          <div>
            <label for="password" class="block text-sm font-medium text-[#1A1A1A] mb-2">Password</label>
            <input 
              type="password" 
              id="password" 
              name="password" 
              required
              class="w-full px-5 py-4 border border-gray-300 focus:border-[#D4896D] focus:outline-none"
              placeholder="••••••••"
            >
            <p class="mt-2 text-xs text-gray-600">Minimum 8 characters required</p>
          </div>
          
          <!-- Confirm Password Field -->
          <div>
            <label for="confirm-password" class="block text-sm font-medium text-[#1A1A1A] mb-2">Confirm password</label>
            <input 
              type="password" 
              id="confirm-password" 
              name="confirm-password" 
              required
              class="w-full px-5 py-4 border border-gray-300 focus:border-[#D4896D] focus:outline-none"
              placeholder="••••••••"
            >
          </div>
          
          <!-- Terms Checkbox -->
          <div>
            <label class="flex items-start">
              <input type="checkbox" required class="w-5 h-5 text-[#D4896D] border-gray-300 focus:ring-[#D4896D] mt-0.5">
              <span class="ml-3 text-sm text-gray-700">
                I agree to the <a href="#" class="text-[#D4896D] hover:text-[#C17A5E] font-medium">Terms of Service</a> and <a href="#" class="text-[#D4896D] hover:text-[#C17A5E] font-medium">Privacy Policy</a>
              </span>
            </label>
          </div>
          
          <!-- Submit Button -->
          <button 
            type="submit" 
            class="w-full px-8 py-4 bg-[#1A1A1A] text-white hover:bg-[#2A2A2A] font-medium transition-colors"
          >
            Create Account
          </button>
        </form>
        
        <!-- Divider -->
        <div class="relative my-8">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-gray-300"></div>
          </div>
          <div class="relative flex justify-center text-sm">
            <span class="px-4 bg-white text-gray-600">Or continue with</span>
          </div>
        </div>
        
        <!-- Social Signup -->
        <div class="grid grid-cols-2 gap-4">
          <button class="flex items-center justify-center px-6 py-4 border border-gray-300 hover:bg-[#F5F1ED] transition-colors">
            <svg class="w-5 h-5" viewBox="0 0 24 24">
              <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
              <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
              <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
              <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
            </svg>
          </button>
          <button class="flex items-center justify-center px-6 py-4 border border-gray-300 hover:bg-[#F5F1ED] transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.17 6.839 9.49.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.167 22 16.418 22 12c0-5.523-4.477-10-10-10z"/>
            </svg>
          </button>
        </div>
      </div>
      
      <div class="text-center mt-8">
        <p class="text-gray-700">
          Already have an account? 
          <a href="login.html" class="text-[#D4896D] hover:text-[#C17A5E] font-medium">Log in</a>
        </p>
      </div>
    </div>
  </div>
  
</body>
</html>
