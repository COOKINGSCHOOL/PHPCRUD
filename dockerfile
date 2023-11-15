FROM php:7.4-apache

# Instale as extensões do PHP necessárias para o MySQL (pdo_mysql)
RUN docker-php-ext-install pdo_mysql

# Copie os arquivos do seu site para o diretório web do Apache
COPY ./telalogin /var/www/html