<?php
// File: app/Views/components/buttons/back_button.php
// Variables:
// $link (string)
// $text (string) optional
$link = $link ?? '/';
$text = $text ?? '← Back Home';
?>

<a href="<?= htmlspecialchars($link) ?>"
    class="inline-block bg-[#4cc9f0] text-[#0d1117] font-semibold rounded-lg px-5 py-2 hover:bg-[#3a86ff] hover:text-white transition">
    <?= htmlspecialchars($text) ?>
</a>