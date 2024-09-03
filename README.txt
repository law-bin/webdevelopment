README for webpagedb
Introduction
This README file provides instructions on how to set up the webpagedb database for the web application. The database contains tables for user management, events, and event requests.

Prerequisites
MySQL Server: Ensure you have MySQL installed and running on your system.
MySQL Workbench: Use MySQL Workbench or another MySQL client to import and manage the database.
Database Credentials: Update your web application with the correct database credentials:
Host: localhost
Username: root
Password: Red1!@#$
Database Name: webpagedb
Database Structure

Tables

admin: Stores admin user details.
events: Stores event information.
requests: Stores event request details.
user: Stores user information including password and reset token data.
Data Columns

admin: id, name, pass, email, isaccess.
events: eid, name, description, type, time, date, CreatedBy, image.
requests: id, name, event_name, description, event_type, event_date, event_time.
user: UserID, Username, Email, Mobile, PasswordHash, CreatedAt, UpdatedAt, reset_token, reset_expiry.
Pre-existing Data

The database dump includes sample data for the admin, events, requests, and user tables.
Setup Instructions
Import Database

Open MySQL Workbench or another MySQL client.
Create a new connection and open a query window.
Copy and paste the SQL script above into the query window.
Execute the script to create the database and tables.
Configure Application

Update your application's database connection settings using the following credentials:
Host: localhost
Username: root
Password: Red1!@#$
Database: webpagedb
Ensure your PHP files are correctly set up to interact with the database.
Testing

Test the connection and data retrieval by accessing the web pages related to user login, event listing, and event requests.
Password Reset Configuration

Ensure that the password reset mechanism works correctly, especially the generation and validation of reset_token and reset_expiry.
Email Functionality

Configure email settings in your application for sending password reset emails. You may need to use a mail server or an external email service provider (e.g., PHPMailer, SendGrid) when deploying the application.
Additional Notes
This setup is for local development. Ensure you update the database credentials and email configurations when moving to a production environment.
Regularly back up your database to prevent data loss.