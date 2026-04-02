<?php require BASE_PATH . "views/partials/head.php" ?>
<?php require BASE_PATH . "views/partials/nav.php" ?>

<main class="grid min-h-full place-items-center bg-slate-50 px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
        <p class="text-base font-semibold text-blue-700">500</p>

        <h1 class="mt-4 text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">
            Server error
        </h1>

        <p class="mt-6 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">
            Sorry, something went wrong on our end. Please try again later.
        </p>

        <div class="mt-10 flex items-center justify-center gap-x-6">

            <a href="/"
                class="rounded-md bg-blue-900 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500">
                Go back home
            </a>

            <a href="/contact"
                class="text-sm font-semibold text-gray-700 hover:text-blue-700">
                Contact support <span aria-hidden="true">&rarr;</span>
            </a>

        </div>
    </div>
</main>
<?php require BASE_PATH . "views/partials/footer.php" ?>