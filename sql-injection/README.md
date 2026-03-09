# SQL Injection Lab

This lab demonstrates a basic SQL Injection vulnerability in a PHP login system.

The purpose of this lab is to understand how improper handling of user input in SQL queries can allow attackers to bypass authentication.

## Vulnerability

The vulnerable login page directly includes user input in the SQL query without validation or prepared statements.

Example vulnerable query:

SELECT * FROM users WHERE username='$username' AND password='$password'

Because user input is inserted directly into the query, an attacker can manipulate the SQL logic.

### Example Attack

Payload:

' OR '1'='1

This payload makes the SQL condition always true, which can allow login without valid credentials.

## Files

db.php
Handles the database connection.

login_vulnerable.php
Login page that contains the SQL Injection vulnerability.

login_secure.php
Secure login page using prepared statements to prevent SQL Injection.

users.sql
SQL file used to create the users table and insert test data.

## How to Run the Lab

1. Install a local PHP environment (e.g., XAMPP).
2. Copy the project folder into the `htdocs` directory.
3. Start Apache and MySQL.
4. Create a database named `cyberlab`.
5. Import the `users.sql` file into the database.
6. Open the vulnerable login page in your browser.

Example:

http://localhost/web-security-labs/sql-injection/login_vulnerable.php

## Purpose

This lab helps demonstrate:

* How SQL Injection works
* How authentication bypass attacks occur
* How prepared statements prevent SQL Injection

## Disclaimer

This project is intentionally vulnerable and created for educational purposes only.

Do not deploy this code on production servers.

