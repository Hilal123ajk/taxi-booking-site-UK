# Online Taxi Booking Site 🚖
Welcome to the Online Taxi Booking Site repository! This web application allows users to conveniently book a taxi online. Users can select their pickup and drop-off locations using Google Autocomplete API, obtain a price quote based on the distance calculated using the Google Matrix API, choose a preferred car, and complete the booking process by making a payment using Stripe.

## Developer Guide

To set up and run the Online Taxi Booking Site locally on your machine, please follow these steps:

Clone this repository to your local machine using the following command:

Clone it or download it in a .zip file.
git clone https://github.com/Hilal123ajk/taxi-booking-site-UK
Navigate to the project directory with the below command hit enter :
<pre>
php -S localhost:8080
</pre>

**⚠️ Warning:** If you assign ports other than 8080 Thank You page will not Work always give 8080.

### Database Setup

To set up the database for the Online Taxi Booking Site, please follow these steps:

Create a new MySQL database name **taxi-booking** in PHPMyAdmin.

And import database.sql located in the Database folder.

Start the local PHP development environment (e.g., XAMPP, WAMP)


## Usage

On the home page, enter your pickup and drop-off locations by typing in the respective input fields. As you type, the Google Autocomplete API will provide suggestions to help you select the desired locations.

After selecting the pickup and drop-off locations, click on the "Get Quote" button to calculate the distance between the locations using the Google Matrix API. The estimated fare will be displayed based on the distance.

Next, choose your preferred car from the available options.

Click on the "Complete Booking" button to proceed to the payment step.

You will be redirected to the Stripe payment page, where you need to enter your card details and click "Pay" to complete the booking process.

## Technologies Used

The Online Taxi Booking Site is built using the following technologies:

#### PHP: 
The server-side scripting language is used for backend functionality.
#### MySQL: 
The relational database management system is used to store application data.
#### JavaScript: 
The programming language used for client-side functionality.
#### Tailwind CSS: 
A utility-first CSS framework for styling web pages.
#### APIs Used
The Online Taxi Booking Site integrates with the following APIs:

Google Autocomplete API: Used to provide location suggestions during address input.
Google Matrix API: Utilized for calculating the distance between pickup and drop-off locations.
Stripe API: Used to process secure payments.
