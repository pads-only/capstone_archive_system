<?php require BASE_PATH . "views/partials/head.php" ?>
<?php require BASE_PATH . "views/partials/nav.php" ?>
<?php require BASE_PATH . "views/partials/banner.php" ?>

<!-- 📚 GRID -->
<main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <?php require BASE_PATH . "views/partials/breadcrumbs.php" ?>
    <!-- 🔍 FILTERS -->
    <div class="max-w-7xl mx-auto py-4 flex flex-col justify-end sm:flex-row gap-4">
        <!-- SEARCH -->
        <div class="w-full">
            <input type="text" placeholder="Search capstone..."
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>
        <select class="px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500">
            <option>All Categories</option>
            <option>Information Technology</option>
            <option>Engineering</option>
        </select>

        <select class="px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500">
            <option>All Years</option>
            <option>2025</option>
            <option>2024</option>
        </select>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- CARD -->
        <?php foreach ($capstones as $capstone) : ?>
            <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow-md transition flex flex-col">

                <!-- CONTENT -->
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">
                        <?= $capstone['title'] ?>
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        <?= $capstone['author'] ?> • <?= $capstone['year_published'] ?>
                    </p>

                    <p class="text-sm text-gray-600 mt-3 line-clamp-3">
                        <?= $capstone['abstract'] ?>
                    </p>
                </div>

                <!-- BOTTOM (ALWAYS ALIGNED) -->
                <div class="mt-auto pt-4 flex items-center justify-between">
                    <span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded">
                        <?= $capstone['category'] ?>
                    </span>

                    <a href="/capstone/show?id=<?= $capstone['id'] ?>"
                        class="text-sm font-medium text-blue-700 hover:underline">
                        View →
                    </a>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

</main>


<?php require BASE_PATH . "views/partials/footer.php" ?>