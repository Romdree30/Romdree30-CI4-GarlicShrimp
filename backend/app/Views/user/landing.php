<!DOCTYPE html>
<html lang="en">

<?= view('components/head') ?>

<body class="bg-orange-50 dark:bg-gray-900 min-h-screen text-gray-900 dark:text-gray-100">

    <!-- Header Navigation -->
    <?= view('components/header') ?>

    <!-- Main Content Section -->
    <main class="mx-auto mt-8 p-4 container">

        <!-- Hero Banner Section -->
        <?= view('components/cta') ?>

        <!-- About Garlic Shrimp Co. Section -->
        <section id="about" class="items-center gap-12 grid lg:grid-cols-2 py-16">
            <!-- Text Content -->
            <div class="space-y-6 text-left">
                <span class="font-semibold text-orange-500 text-sm uppercase tracking-widest">
                    About Garlic Shrimp Co.
                </span>
                <h2 class="font-extrabold text-gray-900 dark:text-white text-4xl sm:text-5xl">
                    Our Story: Why Every Shrimp is Delicious
                </h2>
                <p class="text-gray-700 dark:text-gray-400 text-lg leading-relaxed">
                    Welcome to Garlic Shrimp Co. We're obsessed with crafting the perfect garlic shrimp experience.
                    Our secret lies in the simplicity of <strong>fresh, jumbo shrimp</strong>, bathed in a buttery,
                    custom-blended aromatic garlic oil. It's the moment the sizzling pan hits the table—that incredible
                    aroma, the perfect snap of the prawn, and the complex, savory flavor—that defines us.
                    We don't just serve food; we serve a delicious obsession.
                </p>

                <ul class="space-y-3 text-gray-600 dark:text-gray-300">
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                        </svg>
                        <strong>The Sizzling Aroma:</strong> Our proprietary garlic butter blend.
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                        </svg>
                        <strong>Perfectly Seared:</strong> Juicy prawns with a satisfying snap.
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                        </svg>
                        <strong>Complex Flavor:</strong> Umami-rich and unforgettable taste profile.
                    </li>
                </ul>
            </div>

            <!-- Image / Visual -->
            <div class="relative shadow-2xl rounded-2xl w-full h-[450px] lg:h-[550px] overflow-hidden">
                <img src="shrimpA.jpg"
                    alt="A plate of perfectly cooked garlic shrimp with a rich sauce."
                    class="w-full h-full object-cover hover:scale-105 transition duration-500 transform"
                    onerror="this.onerror=null;this.src='https://placehold.co/800x600/f59e0b/000000?text=Delicious+Shrimp+Dish';">
            </div>
        </section>

        <!-- Order CTA Section -->
        <section id="reserve" class="bg-orange-600 dark:bg-orange-800 px-4 py-16 text-white">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="mb-4 font-extrabold text-4xl">Ready for the Most Delicious Meal of Your Week?</h2>
                <p class="opacity-90 mb-8 text-xl">
                    Stop reading and start eating. Experience the craving today.
                </p>
                <a href="#dishes"
                    class="inline-block bg-white hover:bg-orange-100 shadow-2xl px-10 py-3 border-2 border-white rounded-full font-bold text-orange-600 text-xl hover:scale-105 transition duration-300 ease-in-out transform">
                    View Our Full Menu
                </a>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?= view('components/footer') ?>

</body>

</html>