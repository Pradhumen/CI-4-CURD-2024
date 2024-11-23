# CI-4-CURD-2024
CI 4 CURD 2024
Install all dependencies with this command
"Composer Update" using PHP 8.2

Create Controller:
To create a new controller, use the command:
php spark make:controller ControllerName
(To create a RESTful controller with default methods like index, show, create, etc., use the -r flag):
php spark make:controller ControllerName -r

Create Model:
To generate a new model, use:
php spark make:model ModelName

Create Migration:
To generate a migration file, use the command:
php spark make:migration MigrationName
(To create a migration for a specific table, add the --table=table_name option):
php spark make:migration MigrationName --table=table_name

Create Seeder:
To generate a seeder (used for populating the database with test data), use:
php spark make:seeder SeederName

Create Filter:
To create a filter (used for intercepting HTTP requests), use:
php spark make:filter FilterName

Create Command:
To generate a custom CLI command, use the command:
php spark make:command CommandName

Create Entity:
To create an entity (useful in ORM models), run:
php spark make:entity EntityName

Run Migration:
After creating a migration, apply it to the database using:
php spark migrate

Rollback Migration:
To rollback the most recent migration batch, use:
php spark migrate:rollback

Run Seeder:
To run a seeder and populate the database with data, use:
php spark db:seed SeederName

Create View:
There is no specific spark command to create views in CI4. You need to manually create them in the app/Views directory.


