<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body class="h-full">
    <!-- 🔙 BACK BUTTON -->

    <div class="fixed top-4 left-4 lg:flex lg:flex-1 lg:justify-end">
        <a href="/" class="text-md font-semibold text-gray-600"><span aria-hidden="true">&larr;</span> Back</a>
    </div>

    <div class="min-h-full flex flex-col lg:flex-row">

        <!-- LEFT SIDE (FORM) -->
        <div class="flex flex-1 items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
            <div class="w-full max-w-md space-y-8">

                <!-- HEADER -->
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 text-center">
                        Capstone Archive System
                    </h2>
                    <p class="mt-2 text-center text-sm text-gray-500">
                        Sign in to your account
                    </p>
                </div>

                <!-- FORM -->
                <form class="mt-8 space-y-6" method="POST" action="/login">
                    <div class="<?= isset($errors['general']) ? 'bg-red-50 p-2 w-full border border-red-400 rounded-md' : 'invisible' ?>">
                        <small class="text-red-400 text-sm"><?= $errors['general'] ?? '' ?></small>
                    </div>
                    <!-- EMAIL -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Email address
                        </label>
                        <input type="email"
                            name="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="you@example.com"

                            value="<?= $_POST["email"] ?? "" ?>" />
                        <small class="text-red-400 text-sm"><?= $errors['email'] ?? '' ?></small>
                    </div>

                    <!-- PASSWORD -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Password
                        </label>
                        <input type="password"
                            name="password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="••••••••"

                            value="<?= $_POST["password"] ?? "" ?>" />
                        <small class="text-red-400 text-sm"><?= $errors['password'] ?? '' ?></small>
                    </div>

                    <!-- OPTIONS -->
                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center gap-2 text-gray-600">
                            <input type="checkbox" class="accent-blue-600">
                            Remember me
                        </label>

                        <a href="#" class="text-blue-700 hover:underline">
                            Forgot password?
                        </a>
                    </div>

                    <!-- BUTTON -->
                    <button type="submit"
                        class="w-full bg-blue-900 text-white py-2 rounded-md font-medium hover:bg-blue-800 transition">
                        Sign in
                    </button>
                    <!-- LOGIN LINK -->
                    <p class="text-sm text-center text-gray-600">
                        Not registered yet?
                        <a href="/register" class="text-blue-700 hover:underline">Sign up</a>
                    </p>
                </form>
            </div>
        </div>

        <!-- RIGHT SIDE (IMAGE / INFO) -->
        <div class="hidden lg:flex lg:w-1/2 bg-blue-900 text-white items-center justify-center p-10">

            <div class="max-w-md text-center space-y-6">
                <h2 class="text-3xl font-bold">
                    Welcome Back!
                </h2>

                <p class="text-blue-100">
                    Access and manage capstone projects efficiently. Browse research,
                    upload documents, and explore academic work in one place.
                </p>

                <!-- OPTIONAL IMAGE -->
                <img
                    src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f"
                    class="rounded-lg shadow-lg mt-6"
                    alt="Students working" />
            </div>

        </div>

    </div>

</body>

</html>