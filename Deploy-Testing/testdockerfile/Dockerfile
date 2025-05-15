# pull thư viện php
FROM php:fpm

# cài đặt thư viện PDO MySQL trong PHP
RUN docker-php-ext-install pdo pdo_mysql

# sử dụng thư viện MySQLi
# RUN docker-php-ext-install mysqli

# cài thêm xdebug để có thông báo lỗi đẹp hơn trên local
RUN pecl install xdebug && docker-php-ext-enable xdebug