<?php
// File: app/Views/components/buttons/button_border.php
// Variables:
// $text (string)
// $link (string)
// $borderColor (string) optional, default is primary color
// $extraClasses (string)

$text = $text ?? 'Button';
$link = $link ?? null;
$borderColor = $borderColor ?? '#4cc9f0';
$extraClasses = $extraClasses ?? '';

$disabled = $disabled ?? false;

$borderClass = $disabled ? 'border-gray-400 cursor-not-allowed' : "border-[{$borderColor}]";
$textColor = $disabled ? 'text-gray-700' : "text-[{$borderColor}]";
$hoverBg = $disabled ? '' : "hover:bg-[{$borderColor}] hover:text-[#0d1117]";
?>

<a href="<?= htmlspecialchars($link) ?>"
    class="inline-block border-2 border-[<?= $borderColor ?>] text-[<?= $borderColor ?>] hover:bg-[<?= $borderColor ?>] hover:text-[#0d1117] px-5 py-2 rounded-full font-semibold text-sm transition <?= $extraClasses ?>">
    <?= htmlspecialchars($text) ?>
</a>