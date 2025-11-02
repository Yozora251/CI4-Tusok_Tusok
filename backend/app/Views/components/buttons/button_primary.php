<?php
// File: app/Views/components/buttons/button_primary.php
// Variables:
// $text (string) - Button text
// $link (string) - URL
// $extraClasses (string) - optional Tailwind classes
// $disabled (bool) - optional, default false

$text = $text ?? 'Primary';
$link = $link ?? '#';
$extraClasses = $extraClasses ?? '';
$disabled = $disabled ?? false;

// Apply styles based on disabled state
$bgClass = $disabled ? 'bg-gray-400 cursor-not-allowed' : 'bg-[#4cc9f0] hover:bg-[#3a86ff]';
$textColor = $disabled ? 'text-gray-700' : 'text-[#0d1117]';
?>
<a href="<?= $disabled ? '#' : htmlspecialchars($link) ?>"
    class="inline-block <?= $bgClass ?> <?= $textColor ?> px-5 py-2 rounded-full font-semibold text-sm transition <?= $extraClasses ?>">
    <?= htmlspecialchars($text) ?>
</a>