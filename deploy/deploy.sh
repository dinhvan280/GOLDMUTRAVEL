#Setup new domain
newdomain=$1

cd /var/www/html/$newdomain
composer install

#Config .env
cp .env.example .env && mkdir -p bootstrap/cache storage/framework/{sessions,views,cache}
chmod -R 777 storage bootstrap/cache
git reset --hard

sed -i -s "s/APP_URL=http:\/\/localhost/APP_URL=https:\/\/www.${newdomain}/gI" /var/www/html/$newdomain/.env
sed -i -s "s/APP_ENV=local/APP_ENV=prod/gI" /var/www/html/$newdomain/.env
sed -i -s "s/APP_DEBUG=true/APP_DEBUG=false/gI" /var/www/html/$newdomain/.env
sed -i -s "s/LOG_CHANNEL=stack/LOG_CHANNEL=single/gI" /var/www/html/$newdomain/.env

sed -i -s "s/DB_DATABASE=laravel/DB_DATABASE=${newdomain}/gI" /var/www/html/$newdomain/.env
sed -i -s "s/DB_USERNAME=root/DB_USERNAME=admin/gI" /var/www/html/$newdomain/.env
sed -i -s "s/DB_PASSWORD=/DB_PASSWORD=Hacker_1995/gI" /var/www/html/$newdomain/.env

php artisan key:generate

#Config apache
cp deploy/apache.conf /etc/apache2/sites-available/$newdomain.conf
sed -i -s "s/domain/${newdomain}/gI" /etc/apache2/sites-available/$newdomain.conf
sudo a2ensite $newdomain.conf

echo "All done! :D"