<?php
    $image = $props['image'] ?? '';
    $imageAlt = $props['imageAlt'] ?? '';
    $tag = $props['tag'] ?? '';
    $title = $props['title'] ?? '';
    $description = $props['description'] ?? '';
    $duration = $props['duration'] ?? '';
?>

<article class="treatment-card">
    <div class="treatment-card__image-wrapper">
        <img class="treatment-card__image" src="<?= $image ?>" alt="<?= $imageAlt ?>">
        <span class="treatment-card__tag"><?= $tag ?></span>
    </div>

    <div class="treatment-card__body">
        <h3 class="treatment-card__title"><?= $title ?></h3>
        <p class="treatment-card__description"><?= $description ?></p>

        <div class="treatment-card__footer">
            <span class="treatment-card__duration">
                <span class="material-symbols-outlined" aria-hidden="true">schedule</span>
                <?= $duration ?>
            </span>
            <a class="treatment-card__link" href="#avaliacao">Detalhes <span aria-hidden="true">↗</span></a>
        </div>
    </div>
</article>
