This project is a PHP-based E-Commerce Management System that simulates the core functionality of an online store. It enables users to browse products, manage a shopping cart, and place orders, while providing an admin interface to control products, users, and operations.

Built to demonstrate real-world backend and business logic, this project combines technical implementation with practical use cases from modern e-commerce platforms.

Features
User Functionality
User registration and login system
Browse and view products
Add and remove items from the cart
Place and track orders

Admin Functionality
Add, update, and delete products
Manage inventory
View and manage user activity
Handle customer orders

Key Concepts Demonstrated
Full CRUD operations (Create, Read, Update, Delete)
PHP session management and authentication
Dynamic content rendering using PHP
MySQL database integration
Basic system design for e-commerce workflows

Tech Stack
Backend: PHP
Frontend: HTML, CSS
Database: MySQL
Server: XAMPP / WAMP

Railway deployment notes

- The PHP app reads Railway MySQL variables automatically from `MYSQLHOST`, `MYSQLPORT`, `MYSQLUSER`, `MYSQLPASSWORD`, `MYSQLDATABASE`, or `MYSQL_URL`.
- Railway start command is configured in `railway.json` as:
  `php -S 0.0.0.0:$PORT -t public_html`
- After adding a Railway MySQL service, import `database_schema.sql` into that database before opening the app.
