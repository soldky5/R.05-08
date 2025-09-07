
<a href="https://www.php.net/releases/8.4/en.php"><img src="https://badgen.net/badge/PHP/v8.4/blue" alt="PHP version"></a>

# R.05-08 - Qualité de développement

## Install

```
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate

# Tests
cp .env.example .env.testing
# Copy APP_KEY from .env to .env.testing
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