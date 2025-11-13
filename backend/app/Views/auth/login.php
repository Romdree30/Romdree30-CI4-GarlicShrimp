<!DOCTYPE html>
<html lang="en" class="bg-orange-50 dark:bg-gray-900">

<head>
    <?= view('components/head') ?> <!-- ✅ Optional: keep if you use a head view -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

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
        <?= view('components/header') ?> <!-- ✅ Use your header component -->
    </header>

    <!-- Main Section -->
    <main class="flex flex-grow justify-center items-center px-4 py-12">
        <div class="bg-white dark:bg-gray-800 shadow-xl p-8 md:p-12 rounded-2xl w-full max-w-lg">
            <h1 class="mb-6 font-bold text-3xl md:text-4xl text-center">Welcome Back</h1>
            <p class="mb-8 text-gray-700 dark:text-gray-400 text-center">
                Log in to continue.
            </p>

            <!-- Flash Message (optional) -->
            <?php if (session()->getFlashdata('error')): ?>
                <div class="bg-red-500 mb-4 p-3 rounded-lg font-medium text-white text-sm text-center">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php elseif (session()->getFlashdata('success')): ?>
                <div class="bg-green-500 mb-4 p-3 rounded-lg font-medium text-white text-sm text-center">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <!-- Login Form -->
            <form method="post" action="<?= site_url('login') ?>" id="login-form" class="space-y-4">
                <div>
                    <label for="email" class="block mb-1 font-medium text-sm">Email</label>
                    <input type="email" id="email" name="email" required
                        class="bg-gray-50 dark:bg-gray-700 p-3 border focus:border-orange-500 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-orange-500 w-full transition-all duration-300">
                </div>
                <div>
                    <label for="password" class="block mb-1 font-medium text-sm">Password</label>
                    <input type="password" id="password" name="password" required
                        class="bg-gray-50 dark:bg-gray-700 p-3 border focus:border-orange-500 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-orange-500 w-full transition-all duration-300">
                </div>
                <button type="submit"
                    class="bg-orange-600 hover:bg-orange-700 p-3 rounded-lg focus:ring-4 focus:ring-orange-500/50 w-full font-semibold text-white transition-all duration-300">
                    Log In
                </button>
            </form>

            <!-- Back to Home -->
            <div class="mt-6 text-center">
                <a href="/"
                    class="inline-block bg-orange-600 hover:bg-orange-700 px-6 py-3 rounded-lg focus:ring-4 focus:ring-orange-500/50 font-semibold text-white transition-all duration-300">
                    Back to Home
                </a>
            </div>

            <!-- Sign-up Section -->
            <div class="flex justify-center items-center mt-4">
                <span class="text-sm">Don't have an account?</span>
                <a href="/signup" class="ml-2 font-medium text-orange-600 hover:underline">Sign up</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-auto">
        <?= view('components/footer') ?> <!-- ✅ Optional: include footer -->
    </footer>

</body>
</html>
