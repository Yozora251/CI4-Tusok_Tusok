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

<body class="bg-[#0d1117] text-[#e6edf3] flex flex-col min-h-screen">

    <!-- Header -->
    <?= view('components/header') ?>

    <!-- Main -->
    <main class="flex-grow max-w-7xl mx-auto px-6 py-12">

        <!-- Hero Section -->
        <header class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-[#4cc9f0] mb-3">Tusok-Tusok Mood Board</h1>
            <p class="text-[#e6edf3]/90 text-lg">Explore the visual identity and design system for Tusok-Tusok web application.</p>
        </header>

        <!-- Color System -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-[#4cc9f0] mb-6">Color System</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6">
                <?php
                $colors = [
                    ['hex' => '#0D1117', 'name' => 'Background'],
                    ['hex' => '#161B22', 'name' => 'Card Surface'],
                    ['hex' => '#4CC9F0', 'name' => 'Accent Blue'],
                    ['hex' => '#3A86FF', 'name' => 'Primary'],
                    ['hex' => '#E6EDF3', 'name' => 'Text Color'],
                ];
                foreach ($colors as $color): ?>
                    <div class="text-center">
                        <div class="h-12 w-full rounded-md mb-2" style="background-color: <?= $color['hex'] ?>"></div>
                        <p><?= $color['hex'] ?> (<?= $color['name'] ?>)</p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Typography -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-[#4cc9f0] mb-6">Typography</h2>
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <p class="text-gray-400 text-sm">Heading font</p>
                    <p class="font-sample font-semibold">Poppins — "Taste the Street"</p>
                </div>
                <div>
                    <p class="text-gray-400 text-sm">Body font</p>
                    <p class="font-sample">Poppins Regular — "Your everyday tusok-tusok made digital."</p>
                </div>
            </div>
        </section>

        <!-- Buttons -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-[#4cc9f0] mb-4">Buttons</h2>
            <div class="flex flex-wrap gap-4 mb-6">
                <?= view('components/buttons/button_primary', ['text' => 'Primary', 'link' => '#']) ?>
                <?= view('components/buttons/button_secondary', ['text' => 'Secondary', 'link' => '#']) ?>
                <?= view('components/buttons/button_border', ['text' => 'Outline', 'link' => '#']) ?>
                <?= view('components/buttons/button_primary', ['text' => 'Disabled', 'link' => '#', 'disabled' => true]) ?>
            </div>
        </section>

        <!-- Cards -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-[#4cc9f0] mb-6">Card Samples</h2>
            <div class="grid gap-6 md:grid-cols-3">
                <?= view('components/cards/landing_card', [
                    'title' => 'Orders Completed',
                    'excerpt' => '1,254',
                    'image' => null
                ]) ?>
                <?= view('components/cards/landing_card', [
                    'title' => 'Top Seller',
                    'excerpt' => 'Fishball Combo',
                    'image' => null
                ]) ?>
                <?= view('components/cards/roadmap_card', [
                    'title' => 'Customer Review',
                    'description' => '"Best tusok-tusok experience ever!" – Juan Dela Cruz',
                    'status' => 'Featured',
                    'priority' => 'High',
                    'statusClass' => 'bg-[#4cc9f0]'
                ]) ?>
            </div>
        </section>

        <!-- Logos -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-[#4cc9f0] mb-6">Logos</h2>
            <div class="grid gap-8 md:grid-cols-2">
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
    <footer class="mt-auto">
        <?= view('components/footer') ?>
    </footer>

</body>

</html>