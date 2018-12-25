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

(If you don't want to install the applicatio but you want to test it you can go directly the test section where you can find how to test the already deployed version of the application )

1. Clone GitHub repo for this project locally
2. Cd into the project directory
3. Install Composer Dependencies by running composer install
4. Create a copy of your .env file by runing cp .env.example .env; Then fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database that you will create later
5. Generate an app encryption key by running: php artisan key:generate
6. Create an empty database with the same name provided in the .env file 
7. Migrate the database : php artisan migrate
8. Seed the database by running:  php artisan db:seed (This step is necessary fot testing the application)

## Running the tests

### Locally 

Run php artisan serve to start the application.

To get the list of all vehicles generated by the db:seed go to: 
http://127.0.0.1:8000/vehicle/getall

To get the parking lot status visit:
http://127.0.0.1:8000/parkinglot/getstatus

Now let's try to park a car, pick a vehicle lisense randomly from the list then open
http://127.0.0.1:8000/vehicle/park/{lisence} 
For example : http://127.0.0.1:8000/vehicle/park/ZXjynNMgfV

To unpark a vehicle: 
http://127.0.0.1:8000/vehicle/leave/{lisence} 

### Remotly 

To make it easy for you to test the application I already deployed the application. 

To get the list of all vehicles go to: 
http://parkinglot.tk/vehicle/getall

To get the parking lot status visit:
http://parkinglot.tk/parkinglot/getstatus

Now let's try to park a car, pick a vehicle lisense randomly from the list then open
http://parkinglot.tk/vehicle/park/{lisence} 
For example : http://parkinglot.tk/vehicle/park/nzj7OnBjce

To unpark a vehicle: 
http://127.0.0.1:8000/vehicle/park/{lisence} 
For example : http://parkinglot.tk/vehicle/leave/nzj7OnBjce


### Execution scenarion : 

First let's check the status of the parking: 

![alt text](https://imgur.com/PNUxevf.png)

As we can see all the parking slots are empty. 

Now let's get the list of all the vehicles 

![alt text](https://imgur.com/aAi5KHr.png)

We have 10 vehicles ! let's try to park the 3rd vehicle ( which is a car since its size is equal to 2 ) 
Normally we can park the car since we have 10 empty medium slots. The licence number of the car is lP8p7DcJbB, so we use this link. 
http://parkinglot.tk/vehicle/park/lP8p7DcJbB

![alt text](https://imgur.com/QYCA2HJ.png)

We got this messaage "Vehicle parked successfully" so everything went okay. Before cheking the park status let's try to park the same car again and see what we can get.

![alt text](https://imgur.com/z8UyZFx.png)

We got a message saying that the car is already parked.
Now let's check the parking status and finally unpark the car.

http://parkinglot.tk/parkinglot/getstatus gives us 

![alt text](https://imgur.com/1ZMt5rq.png)

and finally we can unpark the car using http://parkinglot.tk/vehicle/unpark/lP8p7DcJbB to get 

![alt text](https://imgur.com/3d8ozNo.png)



## Authors

* **Mohamed Assil Ben Amor** 

