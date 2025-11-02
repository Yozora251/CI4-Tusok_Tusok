<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tusok-Tusok | Roadmap</title>
    <link rel="shortcut icon" type="image/png" href="/assets/tusokicon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#0d1117] text-[#e6edf3] flex flex-col min-h-screen">

    <!-- Header -->
    <?= view('components/header') ?>

    <!-- Main Content Wrapper -->
    <main class="flex-grow p-10 max-w-7xl mx-auto">

        <!-- Hero Section -->
        <section class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-[#4cc9f0] mb-3">Tusok-Tusok Roadmap</h1>
            <p class="text-[#e6edf3]/90 text-lg">See what’s in progress, planned, and completed for our Tusok-Tusok platform.</p>
        </section>

        <!-- In Progress & Planned -->
        <section>
            <h2 class="text-2xl font-bold text-[#4cc9f0] mb-8 text-center">In Progress & Planned</h2>
            <div class="grid gap-8 md:grid-cols-2">
                <?= view('components/cards/roadmap_card', [
                    "title" => "User Management",
                    "description" => "Manage accounts for admins and customers.",
                    "status" => "In Progress",
                    "priority" => "High",
                    "statusClass" => "bg-[#ffb84c]"
                ]) ?>

                <?= view('components/cards/roadmap_card', [
                    "title" => "Menu Management",
                    "description" => "Add or update the menu like fishballs, kikiam, and tokneneng.",
                    "status" => "Planned",
                    "priority" => "Medium",
                    "statusClass" => "bg-[#4cc9f0]"
                ]) ?>

                <?= view('components/cards/roadmap_card', [
                    "title" => "Order Management",
                    "description" => "Process and track customer orders efficiently.",
                    "status" => "Planned",
                    "priority" => "Medium",
                    "statusClass" => "bg-[#4cc9f0]"
                ]) ?>

                <?= view('components/cards/roadmap_card', [
                    "title" => "Dashboard Overview",
                    "description" => "View sales insights and popular street food stats.",
                    "status" => "Backlog",
                    "priority" => "Low",
                    "statusClass" => "bg-gray-400"
                ]) ?>

                <?= view('components/cards/roadmap_card', [
                    "title" => "Customer Feedback",
                    "description" => "Allow customers to share feedback on their tusok-tusok experience.",
                    "status" => "Future",
                    "priority" => "Low",
                    "statusClass" => "bg-gray-400"
                ]) ?>
            </div>
        </section>

        <!-- Divider -->
        <div class="border-t border-[#4cc9f0] my-16 w-[80%] mx-auto"></div>

        <!-- Completed Section -->
        <section>
            <h2 class="text-2xl font-bold text-[#4cc9f0] mb-8 text-center">Completed</h2>
            <div class="flex flex-wrap justify-center gap-8">
                <?= view('components/cards/roadmap_card', [
                    "title" => "Authentication System",
                    "description" => "Secure login and signup system.",
                    "status" => "Completed",
                    "priority" => "High",
                    "statusClass" => "bg-[#16db65]"
                ]) ?>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?= view('components/footer') ?>

</body>

</html>