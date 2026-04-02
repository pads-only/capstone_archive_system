<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/banner.php" ?>

<main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <!-- SAMPLE CARD -->
    <div class="bg-white flex min-h-full flex flex-col lg:flex-row rounded-xl shadow-sm border border-gray-200 p-6">
        <!-- LEFT SIDE: FORM -->
        <div class="flex flex-1 items-center justify-start sm:px-6 lg:px-8">
            <div class="w-full max-w-md space-y-6">
                <div>
                    <p class="mt-2 text-sm text-gray-500">
                        Have questions? Send us a message and we’ll get back to you soon.
                    </p>
                </div>

                <form class="space-y-5">

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <input type="text"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Juan Dela Cruz" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                        <input type="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="you@example.com" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea rows="5"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Write your message here..."></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-900 text-white py-2 rounded-md font-medium hover:bg-blue-800 transition">
                        Send Message
                    </button>

                </form>
            </div>
        </div>

        <!-- RIGHT SIDE: CONTACT INFO / IMAGE -->
        <div class="hidden lg:flex lg:w-1/2 bg-blue-900 text-white items-center justify-center p-10">
            <div class="max-w-md text-center space-y-6">
                <h2 class="text-3xl font-bold">Get in Touch</h2>
                <p class="text-blue-100">
                    You can also reach us via email, phone, or visit our campus office.
                </p>

                <div class="space-y-3 text-left text-blue-100">
                    <p><strong>Email:</strong> info@capstonearchive.edu.ph</p>
                    <p><strong>Phone:</strong> +63 912 345 6789</p>
                    <p><strong>Address:</strong> 123 Academic Lane, Sabang, Philippines</p>
                </div>

            </div>
        </div>
    </div>

    </ma>

    <?php require "partials/footer.php" ?>