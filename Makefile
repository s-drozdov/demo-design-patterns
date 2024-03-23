SHELL := /bin/bash

## Setup project from docker app container
.PHONY: docker-setup
docker-setup: create-env \
              build \
              up \
              composer-install \
              enter

## Building images
.PHONY: build
build:
	docker compose build --build-arg PUID=$$(id -u) --build-arg PGID=$$(id -g)

## Running containers
.PHONY: up
up:
	docker compose up -d
	
## Stopping containers
.PHONY: down
down:
	docker compose down

## Stopping containers and network
.PHONY: stop
stop:
	docker compose stop

## Prepare ENV
.PHONY: create-env 
create-env:
	cp .env.example .env;

## run composer from host
.PHONY: composer-install
composer-install:
	{ \
        source .env; \
        docker exec $${APP_NAME}_app composer install; \
	}

## Enter container
.PHONY: enter
enter:
	{ \
        source .env; \
        docker exec -it $${APP_NAME}_app bash; \
	}
