<link rel="stylesheet" href="css/form.css">
<main>
    <div class="main-form">
        <div class="registration-form text-dark">
            <h2>Покупка тренировки</h2>
            <form action="abonement.php" method="post">

                <div>
                    <label for="name">Имя:</label>
                    <input type="name" name="name" value="<?= $_SESSION['username'] ?>" readonly>
                </div>

                <div>
                    <label for="email">Электронная почта: </label>
                    <input type="email" class="form-control" name="email" value="<?= $_SESSION['email'] ?>" readonly>
                </div>

                <div>
                    <label for="abonements">Тип тренировки:</label>
                    <select name="abonements" id="abonements" class="form-control">
                        <option value="0">Выберите тренировку</option>
                        <?php foreach ($trains as $item): ?>
                            <option <?= getPostVal('trains') === $item['ID'] ? 'selected value=' . $item['ID'] : 'value=' . $item['ID']; ?>>
                                <?= $item['Type']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <span class="form__error">
                    <?= $errors['trains'] ?>
                </span>

                <div>
                    <label for="submit"></label>
                    <button type="submit" class="form-control" id="submit-button" name="submit">Оплатить</button>
                </div>
            </form>

        </div>

    </div>
</main>