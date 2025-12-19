<?php
    require_once '../controllers/profilecontroller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - CoachHub</title>
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
                <a href="#" class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-[#1A1A1A] flex items-center justify-center">
                        <span class="text-white font-bold text-xl serif">CH</span>
                    </div>
                    <span class="text-2xl font-bold text-[#1A1A1A] serif">CoachHub</span>
                </a>
                <div>
                    <a href="../views/editprofile.php" class="text-[#1A1A1A] hover:text-[#D4896D] font-medium">Edit Profile</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Profile Header -->
    <div class="pt-32 pb-12 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">

            <div class="flex flex-col md:flex-row gap-12 items-start">
                <div class="w-40 h-40 bg-gray-300 flex-shrink-0">
                    <img src="<?= htmlspecialchars($profile['photo']) ?>" alt="Coach photo"
                        class="w-full h-full object-cover">
                </div>

                <div class="flex-1">
                    <h1 class="text-5xl font-bold text-[#1A1A1A] mb-3 serif">
                        My Coach Profile
                    </h1>

                    <div class="flex items-center gap-4 mb-4">
                        <span class="text-gray-700">
                            <?= (int)$profile['experience_years'] ?> years experience
                        </span>
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
                    <p class="text-gray-700 leading-relaxed">
                        <?= htmlspecialchars($profile['description']) ?>
                    </p>
                </div>

                <!-- Certifications -->
                <div class="bg-white border border-gray-300 p-8">
                    <h2 class="text-3xl font-bold text-[#1A1A1A] mb-6 serif">Certifications</h2>
                    <p class="text-gray-700">
                        <?= htmlspecialchars($profile['certifications']) ?>
                    </p>
                </div>

            </div>

            <!-- Right Column -->
            <div class="space-y-8">

                <!-- Placeholder: Availability -->
                <div class="bg-white border border-gray-300 p-8">
                    <h3 class="text-2xl font-bold text-[#1A1A1A] mb-6 serif">Availability</h3>
                    <p class="text-gray-600">Not set yet</p>
                </div>

                <!-- Placeholder: Stats -->
                <div class="bg-white border border-gray-300 p-8">
                    <h3 class="text-2xl font-bold text-[#1A1A1A] mb-6 serif">Stats</h3>
                    <p class="text-gray-600">Coming soon</p>
                </div>

            </div>

        </div>
    </div>

</body>

</html>