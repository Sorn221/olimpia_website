<main>
    <div class="content-center">
        <div class="main-form">
            <div class="registration-form">
                <h2 class="text-dark">Покупка абонемента</h2>
                <form action="abonement.php" method="post">

                    <div>
                        <label class="text-dark" for="name">Имя:</label>
                        <input type="name" name="name" value="<?= $_SESSION['username'] ?>" readonly>
                    </div>

                    <div>
                        <label class="text-dark" for="email">Электронная почта: </label>
                        <input type="email" class="form-control" name="email" value="<?= $_SESSION['email'] ?>"
                            readonly>
                    </div>

                    <div>
                        <label class="text-dark" for="abonements">Тип абонемента:</label>
                        <select name="abonements" id="abonements" class="form-control">
                            <option value="0">Выберите абонемент</option>
                            <?php foreach ($abonements as $item): ?>
                                <option <?= getPostVal('abonements') === $item['ID'] ? 'selected value=' . $item['ID'] : 'value=' . $item['ID']; ?>>
                                    <?= $item['Type']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <span class="form__error">
                        <?= $errors['abonement'] ?>
                    </span>

                    <div>
                        <label for="submit"></label>
                        <button type="submit" class="form-control" id="submit-button" name="submit">Оплатить</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</main>