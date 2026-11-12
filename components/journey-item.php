<?php
    $number = $props['number'] ?? '';
    $title = $props['title'] ?? '';
    $description = $props['description'] ?? '';
    $active = !empty($props['active']);
?>

<article class="journey-item <?= $active ? 'is-active' : '' ?>">
    <div class="journey-item__number"><?= $number ?></div>
    <h3 class="journey-item__title"><?= $title ?></h3>
    <p class="journey-item__description"><?= $description ?></p>
</article>
