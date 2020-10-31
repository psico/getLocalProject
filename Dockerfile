FROM php:7.4-fpm

COPY . /var/www/html/

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
		git-all \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd bcmath pdo_mysql
	
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer config --global --auth github-oauth.github.com 7edea3b3e7c5e8dd0cac6e91c60f73469c2b1c76

WORKDIR /var/www/html/getLocalProject

RUN composer install

#CMD php /usr/local/bin/composer.phar install