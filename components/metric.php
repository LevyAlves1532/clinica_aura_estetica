<?php
    $icon = $props['icon'] ?? '';
    $key = $props['key'] ?? '';
    $value = $props['value'] ?? '';
?>

<div class="hero__metric">
    <?php if ($icon): ?>
        <span class="hero__metric-icon" aria-hidden="true">
            <?= $icon ?>
        </span>
    <?php endif; ?>
    <div>
        <strong><?= $value ?></strong>
        <span><?= $key ?></span>
    </div>
</div>
