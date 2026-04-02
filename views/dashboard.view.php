<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/banner.php" ?>

<main class="max-w-7xl mx-auto px-4 py-6 space-y-6">

    <!-- STATS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm">
            <p class="text-sm text-gray-500">Total Uploaded</p>
            <p class="text-2xl font-bold text-gray-900">12</p>
        </div>

        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm">
            <p class="text-sm text-gray-500">This Year</p>
            <p class="text-2xl font-bold text-gray-900">5</p>
        </div>

        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm">
            <p class="text-sm text-gray-500">Categories</p>
            <p class="text-2xl font-bold text-gray-900">3</p>
        </div>

    </div>

    <!-- RECENT PROJECTS -->
    <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">

        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold text-gray-900">Recent Projects</h2>
            <a href="/capstone" class="text-sm text-blue-700 hover:underline">View all</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

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

    </div>

</main>

<?php require "partials/footer.php" ?>