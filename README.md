# Introduction

Web catalog of monuments with a database. Implemented a filter by category, a calculator of the total cost for the selected parameters. The calculation of the cost of monuments is based on the cost of the material.

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

    ```sh
    cd your-folder-name
    ```

3. Rename the `.env.example` file to `.env`

    ```sh
    cp .env.example .env
    ```

4. Edit the .env file and provide data for connecting to the database.

    ```sh
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=test_db // yourdatabase, create if not exist
    DB_USERNAME=test // user for database by default is root
    DB_PASSWORD=test // password for database by default is : empty
    ```

5. Installing Composer Dependencies

    ```sh
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer update --ignore-platform-reqs
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
    ./vendor/bin/sail php artisan db:seed --class=VoyagerDatabaseSeeder
    ```

    ```sh
    ./vendor/bin/sail php artisan db:seed
    ```

10. NPM install

    ```sh
    ./vendor/bin/sail npm install
    ```

11. Run Laravel app

    ```sh
    ./vendor/bin/sail npm run watch
    ```

12. Compile components

    ```sh
    ./vendor/bin/sail npm run prod
    ```

---

### Congratulations! You can now run this project

-   open Application: http://localhost:3000
-   open admin: http://localhost:3000/admin (login: test@email.com, password: test)
-   open phpMyAdmin: http://localhost:8081 (user for database by default is root, password for database by default is : empty)

#### License

[MIT license](https://opensource.org/licenses/MIT)
