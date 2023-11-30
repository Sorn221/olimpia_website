-- Запросы для заполнения бд

-- Добавление примерных данных в таблицу "Клиенты"
INSERT INTO Clients (ClientName, Email, ClientLogin, ClientPassword, Contact) VALUES
    ('Иван Иванов', 'ivan@example.com', 'ivan123', 'ivanpass', '123-456-789'),
    ('Мария Петрова', 'maria@example.com', 'maria456', 'password123', '987-654-321'),
    ('Алексей Сидоров', 'alex@example.com', 'alex87', 'securepass', '555-123-789');

INSERT INTO Admins (Name, Email, AdminLogin, Password) VALUES 
    ('Администратор 1', 'admin1@example.com', 'admin1', '$2y$10$fxzjVzulN3oHdkAcjfmFXOdm1.c0yoP8/dPSdgnxgIi238vnm79Ia');
-- пароль = adminpass1

-- Добавление примерных данных в таблицу "Тренера"
INSERT INTO Trainers (Name, Email, PhoneNumber, TrainerLogin, Password) VALUES 
('Александр Тренеров', 'trainer1@example.com', '111-111-111', 'train1', '$2y$10$8RpnzjL4K42.v99rX2iqnOZmpdHYrcxskTj/ids3q7GowKHdVJFVq');
-- пароль = train1
-- Добавление примерных данных в таблицу "Тренировки"
INSERT INTO Workouts (Type, TrainerID, Price) VALUES
    ('Кардио', 1, 150),
    ('Силовые тренировки', 1, 200),
    ('Бокс', 1, 120);

-- Добавление примерных данных в таблицу "Абонементы"
INSERT INTO Abonement (Type, Price, ValidDays) VALUES
    ('Годовой абонемент', 1200.00, 365),
    ('Абонемент на месяц', 150.00, 30),
    ('Персональные тренировки', 500.00, 90);

-- Добавление примерных данных в таблицу "ClientSubscriptions"
INSERT INTO ClientAbonement (ClientID, AbonementID, PurchaseDate) VALUES
    (1, 1, '2023-11-25 14:00:00'),
    (2, 2, '2023-11-26 10:30:00'),
    (3, 3, '2023-11-27 16:45:00');

-- Добавление примерных данных в таблицу "ClientWorkouts"
INSERT INTO ClientWorkouts (ClientID, WorkoutID, BookingDate) VALUES
    (1, 1, '2023-11-27 07:30:00'),
    (1, 1, '2023-11-28 09:00:00'),
    (1, 1, '2023-11-29 17:30:00');

