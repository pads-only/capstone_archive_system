<?php require BASE_PATH . "views/partials/head.php" ?>
<?php require BASE_PATH . "views/partials/nav.php" ?>
<?php require BASE_PATH . "views/partials/banner.php" ?>

<main class="min-h-full px-4 sm:px-6 lg:px-8">
    <div class="space-y-6 mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php require BASE_PATH . "views/partials/breadcrumbs.php" ?>

        <!-- TITLE -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
            <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">
                <?= $capstone['title'] ?>
            </h1>
            <!-- META INFO -->
            <div class="pt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">

                <div>
                    <p class="text-sm text-gray-500">Author</p>
                    <p class="font-medium"><?= $capstone['author'] ?></p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Year Published</p>
                    <p class="font-medium"><?= $capstone['year_published'] ?></p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Category</p>
                    <p class="font-medium"><?= $category_name ?></p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Adviser</p>
                    <p class="font-medium">Prof. <?= $capstone['adviser'] ?? 'unknown' ?></p>
                </div>

            </div>
            <!-- ABSTRACT -->
            <div class="mt-6 pt-6 border-t border-gray-200">
                <h2 class="text-lg font-semibold mb-3">Abstract</h2>
                <p class="text-gray-600 leading-relaxed">
                    <?= $capstone['abstract'] ?>
                </p>
            </div>
        </div>

        <!-- DOCUMENT SECTION -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
            <h2 class="text-lg font-semibold mb-4">Project Document</h2>

            <div class="flex flex-col sm:flex-row gap-4 sm:items-center sm:justify-between">

                <p class="text-gray-600">
                    <?= str_replace('uploads/', '', $capstone['document_path']); ?>
                </p>

                <div class="flex gap-3">
                    <a href="/capstone/view?pdf=<?= str_replace('uploads/', '', $capstone['document_path']); ?>" target="_blank">
                        <button class=" bg-blue-900 text-white px-4 py-2 rounded-md hover:bg-blue-800 transition">
                            View PDF
                        </button>
                    </a>
                    <button class="border border-gray-300 px-4 py-2 rounded-md text-gray-700 hover:bg-gray-100 transition">
                        Download
                    </button>
                </div>

            </div>
        </div>

    </div>
</main>

<?php require BASE_PATH . "views/partials/footer.php" ?>