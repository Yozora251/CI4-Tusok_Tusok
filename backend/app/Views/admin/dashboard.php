<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Tusok-Tusok</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#0d1117] text-[#e6edf3] flex">

    <?= view('components/sidebar') ?>

    <main class="flex-1 p-10">
        <h1 class="text-3xl font-bold text-[#4cc9f0] mb-8">Dashboard Overview</h1>

        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <div class="bg-[#161b22] p-6 rounded-lg shadow hover:bg-[#1e2633] transition">
                <h3 class="text-lg font-semibold text-[#4cc9f0] mb-2">Total Sales</h3>
                <p class="text-3xl font-bold">₱12,540</p>
                <p class="text-sm text-gray-400">+12% from last week</p>
            </div>

            <div class="bg-[#161b22] p-6 rounded-lg shadow hover:bg-[#1e2633] transition">
                <h3 class="text-lg font-semibold text-[#4cc9f0] mb-2">Pending Requests</h3>
                <p class="text-3xl font-bold">8</p>
                <p class="text-sm text-gray-400">2 new today</p>
            </div>

            <div class="bg-[#161b22] p-6 rounded-lg shadow hover:bg-[#1e2633] transition">
                <h3 class="text-lg font-semibold text-[#4cc9f0] mb-2">Active Accounts</h3>
                <p class="text-3xl font-bold">24</p>
                <p class="text-sm text-gray-400">5 new this week</p>
            </div>
        </div>

        <h2 class="text-2xl font-semibold mb-6">Recent Menu Highlights</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <?= view('components/cards/landing_card', [
                "title" => "Fishball",
                "desc" => "Our all-time bestseller and classic favorite.",
                "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTipxa_NalTjt7pQ9Ffcl-2gH4iBWBt1cDgFA&s",
                "link" => "#"
            ]) ?>

            <?= view('components/cards/landing_card', [
                "title" => "Squidball",
                "desc" => "Soft and chewy bites of squid — every dip is an explosion of flavor.",
                "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqcT3LsHowTBaqqCx5uTOx3WEnC3yuWBkprA&s",
                "link" => "#"
            ]) ?>

            <?= view('components/cards/landing_card', [
                "title" => "Calamares",
                "desc" => "Golden squid rings with tangy vinegar dip.",
                "img" => "https://i0.wp.com/www.russianfilipinokitchen.com/wp-content/uploads/2015/04/crispy-fried-calamari-01.jpg?w=582",
                "link" => "#"
            ]) ?>
        </div>
    </main>
</body>

</html>