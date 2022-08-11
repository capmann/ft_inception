    -- remove unecessary databases
DELETE FROM	mysql.user WHERE User='';
DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1');
   -- set password for ROOT
ALTER USER 'root'@'localhost' IDENTIFIED by 'password_root';
    -- create Wordpress database
CREATE DATABASE IF NOT EXISTS wp_db;
CREATE USER IF NOT EXISTS 'wp_user'@'%' IDENTIFIED by 'password_user';
GRANT ALL PRIVILEGES ON wp_db.* TO wp_user@'%';
FLUSH PRIVILEGES;
