<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Fresh

Laravel Fresh is a base project template for Laravel web applications, apis, and services. It provides a clean and minimal starting point for building Laravel applications, designed to provide a clean and efficient starting point for developers. It includes essential packages and configurations to streamline the development process.

## Installation

To create a new Laravel Fresh project, you can clone the repository and install the dependencies:

```bash
composer install

cp .env.example .env

php artisan key:generate
```
Make sure to configure your `.env` file with the appropriate database and other settings.

## Running the Application

To run the Laravel Fresh application, use the following command:

```bash
php artisan serve
```

## Running with Docker

To run the Laravel Fresh application using Docker, ensure you have Docker installed and then use the following command:

```bash
docker-compose up -d
```

This will start the application in a Docker container. You can access it at `http://localhost:8080`.
