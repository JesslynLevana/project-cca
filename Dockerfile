# Base image PHP
FROM php:8.2-cli

# Set working directory di container
WORKDIR /var/www

# Copy semua file Laravel ke container
COPY . .

# Install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php \
    && composer install --no-dev --optimize-autoloader

# Expose port 8000
EXPOSE 8000

# Start Laravel server dari folder public
CMD php -S 0.0.0.0:8000 -t public
