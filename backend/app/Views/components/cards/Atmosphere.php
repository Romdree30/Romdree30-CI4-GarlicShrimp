<?php if ($type == '2') : ?>
    <div class="bg-gradient-to-br from-orange-400 via-amber-300 to-yellow-200 shadow-xl hover:shadow-2xl mx-auto p-[1px] rounded-3xl max-w-md font-['Inter','sans-serif'] hover:scale-[1.03] transition-all hover:-translate-y-1 duration-300">
        <div class="flex flex-col bg-white/80 dark:bg-gray-900/80 backdrop-blur-xl border border-amber-200 dark:border-gray-700 rounded-3xl overflow-hidden">

            <!-- Text on Top -->
            <div class="bg-gradient-to-t from-amber-50 dark:from-gray-800 to-yellow-50 dark:to-gray-700 p-6 text-center">
                <h3 class="mb-2 font-semibold text-orange-800 dark:text-amber-200 text-xl tracking-wide">
                    Delicious Inspiration
                </h3>
                <p class="text-amber-900 dark:text-amber-100 text-sm md:text-base leading-relaxed tracking-wide">
                    <?= htmlspecialchars($desc) ?>
                </p>
            </div>

            <!-- Image on Bottom -->
            <div class="relative">
                <img
                    src="<?= $img ?>"
                    alt="<?= htmlspecialchars($desc) ?>"
                    class="w-full h-56 object-center object-cover hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
            </div>
        </div>
    </div>
<?php endif; ?>