# Load .env file if it exists
#include .env

up:
	@docker-compose up -d

stop:
	@docker-compose stop

down:
	@docker-compose down

status:
	@docker-compose ps

logs:
	@docker-compose logs -f

php:
	@docker-compose exec php-fpm bash

mysql:
	@docker exec -ti docker-project-database mysql --user=$(DB_USERNAME) --password=$(DB_PASSWORD) --database=$(DB_DATABASE)

migrate:
	@docker exec -it teste-dev-php_backend_1 php artisan migrate

seed:
	@docker exec -it teste-dev-php_backend_1 php artisan db:seed --class=CarroSeeder

serve:
	@docker exec -it teste-dev-php_backend_1 php artisan serve --host=0.0.0.0 --port=8080

