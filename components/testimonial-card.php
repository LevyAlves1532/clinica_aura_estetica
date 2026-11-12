<?php
    $initial = $props['initial'] ?? '';
    $quote = $props['quote'] ?? '';
    $name = $props['name'] ?? '';
    $details = $props['details'] ?? '';
?>

<article class="testimonial-card">
    <div class="testimonial-card__rating" aria-label="5 de 5 estrelas">★★★★★</div>
    <blockquote class="testimonial-card__quote">“<?= $quote ?>”</blockquote>

    <footer class="testimonial-card__author">
        <span class="testimonial-card__avatar" aria-hidden="true"><?= $initial ?></span>
        <div>
            <strong><?= $name ?></strong>
            <span><?= $details ?></span>
        </div>
    </footer>
</article>
