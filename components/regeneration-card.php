<?php
    $value = $props['value'] ?? '';
    $title = $props['title'] ?? '';
    $description = $props['description'] ?? '';
?>

<article class="regeneration-card">
    <div class="regeneration-card__value"><?= $value ?></div>
    <h3 class="regeneration-card__title"><?= $title ?></h3>
    <p class="regeneration-card__description"><?= $description ?></p>
</article>
