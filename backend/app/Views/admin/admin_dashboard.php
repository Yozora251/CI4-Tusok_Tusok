<?php
// Simple Admin Dashboard for Tusok-Tusok
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard | Tusok-Tusok</title>
    <link rel="shortcut icon" type="image/png" href="/assets/tusokicon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#0d1117] text-[#e6edf3]">


    <!-- DASHBOARD LAYOUT -->
    <div class="flex h-screen">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-[#161b22] border-r border-[#30363d] flex flex-col">
            <div class="p-6 text-xl font-bold text-[#4cc9f0]">Admin Panel</div>
            <nav class="flex-1 px-4 space-y-2">
                <a href="#" class="block py-2 px-3 rounded-lg hover:bg-[#1f2937] transition">📊 Dashboard</a>
                <a href="#" class="block py-2 px-3 rounded-lg hover:bg-[#1f2937] transition">🍢 Menu Items</a>
                <a href="#" class="block py-2 px-3 rounded-lg hover:bg-[#1f2937] transition">🛒 Orders</a>
                <a href="#" class="block py-2 px-3 rounded-lg hover:bg-[#1f2937] transition">👥 Users</a>
                <a href="#" class="block py-2 px-3 rounded-lg hover:bg-[#1f2937] transition">⚙️ Settings</a>
            </nav>
            <div class="p-4 border-t border-[#30363d]">
                <a href="#" class="block py-2 px-3 rounded-lg bg-[#4cc9f0] text-black font-semibold text-center hover:bg-[#3aa9d9] transition">Logout</a>
            </div>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-[#4cc9f0]">Dashboard Overview</h1>
                <div class="flex items-center space-x-3">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Admin"
                        class="w-10 h-10 rounded-full border border-[#4cc9f0]" />
                    <span class="font-medium">Admin</span>
                </div>
            </div>

            <!-- STAT CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <?= view('components/cards/landing_card', [
                    "title" => "Total Orders",
                    "desc" => "1,245 this month",
                    "img" => "https://cdn-icons-png.flaticon.com/512/481/481087.png",
                    "link" => "#",
                    "buttonView" => view('components/buttons/button_primary', [
                        'text' => 'View Orders',
                        'link' => '#'
                    ])
                ]) ?>

                <?= view('components/cards/landing_card', [
                    "title" => "Revenue",
                    "desc" => "₱58,900 earned",
                    "img" => "https://cdn-icons-png.flaticon.com/512/2331/2331941.png",
                    "link" => "#",
                    "buttonView" => view('components/buttons/button_primary', [
                        'text' => 'View Report',
                        'link' => '#'
                    ])
                ]) ?>

                <?= view('components/cards/landing_card', [
                    "title" => "New Users",
                    "desc" => "326 new signups",
                    "img" => "https://cdn-icons-png.flaticon.com/512/1077/1077114.png",
                    "link" => "#",
                    "buttonView" => view('components/buttons/button_primary', [
                        'text' => 'View Users',
                        'link' => '#'
                    ])
                ]) ?>
            </div>

            <!-- TABLE -->
            <div class="bg-[#161b22] border border-[#30363d] rounded-lg shadow-md overflow-hidden">
                <div class="px-6 py-4 border-b border-[#30363d] flex justify-between items-center">
                    <h2 class="text-xl font-semibold">Recent Orders</h2>
                    <a href="#" class="text-[#4cc9f0] hover:underline text-sm">View All</a>
                </div>
                <table class="w-full text-left">
                    <thead class="bg-[#1f2937] text-[#4cc9f0]">
                        <tr>
                            <th class="px-6 py-3">Order ID</th>
                            <th class="px-6 py-3">Customer</th>
                            <th class="px-6 py-3">Item</th>
                            <th class="px-6 py-3">Total</th>
                            <th class="px-6 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-[#30363d] hover:bg-[#21262d] transition">
                            <td class="px-6 py-3">#ORD-1001</td>
                            <td class="px-6 py-3">Juan Dela Cruz</td>
                            <td class="px-6 py-3">Fishball Combo</td>
                            <td class="px-6 py-3">₱120</td>
                            <td class="px-6 py-3 text-green-400">Completed</td>
                        </tr>
                        <tr class="border-t border-[#30363d] hover:bg-[#21262d] transition">
                            <td class="px-6 py-3">#ORD-1002</td>
                            <td class="px-6 py-3">Maria Santos</td>
                            <td class="px-6 py-3">Squid Balls</td>
                            <td class="px-6 py-3">₱80</td>
                            <td class="px-6 py-3 text-yellow-400">Pending</td>
                        </tr>
                        <tr class="border-t border-[#30363d] hover:bg-[#21262d] transition">
                            <td class="px-6 py-3">#ORD-1003</td>
                            <td class="px-6 py-3">Pedro Lopez</td>
                            <td class="px-6 py-3">Chicken Balls</td>
                            <td class="px-6 py-3">₱100</td>
                            <td class="px-6 py-3 text-red-400">Cancelled</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- FOOTER -->
    <?= view('components/footer') ?>

</body>

</html>