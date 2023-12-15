build:
	docker compose build
up:
	docker compose up -d
down:
	docker compose down
destroy:
	docker compose down --rmi all --volumes --remove-orphans
ps:
	docker compose ps
app:
	docker exec -it app /bin/bash
db:
	docker exec -it db /bin/bash
web:
	docker exec -it web /bin/bash
