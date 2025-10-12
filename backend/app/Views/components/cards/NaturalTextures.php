<?php if ($type == '4') : ?>
    <div class="bg-gradient-to-br from-amber-400 via-orange-500 to-yellow-500 shadow-lg hover:shadow-2xl mx-auto p-5 rounded-3xl max-w-xs font-[Poppins] hover:scale-[1.02] transition-all hover:-translate-y-1 duration-300 ease-in-out">
        <div class="relative bg-white dark:bg-gray-900 p-6 rounded-3xl overflow-hidden text-center">

            <!-- Circular image -->
            <div class="shadow-md mx-auto mb-4 rounded-full ring-4 ring-amber-200 dark:ring-gray-700 w-28 h-28 overflow-hidden">
                <img
                    src="<?= $img ?>"
                    alt="<?= htmlspecialchars($desc) ?>"
                    class="w-full h-full object-center object-cover hover:scale-110 transition-transform duration-500">
            </div>

            <!-- Description text -->
            <p class="text-gray-800 dark:text-gray-200 text-sm italic leading-relaxed">
                “<?= htmlspecialchars($desc) ?>”
            </p>
        </div>
    </div>
<?php endif; ?>