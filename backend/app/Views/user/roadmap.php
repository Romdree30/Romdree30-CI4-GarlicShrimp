<!DOCTYPE html>
<html lang="en" class="bg-orange-50 dark:bg-gray-900">

<head>
    <?= view('components/head') ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Road Map</title>

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
    <header>
        <?= view('components/header') ?>
    </header>

    <!-- Main Content -->
    <main class="flex flex-grow justify-center items-center px-4 py-12">
        <div
            class="bg-white dark:bg-gray-800 shadow-xl p-8 md:p-12 rounded-2xl w-full max-w-4xl transition-all duration-300 transform">

            <h1 class="mb-6 font-bold text-orange-600 text-3xl md:text-4xl text-center">Our Road Map</h1>
            <p class="mb-8 text-gray-700 dark:text-gray-400 text-center">
                See what we're cooking up next!
            </p>

            <div class="space-y-12">
                <!-- Phase 1 -->
                <div class="bg-orange-50 dark:bg-gray-700 shadow-md p-6 rounded-lg">
                    <h2 class="mb-2 font-semibold text-gray-800 dark:text-gray-200 text-2xl">
                        Phase 1: Launch & Get Feedback
                    </h2>
                    <ul class="space-y-2 text-gray-700 dark:text-gray-300 list-disc list-inside">
                        <li>Launch the core website with login and sign-up functionality.</li>
                        <li>Gather initial feedback from our first customers.</li>
                        <li>Build out our "About Us" page to share our story.</li>
                    </ul>
                </div>

                <!-- Phase 2 -->
                <div class="bg-orange-50 dark:bg-gray-700 shadow-md p-6 rounded-lg">
                    <h2 class="mb-2 font-semibold text-gray-800 dark:text-gray-200 text-2xl">
                        Phase 2: Expand & Enhance
                    </h2>
                    <ul class="space-y-2 text-gray-700 dark:text-gray-300 list-disc list-inside">
                        <li>Integrate an online menu with high-quality images.</li>
                        <li>Add an online ordering system for local delivery and pickup.</li>
                        <li>Introduce a loyalty program for returning customers.</li>
                    </ul>
                </div>

                <!-- Phase 3 -->
                <div class="bg-orange-50 dark:bg-gray-700 shadow-md p-6 rounded-lg">
                    <h2 class="mb-2 font-semibold text-gray-800 dark:text-gray-200 text-2xl">
                        Phase 3: The Future
                    </h2>
                    <ul class="space-y-2 text-gray-700 dark:text-gray-300 list-disc list-inside">
                        <li>Develop a mobile app for seamless ordering on the go.</li>
                        <li>Open new physical store locations.</li>
                        <li>Add new shrimp recipes to the menu based on customer requests.</li>
                    </ul>
                </div>
            </div>

            <!-- Back to Home -->
            <div class="mt-8 text-center">
                <a href="/"
                    class="inline-block bg-orange-600 hover:bg-orange-700 px-6 py-3 rounded-lg focus:ring-4 focus:ring-orange-500/50 font-semibold text-white transition-all duration-300">
                    Back to Home
                </a>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-auto">
        <?= view('components/footer') ?>
    </footer>

</body>

</html>