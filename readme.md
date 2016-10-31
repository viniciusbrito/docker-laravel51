# Laravel 5.1 running on Docker

- PHP 5.6 FPM
- Nginx 1.10
- MySQL 5.6

## Run

```sh
$ composer install
```

```sh
$ cp .env.enxample .env
```

```sh
$ php artisan key:generate
```

[Install Docker](https://docker.github.io/engine/installation/) 

[Install Docker Compose](https://docs.docker.com/compose/install/)

Then rum the following command to start the containers

```sh
$ docker-compose up -d
```

Grant permission to nginx
```sh
sudo chgrp -R www-data docker-laravel51
```

Access the app

[http://localhost:8080](http://localhost:8080)

To stop the containers

```sh
$ docker-compose kill
```

To remove the containers

```sh
$ docker-compose rm
```

This project is based on this other [project](https://github.com/kyleferguson/laravel-with-docker-example)