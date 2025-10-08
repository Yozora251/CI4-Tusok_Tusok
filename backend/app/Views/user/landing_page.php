<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tusok-Tusok Street Foods</title>
    <link rel="shortcut icon" type="image/png" href="/assets/tusokicon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#0d1117] text-[#e6edf3]">

    <!-- HEADER -->
    <?= view('components/header') ?>

    <!-- background Section -->
    <section class="relative w-full h-[80vh] bg-cover bg-center flex items-center justify-center"
        style="background-image: url('https://i.pinimg.com/1200x/cc/22/d1/cc22d1deb7d96e1c4bb43360c49638cd.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="relative text-center z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-[#4cc9f0] mb-3">Tusok-Tusok at Night</h1>
            <p class="text-[#e6edf3] text-lg">Where the streets come alive with the aroma of freshly grilled street food.</p>
        </div>
    </section>

    <!-- MENU -->
    <?= view('components/cards/landing_card') ?>

    <?= view('components/footer') ?>

</body>

</html>