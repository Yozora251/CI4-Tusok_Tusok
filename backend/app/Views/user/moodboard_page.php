<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tusok-Tusok | Mood Board</title>
    <link rel="shortcut icon" type="image/png" href="/assets/tusokicon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#0d1117] text-[#e6edf3]">

    <main class="p-10">

        <?= view('components/buttons/back_button.php') ?>


        <h1 class="text-3xl font-bold text-[#4cc9f0] mb-3">Tusok-Tusok Mood Board</h1>
        <p class="text-[#e6edf3]/90">Visual identity and design system for the Tusok-Tusok web application.</p>

        <div class="border-b border-[#4cc9f0] my-8"></div>

        <!-- Color System -->
        <section>
            <h2 class="text-2xl font-bold text-[#4cc9f0]">Color System</h2>
            <p>Main palette featuring shades of dark blue, cyan, and white.</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6 mt-5">
                <div>
                    <div class="h-12 rounded-md mb-2 bg-[#0d1117]"></div>
                    <p>#0D1117 (Background)</p>
                </div>
                <div>
                    <div class="h-12 rounded-md mb-2 bg-[#161b22]"></div>
                    <p>#161B22 (Card Surface)</p>
                </div>
                <div>
                    <div class="h-12 rounded-md mb-2 bg-[#4cc9f0]"></div>
                    <p>#4CC9F0 (Accent Blue)</p>
                </div>
                <div>
                    <div class="h-12 rounded-md mb-2 bg-[#3a86ff]"></div>
                    <p>#3A86FF (Primary)</p>
                </div>
                <div>
                    <div class="h-12 rounded-md mb-2 bg-[#e6edf3]"></div>
                    <p>#E6EDF3 (Text Color)</p>
                </div>
            </div>
        </section>

        <div class="border-b border-[#4cc9f0] my-8"></div>

        <!-- Typography -->
        <section>
            <h2 class="text-2xl font-bold text-[#4cc9f0] mb-2">Typography</h2>
            <p><strong>Heading font:</strong> Poppins — <span class="text-[#4cc9f0]">"Taste the Street"</span></p>
            <p><strong>Body font:</strong> Poppins Regular — "Your everyday tusok-tusok made digital."</p>
        </section>

        <div class="border-b border-[#4cc9f0] my-8"></div>

        <!-- Buttons -->
        <section>
            <h2 class="text-2xl font-bold text-[#4cc9f0] mb-3">Buttons</h2>
            <div class="mb-5">
                <p class="mb-2">Light Mode</p>
                <button class="bg-[#3a86ff] text-white px-4 py-2 rounded-md mr-2">Primary</button>
                <button class="bg-[#4cc9f0] text-[#0d1117] px-4 py-2 rounded-md mr-2">Secondary</button>
                <button class="border border-white px-4 py-2 rounded-md mr-2">Outline</button>
                <button class="bg-gray-600 text-gray-300 px-4 py-2 rounded-md cursor-not-allowed" disabled>Disabled</button>
            </div>
            <div>
                <p class="mb-2">Dark Mode</p>
                <button class="bg-[#4cc9f0] text-[#0d1117] px-4 py-2 rounded-md mr-2">Primary</button>
                <button class="bg-[#3a86ff] text-white px-4 py-2 rounded-md mr-2">Secondary</button>
                <button class="border border-[#4cc9f0] text-[#4cc9f0] px-4 py-2 rounded-md mr-2">Outline</button>
                <button class="bg-gray-700 text-gray-400 px-4 py-2 rounded-md cursor-not-allowed" disabled>Disabled</button>
            </div>
        </section>

        <div class="border-b border-[#4cc9f0] my-8"></div>

        <!-- Card Samples -->
        <section>
            <h2 class="text-2xl font-bold text-[#4cc9f0] mb-3">Card Samples</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-[#161b22] border border-[#4cc9f0] rounded-lg p-5">
                    <h4 class="font-semibold text-lg mb-2">Orders Completed</h4>
                    <p class="text-xl">1,254</p>
                    <a href="#" class="text-[#4cc9f0] mt-2 inline-block">View Details</a>
                </div>
                <div class="bg-[#161b22] border border-[#4cc9f0] rounded-lg p-5">
                    <h4 class="font-semibold text-lg mb-2">Top Seller</h4>
                    <p>Fishball Combo</p>
                    <a href="#" class="text-[#4cc9f0] mt-2 inline-block">View Details</a>
                </div>
                <div class="bg-[#161b22] border border-[#4cc9f0] rounded-lg p-5">
                    <h4 class="font-semibold text-lg mb-2">Customer Review</h4>
                    <p>"Best tusok-tusok experience ever!"</p>
                    <small>– Juan Dela Cruz</small>
                </div>
            </div>
        </section>

        <div class="border-b border-[#4cc9f0] my-8"></div>

        <!-- Logos -->
        <section>
            <h2 class="text-2xl font-bold text-[#4cc9f0] mb-3">Logos</h2>
            <div class="flex flex-wrap gap-8 mt-4">
                <div class="text-center">
                    <img src="/assets/circle.png" alt="Circle Logo" class="w-32 rounded-lg shadow-lg shadow-[#4cc9f0]/50 mx-auto mb-2">
                    <p>Main Logo – Circle</p>
                </div>
                <div class="text-center">
                    <img src="/assets/square.png" alt="Square Logo" class="w-32 rounded-lg shadow-lg shadow-[#4cc9f0]/50 mx-auto mb-2">
                    <p>Main Logo – Square</p>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?= view('components/footer') ?>

</body>

</html>