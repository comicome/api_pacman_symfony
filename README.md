# Rest api with Symfony 3.4

REST API with Symfony 3.4. With this API you can :
 - login
 - register
 - get a list of users
 - details of the user of your choice (with his id)
 - edit your profil

## Getting Started

These instructions will get you a copy of the project up and running on your local machine to browse the app.

### Prerequisites

Go to the GitHub page of the project : ```https://github.com/comicome/api_pacman_symfony```

Download the project with the green button ```Clone or download``` and ```Download ZIP```.

Extract the directory, place it where you want in your computer and memorize the path of the directory.

Exemple of path : ```Documents/GitHub/api_pacman_symfony```

### Installing

Open your terminal

Install composer

```
$ curl -sS https://getcomposer.org/installer | php
```

Go to the project

```
# customize the path
$ cd path/api_pacman_symfony/symfony
```

Install the requires and depedencies

```
$ composer install
```

## Database

### Configuring the Database

Open your WAMP/MAMP/LAMP and start server

In the project, open the ```app/config/parameters.yml``` file and configure the Database

```
# .env

parameters:
    database_host: 127.0.0.1
    database_port: 7779
    database_name: pacman
    database_user: root
    database_password: root
    mailer_transport: smtp
    mailer_host: 127.0.0.1
    mailer_user: null
    mailer_password: null
    secret: dd
    jwt_key_pass_phrase: ~
```

### Create the Database

In your Database administrator, create a Database named ```pacman```

In the terminal, create the Database.

```
$ bin/console doctrine:schema:create
```

### Load datas in the Database

- Import the ```data.sql``` file in your Database administrator.
- The file is in the repo

## Using the app

### Start server

In the terminal, start the server.

```
$ php bin/console server:run

```

### Load the API 🎉🍻

The API is running and can be use
