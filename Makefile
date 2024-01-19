test-docker:
	docker-compose run web php artisan test

test:
	cd scambia-api && php artisan test