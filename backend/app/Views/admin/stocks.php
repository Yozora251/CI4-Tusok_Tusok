<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stocks | Tusok-Tusok Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#0d1117] text-[#e6edf3] flex">

    <?= view('components/sidebar') ?>

    <main class="flex-1 p-10">
        <h1 class="text-3xl font-bold text-[#4cc9f0] mb-8">Stocks Management</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-[#161b22] rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-[#1e2633] text-[#4cc9f0]">
                        <th class="py-3 px-4 text-left">Item</th>
                        <th class="py-3 px-4 text-left">Category</th>
                        <th class="py-3 px-4 text-left">Quantity</th>
                        <th class="py-3 px-4 text-left">Status</th>
                        <th class="py-3 px-4 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-gray-700 hover:bg-[#1a1f2a] transition">
                        <td class="py-3 px-4">Fishball</td>
                        <td class="py-3 px-4">Frozen Goods</td>
                        <td class="py-3 px-4">120 packs</td>
                        <td class="py-3 px-4 text-green-400">In Stock</td>
                        <td class="py-3 px-4">
                            <button class="bg-[#4cc9f0] text-black px-3 py-1 rounded hover:bg-[#3bb0d9] transition">Edit</button>
                        </td>
                    </tr>
                    <tr class="border-t border-gray-700 hover:bg-[#1a1f2a] transition">
                        <td class="py-3 px-4">Tokneneng</td>
                        <td class="py-3 px-4">Eggs</td>
                        <td class="py-3 px-4">45 trays</td>
                        <td class="py-3 px-4 text-yellow-400">Low Stock</td>
                        <td class="py-3 px-4">
                            <button class="bg-[#4cc9f0] text-black px-3 py-1 rounded hover:bg-[#3bb0d9] transition">Edit</button>
                        </td>
                    </tr>
                    <tr class="border-t border-gray-700 hover:bg-[#1a1f2a] transition">
                        <td class="py-3 px-4">Calamares</td>
                        <td class="py-3 px-4">Seafood</td>
                        <td class="py-3 px-4">20 kg</td>
                        <td class="py-3 px-4 text-red-400">Out of Stock</td>
                        <td class="py-3 px-4">
                            <button class="bg-[#4cc9f0] text-black px-3 py-1 rounded hover:bg-[#3bb0d9] transition">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h2 class="text-2xl font-semibold mt-12 mb-6">Popular Items</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <?= view('components/cards/landing_card', [
                "title" => "Fishball",
                "desc" => "Always in high demand during peak hours.",
                "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTipxa_NalTjt7pQ9Ffcl-2gH4iBWBt1cDgFA&s",
                "link" => "#"
            ]) ?>

            <?= view('components/cards/landing_card', [
                "title" => "Tokneneng",
                "desc" => "Keep extra stock — hot seller in the evenings!",
                "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSHxPghN6jl306YAJdQOgo0KiWhxKjbAorxQ&s",
                "link" => "#"
            ]) ?>

            <?= view('components/cards/landing_card', [
                "title" => "Gulaman",
                "desc" => "Customers love it after a tusok feast.",
                "img" => "https://a0.anyrgb.com/pngimg/884/644/gulaman-carbonated-drink-black-russian-cuba-libre-coca-cola-slush-orange-soft-drink-carbonated-water-sonic-drivein-soda.png",
                "link" => "#"
            ]) ?>
        </div>
    </main>
</body>

</html>