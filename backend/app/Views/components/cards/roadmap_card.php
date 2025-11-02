<?php
// File: app/Views/components/cards/roadmap_cards.php
// Variables expected:
// $title, $description, $status, $priority, $statusClass
?>

<div class="bg-[#161b22] border border-[#4cc9f0] rounded-xl p-5 w-[90%] max-w-lg mx-auto mb-6 shadow-md shadow-[#4cc9f0]/10 transition hover:scale-105">
    <div class="flex justify-between items-start">
        <h3 class="text-xl font-semibold text-[#4cc9f0]"><?= esc($title) ?></h3>
        <span class="text-sm font-semibold <?= esc($statusClass) ?> text-[#0d1117] px-3 py-1 rounded-md"><?= esc($status) ?></span>
    </div>
    <p class="mt-2 mb-1 text-[#e6edf3]/90"><?= esc($description) ?></p>
    <small class="font-semibold <?= $priority === 'High' ? 'text-[#ffb84c]' : ($priority === 'Medium' ? 'text-[#4cc9f0]' : 'text-gray-400') ?>">
        Priority: <?= esc($priority) ?>
    </small>
</div>