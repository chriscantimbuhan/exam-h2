# H2 Software Consulting Services Coding Exam

## Getting Started

## Requirements:
- MySql v8^
- PHP v7.4^
- NodeJs v20.*
- Composer v2.*
- GIT v2.*

## Tech Stack:
- PHP - Laravel Framework
- HTML - Blade Templating
- CSS - Bootstrap
- Javascript - JQuery
- MySql

## Installation

Clone the project to your project folder

```sh
git clone https://github.com/chriscantimbuhan/exam-h2.git {project_folder}
```

Navigate to the project folder via terminal.
```sh
cd {project_folder}
```

Create your MySql database for the project on your preference.

Install composer packages.
```sh
composer install
```

You should have a working artisan command by now. Test it by running the command below, it will display  all available artisan options:
```sh
php artisan
```

Install node modules.
```sh
npm install
```

Copy or move .env.sample to .env
```sh
cp .env.example .env
```

Generate application key
```sh
php artisan key:generate
```

Configure .env depending on your machine. Especially the database credentials.
- DB_DATABASE
- DB_USERNAME
- DB_PASSWORD

Run database migrations:
```sh
php artisan migrate
```

Populate needed data for the system to work:
```sh
php artisan exam:questions-and-choices:seed
```

## TO TEST
```sh
php artisan serve
```

Now access the link via browser to check:
```sh
http://127.0.0.1:8000/
```
OR
```sh
http://localhost:8000/
```
