COMPOSER := $(shell if [ `which composer` ]; then echo 'composer'; else curl -sS https://getcomposer.org/installer | php > /dev/null 2>&1 ; echo './composer.phar'; fi;)
db-install:
	sqlite3 ./Application/Database/base.db < ./Application/Database/base.sql
	chmod 0777 ./Application/Database/base.db

db-reset:
	rm ./Application/Database/base.db

db:
	make db-reset
	make db-install

deploy:
	make db-reset
	rm -rf ./vendor
	rm -rf ./Binairies

install:
	$(COMPOSER) install
	make db

