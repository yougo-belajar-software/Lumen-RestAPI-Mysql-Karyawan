# PHP - Lumen - RESTful API
Simple RESTful API using Lumen with CRUD functions and relations.
The query used in this project is mixed up between Eloquent ORM & Query Builder.

## Requirements
1. Composer
2. Lumen
3. XAMPP

## Endpoints
1. Movies
   - **GET** All
     > http://localhost:port/api/movie
   - **GET** Specific
     > http://localhost:port/api/movie/{id}
   - **GET** Review
     > http://localhost:port/api/movie/{id}/review
   - **POST**
     > http://localhost:port/api/movie
   - **PUT**
     > http://localhost:port/api/movie/{id}
   - **DELETE**
     > http://localhost:port/api/movie/{id}
2. Reviews
   - **GET** All
     > http://localhost:port/api/review
   - **GET** Specific
     > http://localhost:port/api/review/{id}
   - **POST**
     > http://localhost:port/api/review
   - **PUT**
     > http://localhost:port/api/review/{id}
   - **DELETE**
     > http://localhost:port/api/review/{id}
3. Users
   - **GET** Specific
     > http://localhost:port/api/user/{id}
   - **PUT**
     > http://localhost:port/api/user/{id}
   - **DELETE**
     > http://localhost:port/api/user/{id}
4. Sign In
   - **POST**
     > http://localhost:port/api/singin
5. Sign Up
   - **POST**
     > http://localhost:port/api/signup

## How to Use
1. Clone this repository to your desired location.
2. Create database and configure it on `.env` file.
3. Run migration `php artisan migrate`.
4. Run server `php -S localhost:8000 -t public`.
5. Fire-up Postman.
6. Do-what-you-want-with-it!
