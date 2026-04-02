<?php require BASE_PATH . "views/partials/head.php" ?>
<?php require BASE_PATH . "views/partials/nav.php" ?>
<?php require BASE_PATH . "views/partials/banner.php" ?>

<main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <?php require BASE_PATH . "views/partials/breadcrumbs.php" ?>
    <div class="max-w-7xl bg-white rounded-2xl shadow-sm border border-gray-200 p-6 md:p-10">

        <!-- Header -->
        <h1 class="text-2xl md:text-3xl font-bold mb-6">
            Edit Capstone Project
        </h1>

        <form action="/capstone/edit" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $capstone['id'] ?>">
            <!-- LEFT SIDE -->
            <div class="space-y-4">

                <!-- Title -->
                <div>
                    <label class="block text-sm mb-1 text-gray-700">Project Title</label>
                    <input type="text" name="title"
                        value="<?= $capstone["title"] ?? "" ?>"
                        class="w-full px-4 py-2 rounded-lg bg-white border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    <small class="text-red-400 text-sm"><?= $errors['title'] ?? '' ?></small>
                </div>

                <!-- Author -->
                <div>
                    <label class="block text-sm mb-1 text-gray-700">Author</label>
                    <input type="text" name="author"
                        value="<?= $capstone["author"] ?? "" ?>"
                        class="w-full px-4 py-2 rounded-lg bg-white border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <small class="text-red-400 text-sm"><?= $errors['author'] ?? '' ?></small>
                </div>
                <!-- Adviser -->
                <div>
                    <label class="block text-sm mb-1 text-gray-700">Adviser</label>
                    <input type="text" name="adviser"
                        value="<?= $capstone["adviser"] ?? "" ?>"
                        class="w-full px-4 py-2 rounded-lg bg-white border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <small class="text-red-400 text-sm"><?= $errors['adviser'] ?? '' ?></small>
                </div>

                <!-- Year -->
                <div>
                    <label class="block text-sm mb-1 text-gray-700">Year Published</label>
                    <input type="number" name="year_published"
                        value="<?= $capstone["year_published"] ?? "" ?>"
                        class="w-full px-4 py-2 rounded-lg bg-white border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <small class="text-red-400 text-sm"><?= $errors['year_published'] ?? '' ?></small>
                </div>

                <!-- Category -->
                <div>
                    <label class="block text-sm mb-1 text-gray-700">Category</label>

                    <select name="category"

                        class="w-full px-4 py-2 rounded-lg bg-white border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">

                        <option value="">Select a category</option>
                        <option value="Information Technology" <?= ($capstone["category"] ?? "") === "Information Technology" ? "selected" : "" ?>>Information Technology</option>
                        <option value="Engineering" <?= ($capstone["category"] ?? "") === "Engineering" ? "selected" : "" ?>>Engineering</option>
                        <option value="Computer Science" <?= ($capstone["category"] ?? "") === "Computer Science" ? "selected" : "" ?>>Computer Science</option>
                        <option value="Business" <?= ($capstone["category"] ?? "") === "Business" ? "selected" : "" ?>>Business</option>
                        <option value="Education" <?= ($capstone["category"] ?? "") === "Education" ? "selected" : "" ?>>Education</option>
                    </select>
                    <small class=" text-red-400 text-sm"><?= $errors['category'] ?? '' ?></small>
                </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="flex flex-col justify-between">
                <!-- Abstract -->
                <div>
                    <label class="block text-sm mb-1 text-gray-700">Abstract</label>
                    <textarea name="abstract" rows="4"
                        class="w-full px-4 py-2 rounded-lg bg-white border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"><?= $capstone["abstract"] ?? "" ?></textarea>
                    <small class="text-red-400 text-sm"><?= $errors['abstract'] ?? '' ?></small>
                </div>

                <div>
                    <label class="block text-sm mb-2 text-gray-700">Upload PDF</label>

                    <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-blue-500 transition bg-slate-50">
                        <input type="file" name="document" value="<?= $_FILES['document']['name'] ?? '' ?>" accept="application/pdf" class="hidden" id="fileInput">

                        <label for="fileInput" class="cursor-pointer">
                            <p class="text-gray-500">Click to upload PDF</p>
                            <p class="text-xs text-gray-400 mt-1">Only .pdf files allowed</p>
                        </label>
                    </div>

                    <!-- File Name Preview -->
                    <p id="fileName" class="mt-3 text-sm text-gray-500 bg-blue-50 border border-blue-70 rounded-md p-2"><?= $capstone['document_path'] ?? '' ?></p>
                    <small class="text-red-400 text-sm"><?= $errors['file'] ?? '' ?></small>
                </div>

                <!-- Buttons -->
                <div class="mt-6 flex justify-between items-center">

                    <!-- Back -->
                    <a href="/capstone/my_projects"
                        class="text-gray-500 hover:text-blue-700 transition">
                        &larr; Back
                    </a>

                    <!-- Submit -->
                    <button type="submit"
                        class="bg-blue-900 hover:bg-blue-800 text-white px-6 py-2 rounded-lg font-medium transition">
                        Update
                    </button>

                </div>

            </div>

        </form>

    </div>
</main>


<?php require BASE_PATH . "views/partials/footer.php" ?>