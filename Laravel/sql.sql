create database laravelLearning;
create table test(
    fullName nvarchar(100),
    age int Not Null
);
select * from test;
alter table test drop column id;
drop table test;