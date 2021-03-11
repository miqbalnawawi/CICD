FROM ubuntu:bionic
RUN apt -y update
RUN apt -y install nginx php-fpm php-mysqli systemd
RUN echo "\ndaemon off;" >> /etc/nginx/nginx.conf
RUN sed -i -e "s/;\?daemonize\s*=\s*yes/daemonize = no/g" /etc/php/7.2/fpm/php-fpm.conf

COPY wordpress/. /var/www/html/

RUN unlink /etc/nginx/sites-enabled/default
ADD blog /etc/nginx/sites-available/
RUN ln -s /etc/nginx/sites-available/blog /etc/nginx/sites-enabled/default
RUN echo "\nclear_env = no" >> /etc/php/7.2/fpm/pool.d/www.conf

CMD /etc/init.d/php7.2-fpm start && nginx

EXPOSE 80
