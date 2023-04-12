# Spark Foundation - Web Development Internship
In this internship I was given 2 problem statements and asked to build separate websites using the technologies of my choice.  
For both the websites I used PHP for the backend and HTML, CSS and Bootstrap for the frontend.  

## First Problem Statement - Banking Site
This is a simple banking system with no login system where one can view all customers and transact among them.  
This website just gives an idea of how banking websites work.  

To have a glimpse of how the website works have a look at this https://youtu.be/C1Rh386DFzQ

### Live Link
Click on this link http://pranith-banking.great-site.net/ and let me know how it is. Cheers!

### Steps to run the application
1. First and foremost install Xampp in your local machine.
2. Once its done download the files in this repo into a folder (you can name the folder as per your wish) 'Banking-Site' created mandatorily in the 'htdocs' folder. You can find it in C:\xampp.
3. Open the folder in VS code or anyother editor of your choice if your interested to check the source code.
4. Now open xampp app and click on Start button for both Apache and MySQL.
5. Click admin button in the MySQL row. This opens a dashboard where the database can be created.
6. On the left column you can find a new button to create a new database. Name the database as 'banking' and click GO. Congo you successfully created the database.
7. Now click on the banking database and click import and choose 'banking.sql' from this folder. This will create all the required tables of the website.
8. You are all set. Now just type this url 'http://localhost/Banking-Site/index.php' in the browser and you will land on the index page of the banking webiste.
9. On the transfer tab you could see all the customers and an option to transfer and on the transactions tab you could see all the transactions taken place.

### Snapshots
#### Home Page
![Screenshot (1865)](https://user-images.githubusercontent.com/65860350/231559413-075e3dba-8070-4891-a605-6c69601f9a82.png)
![Screenshot (1866)](https://user-images.githubusercontent.com/65860350/231559439-77ef6763-e79c-4745-a61c-2811a1aa17c7.png)
![Screenshot (1867)](https://user-images.githubusercontent.com/65860350/231559472-8e95d217-cea5-420f-a934-a42fa1108a6c.png)
#### Transfer Tab
![Screenshot (1868)](https://user-images.githubusercontent.com/65860350/231559548-ac115d84-4a6f-43b9-853a-a5a4fbc75614.png)
#### Transfer Form & Confirmation
![Screenshot (1870)](https://user-images.githubusercontent.com/65860350/231559640-b19fa2cd-766f-4320-8e39-147a45c17963.png)
![Screenshot (1871)](https://user-images.githubusercontent.com/65860350/231559671-a4960003-de01-4f00-b8b2-aeb37fd6d591.png)
#### Transactions Tab
![Screenshot (1869)](https://user-images.githubusercontent.com/65860350/231559769-35198ee9-460e-4323-a295-588e2db9d1b9.png)

## Second Problem Statement - Payment Integration
This is a donation website in which payment gateway is integrated and accepts payments as tests using Razorpay.  

To have a glimpse of how the website works have a look at this https://youtu.be/q-PA44A9Z64

### Live Link 
Click on this link http://donate-pranith.great-site.net/ and let me know how it is. Cheers!

### Steps to run the application
1. First and foremost install Xampp in your local machine.
2. Once its done download the files in this repo into a folder (you can name the folder as per your wish) 'Donate-Site' created mandatorily in the 'htdocs' folder. You can find it in C:\xampp.
3. Open the folder in VS code or anyother editor of your choice if your interested to check the source code.
4. Now open xampp app and click on Start button for both Apache and MySQL.
5. You are all set. Now just type this url 'http://localhost/Donate-Site/index.html' in the browser and you will land on the index page of the webiste.
6. On clicking the donate button a form pops up and after filling it you will be redirected to the razorpay gateway to commit your donations.

### Snapshots
#### Home Page
![Screenshot (1858)](https://user-images.githubusercontent.com/65860350/231564298-e7654144-0290-4131-bbb6-e2643e453d06.png)
#### Donation Form
![Screenshot (1860)](https://user-images.githubusercontent.com/65860350/231564362-430f9028-b6ee-4b4d-865f-94611aa3e88c.png)
#### Razorpay Gateway
![Screenshot (1861)](https://user-images.githubusercontent.com/65860350/231564430-13b95631-a660-48cd-a33a-1346e66654c0.png)
#### Payment Confirmation
![Screenshot (1863)](https://user-images.githubusercontent.com/65860350/231565319-acc5a07d-d419-49cb-82fe-c70d65ffbeab.png)
#### Back to the website
![Screenshot (1864)](https://user-images.githubusercontent.com/65860350/231564571-c08a762a-4e7c-483c-87a1-50f0a60a8119.png)
