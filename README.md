# Laravel-StudentsCRUD
Students CRUD with Laravel and MySQL

## Cloning Instructions
1. Clone repository from your local machine.
2. Using your bash/cmd/terminal, locate the project directory.
3. Run `composer update`.
4. Head to your preferred code editor and look for **.env.example**.
5. Duplicate this file and rename it to **.env**.
6. Open the newly duplicated file and locate the database connection properties.
7. Follow the steps under **Database Configuration**.
8. Using your bash/cmd/terminal, run `php artisan migrate`.
9. To install NPM scripts, run `npm install`. 
10. To compile sass and your javascripts, run `npm run dev`.

## Database Configuration
The `.env` by default has the following values:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

```

Replace the values above with the database credentials corresponding to your local or development environment. 

## Notes
*This project is not intended for production purposes. This however, a project that shows how Laravel communicates with MySQL*
