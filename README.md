# TALL 📝💡 Google Keep
Google Keep clone built using TALL stack for portfolio purposes.


## Requirements
- PHP 8.4
- Node & npm

## Local development

### Install deps

```bash
composer install && npm i
```

### Create the env file

```bash

cp .env.example .env
```

### Generate key

```bash
php artisan key:generate
```

### Create and seed the database

```bash
php artisan migrate && php artisan db:seed
```

### Run
Create a web server or use the builtin

```bash
composer run
```
