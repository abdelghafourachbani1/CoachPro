<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Coach Profile - CoachHub</title>
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
                    <a href="#" class="text-[#1A1A1A] hover:text-[#D4896D] font-medium">Dashboard</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="min-h-screen flex items-center justify-center pt-20 px-6">
        <div class="max-w-2xl w-full py-16">
            <div class="text-center mb-12">
                <h1 class="text-5xl font-bold text-[#1A1A1A] mb-4 serif">Create Your Coach Profile</h1>
                <p class="text-gray-700 text-lg">Share your expertise and help others reach their goals</p>
            </div>

            <div class="bg-white border border-gray-300 p-10">
                <form method="POST" action="../controllers/createprofilecontroller.php" class="space-y-6">
                    <!-- Bio Field -->
                    <div>
                        <label for="bio" class="block text-sm font-medium text-[#1A1A1A] mb-2">Biography</label>
                        <textarea
                            id="bio"
                            name="description"
                            required
                            rows="5"
                            class="w-full px-5 py-4 border border-gray-300 focus:border-[#D4896D] focus:outline-none resize-none"
                            placeholder="Tell us about your coaching philosophy, specialties, and what makes you unique..."></textarea>
                        <p class="mt-2 text-xs text-gray-600">Share your story and coaching approach</p>
                    </div>

                    <!-- Experience Years Field -->
                    <div>
                        <label for="experience_years" class="block text-sm font-medium text-[#1A1A1A] mb-2">Years of Experience</label>
                        <input
                            type="number"
                            id="experience_years"
                            name="experience_years"
                            required
                            min="0"
                            max="50"
                            class="w-full px-5 py-4 border border-gray-300 focus:border-[#D4896D] focus:outline-none"
                            placeholder="5">
                        <p class="mt-2 text-xs text-gray-600">How many years have you been coaching?</p>
                    </div>

                    <!-- Certification Field -->
                    <div>
                        <label for="certification" class="block text-sm font-medium text-[#1A1A1A] mb-2">Certifications</label>
                        <input
                            type="text"
                            id="certification"
                            name="certification"
                            required
                            class="w-full px-5 py-4 border border-gray-300 focus:border-[#D4896D] focus:outline-none"
                            placeholder="e.g., ICF Certified Coach, NASM-CPT, ACE Personal Trainer">
                        <p class="mt-2 text-xs text-gray-600">List your relevant certifications and credentials</p>
                    </div>

                    <!-- Photo URL Field -->
                    <div>
                        <label for="photo_url" class="block text-sm font-medium text-[#1A1A1A] mb-2">Profile Photo URL</label>
                        <input
                            type="url"
                            id="photo_url"
                            name="photo_url"
                            required
                            class="w-full px-5 py-4 border border-gray-300 focus:border-[#D4896D] focus:outline-none"
                            placeholder="https://example.com/your-photo.jpg">
                        <p class="mt-2 text-xs text-gray-600">Provide a URL to your professional headshot</p>
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="w-full px-8 py-4 bg-[#1A1A1A] text-white hover:bg-[#2A2A2A] font-medium transition-colors">
                        Create Coach Profile
                    </button>
                </form>
            </div>

            <div class="text-center mt-8">
                <p class="text-gray-700">
                    Need help?
                    <a href="#" class="text-[#D4896D] hover:text-[#C17A5E] font-medium">Contact Support</a>
                </p>
            </div>
        </div>
    </div>

</body>

</html>