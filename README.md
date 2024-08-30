# E-Commerce Form

This project is a simple e-commerce form built using HTML, PHP, and MySQL. It allows users to submit and search customer information. The form uses Bootstrap for responsive design.

## Features
- Insert customer information into a database.
- Search for customer information using customer ID.

## Technologies Used
- HTML
- PHP
- MySQL
- Bootstrap

## Setup and Run the Project

### Prerequisites
- A local web server environment like XAMPP, WAMP, or MAMP.
- Basic knowledge of PHP and MySQL and how to use a local server.

### Step 1: Clone the Repository
```sh
git clone https://github.com/your-username/php-mysql-e-commerce.git
cd php-mysql-e-commerce
```

### Step 2: Set Up the MySQL Database
1. Start your local server (Apache and MySQL) using XAMPP, WAMP, or MAMP.
2. Open your web browser and navigate to [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
3. Create a new database named `e-commerce`.
4. Inside the `e-commerce` database, create a table named `customers` with the following columns:
   - `customer_id` (VARCHAR)
   - `first_name` (VARCHAR)
   - `last_name` (VARCHAR)
   - `email` (VARCHAR)
   - `address` (VARCHAR)

### Step 3: Update Database Connection
1. Open `phpcode.php` and `search.php` in your text editor.
2. Ensure that the database connection details are correct:
   ```php
   $connection = mysqli_connect("localhost", "root", "", "e-commerce");
   ```
### Step 4: Run the Project

1. Place the project files in your server's root directory:
   - For XAMPP: 
     ```sh
     C:\xampp\htdocs\php-mysql-e-commerce\
     ```
   - For MAMP: 
     ```sh
     Applications/MAMP/htdocs/php-mysql-e-commerce/
     ```
  
2. Open your web browser and navigate to:
   ```sh
   http://localhost/e-commerce-form/index.html
   ```
3. Use the form to insert customer data or search for existing customer data by customer_id.
   
## License
This project is licensed under the MIT License. See the LICENSE file for details.
