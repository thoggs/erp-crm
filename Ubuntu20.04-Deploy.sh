#!/bin/zsh

# Install PHP ad tips
sudo apt install php7.4-common php7.4-cli php7.4-gd php7.4-mysql php7.4-curl php7.4-intl php7.4-mbstring php7.4-bcmath php7.4-imap php7.4-xml php7.4-zip php7.4-fpm unzip

# Install Composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e5325b19b381bfd88ce90a5ddb7823406b2a38cff6bb704b0acc289a09c8128d4a8ce2bbafcd1fcbdc38666422fe2806') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php --install-dir=/usr/bin/ --filename=composer

# Install Node.js and NPM
curl -sL https://deb.nodesource.com/setup_14.x | sudo -E bash -
sudo apt-get install -y nodejs

# npm install dependencies
npm install --silent

# npm configure project
npm run prod

# Autoloader Optimization
composer install --optimize-autoloader --no-dev

# shellcheck disable=SC2225
cp .env.example .env

# generate key Laravel
php artisan key:generate

# Optimizing Configuration Loading
php artisan config:cache

# Optimizing Route Loading
php artisan route:cache

# Optimizing View Loading
php artisan view:cache

# Start Artisan Serve in LocalHost
php artisan serve --host=localhost