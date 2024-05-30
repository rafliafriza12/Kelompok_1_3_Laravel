# Student Study Center Management System

This repository contains a Laravel project named "Student Study Center Management System." The project has been structured to follow the MVC (Model-View-Controller) design pattern, ensuring a clear separation of concerns within the codebase.

## Getting Started

### Prerequisites

- XAMPP or any compatible local server environment.
- Web browser.
- Basic knowledge of PHP, MySQL, and Laravel.
- Composer (Dependency Management Tool).

### Installation

1. *Download and Install XAMPP:*

   - Download XAMPP from the [official website](https://www.apachefriends.org/index.html).
   - Install XAMPP and start the Apache and MySQL modules from the XAMPP Control Panel.

2. *Clone the Repository:*

   - Clone this repository to your local machine or download the ZIP file and extract it.

3. *Install Composer:*

   - Download and install Composer from [here](https://getcomposer.org/download/).

4. *Install Laravel Dependencies:*

   - Open a terminal and navigate to the project directory.
   - Run the following command to install all necessary dependencies:
     bash
     composer install
     

5. *Set Up Environment Configuration:*

   - Duplicate the .env.example file and rename it to .env.
   - Update the .env file with your database configuration and other environment variables.

6. *Generate Application Key:*

   - Run the following command to generate a new application key:
     bash
     php artisan key:generate
     

7. *Import the Database:*

   - Open phpMyAdmin by navigating to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).
   - Create a new database named studycenterdb.
   - Import the SQL file provided in the project directory (studycenterdb.sql).

### Running the Project

1. *Migrate and Seed the Database:*

   - Run the following command to migrate and seed the database:
     bash
     php artisan migrate --seed
     

2. *Start the Development Server:*

   - Run the following command to start the Laravel development server:
     bash
     php artisan serve
     

3. *Open the Project in Your Browser:*

   - Navigate to [http://localhost:8000](http://localhost:8000) to access the application.

## Project Structure

Each project follows the MVC pattern with the following directory structure:

- *app/Models*: Contains all the model classes for database interaction.
- *resources/views*: Contains all the view files for rendering the user interface.
- *app/Http/Controllers*: Contains all the controller classes for handling the logic and user input.
- *config*: Contains configuration files, including database configuration.
- *public*: Contains publicly accessible files such as index.php and assets (CSS, JS, images).
- *routes*: Contains the route definitions for the application.
- *database*: Contains database migrations and seeders.

## Contributors

- Rafli Afriza Nugraha ( 2208107010028 )
- Glenn Hakim ( 2208107010072 )
- Ganang Setyo Hadi ( 2208107010052 )
- Athar Rayyan Muhammad ( 2208107010074 )
- Farhanul Khair ( 22081070100 )
- Alfi Zamriza ( 22081070100 )
- T Farhansyah ( 22081070100 )
- Muhammad Mahathir ( 2208107010056 )
- T.M Fadlul Ihsan ( 22081070100 )
- Indriani Miza Alfiyanti ( 22081070100 )
- Nurfitriyana Sajim (  )

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Acknowledgements

- Original projects by PHPGurukul.
- Laravel documentation and tutorials.
- MVC implementation inspired by various online Laravel MVC tutorials and resources.
