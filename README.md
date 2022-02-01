## Introduction

Web catalog of monuments with a database. Implemented a filter by category, a calculator of the total cost for the selected parameters.

Implemented on:

Laravel 8
Voyager
Vue 2 + VueRouter + VueX

### Use

First, make sure you have [Docker](https://docs.docker.com/) and [Docker Compose](https://docs.docker.com/compose/install/) installed on your system.

1. Clone this repo into your new project folder:

    ```sh
    cd ~/work-folder
    git clone https://github.com/ruslkan/memorial.git your-folder-name
    ```

2. Go to the your-folder-name using cd command on your terminal

    ```sh
    cd your-folder-name
    ```

3. Rename the `.env.example` file to `.env`. Edit the .env file and provide data for connecting to the database.

    ```sh
    cp .env.example .env
    ```

4. Installing Composer Dependencies

    ```sh
    docker run --rm \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
    ```

5. Start Sail

    ```sh
    ./vendor/bin/sail up -d
    ```

6. NPM install

    ```sh
    ./vendor/bin/sail npm install
    ```

7. run watcher

    ```sh
    ./vendor/bin/sail npm run watch
    ```

    open http://localhost:3000

### License

Please use and re-use however you want.
