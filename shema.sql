-- Таблица "Клиенты"
CREATE TABLE Clients (
    ClientID INT PRIMARY KEY AUTO_INCREMENT,
    ClientName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) UNIQUE,
    ClientLogin VARCHAR(255) UNIQUE,
    ClientPassword VARCHAR(255) UNIQUE,
    Contact VARCHAR(255)
);

-- Таблица "Админы"
CREATE TABLE Admins (
    AdminID INT PRIMARY KEY AUTO_INCREMENT,
    AdminName VARCHAR(255),
    Email VARCHAR(255) UNIQUE,
    AdminLogin VARCHAR(255) UNIQUE,
    AdminPassword VARCHAR(255) UNIQUE
);

-- Таблица "Тренера"
CREATE TABLE Trainers (
    TrainerID INT PRIMARY KEY AUTO_INCREMENT,
    TrainerName VARCHAR(255),
    Email VARCHAR(255) UNIQUE,
    PhoneNumber VARCHAR(15)
);

-- Таблица "Тренировки"
CREATE TABLE Workouts (
    WorkoutID INT PRIMARY KEY AUTO_INCREMENT,
    Type VARCHAR(50),
    TrainerID INT,
    Price INT,
    FOREIGN KEY (TrainerID) REFERENCES Trainers(TrainerID)
);

-- Таблица "Абонементы"
CREATE TABLE Abonement (
    AbonementID INT PRIMARY KEY AUTO_INCREMENT,
    Type VARCHAR(50),
    Price DECIMAL(10, 2),
    ValidDays INT
);

-- Таблица для отслеживания покупок абонементов клиентами
CREATE TABLE ClientAbonement (
    ClientID INT,
    AbonementID INT,
    PurchaseDate DATETIME,
    FOREIGN KEY (ClientID) REFERENCES Clients(ClientID),
    FOREIGN KEY (AbonementID) REFERENCES Abonement(AbonementID)
);

-- Таблица для отслеживания покупок тренировок клиентами
CREATE TABLE ClientWorkouts (
    ClientID INT,
    WorkoutID INT,
    BookingDate DATETIME,
    FOREIGN KEY (ClientID) REFERENCES Clients(ClientID),
    FOREIGN KEY (WorkoutID) REFERENCES Workouts(WorkoutID)
);