<!DOCTYPE html>
<html lang="en" class="bg-orange-50 dark:bg-gray-900">

<head>
    <?= view('components/head') ?>
    <title>Sign Up</title>
</head>

<body class="flex flex-col min-h-screen text-gray-900 dark:text-gray-100">

    <!-- Header -->
    <header>
        <?= view('components/header') ?>
    </header>

    <!-- Main Section (Sign-up Form Centered) -->
    <main class="flex flex-grow justify-center items-center px-4 py-12">
        <div
            class="bg-white dark:bg-gray-800 shadow-xl p-8 md:p-12 rounded-2xl w-full max-w-lg transition-all duration-300 transform">

            <div id="auth-container">
                <h1 class="mb-6 font-bold text-3xl md:text-4xl text-center">Create Your Account</h1>
                <p class="mb-8 text-gray-700 dark:text-gray-400 text-center">
                    Sign up to start your order.
                </p>

                <!-- Display Validation Errors -->
                <?php if (session()->getFlashdata('errors')): ?>
                    <div class="bg-red-500 mb-4 p-3 rounded-lg text-white">
                        <ul class="text-sm list-disc list-inside">
                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <!-- Sign-up Form -->
                <form method="post" action="<?= site_url('/signup') ?>" class="space-y-4">
                    <div class="gap-4 grid grid-cols-2">
                        <div>
                            <label for="first_name" class="block mb-1 font-medium text-sm">First Name</label>
                            <input type="text" id="first_name" name="first_name" required
                                class="bg-gray-50 dark:bg-gray-700 p-3 border focus:border-orange-500 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-orange-500 w-full">
                        </div>
                        <div>
                            <label for="last_name" class="block mb-1 font-medium text-sm">Last Name</label>
                            <input type="text" id="last_name" name="last_name" required
                                class="bg-gray-50 dark:bg-gray-700 p-3 border focus:border-orange-500 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-orange-500 w-full">
                        </div>
                    </div>

                    <div>
                        <label for="middle_name" class="block mb-1 font-medium text-sm">Middle Name (Optional)</label>
                        <input type="text" id="middle_name" name="middle_name"
                            class="bg-gray-50 dark:bg-gray-700 p-3 border focus:border-orange-500 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-orange-500 w-full">
                    </div>

                    <div>
                        <label for="gender" class="block mb-1 font-medium text-sm">Gender</label>
                        <select id="gender" name="gender" required
                            class="bg-gray-50 dark:bg-gray-700 p-3 border focus:border-orange-500 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-orange-500 w-full appearance-none">
                            <option value="" disabled selected>Select your gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="email" class="block mb-1 font-medium text-sm">Email</label>
                        <input type="email" id="email" name="email" required
                            class="bg-gray-50 dark:bg-gray-700 p-3 border focus:border-orange-500 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-orange-500 w-full">
                    </div>

                    <div>
                        <label for="password" class="block mb-1 font-medium text-sm">Password</label>
                        <input type="password" id="password" name="password" required
                            class="bg-gray-50 dark:bg-gray-700 p-3 border focus:border-orange-500 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-orange-500 w-full">
                    </div>

                    <button type="submit"
                        class="bg-orange-600 hover:bg-orange-700 p-3 rounded-lg focus:ring-4 focus:ring-orange-500/50 w-full font-semibold text-white">
                        Sign Up
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <a href="/"
                        class="inline-block bg-orange-600 hover:bg-orange-700 px-6 py-3 rounded-lg focus:ring-4 focus:ring-orange-500/50 font-semibold text-white">
                        Back to Home
                    </a>
                </div>

                <div class="flex justify-center items-center mt-4">
                    <span class="text-sm">Already have an account?</span>
                    <a href="/login" class="ml-2 font-medium text-orange-600 hover:underline">Log in</a>
                </div>
            </div>

        </div>
    </main>

    <footer class="mt-auto">
        <?= view('components/footer') ?>
    </footer>

</body>

</html>