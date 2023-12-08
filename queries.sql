-- Запросы для заполнения бд

-- Добавление примерных данных в таблицу "Клиенты"
INSERT INTO Clients (Name, Email, ClientLogin, Password, Contact) VALUES
    ('urtt', 'urtt@urtt.ru', 'urtt', '$2y$10$0fNhZ/QWTMTtH3kqSpORneEGnVMA2BAJ7Bzgs2RTUZO6FURT0UC5a', '123-456-789')

INSERT INTO Admins (Name, Email, AdminLogin, Password) VALUES 
    ('Администратор 1', 'admin1@example.com', 'admin1', '$2y$10$fxzjVzulN3oHdkAcjfmFXOdm1.c0yoP8/dPSdgnxgIi238vnm79Ia');
-- пароль = adminpass1

-- Добавление примерных данных в таблицу "Тренера"
INSERT INTO Trainers (Name, Email, PhoneNumber, TrainerLogin, Password, Image) VALUES 
('Александр Тренеров', 'trainer1@example.com', '111-111-111', 'train1', '$2y$10$8RpnzjL4K42.v99rX2iqnOZmpdHYrcxskTj/ids3q7GowKHdVJFVq','img/trener1.jpg');
-- пароль = train1
-- Добавление примерных данных в таблицу "Тренировки"
INSERT INTO Workouts (Type, TrainerID, Price, Image) VALUES
    ('Кардио', 1, 150, 'img/кардио.jpg'),
    ('Силовые тренировки', 1, 200, 'img/кроссфит.jpg'),
    ('Бокс', 1, 120,'img/бокс.jpg');

-- Добавление примерных данных в таблицу "Абонементы"
INSERT INTO Abonement (Type, Price, ValidDays) VALUES
    ('Годовой абонемент', 1200.00, 365),
    ('Абонемент на месяц', 150.00, 30),
    ('Персональные тренировки', 500.00, 90);

-- Добавление примерных данных в таблицу "ClientSubscriptions"
INSERT INTO ClientAbonement (ClientID, AbonementID, PurchaseDate) VALUES
    (1, 1, '2023-11-25 14:00:00'),
    (1, 2, '2023-11-26 10:30:00'),
    (1, 3, '2023-11-27 16:45:00');

-- Добавление примерных данных в таблицу "ClientWorkouts"
INSERT INTO ClientWorkouts (ClientID, WorkoutID, BookingDate) VALUES
    (1, 1, '2023-11-27 07:30:00'),
    (1, 1, '2023-11-28 09:00:00'),
    (1, 1, '2023-11-29 17:30:00');

