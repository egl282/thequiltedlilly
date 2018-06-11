build: ## Build the container
	docker build -t tql .
	docker tag tql tql:0.1.0
	docker tag tql tql:0.1
	docker tag tql tql:0
