-- Добавление примерных данных в таблицу "Клиенты"
INSERT INTO Clients (ClientName, Email, ClientLogin, ClientPassword, Contact) VALUES
    ('Иван Иванов', 'ivan@example.com', 'ivan123', 'ivanpass', '123-456-789'),
    ('Мария Петрова', 'maria@example.com', 'maria456', 'password123', '987-654-321'),
    ('Алексей Сидоров', 'alex@example.com', 'alex87', 'securepass', '555-123-789');

-- Добавление примерных данных в таблицу "Админы"
INSERT INTO Admins (AdminName, Email, AdminLogin, AdminPassword) VALUES
    ('Администратор 1', 'admin1@example.com', 'admin1', 'adminpass1'),
    ('Администратор 2', 'admin2@example.com', 'admin2', 'adminpass2'),
    ('Администратор 3', 'admin3@example.com', 'admin3', 'adminpass3');

-- Добавление примерных данных в таблицу "Тренера"
INSERT INTO Trainers (TrainerName, Email, PhoneNumber) VALUES
    ('Александр Тренеров', 'trainer1@example.com', '111-111-111'),
    ('Ольга Кузнецова', 'trainer2@example.com', '222-222-222'),
    ('Сергей Иванов', 'trainer3@example.com', '333-333-333');

-- Добавление примерных данных в таблицу "Тренировки"
INSERT INTO Workouts (Type, TrainerID, Price) VALUES
    ('Кардио', 1, 150),
    ('Силовые тренировки', 2, 200),
    ('Бокс', 3, 120);

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
    (2, 2, '2023-11-28 09:00:00'),
    (3, 3, '2023-11-29 17:30:00');