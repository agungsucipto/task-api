# Task API

Prepare for installation

## Deployment

To deploy this project run

```bash
  composer install
```

setup .env file

```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=task_manager
  DB_USERNAME=root
  DB_PASSWORD=
```

migrate the database

```bash
  php artisan migrate
```

seed the user account

```bash
  php artisan db:seed --class=DatabaseSeeder
```

use this account for login

```bash
  email: test@example.com
  password: 12345
```
