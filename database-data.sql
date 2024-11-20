INSERT INTO parks (address) VALUES
                                ('123 Elm Street'),
                                ('456 Oak Avenue'),
                                ('789 Maple Drive'),
                                ('101 Pine Lane'),
                                ('202 Cedar Court');
INSERT INTO cars (park_id) VALUES
                               (1),
                               (2),
                               (3),
                               (4),
                               (5),
                               (1),
                               (2),
                               (3),
                               (4),
                               (5);
INSERT INTO drivers (car_id, name, phone) VALUES
                                              (1, 'John Smith', '555-1234'),
                                              (2, 'Alice Johnson', '555-5678'),
                                              (3, 'Bob Brown', '555-8765'),
                                              (4, 'Emily Davis', '555-4321'),
                                              (5, 'Michael Wilson', '555-3456'),
                                              (6, 'Sarah Lee', '555-6543'),
                                              (7, 'David Clark', '555-7890'),
                                              (8, 'Laura Hall', '555-0987'),
                                              (9, 'James Adams', '555-1122'),
                                              (10, 'Patricia Moore', '555-3344');
INSERT INTO customers (name, phone) VALUES
                                        ('Daniel Harris', '555-4455'),
                                        ('Sophia Martinez', '555-5566'),
                                        ('Matthew Lewis', '555-6677'),
                                        ('Olivia Walker', '555-7788'),
                                        ('Ethan Allen', '555-8899');
INSERT INTO orders (driver_id, customer_id, start, finish, total) VALUES
                                                                      (1, 1, '123 Elm Street', '456 Oak Avenue', 15.50),
                                                                      (2, 2, '789 Maple Drive', '101 Pine Lane', 12.30),
                                                                      (3, 3, '202 Cedar Court', '123 Elm Street', 20.00),
                                                                      (4, 4, '456 Oak Avenue', '789 Maple Drive', 18.75),
                                                                      (5, 5, '101 Pine Lane', '202 Cedar Court', 22.40),
                                                                      (6, 1, '123 Elm Street', '456 Oak Avenue', 15.50),
                                                                      (7, 2, '789 Maple Drive', '101 Pine Lane', 12.30),
                                                                      (8, 3, '202 Cedar Court', '123 Elm Street', 20.00),
                                                                      (9, 4, '456 Oak Avenue', '789 Maple Drive', 18.75),
                                                                      (10, 5, '101 Pine Lane', '202 Cedar Court', 22.40);


-- запити
drop table orders;


alter table drivers change phone contact_number varchar(255);


insert into parks (address) values
                                ('300 Birch Street'),
                                ('400 Spruce Avenue'),
                                ('500 Aspen Lane');
insert into cars (park_id) values
                               (1),
                               (2),
                               (3);
INSERT INTO drivers (car_id, name, phone) VALUES
                                              (1, 'Anna Bell', '555-2000'),
                                              (2, 'Chris Evans', '555-3000'),
                                              (3, 'Mark Ruffalo', '555-4000');
INSERT INTO customers (name, phone) VALUES
                                        ('Liam Clark', '555-5000'),
                                        ('Emma White', '555-6000'),
                                        ('Noah King', '555-7000');
insert into orders(driver_id, customer_id, start, finish, total) values
                                                                     (1, 1, '2024-11-01', '300 Birch Street', 45.00),
                                                                     (2, 2, '2024-11-02', '400 Spruce Avenue', 30.00),
                                                                     (3, 3, '2024-11-03', '500 Aspen Lane', 60.00);


update cars set park_id = 3 where id = 1;


delete from orders where driver_id = 1;


select * from customers;
select customer_id from orders;


SELECT
    orders.id AS order_id,
    customers.name AS customer_name,
    drivers.name AS driver_name,
    orders.total AS order_total
FROM orders
         JOIN customers ON orders.customer_id = customers.id
         JOIN drivers ON orders.driver_id = drivers.id;
SELECT
    cars.id AS car_id,
    drivers.name AS driver_name
FROM cars
         JOIN drivers ON cars.id = drivers.car_id;


ALTER TABLE drivers ADD COLUMN rating FLOAT DEFAULT 0.0;
