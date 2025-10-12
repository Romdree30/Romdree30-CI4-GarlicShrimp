<!DOCTYPE html>
<html lang="en" class="bg-orange-50 dark:bg-gray-900">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Board</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen text-gray-900 dark:text-gray-100">

    <!-- Header -->
    <header class="bg-orange-100 dark:bg-gray-800 shadow-md p-4">
        <div class="flex justify-between items-center mx-auto container">
            <a href="index.html" class="font-bold text-orange-600 text-2xl">Garlic Shrimp Co.</a>
            <nav class="space-x-4">
                <a href="/login"
                    class="text-gray-700 hover:text-orange-600 dark:text-gray-300 transition-colors">Log
                    In</a>
                <a href="/signup"
                    class="text-gray-700 hover:text-orange-600 dark:text-gray-300 transition-colors">Sign
                    Up</a>
                <a href="/moodboard"
                    class="text-gray-700 hover:text-orange-600 dark:text-gray-300 transition-colors">Mood
                    Board</a>
                <a href="/roadmap"
                    class="text-gray-700 hover:text-orange-600 dark:text-gray-300 transition-colors">Road
                    Map</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex flex-grow justify-center items-center p-4 sm:p-8">
        <!-- Main Container -->
        <div
            class="bg-white dark:bg-gray-800 shadow-xl p-8 md:p-12 rounded-2xl w-full max-w-4xl scale-100 transition-all duration-300 transform">

            <h1 class="mb-6 font-bold text-orange-600 text-3xl md:text-4xl text-center">Mood Board</h1>
            <p class="mb-8 text-gray-700 dark:text-gray-400 text-center">
                A visual guide to the look and feel of our website.
            </p>

            <!-- Color Palette Section -->
            <div class="space-y-12">
                <div>
                    <h2 class="mb-4 font-semibold text-gray-800 dark:text-gray-200 text-2xl">Color Palette</h2>
                    <div class="gap-4 grid grid-cols-1 sm:grid-cols-3">
                        <div class="flex flex-col justify-center items-center bg-orange-600 shadow-md p-6 rounded-lg">
                            <div class="bg-orange-600 mb-2 border border-white rounded-md w-full h-8"></div>
                            <span class="font-semibold text-white text-sm">Vibrant Orange</span>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-orange-300 shadow-md p-6 rounded-lg">
                            <div class="bg-orange-300 mb-2 border border-white rounded-md w-full h-8"></div>
                            <span class="font-semibold text-gray-800 text-sm">Light Orange</span>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-white shadow-md p-6 rounded-lg">
                            <div class="bg-white mb-2 border border-gray-300 rounded-md w-full h-8"></div>
                            <span class="font-semibold text-gray-800 text-sm">Crisp White</span>
                        </div>
                    </div>
                </div>

                <!-- Imagery Section -->
                <div>
                    <h2 class="mb-4 font-semibold text-gray-800 dark:text-gray-200 text-2xl">Imagery & Style</h2>
                    <div class="gap-6 grid grid-cols-1 sm:grid-cols-2">

                        <?= view('components/cards/CloseupShots', [
                            'type' => '1',
                            'img' => 'Shrimp.jpg',
                            'desc' => 'Close-up, detailed photos of the food to make it the star.'
                        ]) ?>

                        <?= view('components/cards/Atmosphere', [
                            'type' => '2',
                            'img' => 'foodtruck.jpg',
                            'desc' => 'Images that evoke a tropical, fresh, and friendly atmosphere.'
                        ]) ?>

                        <?= view('components/cards/QualityandFreshness', [
                            'type' => '3',
                            'img' => 'shrimp2.jpg',
                            'desc' => 'Showcasing the quality and freshness of the ingredients.'
                        ]) ?>

                        <?= view('components/cards/NaturalTextures', [
                            'type' => '4',
                            'img' => 'shrimp3.jpg',
                            'desc' => 'Adding natural textures to create a warm, authentic feel.'
                        ]) ?>

                    </div>
                </div>

                <!-- Typography Section -->
                <div>
                    <h2 class="mb-4 font-semibold text-gray-800 dark:text-gray-200 text-2xl">Typography</h2>
                    <div class="bg-orange-50 dark:bg-gray-700 shadow-md p-6 rounded-lg">
                        <h3 class="mb-2 font-bold text-orange-600 text-xl md:text-2xl">Heading Font (Example)</h3>
                        <p class="text-gray-700 dark:text-gray-300 text-base">
                            Body Font (This text is in Inter, a clean and readable sans-serif).
                        </p>
                    </div>
                </div>

                <!-- Buttons Section -->
                <div>
                    <h2 class="mb-4 font-semibold text-gray-800 dark:text-gray-200 text-2xl">Buttons</h2>
                    <div class="flex flex-wrap justify-center gap-4">
                        <?= view('components/buttons/PrimaryB', ['type' => '1', 'label' => 'Primary']) ?>
                        <?= view('components/buttons/SecondaryB', ['type' => '2', 'label' => 'Secondary']) ?>
                        <?= view('components/buttons/BorderedB', ['type' => '3', 'label' => 'Bordered']) ?>
                        <?= view('components/buttons/DisabledB', ['type' => '4', 'label' => 'Disabled']) ?>
                    </div>
                </div>

                <!-- Back to Home Button -->
                <div class="mt-10 text-center">
                    <a href="/"
                        class="inline-block bg-orange-600 hover:bg-orange-700 px-6 py-3 rounded-lg focus:ring-4 focus:ring-orange-500/50 font-semibold text-white transition-all duration-300">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-12 py-8 text-white" style="background-color: #FFA53F;">
        <div class="mx-auto px-4 md:text-left text-center container">
            <div class="items-center gap-8 grid grid-cols-1 md:grid-cols-3">
                <!-- Logo/Branding -->
                <div class="md:text-left text-center">
                    <a href="index.html" class="font-bold text-white hover:text-orange-100 text-3xl transition-colors">
                        Garlic Shrimp Co.
                    </a>
                </div>

                <!-- Footer Navigation Links -->
                <div class="flex md:flex-row flex-col justify-center md:space-x-8 space-y-2 md:space-y-0">
                    <a href="about.html" class="text-white/90 hover:text-white transition-colors">About</a>
                    <a href="moodboard.html" class="text-white/90 hover:text-white transition-colors">Mood Board</a>
                    <a href="roadmap.html" class="text-white/90 hover:text-white transition-colors">Road Map</a>
                </div>

                <!-- Social Media/Contact -->
                <div class="text-center md:text-right">
                    <p class="mb-2 font-semibold text-white text-lg">Connect With Us</p>
                    <div class="flex justify-center md:justify-end space-x-4">
                        <a href="#" class="text-white/90 hover:text-white transition-colors">Facebook</a>
                        <a href="#" class="text-white/90 hover:text-white transition-colors">Instagram</a>
                        <a href="#" class="text-white/90 hover:text-white transition-colors">Twitter</a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-8 pt-4 border-white/30 border-t text-center">
                <p class="text-white/80 text-sm">
                    &copy; 2025 Garlic Shrimp Co. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

</body>

</html>