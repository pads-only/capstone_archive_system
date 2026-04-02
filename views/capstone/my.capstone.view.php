<?php require BASE_PATH . "views/partials/head.php" ?>
<?php require BASE_PATH . "views/partials/nav.php" ?>
<?php require BASE_PATH . "views/partials/banner.php" ?>

<main class="min-h-full px-4 sm:px-6 lg:px-8">
    <div class="space-y-6 mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php require BASE_PATH . "views/partials/breadcrumbs.php" ?>

        <?php if ($capstones) { ?>
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">

                <!-- HEADER -->
                <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                    <h2 class="text-lg font-semibold text-gray-900">My Capstone Projects</h2>

                    <a href="/capstone/create"
                        class="bg-blue-900 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-800 transition">
                        + Upload
                    </a>
                </div>

                <!-- TABLE WRAPPER (for mobile scroll) -->
                <div class="overflow-x-auto">

                    <table class="min-w-full divide-y divide-gray-200">

                        <!-- TABLE HEAD -->
                        <thead class="bg-slate-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Category</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Year</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
                            </tr>
                        </thead>

                        <!-- TABLE BODY -->
                        <tbody class="bg-white divide-y divide-gray-100">

                            <!-- ROW -->
                            <?php foreach ($capstones as $capstone) : ?>
                                <tr class="hover:bg-slate-50 transition">
                                    <td class="px-6 py-4">
                                        <p class="text-sm font-medium text-gray-900 truncate max-w-xs">
                                            <?= $capstone['title'] ?>
                                        </p>
                                        <p class="text-xs text-gray-500">Uploaded recently</p>
                                    </td>

                                    <td class="px-6 py-4">
                                        <span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded">
                                            <?= $capstone['category'] ?>
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-700">
                                        <?= $capstone['year_published'] ?>
                                    </td>

                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">

                                            <a href="/capstone/edit?id=<?= $capstone['id'] ?>"
                                                class="text-sm px-3 py-1 rounded-md border border-gray-300 text-gray-700 hover:bg-gray-100 transition">
                                                Edit
                                            </a>

                                            <button
                                                class="text-sm px-3 py-1 rounded-md bg-red-600 text-white hover:bg-red-500 transition">
                                                Delete
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>

            </div>
        <?php } else { ?>
            <h1>You have no project yet!</h1>
        <?php } ?>
    </div>
</main>

<?php require BASE_PATH . "views/partials/footer.php" ?>