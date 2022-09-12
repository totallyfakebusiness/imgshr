FROM php:apache
COPY index.php /var/www/html/
RUN mkdir /var/www/html/uploads && \
    chmod 775 /var/www/html/uploads && \
    chgrp www-data /var/www/html/uploads
