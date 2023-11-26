CREATE TABLE employees 
(
    id SERIAL PRIMARY KEY,
    fio character varying(100),
    login character varying(12),
    password_emp character varying(12),
	position_emp character varying(30),
	phone_num_emp character varying(12)
);

CREATE TABLE client 
(
    id SERIAL PRIMARY KEY,
    fio character varying(100),
    phone_number character varying(12),
    abonement_id integer NOT NULL
);

CREATE TABLE train 
(
    id SERIAL PRIMARY KEY,
	trainer_id int,
	client_id int,
	price int,
	status bool,
	train_date timestamp,
	FOREIGN KEY (trainer_id) REFERENCES employees (id),
	FOREIGN KEY (client_id) REFERENCES client (id)
);


CREATE TABLE abonement 
(
    id SERIAL PRIMARY KEY,
    abonement_type character varying(30),
	price int,
	end_date date,
	client_id int,
	FOREIGN KEY (client_id) REFERENCES client (id)
);


INSERT INTO employees (id,fio, login,password_emp,position_emp)
VALUES (1,'Фомин Тимофей Сергеевич', 'admin','admin','Администратор');
INSERT INTO employees (id,fio, login,password_emp,position_emp)
VALUES (2,'Константинов Костя Константинович', '123','123','Тренер');
INSERT INTO employees (id,fio, login,password_emp,position_emp)
VALUES (3,'Васечкин Илья Артемович', '223','223','Тренер');
INSERT INTO client (id,abonement_id,fio,phone_number)
VALUES (1,1,'Иванов Иван Иванович','+79999999999');
INSERT INTO client (id,abonement_id,fio,phone_number)
VALUES (2,2,'Петров Станислав Антонович','+75555555555');
INSERT INTO abonement (abonement_type, price, end_date, client_id)
VALUES ('Месячный', 5000, '2023-12-01', 1);
INSERT INTO train (id,trainer_id,client_id,price,train_date,status)
VALUES (1,2,1,500,'05-06-2023 12:00',false)

alter sequence "client_id_seq" restart with 3;
alter sequence "employees_id_seq" restart with 4;
alter sequence "train_id_seq" restart with 2;

