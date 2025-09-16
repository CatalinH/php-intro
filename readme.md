# Introducere in PHP

### Ridicarea unui container de php-apache cu docker:

`docker run -d -p 80:80 --name my-apache-php-app -v "$PWD":/var/www/html php:8.2-apache`

### Conectarea la un terminal interactiv in containerul de php:

`docker exec -it my-apache-php-app bash`

### Rularea unui script php in container:

`php salut.php`


### Composer

https://getcomposer.org/download/