<?php
    $icon = $props['icon'] ?? '';
    $title = $props['title'] ?? '';
    $description = $props['description'] ?? '';
    $label = $props['label'] ?? '';
?>

<article class="feature-card">
    <div class="feature-card__icon" aria-hidden="true">
        <span class="material-symbols-outlined"><?= $icon ?></span>
    </div>

    <h3 class="feature-card__title"><?= $title ?></h3>
    <p class="feature-card__description"><?= $description ?></p>

    <div class="feature-card__footer">
        <span><?= $label ?></span>
    </div>
</article>
