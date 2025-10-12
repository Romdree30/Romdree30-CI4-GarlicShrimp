<?php if ($type == '1') : ?>
    <div class="bg-gradient-to-br from-orange-500 via-amber-400 to-yellow-300 shadow-lg hover:shadow-2xl mx-auto p-[3px] rounded-2xl max-w-sm font-['Inter','sans-serif'] transition-transform hover:-translate-y-1 duration-300 ease-in-out">
        <div class="bg-white dark:bg-gray-900 rounded-2xl overflow-hidden">

            <!-- Image Section -->
            <img
                src="<?= $img ?>"
                alt="<?= htmlspecialchars($desc) ?>"
                class="w-full h-56 object-cover hover:scale-105 transition-transform duration-500">

            <!-- Description Section -->
            <div class="bg-gradient-to-r from-orange-50 dark:from-gray-800 to-amber-50 dark:to-gray-700 p-5 text-center">
                <p class="font-medium text-gray-800 dark:text-gray-200 text-sm md:text-base italic leading-relaxed tracking-wide">
                    <?= htmlspecialchars($desc) ?>
                </p>
            </div>
        </div>
    </div>
<?php endif; ?>