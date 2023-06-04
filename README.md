
# MetropolisFPLab Project for Circuit de Catalunya 🏎️

This project is part of the MetropolisFPLab initiative, a project of innovation promoted by the Metropolitan Agency of Economic Development of the Metropolitan Area of Barcelona, with the aim of evaluating the talent of vocational training students, bringing them closer to the labor market, fostering the acquisition of key competencies and their employability, all through the methodology of open innovation in a real environment.

The challenge proposed by Circuit de Catalunya is to create a web application that allows them to manage their reservations of the spaces of the circuit. Circuit de Catalunya is a racetrack located in Montmeló, which hosts the Formula 1 Spanish Grand Prix, the MotoGP Catalan Grand Prix and other international championships .

## Technologies used 💻

We have used Laravel, a PHP framework, to develop the web application. Laravel is a web framework that provides a robust set of tools and components for building modern web applications. Some of its features are:

- MVC architecture
- Routing system
- Database abstraction layer
- Authentication and authorization
- Blade templating engine
- Artisan command-line interface
- Eloquent ORM
- Testing tools

## How to install and run 🚀

To install and run this project, you need to have PHP, Composer and a database server (MySQL, PostgreSQL, etc.) installed on your system. Then, follow these steps:

1. Clone this repository: `git clone https://github.com/Jordi-Buitrago/CircuitAPIweb.git`
2. Navigate to the project folder: `cd circuit-project`
3. Install the dependencies: `composer install`
4. Copy the .env.example file to .env: `cp .env.example .env`
5. Generate an application key: `php artisan key:generate`
6. Configure your database credentials in the .env file
7. Run the migrations and seeders: `php artisan migrate --seed`
8. Start the local development server: `php artisan serve`
9. Open your browser and go to http://localhost:8000

## Features and functionalities 🌟

The web application allows users to:

- Register and log in with email and password
- View the available spaces of the circuit and their details
- Book a space for a specific date and time slot
- Cancel a booking if needed
- View their booking history and status
- Contact the circuit staff for any inquiries or issues

The web application also has an admin panel that allows staff to:

- Log in with email and password
- Manage the spaces of the circuit (add, edit, delete)
- Manage the bookings of the users (approve, reject, cancel)
- Manage the users (view, edit, delete)
- View reports and statistics of the bookings and spaces

## Screenshots 📸

Here are some screenshots of the web application:

![Home page](home.png)
![Booking page](booking.png)
![Admin panel](admin.png)

## Team members 👥

This project was developed by:

- Angel Zamora 
- Abel Reyes
- Jordi Buitrago


## License 📄

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgements 🙏

We would like to thank:

- The Circuit de Catalunya staff for proposing this challenge and providing us with feedback and support.
- The MetropolisFPLab organizers for giving us this opportunity and mentoring us throughout the project.
