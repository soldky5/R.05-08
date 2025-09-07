# R.05-08 - Qualité de développement

## Install

```
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
```

## Run dev server
```
php artisan serve
```

## Tests
### Environnement
```
cp .env.example .env.testing
```

### Run
```
php artisan test
```