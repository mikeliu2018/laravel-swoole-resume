# Deployment
```
composer install
npm install
./vendor/bin/sail php artisan key:generate
./vendor/bin/sail php artisan migrate
./vendor/bin/sail npm run dev
./vendor/bin/sail npm run build
```