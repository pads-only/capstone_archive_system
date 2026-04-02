<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/banner.php" ?>

<main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <!-- SAMPLE CARD -->
    <div class="bg-white flex min-h-full flex flex-col lg:flex-row rounded-xl shadow-sm border border-gray-200 p-6">
        <!-- LEFT SIDE: FORM -->
        <div class="min-h-full flex flex-col lg:flex-row">

            <!-- LEFT SIDE: TEXT CONTENT -->
            <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:px-10">
                <div class="max-w-2xl mx-auto space-y-6">
                    <h1 class="text-3xl sm:text-4xl font-bold text-gray-900">About Capstone Archive System</h1>
                    <p class="text-gray-700 text-base sm:text-lg">
                        The Capstone Archive System is designed to organize and showcase student capstone projects
                        from various disciplines. It allows both students and guests to explore, search, and learn
                        from previous projects in a structured and easy-to-use platform.
                    </p>

                    <div class="mt-6 space-y-4">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Our Mission</h2>
                            <p class="text-gray-600 text-base">
                                To provide a centralized digital repository that highlights student innovation and creativity.
                            </p>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Our Vision</h2>
                            <p class="text-gray-600 text-base">
                                To become the leading online reference for academic capstone projects in the Philippines.
                            </p>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Our Values</h2>
                            <p class="text-gray-600 text-base">
                                Collaboration, Innovation, Transparency, and Academic Excellence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE: IMAGE / ILLUSTRATION -->
            <div class="hidden lg:flex lg:w-1/2 bg-blue-900 items-center justify-center p-10">
                <div class="max-w-md text-center space-y-6">
                    <img
                        src="https://images.unsplash.com/photo-1581090700227-1c107269f1f3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400"
                        alt="About Illustration"
                        class="rounded-lg shadow-lg" />
                    <p class="text-blue-100">
                        Explore, learn, and get inspired by the work of talented students.
                    </p>
                </div>
            </div>

        </div>
    </div>
</main>

<?php require "partials/footer.php" ?>