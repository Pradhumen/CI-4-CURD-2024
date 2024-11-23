<<<<<<< HEAD
# CI-4-CURD-2024
CI 4 CURD 2024
Install all dependencies with this command
"Composer Update" using PHP 8.2

**Create Controller:**
To create a new controller, use the command:
php spark make:controller ControllerName
(To create a RESTful controller with default methods like index, show, create, etc., use the -r flag):
php spark make:controller ControllerName -r

**Create Controller:**
To create a new controller, use the command:
php spark make:controller ControllerName
(To create a RESTful controller with default methods like index, show, create, etc., use the -r flag):
php spark make:controller ControllerName -r

**Create Model:**
To generate a new model, use:
php spark make:model ModelName

**Create Migration:**
To generate a migration file, use the command:
php spark make:migration MigrationName
(To create a migration for a specific table, add the --table=table_name option):
php spark make:migration MigrationName --table=table_name

**Create Seeder:**
To generate a seeder (used for populating the database with test data), use:
php spark make:seeder SeederName

**Create Filter:**
To create a filter (used for intercepting HTTP requests), use:
php spark make:filter FilterName

**Create Command:**
To generate a custom CLI command, use the command:
php spark make:command CommandName

**Create Entity:**
To create an entity (useful in ORM models), run:
php spark make:entity EntityName

**Run Migration:**
After creating a migration, apply it to the database using:
php spark migrate

**Rollback Migration:**
To rollback the most recent migration batch, use:
php spark migrate:rollback

**Run Seeder:**
To run a seeder and populate the database with data, use:
php spark db:seed SeederName

**Create View:**
There is no specific spark command to create views in CI4. You need to manually create them in the app/Views directory.
To generate a new model, use:
php spark make:model ModelName

**Create Migration:**
To generate a migration file, use the command:
php spark make:migration MigrationName
(To create a migration for a specific table, add the --table=table_name option):
php spark make:migration MigrationName --table=table_name

**Create Seeder:**
To generate a seeder (used for populating the database with test data), use:
php spark make:seeder SeederName

**Create Filter:**
To create a filter (used for intercepting HTTP requests), use:
php spark make:filter FilterName

**Create Command:**
To generate a custom CLI command, use the command:
php spark make:command CommandName

**Create Entity:**
To create an entity (useful in ORM models), run:
php spark make:entity EntityName

**Run Migration:**
After creating a migration, apply it to the database using:
php spark migrate

**Rollback Migration:**
To rollback the most recent migration batch, use:
php spark migrate:rollback

**Run Seeder:**
To run a seeder and populate the database with data, use:
php spark db:seed SeederName

**Create View:**
There is no specific spark command to create views in CI4. You need to manually create them in the app/Views directory.


=======
# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
>>>>>>> 5ca58cf (Initial push)
