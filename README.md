# Laravel Starter

The starter project for Laravel applications. It is a base Laravel installation with some additional packages and basic setup. It comes with:

* Basic layout setup with a collapsible navigation
* Disabled mass-assignment protection in the base model
* Vue.js and the renderless-vue-components package
* Tailwind CSS with Purgecss setup
* Laravel Telescope
* Error tracking with Sentry
* Database backups with spatie/laravel-backup
* Media handling with spatie/laravel-medialibrary
* Marking links as active with laravelista/ekko
* Good open graph tags setup
* A cookies popup

Inspired in part by [michaeldyrynda/founder](https://github.com/michaeldyrynda/founder) and [spatie/spoon](https://github.com/spatie/spoon).

## Install

Clone the repository:

```bash
git clone https://github.com/pawelmysior/laravel-starter.git
```

Install the composer dependencies:

```bash
composer install
```

Copy the `.env.example` file:

```bash
cp .env.example .env
```

Set the application key:

```bash
php artisan key:generate
```

Install npm dependencies:

```bash
npm install
```

Compile assets:

```bash
npm run dev
```

## Configuration

1. Set the database configuration in the `.env` file.
2. Set the Dropbox token for Dropbox backups in the `.env` file.
3. Set the Sentry DSN in the `.env` file.
4. Set the Google Analytics ID in the `.env` file.
5. Set the timezone and locale in the `config/app.php` file.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
