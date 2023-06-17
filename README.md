# MetropolisFPLab 🏎️

This project is a web page created with Laravel, Jetstream and Tailwind for the MetropolisFPLab contest. The goal is to make a web page for the Circuit de Barcelona Catalunya that allows them to manage their reservations through an API. 🏁

## Features 🚀

- User authentication with Jetstream and Fortify. 🔐
- Responsive design with Tailwind and Livewire. 💅
- CRUD of reservations with validation and authorization. 📅
- RESTful API with Laravel Sanctum. 🚪

## Requirements 📋

- PHP >= 8.0
- Composer
- Node.js
- MySQL

## Installation 💻

- Clone the repository: `git clone https://github.com/Jordi-Buitrago/CircuitAPIweb.git`
- Enter the project directory: `cd CircuitAPIweb`
- Install the Composer dependencies: `composer install`
- Install the Node.js dependencies: `npm install`
- Copy the .env.example file and rename it to .env: `cp .env.example .env`
- Generate the application key: `php artisan key:generate`
- Configure the environment variables in the .env file, especially those related to the database and the API.
- Run the migrations and seeders: `php artisan migrate --seed`
- Run the development server: `php artisan serve`
- Open the browser and access the address: http://localhost:8000

## Usage 🖱️

- To access the web page, you must create a user account or log in with an existing one. 👤
- To create a reservation, you must go to the Reservations section and fill out the form with the requested data. ✍️
- To view, edit or delete a reservation, you must go to the My Reservations section and click on the corresponding option. 🔍
- To access the API, you must send an HTTP request to the desired endpoint with the authentication token in the Authorization header. The available endpoints are:

  - GET /api/comandes: returns all reservations of the authenticated user. 📄
  - POST /api/comandes: creates a new reservation with the data sent in the body of the request. ➕
  - GET /api/comandes/{id}: returns the reservation with the specified id if it belongs to the authenticated user. 🔎
  - PUT /api/comandes/{id}: updates the reservation with the specified id if it belongs to the authenticated user with the data sent in the body of the request. ✏️
  - DELETE /api/comandes/{id}: deletes the reservation with the specified id if it belongs to the authenticated user. ❌

## License 📝

This project is under the MIT license. See the LICENSE file for more details.

