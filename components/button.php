<?php
    $label = $props['label'] ?? '';
    $preffixIcon = $props['preffixIcon'] ?? '';
    $suffixIcon = $props['suffixIcon'] ?? '';
    $url = $props['url'] ?? '';
    $class = $props['class'] ?? '';
    $target = $props['target'] ?? '_self';
    $color = match ($props['color'] ?? 'primary') {
        'secondary' => 'button--secondary',
        default => 'button--primary',
    };
?>

<a class="button <?= $color ?> <?= $class ?>" target="<?= $target ?>" href="<?= $url ?>">
    <?= $preffixIcon ?>
    <?= $label ?>
    <?= $suffixIcon ?>
</a>
