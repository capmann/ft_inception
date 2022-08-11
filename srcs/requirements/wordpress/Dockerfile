FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade\
		&& apt-get -y install apt-utils nginx openssl mariadb-client mariadb-server\
		&& apt-get -y install wget curl

RUN  apt-get -y install php7.3-fpm\ 
	&& apt-get -y install php7.3\
	&& apt-get -y install php7.3-mysqli\
	&& apt-get -y install php7.3-opcache php7.3-gd php7.3-curl php7.3-mbstring php7.3-json

#php config
COPY www.conf /etc/php/7.3/fpm/pool.d/www.conf
COPY php-fpm.conf /etc/php/7.3/fpm/php-fpm.conf

WORKDIR /var/www/wordpress

COPY wp-config.php .

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

RUN wp core download --locale=en_US --path=/var/www/wordpress --allow-root 

COPY entrypoint.sh .
ENTRYPOINT [ "sh", "entrypoint.sh" ]
