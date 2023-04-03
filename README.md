https://gitlab.com/ammar.hdaifeh/project_4.git

The API allows users to create posts, categories, and post categories using full OOP paradigms. The API has routes for creating, reading, updating, and deleting posts and categories. The project uses the Model-View-Controller (MVC), Repository, Dependency Injection (DI), and Fluent Interface design patterns to enable modular and decoupled development, maintainability, and reusability.

The Model-View-Controller (MVC) pattern is used to separate the concerns of the application into three interconnected components: the model, the view, and the controller. The Repository pattern provides a way to manage data storage and retrieval in a clean and modular way, while the Dependency Injection (DI) pattern helps achieve loosely coupled software components. Finally, the Fluent Interface pattern is used to create a more readable and intuitive API for constructing objects or calling methods.

The API project has several app routes, including home, OpenAPI, JWT, Posts, and Categories. These routes have different HTTP request methods for creating, reading, updating, and deleting resources.

To install the project, clone the repository using the command git clone git@github... and follow the instructions provided in the project documentation.



Fluent Interface
The Fluent Interface is an object-oriented programming design pattern that allows for a more readable and intuitive API for constructing objects or calling methods. It is also known as a method chaining pattern.

In a Fluent Interface, a series of method calls are chained together in a single statement, with each method returning the object itself or a modified version of it. This allows for a more natural and readable syntax, as the method calls can be read like a sentence or a list of instructions.

Fluent Interfaces are commonly used in libraries and frameworks that provide APIs for building complex objects or executing multiple steps in a sequence. They can improve code readability and reduce errors by making the API more intuitive and easier to understand.

However, Fluent Interfaces can also make the code more complex and harder to debug, especially if the chain of method calls is too long or too nested. Careful design and testing are required to ensure that the Fluent Interface is both readable and maintainable.

App Routes
The API includes the following routes:

Home
[GET] /
OpenApi
[GET] /openapi
JWT
[POST] /jwt
Posts
[POST] /v1/posts/create
[GET] /v1/posts/all
[GET] /v1/posts/{id}
[GET] /v1/posts/getSlug/{slug}
[PUT] /v1/posts/{id}
[DELETE] /v1/posts/{id}
Categories
[POST] /v1/categories/create
[GET] /v1/categories/all
[GET] /v1/categories/{id}
[PUT] /v1/categories/{id}
[DELETE] /v1/categories/{id}
Installation Instructions
To install and run the API on your local machine, follow these instructions:

Clone the repository: git clone https://gitlab.com/ammar.hdaifeh/project_4.git
Install the dependencies: composer install
Copy the .env.example file to .env: cp .env.example .env
Generate the application key: php artisan key:generate
Set up your database connection in the .env file
Run the database migrations: php artisan migrate
Start the server: php artisan serve
After following these steps, the API should be up and running on your local machine.

Home
[GET] /
OpenApi
[GET] /openapi
JWT
[POST] /jwt
Posts
[POST] /v1/posts/create
[GET] /v1/posts/all
[GET] /v1/posts/{id}
[GET] /v1/posts/getSlug/{slug}
[PUT] /v1/posts/{id}
[DELETE] /v1/posts/{id}
Categories
[POST] /v1/categories/create
[GET] /v1/categories/all
[GET] /v1/categories/{id}
[PUT] /v1/categories/{id}
[DELETE] /v1/categories/{id}
Installation Instructions
To install and run the project:

Clone the repository: git clone https://gitlab.com/ammar.hdaifeh/project_4.git 
Move into the project directory: cd Doctrine-API-project
Install the dependencies: composer install
Create the database: bin/console doctrine:database:create
Create the database schema: bin/console doctrine:schema:create
(Optional) Load the fixtures: bin/console doctrine:fixtures:load
Start the server: bin/console server:run
Testing
The project includes a set of automated tests. To run the tests, execute the following command from the project directory:

bash
Copy code
composer test
This will run the PHPUnit test suite and output the results.

Contributing
Contributions to the project are welcome. To contribute:

Fork the project repository
Create a new branch for your changes: git checkout -b my-feature-branch
Make your changes and commit them
Push your changes to your fork: git push origin my-feature-branch
Open a pull request from your fork to the main repository
License
This project is licensed under the MIT License - see the LICENSE file for details.




Home
[GET] /
OpenApi
[GET] /openapi
JWT
[POST] /jwt
Posts
[POST] /v1/posts/create
[GET] /v1/posts/all
[GET] /v1/posts/{id}
[GET] /v1/posts/getSlug/{slug}
[PUT] /v1/posts/{id}
[DELETE] /v1/posts/{id}
Categories
[POST] /v1/categories/create
[GET] /v1/categories/all
[GET] /v1/categories/{id}
[PUT] /v1/categories/{id}
[DELETE] /v1/categories/{id}
Installation Instructions
To install and run the project:

Clone the repository: git clone https://gitlab.com/ammar.hdaifeh/project_4.git 
Move into the project directory: cd Doctrine-API-project
Install the dependencies: composer install
Create the database: bin/console doctrine:database:create
Create the database schema: bin/console doctrine:schema:create
(Optional) Load the fixtures: bin/console doctrine:fixtures:load
Start the server: bin/console server:run
Testing
The project includes a set of automated tests. To run the tests, execute the following command from the project directory:

bash
Copy code
composer test
This will run the PHPUnit test suite and output the results.

Contributing
Contributions to the project are welcome. To contribute:

Fork the project repository
Create a new branch for your changes: git checkout -b my-feature-branch
Make your changes and commit them
Push your changes to your fork: git push origin my-feature-branch
Open a pull request from your fork to the main repository
License
This project is licensed under the MIT License - see the LICENSE file for details