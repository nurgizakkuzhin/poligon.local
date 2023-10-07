<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

### Установка

Установка laravel через Composer
> composer create-project --prefer-dist laravel/laravel

Устанавливаем разрешения для папок фреймворка
> sudo chmod 777 -R storage && sudo chmod 777 -R bootstrap/cache

Устанавка базовых пакетов и плагинов
> Laravel Plugin
>> composer require --dev barryvdh/laravel-ide-helper=v2.7

> `"scripts": {
"post-update-cmd": [
"Illuminate\\Foundation\\ComposerScripts::postUpdate",
"@php artisan ide-helper:generate",
"@php artisan ide-helper:meta"
]`

> composer require --dev barryvdh/laravel-debugbar=v3.4

### Создание БД

> Создаем БД poligon
>> CREATE SCHEMA `poligon` DEFAULT CHARACTER SET ut8mb4 COLLATE utf8mb4_unicode_ci;

> Создаем модели и миграции
>> php artisan make:model Models/BlogCategory -m
> 
>> php artisan make:model Models/BlogPost -m
