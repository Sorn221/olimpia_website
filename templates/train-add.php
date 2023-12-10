<main class="main-form">
    <div class="content-center">
        <div class="registration-form text-dark">
            <h2>Добавление тренировки</h2>
            <form class="<?php if ($errors): ?>form--invalid<?php endif; ?>" action="train-create.php" method="post"
                enctype="multipart/form-data" autocomplete="off">

                <div class="<?php if (isset($errors['type'])): ?>form__item--invalid<?php endif; ?>">
                    <label for="type">Тип: <sup>*</sup></label>
                    <input value="<?= getPostVal('type'); ?>" type="text" id="type" name="type"
                        placeholder="Введите название тренировки">
                    <span class="form__error">
                        <?= $errors['type'] ?>
                    </span>
                </div>

                <div class="<?php if (isset($errors['price'])): ?>form__item--invalid<?php endif; ?>">
                    <label for="price">Стоимость: <sup>*</sup></label>
                    <input value="<?= getPostVal('price'); ?>" type="price" id="price" name="price"
                        placeholder="Введите стоимость">
                    <span class="form__error">
                        <?= $errors['price'] ?>
                    </span>
                </div>

                <div class="<?php if (isset($errors['trener'])): ?>form__item--invalid<?php endif; ?>">
                    <label for="trener">Тренер: <sup>*</sup></label>
                    <select name="trener" id="trener" class="form-control">
                        <option value="0">Выберите тренера</option>
                        <?php foreach ($trains as $item): ?>
                            <option <?= getPostVal('trener') === $item['ID'] ? 'selected value=' . $item['ID'] : 'value=' . $item['ID']; ?>>
                                <?= $item['Name']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div
                    class="form__item form__item--file <?php if (isset($errors['image'])): ?> form__item--invalid <?php endif; ?> ">
                    <label>Изображение <sup>*</sup></label>
                    <div class="form__input-file">
                        <input class="visually-hidden" name="image" type="file" id="image" value="">
                        <span class="form__error">
                            <?= $errors['image'] ?>
                        </span>
                    </div>
                </div>

                <button type="submit">Добавить</button>
            </form>
        </div>
    </div>
</main>