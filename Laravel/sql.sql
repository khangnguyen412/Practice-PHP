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
select * from branch;
select * from customer;
select * from business;
select * from account join acc_transaction on account.ACCOUNT_ID = acc_transaction.ACCOUNT_ID;
select * from account where (AVAIL_BALANCE > 5000 or OPEN_BRANCH_ID = 1);
select * from account where (AVAIL_BALANCE > 5000 and OPEN_BRANCH_ID = 1);
select * from account where PRODUCT_CD like "sa%";
select * from account left join acc_transaction on account.ACCOUNT_ID = acc_transaction.ACCOUNT_ID;
select CUST_ID, STATE_ID from business where CUST_ID = '10' union select CUST_ID, STATE from customer where CUST_ID = 11;
select * from account order by PENDING_BALANCE asc;
select sum(AVAIL_BALANCE) as 'SUM AVAIL BALANCE', PRODUCT_CD from account group by PRODUCT_CD having sum(AVAIL_BALANCE) > 10000;
insert into account value (30, 6000, null, '2004-12-17', '2004-12-15', 6000, 'ACTIVE', 10, 1, 1, 'CD');
update account set STATUS = 'INACTIVE' where ACCOUNT_ID = 30;
delete from account where ACCOUNT_ID = 30;