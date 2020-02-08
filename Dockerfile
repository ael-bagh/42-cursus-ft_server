FROM debian:buster
EXPOSE 80 443 3606
RUN apt update -y
RUN apt upgrade -y
RUN apt install nginx -y
RUN apt install openssl
RUN mkdir /etc/nginx/ssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/nginx.key -out /etc/nginx/ssl/nginx.crt -subj "/C=NL/ST=Zuid Holland/L=Rotterdam/O=Sparkling Network/OU=IT Department/CN=ssl.raymii.org"
RUN apt -y install php7.3-fpm php7.3-common php7.3-mysql
RUN apt install tar -y
COPY srcs/script.sh /
RUN chmod 755 /script.sh
RUN rm /var/www/html/index.nginx-debian.html
COPY srcs/wordpress-5.3.2.tar.gz /
RUN tar -xzvf wordpress-5.3.2.tar.gz
RUN mv /wordpress/* /var/www/html/
COPY srcs/wp-config.php /var/www/html/
RUN mkdir /var/www/html/phpmyadmin
COPY srcs/phpMyAdmin-4.9.4-all-languages.tar.gz /
RUN tar -xzvf phpMyAdmin-4.9.4-all-languages.tar.gz --strip-components=1 -C /var/www/html/phpmyadmin
COPY srcs/config.inc.php /var/www/html/phpmyadmin/
RUN chmod 660 /var/www/html/phpmyadmin/config.inc.php
RUN chown -R www-data:www-data /var/www/html/phpmyadmin
RUN chown -R www-data /var/www/html
COPY srcs/default /etc/nginx/sites-available/
COPY srcs/wp_db.sql /
CMD ["/script.sh"]

