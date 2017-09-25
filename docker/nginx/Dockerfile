FROM nginx:latest

#ADD ./docker/web/vhost.conf /etc/nginx/conf.d/default.conf
ADD vhost.conf /etc/nginx/conf.d/default.conf

CMD /usr/sbin/nginx -g "daemon off;"

WORKDIR /var/www/
