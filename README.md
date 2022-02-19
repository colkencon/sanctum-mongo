# sanctum-mongo

## Introduction

This is a port of Laravel Sanctum for compability with Laravel Mongodb `Jenssegers\Mongodb\Eloquent\Model` ，This is for our particular project need for compatibility, keeping in mind that the original library works just fine for other database implementation。

## Installing colkencon/sanctum-mongo


Add this to your composer.json
```
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/colkencon/sanctum-mongo.git"
        }
    ]
```

Run
```
composer require colkencon/sanctum-mongo
```

For usage, kindly follow the official Laravel Sanctum Documentation https://laravel.com/docs/8.x/sanctum

