# Tasks for Today Management System

This is a basic CodeIgniter 4 project based on the MVC and database lessons from TA1 and TA2.

## Pages

- `/` - tasks scheduled for today
- `/tasks` - complete task list ordered by date
- `/profile` - one demo user profile
- `/about` - system and developer information

## Local setup with XAMPP

1. Extract the folder as `C:\xampp\htdocs\tasks-for-today`.
2. Start Apache and MySQL in XAMPP.
3. Open `http://localhost/phpmyadmin`.
4. Create a database named `tasks_for_today`.
5. Select the database, click Import, and import `database/tasks_for_today.sql`.
6. Open `http://localhost/tasks-for-today/`.

The SQL import creates the required tables and inserts eight tasks across five dates plus one demo user. Import it only once.

## Before submission

- Change the developer name in `app/Views/about.php`.
- Change the demo user in `database/tasks_for_today.sql` before importing if required.
- Replace the local database settings in `.env` with the hosted database settings.
- For GitHub, keep `.env` private and include `.env.example` so others can set up the project.
