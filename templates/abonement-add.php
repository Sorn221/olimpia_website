<main class="main-form">
    <div class="content-center">
        <div class="registration-form text-dark">
            <h2>Добавление абонемента</h2>
            <form class="<?php if ($errors): ?>form--invalid<?php endif; ?>" action="abonement-create.php" method="post"
                enctype="multipart/form-data" autocomplete="off">

                <div class="<?php if (isset($errors['type'])): ?>form__item--invalid<?php endif; ?>">
                    <label for="type">Тип: <sup>*</sup></label>
                    <input value="<?= getPostVal('type'); ?>" type="text" id="type" name="type"
                        placeholder="Введите название абонемента">
                    <span class="form__error">
                        <?= $errors['type'] ?>
                    </span>
                </div>

                <div class="<?php if (isset($errors['price'])): ?>form__item--invalid<?php endif; ?>">
                    <label for="price">Стоимость: <sup>*</sup></label>
                    <input value="<?= getPostVal('price'); ?>" type="text" id="price" name="price"
                        placeholder="Введите стоимость">
                    <span class="form__error">
                        <?= $errors['price'] ?>
                    </span>
                </div>
                <div class="<?php if (isset($errors['days'])): ?>form__item--invalid<?php endif; ?>">
                    <label for="days">Количество дней: <sup>*</sup></label>
                    <input value="<?= getPostVal('days'); ?>" type="text" id="days" name="days"
                        placeholder="Введите количество дней">
                    <span class="form__error">
                        <?= $errors['days'] ?>
                    </span>
                </div>

                <button type="submit">Добавить</button>
            </form>
        </div>
    </div>
</main>