create table parks(
                      id int auto_increment primary key,
                      address varchar(255)
);
create table cars(
                     id int auto_increment primary key,
                     park_id int,
                     foreign key (park_id) references parks(id)
);
create table drivers(
                        id int auto_increment primary key,
                        car_id int,
                        name varchar(255),
                        phone varchar(255),
                        foreign key (car_id) references cars(id)
);
create table customers(
                          id int auto_increment primary key,
                          name varchar(255),
                          phone varchar(255)
);
create table orders(
                       id int auto_increment primary key,
                       driver_id int,
                       customer_id int,
                       start text,
                       finish text,
                       total float,
                       foreign key (driver_id) references drivers(id),
                       foreign key (customer_id) references customers(id)
);

