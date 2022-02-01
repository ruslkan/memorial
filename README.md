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
    cd ~/your-folder
    git clone https://github.com/ruslkan/memorial.git memorial
    ```

2. Rename the `.env.example` file to `.env`. Edit the .env file and provide data for connecting to the database.

    ```sh
    cp .env.example .env
    ```

3. Installing Composer Dependencies

    ```sh
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer update
    ```

### License

Please use and re-use however you want.
