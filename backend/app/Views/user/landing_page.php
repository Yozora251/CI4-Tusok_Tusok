<?php
// Landing page for Tusok-Tusok
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tusok-Tusok Street Foods</title>
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

    <!-- HEADER -->
    <?= view('components/header') ?>

    <!-- HERO SECTION -->
    <section class="relative w-full h-[90vh] bg-cover bg-center flex items-center justify-center"
        style="background-image: url('https://i.pinimg.com/1200x/cc/22/d1/cc22d1deb7d96e1c4bb43360c49638cd.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="relative text-center z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-[#4cc9f0] mb-3">Tusok-Tusok at Night</h1>
            <p class="text-[#e6edf3] text-lg">Where the streets come alive with the aroma of freshly grilled street food.</p>
        </div>
    </section>

    <!-- MENU SECTION -->
    <section id="menu" class="bg-[#0d1117]/90 backdrop-blur-sm py-20 text-white">
        <div class="mx-auto px-4 max-w-6xl text-center">
            <h2 class="mb-12 font-bold text-[#4cc9f0] text-4xl">Our Signature Street Foods</h2>

            <div class="grid gap-8 md:grid-cols-3">

                <?= view('components/cards/landing_card', [
                    "title" => "Fishball",
                    "desc" => "Crispy golden balls of fish — the ultimate tusok-tusok classic!",
                    "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTipxa_NalTjt7pQ9Ffcl-2gH4iBWBt1cDgFA&s",
                    "link" => "#",
                    "buttonView" => view('components/buttons/button_primary', [
                        'text' => 'View Details',
                        'link' => '#'
                    ])
                ]) ?>

                <?= view('components/cards/landing_card', [
                    "title" => "Chicken Balls",
                    "desc" => "Juicy and flavorful, perfect with our sweet-spicy dipping sauce.",
                    "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-4t_DkMraRyumricILW6Wb4TptCTIq5o1Ig&s",
                    "link" => "#",
                    "buttonView" => view('components/buttons/button_primary', [
                        'text' => 'View Details',
                        'link' => '#'
                    ])
                ]) ?>

                <?= view('components/cards/landing_card', [
                    "title" => "Squid Ball",
                    "desc" => "Soft and chewy bites of squid — every dip is an explosion of flavor.",
                    "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqcT3LsHowTBaqqCx5uTOx3WEnC3yuWBkprA&s",
                    "link" => "#",
                    "buttonView" => view('components/buttons/button_primary', [
                        'text' => 'View Details',
                        'link' => '#'
                    ])
                ]) ?>


            </div>
        </div>
    </section>


    <!-- CTA Section -->
    <?= view('components/cta_page', [
        'heading' => 'Ready to Taste the Best Street Food?',
        'sub' => 'Join the Tusok-Tusok community today and explore the flavor-packed streets of our signature street foods.',
        'primary' => [
            'text' => 'Order Now',
            'link' => '/order_page'
        ],
        'secondary' => [
            'text' => 'Learn More',
            'link' => '/about_page'
        ]
    ]) ?>


    <!-- FOOTER -->
    <?= view('components/footer') ?>

</body>

</html>