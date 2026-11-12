<?php
    $label = $props['label'] ?? '';
    $suffixIcon = $props['suffixIcon'] ?? '';
    $url = $props['url'] ?? '';
    $class = $props['class'] ?? '';
    $color = match ($props['color'] ?? 'primary') {
        'secondary' => 'button--secondary',
        default => 'button--primary',
    };
?>

<a class="button <?= $color ?> <?= $class ?>" href="<?= $url ?>">
    <?= $label ?>
    <?= $suffixIcon ?>
</a>
