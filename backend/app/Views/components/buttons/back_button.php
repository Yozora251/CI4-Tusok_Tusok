<?php
$backButton = [
    "href" => "/",
    "label" => "← Back Home",
    "class" => "bg-[#4cc9f0] text-[#0d1117] font-semibold rounded-lg hover:bg-[#3a86ff] hover:text-white transition"
];
?>

<a href="<?= htmlspecialchars($backButton['href']) ?>"
    class="<?= htmlspecialchars($backButton['class']) ?> px-5 py-2 inline-block mb-6 transition-transform hover:scale-105">
    <?= htmlspecialchars($backButton['label']) ?>
</a>