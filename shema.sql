-- Таблица "Клиенты"
CREATE TABLE Clients (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) UNIQUE,
    ClientLogin VARCHAR(255) UNIQUE,
    Password VARCHAR(255) UNIQUE,
    Contact VARCHAR(255)
);

-- Таблица "Админы"
CREATE TABLE Admins (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(255),
    Email VARCHAR(255) UNIQUE,
    AdminLogin VARCHAR(255) UNIQUE,
    Password VARCHAR(255) UNIQUE
);

-- Таблица "Тренера"
CREATE TABLE Trainers (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(255),
    Email VARCHAR(255) UNIQUE,
    PhoneNumber VARCHAR(15),
    TrainerLogin VARCHAR(255) UNIQUE,
    Password VARCHAR(255) UNIQUE
);

-- Таблица "Тренировки"
CREATE TABLE Workouts (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Type VARCHAR(50),
    TrainerID INT,
    Price INT,
    FOREIGN KEY (TrainerID) REFERENCES Trainers(ID)
);

-- Таблица "Абонементы"
CREATE TABLE Abonement (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Type VARCHAR(50),
    Price DECIMAL(10, 2),
    ValidDays INT
);

-- Таблица для отслеживания покупок абонементов клиентами
CREATE TABLE ClientAbonement (
    ClientID INT,
    AbonementID INT,
    PurchaseDate DATETIME,
    FOREIGN KEY (ClientID) REFERENCES Clients(ID),
    FOREIGN KEY (AbonementID) REFERENCES Abonement(ID)
);

-- Таблица для отслеживания покупок тренировок клиентами
CREATE TABLE ClientWorkouts (
    ClientID INT,
    WorkoutID INT,
    BookingDate DATETIME,
    FOREIGN KEY (ClientID) REFERENCES Clients(ID),
    FOREIGN KEY (WorkoutID) REFERENCES Workouts(ID)
);