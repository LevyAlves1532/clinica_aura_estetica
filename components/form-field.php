<?php
    $id = $props['id'] ?? '';
    $label = $props['label'] ?? '';
    $type = $props['type'] ?? 'text';
    $placeholder = $props['placeholder'] ?? '';
    $options = $props['options'] ?? [];
?>

<?php if ($type === 'choices'): ?>
    <fieldset class="reservation-field reservation-field--choices">
        <legend class="reservation-field__label"><?= $label ?></legend>
        <div class="reservation-field__choices">
            <?php foreach ($options as $option): ?>
                <label class="reservation-field__choice">
                    <input type="radio" name="reservation-period" value="<?= $option ?>" required>
                    <span><?= $option ?></span>
                </label>
            <?php endforeach; ?>
        </div>
    </fieldset>
<?php else: ?>
    <div class="reservation-field">
        <label class="reservation-field__label" for="<?= $id ?>"><?= $label ?></label>
        <?php if ($type === 'select'): ?>
            <select class="reservation-field__control" id="<?= $id ?>" name="<?= $id ?>" required>
                <option value="" selected><?= $placeholder ?></option>
                <?php foreach ($options as $option): ?>
                    <option value="<?= $option ?>"><?= $option ?></option>
                <?php endforeach; ?>
            </select>
        <?php else: ?>
            <input
                class="reservation-field__control"
                id="<?= $id ?>"
                name="<?= $id ?>"
                type="<?= $type ?>"
                placeholder="<?= $placeholder ?>"
                required
                <?php if ($type === 'tel'): ?>pattern="\([0-9]{2}\) [0-9] [0-9]{4}-[0-9]{4}" maxlength="17" inputmode="tel"<?php endif; ?>
            >
        <?php endif; ?>
    </div>
<?php endif; ?>
