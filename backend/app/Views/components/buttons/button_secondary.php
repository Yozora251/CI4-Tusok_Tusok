<?php
// File: app/Views/components/buttons/button_secondary.php
// Variables:
// $text (string)
// $link (string)
// $extraClasses (string)

$text = $text ?? 'Secondary';
$link = $link ?? null;
$extraClasses = $extraClasses ?? '';


$disabled = $disabled ?? false;

$bgClass = $disabled ? 'bg-gray-400 cursor-not-allowed' : 'bg-[#0d1117] border border-[#4cc9f0] hover:bg-[#4cc9f0]';
$textColor = $disabled ? 'text-gray-700' : 'text-[#4cc9f0]';
?>

<a href="<?= htmlspecialchars($link) ?>"
    class="inline-block bg-[#3a86ff] hover:bg-[#4cc9f0] text-white px-5 py-2 rounded-full font-semibold text-sm transition <?= $extraClasses ?>">
    <?= htmlspecialchars($text) ?>
</a>