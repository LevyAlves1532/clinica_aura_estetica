<?php
    $icon = $props['icon'] ?? '';
    $description = $props['description'] ?? '';
?>

<li class="reservation-benefit">
    <span class="material-symbols-outlined reservation-benefit__icon" aria-hidden="true"><?= $icon ?></span>
    <span><?= $description ?></span>
</li>
