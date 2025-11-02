<?php
// File: app/Views/components/cards/landing_card.php
// Variables: $title, $desc (optional), $img (optional), $link (optional), $buttonView (optional)
$title = $title ?? 'Untitled';
$desc = $desc ?? '';
$img = $img ?? null;
$link = $link ?? null;
?>

<div class="bg-[#161b22] hover:bg-[#1e2633] shadow-md rounded-2xl overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-[#4cc9f0]/30">
    <?php if ($img): ?>
        <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($title) ?>" class="w-full h-56 object-cover">
    <?php endif; ?>
    <div class="p-6">
        <h3 class="text-2xl font-bold text-[#4cc9f0] mb-2"><?= htmlspecialchars($title) ?></h3>
        <?php if ($desc !== ''): ?>
            <p class="text-gray-300 mb-4"><?= htmlspecialchars($desc) ?></p>
        <?php endif; ?>
        <?= $buttonView ?? '' ?>
    </div>
</div>