THIS_FILE := $(lastword $(MAKEFILE_LIST))
.PHONY: build up start shell
build:  ## Will install the dependencies in the vendor folder with composer docker image
	docker-compose -f docker-compose.yaml build $(c)
up:  ## Will install the dependencies in the vendor folder with composer docker image
	docker-compose -f docker-compose.yaml up -d $(c)
start:  ## Will install the dependencies in the vendor folder with composer docker image
	docker-compose -f docker-compose.yaml start $(c)
.PHONY: start

shell:  ## Will install the dependencies in the vendor folder with composer docker image
	docker exec -it verso-api-1 bash