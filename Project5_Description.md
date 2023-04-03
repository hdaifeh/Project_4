I have created branch for the project called "module5-project". 

Implement authentication to the routes for creating, editing, and deleting posts using JWT. I used the library : firebase/php-jwt to handle JWT.
I Installed the firebase/php-jwt library in my project using Composer.
composer require firebase/php-jwt

Then i Generate a secret key that will be used to sign and verify JWT tokens. https://www.lastpass.com/password-generator.
This code defines a class called Auth that has two static methods: createToken and validateToken. createToken takes a user ID as input and returns a JWT token that includes the user ID as a payload. validateToken takes a JWT token as input and returns the user ID if the token is valid, or null if it is not.
I have Created a new file in my project called auth.php
then I Modify my REST API routes to require authentication. the route that creates a new post, I modify it as the file: Modify_REST_api.php
This code checks if the user is authenticated by getting the JWT token from the Authorization header and validating it using the Auth class. If the token is not valid, the route returns a 401 Unauthorized error.

finally,I Modified my client application to include the JWT token in the Authorization header for requests that require authentication. I included the token in a Bearer token in the Authorization header:
Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyX2lkIjoxMjN9.x7lNDvZzJ7ASzyBAt2mF7CceKbl1O-J7V8vbIP0uSwA


Change the database implementation from PDO to Doctrine ORM. Doctrine ORM is a powerful object-relational mapping (ORM) tool that can simplify database operations. You can follow the Doctrine documentation to set up the ORM for your project.

Write unit tests for at least one class using a testing framework like PHPUnit. You can write tests for any part of your application, such as the authentication or database operations.

Implement custom error messages and logs to provide better error handling for your REST API. You can use a logging library like Monolog to write logs.

Push  application to your GitHub account, including the file .github/workflows for continuous integration. I can use GitHub Actions to automate your testing and deployment process.

