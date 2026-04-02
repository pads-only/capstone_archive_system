<header class="bg-white border-b border-gray-200">


    <div class="max-w-7xl mx-auto space-y-4 px-4 lg:px-8 py-4 flex flex-col sm:flex-row sm:items-center sm:justify-between lg:gap-4">

        <div>
            <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-800">
                <?= $heading ?>
            </h1>
            <?php if ($_SERVER['REQUEST_URI'] === '/dashboard') : ?>
                <p class="text-sm text-gray-500">Welcome back, <?= $_SESSION['name'] ?? '' ?> 👋</p>
            <?php endif; ?>
        </div>

        <?php if ($_SESSION['id'] ?? false) : ?>
            <div class="flex gap-3">
                <a href="/capstone/create"
                    class="bg-blue-900 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-800 transition">
                    + Upload Project
                </a>

                <a href="/capstone/my_projects"
                    class="border border-gray-300 px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-100 transition">
                    My Projects
                </a>
            </div>
        <?php endif; ?>
    </div>
</header>