## Customers - API REST

This is the API to register customers to meet the Omnichannel concept.

You can:

- register customers
- list customers


A PHP Laravel 9 API, including many used Laravel features.

This first version does not have a security token or plugin, but it does have some validations to register.

It has validations, made in the own html, as required, patterns, types, and also with masks for fields of zip, telephone, uf.

Zip code validation using viacep api (https://viacep.com.br/), filling all address fields with zip code correctly, and when incorrect, display alert to user.

## Technology

Here are the technologies used in this project.

- Composer (for dependencies)
- Laravel
- MySql
- Docker (with Laravel Sail)
- PHP8
- jquery
- bootstrap

## Starting

- First you need to clone this repository! (Do not change the folder name)
- To install dependencies:
> $ php composer.phar install

* .Env configuration:
  Rename .env.example to .env.
* Run the docker container:
> $ docker-compose up -d
* Or using sail
> $ ./vendor/bin/sail up

* Run ARTISAN commands to migrate

> $ php artisan migrate Or ./vendor/bin/sail migrate

## How to use

As rotas definidas são:

- GET: /api/customers (list)

- GET: /api/customers/create (create)

- GET: /api/customers/store (save)

## Versioning

1.0.0.0

## Author

* **Clévison barbosa silva vilela**:
  
    * [GitHub](https://github.com/clevisonbarbosa)
    
    * [LinkedIn](https://www.linkedin.com/in/clévison-barbosa-9b1803203/)





