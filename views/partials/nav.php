<!-- NAVBAR -->

<nav class="bg-white border-b border-gray-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">

            <!-- LEFT -->
            <div class="flex items-center gap-4">
                <a href="/">
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=blue&shade=600"
                        class="size-8" />
                </a>

                <div class="hidden md:flex space-x-2">
                    <a href="/" class="<?= parse_url($_SERVER['REQUEST_URI'])['path'] === '/' ? 'bg-blue-900 text-white' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-700' ?> px-3 py-2 rounded-md text-sm">Home</a>

                    <?php if ($_SESSION['id'] ?? false) : ?>
                        <a href="/dashboard" class="<?= parse_url($_SERVER['REQUEST_URI'])['path'] === '/dashboard' ? 'bg-blue-900 text-white' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-700' ?> px-3 py-2 rounded-md text-sm">Dashboard</a>
                    <?php endif; ?>
                    <a href="/capstone" class="<?= parse_url($_SERVER['REQUEST_URI'])['path'] === '/capstone' || parse_url($_SERVER['REQUEST_URI'])['path'] === '/capstone/show' || parse_url($_SERVER['REQUEST_URI'])['path'] === '/capstone/create' || parse_url($_SERVER['REQUEST_URI'])['path'] === '/capstone/my_projects' || parse_url($_SERVER['REQUEST_URI'])['path'] === '/capstone/edit' ? 'bg-blue-900 text-white' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-700' ?> px-3 py-2 rounded-md text-sm">Capstone</a>

                    <a href="/about" class="<?= parse_url($_SERVER['REQUEST_URI'])['path'] === '/about' ? 'bg-blue-900 text-white' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-700' ?> px-3 py-2 rounded-md text-sm">About us</a>

                    <a href="/contact" class="<?= parse_url($_SERVER['REQUEST_URI'])['path'] === '/contact' ? 'bg-blue-900 text-white' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-700' ?> px-3 py-2 rounded-md text-sm">Contact us</a>
                </div>
            </div>


            <!-- RIGHT -->
            <div class="flex items-center gap-3 relative">
                <?php if (isset($_SESSION['id'])) { ?>

                    <!-- 🔔 NOTIFICATION (FIXED ICON) -->
                    <button class="p-1 text-gray-500 hover:text-blue-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75V9
                a6 6 0 10-12 0v.75a8.967 8.967 0 01-2.311 6.022
                c1.733.64 3.56 1.085 5.454 1.31
                m5.714 0a24.255 24.255 0 01-5.714 0
                m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>

                    <!-- 👤 PROFILE -->
                    <div class="relative">
                        <button id="profileBtn">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e"
                                class="w-8 h-8 rounded-full border border-gray-300" />
                        </button>

                        <!-- DROPDOWN -->
                        <div id="profileMenu"
                            class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">

                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">
                                Your Profile
                            </a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">
                                Settings
                            </a>
                            <form action="/logout" class="block w-full" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="block w-full text-start px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">
                                    Logout
                                </button>
                            </form>

                        </div>
                    </div>
                <?php } else { ?>
                    <!-- ☰ MOBILE -->
                    <div class=" lg:flex lg:flex-1 lg:justify-end">
                        <a href="/login" class="text-sm/6 font-semibold text-gray-600">Log in <span aria-hidden="true">&rarr;</span></a>
                    </div>
                <?php } ?>
                <button id="menuBtn" class="md:hidden p-2 text-gray-500">
                    ☰
                </button>
            </div>

        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-gray-200">
        <div class="px-4 py-3 space-y-1">
            <a href="/" class="<?= parse_url($_SERVER['REQUEST_URI'])['path'] === '/' ? 'bg-blue-900 text-white' : 'text-gray-600 hover:bg-blue-50' ?> block px-3 py-2 rounded-md">Home</a>

            <?php if ($_SESSION['id'] ?? false) : ?>
                <a href="/dashboard" class="<?= parse_url($_SERVER['REQUEST_URI'])['path'] === '/dashboard' ? 'bg-blue-900 text-white' : 'text-gray-600 hover:bg-blue-50' ?> block px-3 py-2 rounded-md">Dashboard</a>
            <?php endif; ?>

            <a href="/capstone" class="<?= parse_url($_SERVER['REQUEST_URI'])['path'] === '/capstone' || parse_url($_SERVER['REQUEST_URI'])['path'] === '/capstone/show' ? 'bg-blue-900 text-white ' : 'text-gray-600 hover:bg-blue-50' ?> block  px-3 py-2 rounded-md">Capstone</a>

            <a href="/about" class="<?= parse_url($_SERVER['REQUEST_URI'])['path'] === '/about' ? 'bg-blue-900 text-white ' : 'text-gray-600 hover:bg-blue-50' ?> block  px-3 py-2 rounded-md">About us</a>

            <a href="/contact" class="<?= parse_url($_SERVER['REQUEST_URI'])['path'] === '/contact' ? 'bg-blue-900 text-white ' : 'text-gray-600 hover:bg-blue-50' ?> block  px-3 py-2 rounded-md">Contact us</a>

        </div>
    </div>
</nav>