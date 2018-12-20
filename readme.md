# Parking lot management system

Parking lot management system is a backend application that aims to manages vehicles within a parking lot.
  

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

PHP between 5.6.4 & 7.1.*  
OpenSSL PHP Extension  
PDO PHP Extension  
Mbstring PHP Extension  
Tokenizer PHP Extension  
XML PHP Extension  

### Installing

1. Clone GitHub repo for this project locally
2. Cd into the project directory
3. Install Composer Dependencies by running composer install
4. Create a copy of your .env file by runing cp .env.example .env; Then fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database that you will create later
5. Generate an app encryption key by running: php artisan key:generate
6. Create an empty database with the same name provided in the .env file 
7. Migrate the database : php artisan migrate
8. Seed the database by running:  php artisan db:seed (This step is necessary fot testing the application)

## Running the tests

Run php artisan serve to start the application.

To get the list of all vehicles generated bu the db:seed go to: 
http://127.0.0.1:8000/vehicle/getall

To get the parking lot status visit:
http://127.0.0.1:8000/parkinglot/getstatus

Now let's try to park a car, pick a vehicle lisense randomly from the list then open
http://127.0.0.1:8000/vehicle/park/{lisence} 
For example : http://127.0.0.1:8000/vehicle/park/ZXjynNMgfV

To unpark a vehicle: 
http://127.0.0.1:8000/vehicle/park/{lisence} 





## Authors

* **Mohamed Assil Ben Amor** 

