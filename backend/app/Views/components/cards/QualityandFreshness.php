<?php if ($type == '3') : ?>
    <div class="bg-gradient-to-tr from-yellow-400 via-amber-400 to-orange-500 shadow-lg hover:shadow-2xl mx-auto rounded-2xl max-w-md font-[Poppins] transition-all hover:-translate-y-1 duration-300 ease-in-out">
        <div class="flex sm:flex-row flex-col items-center bg-white dark:bg-gray-900 rounded-2xl overflow-hidden">

            <!-- Image Section (left side) -->
            <div class="relative w-full sm:w-1/2 overflow-hidden">
                <img
                    src="<?= $img ?>"
                    alt="<?= htmlspecialchars($desc) ?>"
                    class="w-full h-48 sm:h-full object-center object-cover hover:scale-110 transition-transform duration-500">
                <!-- Subtle overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent"></div>
            </div>

            <!-- Text Section (right side) -->
            <div class="bg-gradient-to-br from-orange-50 dark:from-gray-800 to-yellow-50 dark:to-gray-700 p-5 w-full sm:w-1/2 sm:text-left text-center">
                <p class="font-medium text-gray-800 dark:text-gray-200 text-sm leading-relaxed">
                    <?= htmlspecialchars($desc) ?>
                </p>
            </div>
        </div>
    </div>
<?php endif; ?>