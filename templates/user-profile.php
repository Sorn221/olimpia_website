<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .profile-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 400px;
    }

    .profile-info {
        margin-bottom: 20px;
    }

    .profile-info h2 {
        margin-bottom: 10px;
    }

    .profile-info p {
        margin: 0;
    }

    .subscriptions {
        list-style: none;
        padding: 0;
    }

    .subscription-item {
        border-bottom: 1px solid #ccc;
        padding: 10px 0;
    }

    h6 {
        color: black;
    }
</style>
<main>
    <div class="profile-container">
        <div class="profile-info">
            <h6>Имя пользователя</h6>
            <span>
                <?= $user_name ?><span>
                    <p>Контактная информация:</p>
                    <span>
                        <?= $user_contact_message ?><span>
        </div>

        <h6>Приобретенные абонементы/тренировки:</h6>
        <ul class="subscriptions">
            <li class="subscription-item">Абонемент на год</li>
            <li class="subscription-item">Персональные тренировки (последняя тренировка 01.01.2023)</li>
            <!-- Добавьте здесь дополнительные абонементы или тренировки -->
        </ul>
    </div>
</main>