FROM php:7.4-fpm

COPY . /var/www/html/

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
		git-all \
		zip \
		unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd bcmath pdo_mysql
	
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer config --global --auth github-oauth.github.com COLOQUE_O_TOKEN_AQUI

WORKDIR /var/www/html/getLocalProject

RUN composer install

EXPOSE 9000
EXPOSE 8000

#CMD php /usr/local/bin/composer.phar install