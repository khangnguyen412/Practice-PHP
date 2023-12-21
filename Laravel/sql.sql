create database laravelLearning;
create table test(
	id int primary key,
    fullName nvarchar(100),
    age int Not Null
);
select * from test;
alter table test drop column id;