clean:
	composer format

test:
	composer check
	composer phpstan
	composer test
