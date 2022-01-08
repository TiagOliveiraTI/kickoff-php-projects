# kickoff-php-projects
Use this repo to start your PHP projects

## Running commands inside docker

### How to run commits?
The commits must follow the [conventional commits](https://www.conventionalcommits.org/en/v1.0.0/)

### Tests commands
Run a test  
. `docker-compose exec app composer test`

Run a test with coverage  
. `docker-compose exec app composer test:coverage`

Run a test with watcher  
. `docker-compose exec app composer test:watch`
