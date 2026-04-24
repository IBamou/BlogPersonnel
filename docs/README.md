# IBlog - Personal Blog Application

A personal blog application built with Laravel and Tailwind CSS.

## Features

- Create, edit, and publish articles
- Draft management
- Category organization
- User profile management
- Reading time calculation
- Dark/Light theme support

## Default User

A default admin user is created automatically when you first run the application:

- **Email**: admin@gmail.com
- **Password**: admin123

This user is created in `app/Providers/AppServiceProvider.php` boot() method.

## Installation

```bash
composer install
php artisan migrate
php artisan serve
```

## Usage

1. Login with the default admin credentials
2. Navigate to the profile page to update your info
3. Create articles from "Write Article" in the navigation