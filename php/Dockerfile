FROM php:5.6-cli

RUN pecl install xdebug
RUN echo "zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20131226/xdebug.so" > /usr/local/etc/php/conf.d/zend.ini
RUN echo "xdebug.remote_enable=On" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.remote_port=9002" >> /usr/local/etc/php/conf.d/xdebug.ini
