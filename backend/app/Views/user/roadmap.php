<!DOCTYPE html>
<html lang="en" class="bg-orange-50 dark:bg-gray-900">

<head>
    <?= view('components/head.php') ?>
    <title>Project Road Map</title>
</head>

<body class="flex flex-col min-h-screen text-gray-900 dark:text-gray-100">

    <!-- Header -->
    <header>
        <?= view('components/header.php') ?>
    </header>

    <!-- Main Section -->
    <main class="flex-grow mx-auto px-4 py-12 container">
        <h1 class="mb-12 font-extrabold text-orange-600 dark:text-orange-400 text-4xl md:text-5xl text-center">
            Our Development Road Map
        </h1>

        <div class="space-y-6 mx-auto max-w-3xl">

            <!-- Feature 1: User Authentication System -->
            <div class="bg-white dark:bg-gray-800 shadow-xl hover:shadow-2xl p-6 border-orange-500 border-l-8 rounded-2xl transition-shadow duration-300">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="font-bold text-orange-700 dark:text-orange-300 text-2xl">User Authentication System</h2>
                </div>
                <p class="mb-4 text-gray-600 dark:text-gray-400 text-sm">
                    Implementing the core foundation for user accounts and secure access.
                </p>
                <ul class="space-y-2 text-gray-800 dark:text-gray-200 list-disc list-inside">
                    <li>Launch core website with **Login** and **Sign-up** functionality.</li>
                    <li>Secure user data handling and password management.</li>
                    <li>Integrate initial customer feedback loops.</li>
                </ul>
            </div>

            <!-- Feature 2: Shrimp Menu & Descriptions -->
            <div class="bg-white dark:bg-gray-800 shadow-xl hover:shadow-2xl p-6 border-amber-500 border-l-8 rounded-2xl transition-shadow duration-300">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="font-bold text-amber-700 dark:text-amber-300 text-2xl">Shrimp Menu & Catalog</h2>
                </div>
                <p class="mb-4 text-gray-600 dark:text-gray-400 text-sm">
                    Building the dynamic menu interface for customers to browse dishes.
                </p>
                <ul class="space-y-2 text-gray-800 dark:text-gray-200 list-disc list-inside">
                    <li>Integrate a dynamic menu with high-quality descriptions and images.</li>
                    <li>Develop menu filtering and search capabilities.</li>
                    <li>Establish a content management system for easy menu updates.</li>
                </ul>
            </div>

            <!-- Feature 3: Online Ordering System -->
            <div class="bg-white dark:bg-gray-800 shadow-xl hover:shadow-2xl p-6 border-amber-500 border-l-8 rounded-2xl transition-shadow duration-300">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="font-bold text-amber-700 dark:text-amber-300 text-2xl">Online Ordering System</h2>
                </div>
                <p class="mb-4 text-gray-600 dark:text-gray-400 text-sm">
                    Enabling customers to easily place, pay for, and track their food orders.
                </p>
                <ul class="space-y-2 text-gray-800 dark:text-gray-200 list-disc list-inside">
                    <li>Add local delivery and pickup options.</li>
                    <li>Integrate secure payment processing.</li>
                    <li>Implement order tracking and history features.</li>
                </ul>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-auto">
        <?= view('components/footer.php') ?>
    </footer>
</body>

</html>