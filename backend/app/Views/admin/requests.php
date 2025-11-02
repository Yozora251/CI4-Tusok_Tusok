<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Requests | Tusok-Tusok Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0d1117] text-[#e6edf3] flex min-h-screen">

    <?= view('components/sidebar') ?>

    <main class="flex-1 p-10">
        <h2 class="text-3xl font-bold text-[#4cc9f0] mb-6">Requests</h2>

        <div class="bg-[#161b22] p-6 rounded-xl shadow-lg space-y-4">
            <div class="border border-gray-700 rounded-xl p-4">
                <h3 class="text-lg font-semibold">Supplier Request</h3>
                <p class="text-gray-400 text-sm">Restock Chicken Balls - 50 packs</p>
                <div class="flex justify-end space-x-3 mt-3">
                    <button class="bg-green-500 text-black px-3 py-1 rounded">Approve</button>
                    <button class="bg-red-500 text-black px-3 py-1 rounded">Reject</button>
                </div>
            </div>

            <div class="border border-gray-700 rounded-xl p-4">
                <h3 class="text-lg font-semibold">Customer Feedback</h3>
                <p class="text-gray-400 text-sm">“Loved the new sauce combo!” — @foodiePH</p>
            </div>
        </div>
    </main>
</body>

</html>