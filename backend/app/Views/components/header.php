<?php
// File: app/Views/components/header.php
// Optional variables:
// $activePage (string) - highlight active page in the nav
$activePage = $activePage ?? '';
?>

<header class="bg-[#0d1b2a] sticky top-0 z-50 flex flex-wrap items-center justify-between px-6 md:px-10 py-4 shadow-lg">
    <!-- Logo -->
    <a href="/" class="flex items-center text-2xl font-extrabold text-[#4cc9f0] no-underline">
        <img src="/assets/circle.png" alt="Tusok-Tusok Logo" class="h-10 w-10 rounded-full mr-3">
        Tusok-Tusok
    </a>

    <!-- Navigation & Actions -->
    <div class="flex flex-wrap items-center gap-4 md:gap-6">
        <!-- Navigation Links -->
        <nav class="flex gap-4 md:gap-6">
            <a href="/moodboard_page"
                class="font-medium transition <?= $activePage === 'moodboard' ? 'text-[#4cc9f0]' : 'text-[#a9bcd0] hover:text-[#4cc9f0]' ?>">
                Moodboard
            </a>
            <a href="/roadmap_page"
                class="font-medium transition <?= $activePage === 'roadmap' ? 'text-[#4cc9f0]' : 'text-[#a9bcd0] hover:text-[#4cc9f0]' ?>">
                Roadmap
            </a>
        </nav>

        <!-- Login / Sign Up Buttons -->
        <div class="flex gap-3">
            <?= view('components/buttons/button_border', [
                'text' => 'Login',
                'link' => '/login_page'
            ]) ?>

            <?= view('components/buttons/button_primary', [
                'text' => 'Sign Up',
                'link' => '/signup_page'
            ]) ?>
        </div>
    </div>
</header>