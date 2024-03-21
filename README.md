# NETWORK

Ini adalah aplikasi untuk memperluas pertemanan yang dibuat dengan menggunakan teknologi TALL stack

## Screenshots

![App Screenshot](./project-screenshot/Screenshot_3.png)

### Require
    php 8
### Installation

#### Install Dependencies

```bash
  Composer Install
```

#### Create a '.env' File

```bash
    cp .env.example .env
    php artisan key:generate
```

### Configure the Database

```bash
  Open the '.env' file and configure the database settings
```

### Migrations

```bash
  php artisan migrate
```

### Start the Development Server

```bash
  php artisan serve
```
