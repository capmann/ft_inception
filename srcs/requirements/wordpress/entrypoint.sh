#!/bin/sh

# Check if this is the initial setup using a temp file .install
 if [ -e .install ]
     then
         echo "Wordpress is installed"
         echo "Skipping wp core install"
     else
 			# Wait for MARIADB container
 			sleep 5;
 			# Check that the connection is established using
 			# mysqladmin ping
 			if ! mysqladmin --host=$MARIADB_HOST \
 						--user=$MARIADB_USER \
 						--password=$MARIADB_USER_PWD \
 						--wait=30 ping > /dev/null ; then
 						echo "ERROR : SQL not connected"
 						exit 1;
 			else
			# Install Wordpress using the CLI
			wp core install --path=/var/www/wordpress \
        		        --url=https://cmarteau.42.fr \
        		        --title="Inception" \
        		        --admin_user=${WP_ADMIN} \
        		        --admin_password=${WP_ADMIN_PWD} \
        		        --admin_email=${WP_ADMIN_EMAIL} \
				        --skip-email \
						--allow-root

			# create a temp file to indicate install is success full
			touch .install
			fi
			if [ -e .install ]
			then
				echo "Adding WP user"
				wp user create	--path=/var/www/wordpress \
								${WP_USER} ${WP_USER_EMAIL} \
								--user_pass=${WP_USER_PWD} \
								--role=contributor \
								--allow-root
			fi
fi

echo "Start PHP-FPM"
# Start PHP-FPM
exec php-fpm7.3 -F

# END
