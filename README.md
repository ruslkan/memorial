## Introduction

Web catalog of monuments with a database. Implemented a filter by category, a calculator of the total cost for the selected parameters.

Implemented on:

Laravel 8
Voyager
Vue 2 + VueRouter + VueX

## Use

First, make sure you have [Docker](https://docs.docker.com/) and [Docker Compose](https://docs.docker.com/compose/install/) installed on your system.

1. Clone this repo into your new project folder:

    ```sh
    git clone https://github.com/ruslkan/memorial.git your-folder-name
    ```

2. Go to the your-folder-name using `cd` command on your terminal

    ```bash
    cd your-folder-name
    ```

3. Rename the `.env.example` file to `.env`.

    ```bash
    cp .env.example .env
    ```

4. Edit the .env file and provide data for connecting to the database.

    ```sh
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=memorial_db // yourdatabase, create if not exist
    DB_USERNAME=root // user for database by default is root
    DB_PASSWORD= // password for database by default is : empty
    ```

5. Installing Composer Dependencies

    ```sh
    docker run --rm \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
    ```

6. Start Sail

    ```sh
    ./vendor/bin/sail up -d
    ```

7. Then generate key

    ```sh
    ./vendor/bin/sail php artisan key:generate
    ```

8. Run Migrations

    ```sh
    ./vendor/bin/sail php artisan migrate
    ```

9. Run Seeder

    ```sh
    ./vendor/bin/sail php artisan db:seed --class=VoyagerDeploymentOrchestratorSeeder
    ```

10. NPM install

    ```sh
    ./vendor/bin/sail npm install
    ```

11. Run watcher

    ```sh
    ./vendor/bin/sail npm run watch
    ```

    open: http://localhost:3000
