<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full text-gray-800">

    <div class="flex h-full">

        <!-- SIDEBAR -->
        <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-40 w-64 bg-blue-900 text-white transform -translate-x-full md:translate-x-0 transition-transform duration-200">

            <div class="p-6 font-bold text-lg border-b border-blue-800">
                Admin Panel
            </div>

            <nav class="p-4 space-y-2 text-sm">
                <a href="#" class="block px-3 py-2 rounded-md bg-blue-800">Dashboard</a>
                <a href="#" class="block px-3 py-2 rounded-md hover:bg-blue-800">Manage Capstones</a>
                <a href="#" class="block px-3 py-2 rounded-md hover:bg-blue-800">Users</a>
                <a href="#" class="block px-3 py-2 rounded-md hover:bg-blue-800">Categories</a>
                <a href="#" class="block px-3 py-2 rounded-md hover:bg-blue-800">Reports</a>
            </nav>

        </aside>

        <!-- MAIN -->
        <div class="flex-1 flex flex-col md:ml-64">

            <!-- HEADER -->
            <header class="bg-white border-b border-gray-200 px-4 py-3 flex items-center justify-between">

                <!-- Mobile Menu Button -->
                <button id="menuBtn" class="md:hidden text-gray-600">
                    ☰
                </button>

                <h1 class="font-semibold text-gray-900">Dashboard</h1>

                <div class="text-sm text-gray-500">
                    Admin
                </div>

            </header>

            <!-- CONTENT -->
            <main class="p-4 sm:p-6 space-y-6">

                <!-- STATS -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

                    <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm">
                        <p class="text-sm text-gray-500">Total Capstones</p>
                        <p class="text-2xl font-bold text-gray-900">120</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm">
                        <p class="text-sm text-gray-500">Users</p>
                        <p class="text-2xl font-bold text-gray-900">45</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm">
                        <p class="text-sm text-gray-500">Categories</p>
                        <p class="text-2xl font-bold text-gray-900">6</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm">
                        <p class="text-sm text-gray-500">This Year</p>
                        <p class="text-2xl font-bold text-gray-900">25</p>
                    </div>

                </div>

                <!-- RECENT CAPSTONES -->
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">

                    <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-gray-900">Recent Uploads</h2>
                        <a href="#" class="text-sm text-blue-700 hover:underline">View all</a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">

                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Author</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Category</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Year</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-100">

                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 text-sm text-gray-900">AI Archive System</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">Juan Dela Cruz</td>
                                    <td class="px-6 py-4">
                                        <span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded">IT</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-700">2025</td>
                                </tr>

                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 text-sm text-gray-900">Smart Attendance</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">Maria Santos</td>
                                    <td class="px-6 py-4">
                                        <span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded">Engineering</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-700">2024</td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                </div>

            </main>

        </div>

    </div>

    <!-- MOBILE SIDEBAR TOGGLE -->
    <script>
        const menuBtn = document.getElementById('menuBtn');
        const sidebar = document.getElementById('sidebar');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>

</body>

</html>