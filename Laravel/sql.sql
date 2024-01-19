create database laravelLearning;
create table test(
    fullName nvarchar(100),
    age int Not Null
);
select * from test;
alter table test drop column id;
drop table test;




-- truy xuất db mẫu
select * from acc_transaction;
select * from account;
select * from account join acc_transaction on account.ACCOUNT_ID = acc_transaction.ACCOUNT_ID;
select * from account where (AVAIL_BALANCE > 5000 or OPEN_BRANCH_ID = 1);
select * from account where (AVAIL_BALANCE > 5000 and OPEN_BRANCH_ID = 1);
select * from account where PRODUCT_CD like "sa%";