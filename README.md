# PHP - Lumen - RESTful API
Simple RESTful API using Lumen with CRUD functions and relations.
The query used in this project is mixed up between Eloquent ORM & Query Builder.

## Requirements
1. XAMPP

## Endpoints
1. Movies
   - **GET** All
     > https://localhost:port/api/movie
   - **GET** Specific
     > https://localhost:port/api/movie/{id}
   - **GET** Review
     > https://localhost:port/api/movie/{id}/review
   - **POST**
     > https://localhost:port/api/movie
   - **PUT**
     > https://localhost:port/api/movie/{id}
   - **DELETE**
     > https://localhost:port/api/movie/{id}

2. Reviews
   - **GET** All
     > https://localhost:port/api/review
   - **GET** Specific
     > https://localhost:port/api/review/{id}
   - **POST**
     > https://localhost:port/api/review
   - **PUT**
     > https://localhost:port/api/review/{id}
   - **DELETE**
     > https://localhost:port/api/review/{id}

3. Users
   - **GET** Specific
     > https://localhost:port/api/user/{id}
   - **PUT**
     > https://localhost:port/api/user/{id}
   - **DELETE**
     > https://localhost:port/api/user/{id}

4. Sign In
   - **POST**
     > https://localhost:port/api/singin

5. Sign Up
   - **POST**
     > https://localhost:port/api/signup

## How to Use
1. Clone this repository to your desired location.
2. Run `php -S localhost:8000 -t public`.
3. Fire-up Postman.
4. Do-what-you-want-with-it!
