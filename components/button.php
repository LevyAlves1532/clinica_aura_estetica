<?php
    $label = $props['label'] ?? '';
    $suffixIcon = $props['suffixIcon'] ?? '';
    $url = $props['url'] ?? '';
    $color = match ($props['color'] ?? 'primary') {
        'secondary' => 'button--secondary',
        default => 'button--primary',
    };
?>

<a class="button <?= $color ?>" href="<?= $url ?>">
    <?= $label ?>
    <?= $suffixIcon ?>
</a>
