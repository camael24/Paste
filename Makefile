db-install:
	sqlite3 ./Application/Database/base.db < ./Application/Database/base.sql
	chmod 0777 ./Application/Database/base.db

db-reset:
	rm ./Application/Database/base.db

db:
	make db-reset
	make db-install
