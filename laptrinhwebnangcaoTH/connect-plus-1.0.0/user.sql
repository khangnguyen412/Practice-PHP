create database quanlybanhang;
drop table users;
create table users(
	id_nameAtribute 	int primary key not null	auto_increment,
    username 			varchar(255) 	not null	unique,
    email				varchar(255) 	not null,
    pass				varchar(255) 	not null,
    sex					nvarchar(255) 	not null	check(sex = 'nữ' or sex ='nam' or sex ='khác'),
    avt 				nvarchar(255) 	not null,
    address				nvarchar(255) 	not null
);
insert into users (username, email, pass, sex, avt, address) values ("Khang", "khang@gmail.com", "khang", "nam", "../assets/img/products/product-img-1.jpg", "Lạc Long Quân");
select * from users where id_nameAtribute = 6;
select * from users;
select * from users where username like '%ngu%';
update users set username = 'khangnguyen412', email = 'khang412@gmail.com', pass = 'khang412', sex = 'nam', avt = '123', address = 'HN' where id_nameAtribute = 6;
SELECT username, pass FROM users where username = 'khang';

create table admins(
	id_nameAtribute 	int primary key not null	auto_increment,
    adminname 			varchar(255) 	not null	unique,
    email				varchar(255) 	not null,
    pass				varchar(255) 	not null,
    sex					nvarchar(255) 	not null	check(sex = 'nữ' or sex ='nam' or sex ='khác'),
    avt 				nvarchar(255) 	not null,
    address				nvarchar(255) 	not null,
    datecreate			datetime		not null default current_timestamp()
);
drop table admins;
insert into admins (adminname, email, pass, sex, avt, address) values ("Khoa", "khang@gmail.com", "khoa", "nam", "../assets/img/products/product-img-1.jpg", "Lạc Long Quân");
select * from admins;
delete from admins;
drop table admins;