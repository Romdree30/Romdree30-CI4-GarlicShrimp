<!DOCTYPE html>
<html lang="en" class="bg-orange-50 dark:bg-gray-900">

<head>
    <!-- Component Call: Uses the new shared head component -->
    <?= view('components/head') ?>
    <title>Mood Board</title>
</head>

<body class="flex flex-col min-h-screen text-gray-900 dark:text-gray-100">

    <!-- Component Call: Uses the shared header component -->
    <header>
        <?= view('components/header') ?>
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

    <!-- Component Call: Uses the shared footer component -->
    <footer class="mt-auto">
        <?= view('components/footer') ?>
    </footer>

</body>

</html>