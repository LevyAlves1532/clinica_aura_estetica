<?php
    $label = $props['label'] ?? '';
    $active = !empty($props['active']);
?>

<button class="atelier-filter <?= $active ? 'is-active' : '' ?>" type="button" <?= $active ? 'aria-pressed="true"' : 'aria-pressed="false"' ?>>
    <?= $label ?>
</button>
