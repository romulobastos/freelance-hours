![Freelance Hours](https://raw.githubusercontent.com/romulobastos/freelance-hours/refs/heads/main/public/logo-freelance-hours.svg)

FreelanceHours is an innovative project designed to connect freelancers with project owners

## Overview

This platform streamlines the process of finding the right developer, making it easier for project owners to bring their visions to life.

## Requirements

- PHP 8.2+
- Laravel 11
- Composer
- SQLite
- Node.js (for frontend assets)

## Installation

### 1. Clone the repository
Open your terminal and run these commands:

    git clone https://github.com/romulobastos/freelance-hours.git
    cd freelance-hours

### 2. Install dependencies
Make sure you have Composer installed. Then run:
    
    composer install

### 3. Create the .env file
If your project includes a `.env.example` file, copy it to create your `.env` file:

    cp .env.example .env

### 4. Set environment variables
Open the `.env` file and set the environment variables, especially the database connection:
    
    DB_CONNECTION=sqlite
    # DB_HOST=127.0.0.1
    # DB_PORT=3306
    # DB_DATABASE=laravel
    # DB_USERNAME=root
    # DB_PASSWORD=

### 5. Generate Application Key
Run the following command to generate the application key:
    
    php artisan key:generate

### 6. Run Migrations and Seeders
If the project requires a database, execute the migrations to create the tables:
    
    php artisan migrate --seed

### 7. Start the Development Server
To run the project, use the following command:
    
    php artisan serve

The Laravel application will typically be available at http://localhost:8000.

### 8. Install Node.js and npm
To enable front-end assets with Laravel, run:

    npm install

And then compile the assets:
    
    npm run dev
