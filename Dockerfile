FROM php:7.4-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql

#copy ./run.sh /tmp    
#ENTRYPOINT ["/tmp/run.sh"]

