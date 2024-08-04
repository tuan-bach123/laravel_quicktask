initial Laravel app

APP_KEY generated in .env file
APP_KEY=base64:I/dVi8a9JXjm5/tzNn0Q++m117chEE5YeJWVyBQ7R5w=
This key has been change to a new one using "php artisan key:generate"

Database has been change from default "sqlite" to mysql
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=example_DB
DB_USERNAME=root
DB_PASSWORD=**********
After change setting use "php artisan migrate" to migrate new database