<?php
$cards = [
    [
        "title" => "Fishball",
        "desc" => "Crispy golden balls of fish — the ultimate tusok-tusok classic!",
        "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTipxa_NalTjt7pQ9Ffcl-2gH4iBWBt1cDgFA&s",
        "link" => "#"
    ],
    [
        "title" => "Chicken Balls",
        "desc" => "Juicy and flavorful, perfect with our sweet-spicy dipping sauce.",
        "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-4t_DkMraRyumricILW6Wb4TptCTIq5o1Ig&s",
        "link" => "#"
    ],
    [
        "title" => "Squid Ball",
        "desc" => "Soft and chewy bites of squid — every dip is an explosion of flavor.",
        "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqcT3LsHowTBaqqCx5uTOx3WEnC3yuWBkprA&s",
        "link" => "#"
    ],
];
?>

<section id="menu" class="bg-[#0d1117]/90 backdrop-blur-sm py-20 text-white">
    <div class="mx-auto px-4 max-w-6xl text-center">
        <h2 class="mb-12 font-bold text-[#4cc9f0] text-4xl">Our Signature Street Foods</h2>

        <div class="grid gap-8 md:grid-cols-3">
            <?php foreach ($cards as $card): ?>
                <div class="bg-[#161b22] hover:bg-[#1e2633] shadow-md rounded-2xl overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-[#4cc9f0]/30">
                    <img src="<?= htmlspecialchars($card['img']) ?>" alt="<?= htmlspecialchars($card['title']) ?>" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-[#4cc9f0] mb-2"><?= htmlspecialchars($card['title']) ?></h3>
                        <p class="text-gray-300 mb-4"><?= htmlspecialchars($card['desc']) ?></p>
                        <a href="<?= htmlspecialchars($card['link']) ?>"
                            class="inline-block bg-[#4cc9f0] hover:bg-[#3a86ff] text-[#0d1117] px-4 py-2 rounded-full font-semibold text-sm transition">
                            View Details
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>