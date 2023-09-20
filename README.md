URL Shortener Project
This URL Shortener project is a web application built with Laravel that allows users to shorten long URLs into shorter, more manageable links. It provides a user-friendly interface for creating and managing short URLs, as well as tracking statistics for each shortened link.

Project Features
URL Shortening: Quickly shorten long URLs into easy-to-share links.
Custom Short Codes: Customize short URLs for branding and easy recall.
Statistics Tracking: Monitor the performance of your short URLs with detailed statistics.
User Authentication: Secure user registration and login system (Advanced feature).
Database Persistence: Data is stored in a database for reliable storage.
Project Team
This project was successfully completed by:

Rajan Joriya: Lead Developer
Getting Started
Follow these steps to serve the project locally using Laravel:

Clone the Repository:

git clone https://github.com/your-username/url-shortener.git
cd url-shortener
Install Dependencies:

composer install
Create a Database:

Create a new MySQL database for the project.
Update the .env file with your database credentials.
Migrate the Database:

php artisan migrate
Generate Application Key:


php artisan key:generate
Start the Development Server:


php artisan serve
Access the Application:
Open your web browser and access the URL: http://localhost:8000 (or the URL provided by php artisan serve).

<!-- Register or Login:
Create a user account or log in to start using the URL shortener. -->

Shorten URLs:
Use the web interface to shorten your URLs and manage your shortened links.

View Statistics:
Check the statistics for each shortened link to track its performance (Advanced feature).


