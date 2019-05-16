FROM fauria/lamp
WORKDIR /var/www/html
ADD . ./
CMD ["/usr/sbin/run-lamp.sh"]
