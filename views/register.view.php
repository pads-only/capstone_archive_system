<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>

<body class="h-full">
    <!-- 🔙 BACK BUTTON -->

    <div class="fixed top-4 left-4 lg:flex lg:flex-1 lg:justify-end">
        <a href="/" class="text-md font-semibold text-gray-600"><span aria-hidden="true">&larr;</span> Back</a>
    </div>

    <div class="min-h-full flex flex-col lg:flex-row">

        <!-- LEFT SIDE (FORM) -->
        <div class="flex flex-1 items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
            <div class="w-full max-w-md space-y-6">

                <!-- HEADER -->
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 text-center">
                        Create an Account
                    </h2>
                    <p class="mt-2 text-center text-sm text-gray-500">
                        Register to access the Capstone Archive System
                    </p>
                </div>

                <!-- FORM -->
                <form class="space-y-5" method="POST" action="/register">

                    <!-- NAME -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Full Name
                        </label>
                        <input type="text"
                            name="name"
                            value="<?= $_POST['name'] ?? '' ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Juan Dela Cruz"
                            required />

                        <small class="text-red-400 text-sm"><?= $errors['name'] ?? '' ?></small>
                    </div>

                    <!-- EMAIL -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Email address
                        </label>
                        <input type="email"
                            name="email"
                            value="<?= $_POST['email'] ?? '' ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="you@example.com"
                            required />
                        <small class="text-red-400 text-sm"><?= $errors['email'] ?? '' ?></small>
                    </div>

                    <!-- PASSWORD -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Password
                        </label>
                        <input type="password"
                            name="password"
                            value="<?= $_POST['password'] ?? '' ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="••••••••"
                            required />
                        <small class="text-red-400 text-sm"><?= $errors['password'] ?? '' ?></small>
                    </div>

                    <!-- CONFIRM PASSWORD -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Confirm Password
                        </label>
                        <input type="password"
                            name="confirm_password"
                            value="<?= $_POST['confirm_password'] ?? '' ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="••••••••"
                            required />
                        <small class="text-red-400 text-sm"><?= $errors['password'] ?? '' ?></small>
                    </div>

                    <!-- TERMS -->
                    <div class="flex items-start gap-2 text-sm text-gray-600">
                        <input type="checkbox" class="mt-1 accent-blue-600">
                        <p>
                            I agree to the
                            <a href="#" class="text-blue-700 hover:underline">Terms</a>
                            and
                            <a href="#" class="text-blue-700 hover:underline">Privacy Policy</a>
                        </p>
                    </div>

                    <!-- BUTTON -->
                    <button type="submit"
                        class="w-full bg-blue-900 text-white py-2 rounded-md font-medium hover:bg-blue-800 transition">
                        Create Account
                    </button>

                    <!-- LOGIN LINK -->
                    <p class="text-sm text-center text-gray-600">
                        Already have an account?
                        <a href="/login" class="text-blue-700 hover:underline">Sign in</a>
                    </p>

                </form>
            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="hidden lg:flex lg:w-1/2 bg-blue-900 text-white items-center justify-center p-10">

            <div class="max-w-md text-center space-y-6">
                <h2 class="text-3xl font-bold">
                    Join the Archive System
                </h2>

                <p class="text-blue-100">
                    Create an account to upload, manage, and explore capstone projects.
                    Be part of a centralized academic repository.
                </p>

                <img
                    src="https://images.unsplash.com/photo-1519389950473-47ba0277781c"
                    class="rounded-lg shadow-lg mt-6"
                    alt="Students collaborating" />
            </div>

        </div>

    </div>

</body>

</html>