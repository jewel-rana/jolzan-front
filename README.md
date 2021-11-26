## Jolzan
## Installation

- First clone the repository from github
- Set your .env file with necessary credentials, database, email configuration etc.
- CD into directory and run composer install / composer update
- Run php artisan migrate && php artisan db:seed
- Run php artisan serve to start your local server

## Testing

- Configure PHPUnit Testing database
- And Run vendor/bin/phpunit or phpunit
