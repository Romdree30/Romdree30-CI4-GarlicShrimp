<?php
$session = session();
?>

<header class="bg-orange-100 dark:bg-gray-800 shadow-md p-4">
    <div class="flex justify-between items-center mx-auto container">
        <a href="/" class="font-bold text-orange-600 text-2xl">Garlic Shrimp Co.</a>
        <nav class="space-x-4">
            <?php if ($session->has('user')): ?>
                <a href="/logout" class="text-gray-700 hover:text-orange-600 dark:text-gray-300 transition-colors">Logout</a>
            <?php else: ?>
                <a href="/login" class="text-gray-700 hover:text-orange-600 dark:text-gray-300 transition-colors">Log In</a>
            <?php endif; ?>
        </nav>
    </div>
</header>