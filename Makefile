EXEC := docker-compose

install:
	chmod o+w -R website/writable
	$(EXEC) build
	$(EXEC) run --rm php composer install -d /website --no-dev

run:
	$(EXEC) up -d

stop:
	$(EXEC) stop

clean:
	$(EXEC) down --rmi local
