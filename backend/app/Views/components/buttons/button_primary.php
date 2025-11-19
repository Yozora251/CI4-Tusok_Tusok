<?php
// File: app/Views/components/buttons/button_primary.php
// Variables:
// $text (string) - Button text
// $link (string|null) - URL if it's a link
// $submit (bool) - if true, render <button type="submit">
// $extraClasses (string) - optional Tailwind classes
// $disabled (bool) - optional

$text = $text ?? 'Primary';
$link = $link ?? null;
$submit = $submit ?? false;
$extraClasses = $extraClasses ?? '';
$disabled = $disabled ?? false;

// Style classes
$bgClass = $disabled ? 'bg-gray-400 cursor-not-allowed' : 'bg-[#4cc9f0] hover:bg-[#3a86ff]';
$textColor = $disabled ? 'text-gray-700' : 'text-[#0d1117]';
$baseClass = "inline-block px-5 py-2 rounded-full font-semibold text-sm transition $bgClass $textColor $extraClasses";

// Determine if we should render a <button>
// Force <button> if $submit is true OR $link is null/'#'
$useButton = $submit || is_null($link) || $link === '#';

if ($useButton) : ?>
    <button type="submit" class="<?= $baseClass ?>" <?= $disabled ? 'disabled' : '' ?>>
        <?= htmlspecialchars($text) ?>
    </button>
<?php else: ?>
    <a href="<?= $disabled ? '#' : htmlspecialchars($link) ?>" class="<?= $baseClass ?>">
        <?= htmlspecialchars($text) ?>
    </a>
<?php endif; ?>