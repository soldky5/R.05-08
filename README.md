# R.05-08 - Qualité de développement

## Install

```
cp .env.example .env
php artisan key:generate
composer install
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