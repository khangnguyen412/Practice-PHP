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

select  acc_transaction.ACCOUNT_ID, account.ACCOUNT_ID, AVAIL_BALANCE, LAST_ACTIVITY_DATE, PENDING_BALANCE, AMOUNT from account 
join acc_transaction 
on account.ACCOUNT_ID = acc_transaction.ACCOUNT_ID