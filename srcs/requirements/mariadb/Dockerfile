FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade\
    && apt-get -y install apt-utils\
    && apt-get -y install mariadb-client\
	&& apt-get -y install mariadb-server\
    && apt-get -y install gettext

RUN mkdir -p /var/lib/mysql/run 
RUN mkdir -p /run/mysqld

RUN mysql_install_db --user=mysql --basedir=/usr --datadir=/var/lib/mysql --skip-test-db

RUN chown -R mysql:mysql /var/lib/mysql 
RUN chown -R mysql:mysql /run/mysqld

COPY mariadb.conf /etc/mysql/my.cnf
RUN chmod 755 /etc/mysql/my.cnf

COPY dump.sql /usr

ENTRYPOINT mysqld --user=mysql --basedir=/usr --datadir=/var/lib/mysql --init_file=/usr/dump.sql
