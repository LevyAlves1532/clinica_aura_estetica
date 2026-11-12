<?php
    $id = $props['id'] ?? '';
    $question = $props['question'] ?? '';
    $answer = $props['answer'] ?? '';
?>

<article class="faq-item">
    <button class="faq-item__trigger" type="button" aria-expanded="false" aria-controls="<?= $id ?>">
        <span><?= $question ?></span>
        <span class="material-symbols-outlined faq-item__icon" aria-hidden="true">keyboard_arrow_down</span>
    </button>
    <div class="faq-item__answer" id="<?= $id ?>" role="region" hidden>
        <p><?= $answer ?></p>
    </div>
</article>
