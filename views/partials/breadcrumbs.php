<div class="text-sm text-gray-500 mb-4">
    <ol class="flex items-center space-x-2">

        <li>
            <button onclick="history.back()" class=" hover:text-blue-700 transition">
                Capstone
            </button>
        </li>

        <li class="text-gray-400">/</li>

        <li class="text-gray-700 font-medium truncate max-w-[200px] sm:max-w-sm">
            <?= $breadcrumbs ?? '' ?>
        </li>

    </ol>
</div>