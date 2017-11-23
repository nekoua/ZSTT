DROP DATABASE IF EXISTS employee;

CREATE DATABASE employee DEFAULT CHARACTER SET 'utf8';



USE employee;


create table employee_table
(
  tab_number int unsigned not null,
  prizvische varchar(30) not null,
  imya varchar(30) not null,
  pobatkovi varchar(30) not null,
  bday date not null,
  education varchar(20) not null,
  primary key (tab_number)
) engine=InnoDB;

set names 'utf8';

insert into employee_table (tab_number, prizvische, imya, pobatkovi, bday, education)
values (13,'Іванов', 'Іван', 'Іванович', '1990-03-20', 'Середня-спеціальна');

insert into employee_table (tab_number, prizvische, imya, pobatkovi, bday, education)
values (14,'Іванов1', 'Іван1', 'Іванович1', '1990-03-20', 'Середня');

select * from employee_table;