<?php
// Component: components/cta.php
// Variables:
// $heading (string) - main CTA heading
// $sub (string|null) - subheading text
// $primary (array) - ['text' => string, 'link' => string, 'extraClasses' => string|null]
// $secondary (array) - ['text' => string, 'link' => string, 'extraClasses' => string|null]

$heading = $heading ?? '';
$sub = $sub ?? '';
$primary = $primary ?? [];
$secondary = $secondary ?? [];
?>

<section class="bg-[#161b22] py-16 md:py-20 rounded-lg text-center text-white">
    <div class="max-w-4xl mx-auto px-6">
        <?php if (!empty($heading)): ?>
            <h2 class="text-4xl md:text-5xl font-bold text-[#4cc9f0] mb-4"><?= htmlspecialchars($heading) ?></h2>
        <?php endif; ?>

        <?php if (!empty($sub)): ?>
            <p class="text-[#e6edf3]/90 text-lg mb-10"><?= htmlspecialchars($sub) ?></p>
        <?php endif; ?>

        <div class="flex flex-col md:flex-row justify-center gap-4">
            <?php if (!empty($primary)): ?>
                <?= view('components/buttons/button_primary', [
                    'text' => $primary['text'],
                    'link' => $primary['link'],
                    'extraClasses' => $primary['extraClasses'] ?? 'md:px-8 md:py-3'
                ]) ?>
            <?php endif; ?>

            <?php if (!empty($secondary)): ?>
                <?= view('components/buttons/button_secondary', [
                    'text' => $secondary['text'],
                    'link' => $secondary['link'],
                    'extraClasses' => $secondary['extraClasses'] ?? 'md:px-8 md:py-3'
                ]) ?>
            <?php endif; ?>
        </div>
    </div>
</section>