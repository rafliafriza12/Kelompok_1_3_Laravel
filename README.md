# Student Study Center Management System

This repository contains a Laravel project named "Student Study Center Management System." The project has been structured to follow the MVC (Model-View-Controller) design pattern, ensuring a clear separation of concerns within the codebase.

## Getting Started

### Prerequisites

- XAMPP or any compatible local server environment.
- Web browser.
- Basic knowledge of PHP, MySQL, and Laravel.
- Composer (Dependency Management Tool).

# Implementation Steps

## Installation
```bash
git clone https://github.com/rafliafriza12/Kelompok_1_3_Laravel.git
cd Kelompok_1_3_laravel/project
cp .env.example .env
composer install
npm install
php artisan migrate
php artisan db:seed
php artisan serve
npm run dev
```

## Database Migration
1. Create a database named `sscmsdb`.
2. Adjust the database name in the `.env` file.
3. Execute the following commands:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```
4. Import the `sscmsdb.sql` file in phpMyAdmin.

## Deployment
```bash
php artisan serve
```

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
- Farhanul Khair ( 2208107010076 )
- Alfi Zamriza ( 2208107010080 )
- T Farhan Syah ( 2208107010090 )
- Muhammad Mahathir ( 2208107010056 )
- T.M Fadlul Ihsan ( 22081070100 )
- Indriani Miza Alfiyanti ( 2208107010026 )
- Nurfitriyana Sajim (  )
- Saif Syahsyah Hizbullah ()

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Acknowledgements

- Original projects by PHPGurukul.
- Laravel documentation and tutorials.
- MVC implementation inspired by various online Laravel MVC tutorials and resources.
