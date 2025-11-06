.PHONY: install run
all: run

install: .env
	composer install
	php artisan key:generate

run:
	php artisan serve &

run-fresh:
	php artisan migrate:fresh --seed
	php artisan serve &

.env:
	@if [ ! -f .env ]; then cp .env.example .env; fi

migrate-force:
	php artisan migrate --force

make-mail-clas:
	php artisan make:mail $(name) --markdown=emails.$(name)
