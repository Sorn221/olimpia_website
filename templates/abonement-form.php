<head>
    <link rel="stylesheet" href="css/form.css">
</head>
<div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">

                <div class="modal-content">
                    <div class="modal-header">

                        <h2 class="modal-title" id="membershipFormLabel">Форма записи</h2>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form class="membership-form webform" role="form" action="index.php" method="post">
                            <input type="text" class="form-control" name="name" value="<?=$_SESSION['username']?>" readonly>

                            <input type="email" class="form-control" name="cf-email" value="<?=$_SESSION['email']?>" readonly>

                            <select name="abonements" id="abonements" class="form-control">
                                <option value="0">Выберите абонемент</option>
                                <?php foreach ($abonements as $item):?>
                                    <option <?=getPostVal('abonements') === $item['ID'] ? 'selected value='.$item['ID']: 'value='.$item['ID'];?>><?=$item['Type'];?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="form__error">
                                <?= $errors['abonement'] ?>
                            </span>
                            <button type="submit" class="form-control" id="submit-button"
                                name="submit">Оплатить</button>
                        </form>
                    </div>
                </div>              
            </div>
        </div>