# README.md

# PHP Web Application

This is a simple PHP web application that demonstrates the use of MVC architecture. The application is structured to separate concerns, making it easier to manage and scale.

## Project Structure

- **public/**: Contains the entry point and assets for the web application.
  - **index.php**: The main entry point for the application.
  - **assets/**: Contains CSS and JavaScript files.
    - **css/**: Stylesheets for the application.
    - **js/**: JavaScript files for the application.
  
- **src/**: Contains the core application logic.
  - **config/**: Configuration files.
    - **database.php**: Database connection settings.
  - **controllers/**: Contains controller classes.
    - **Controller.php**: Base controller class.
  - **models/**: Contains model classes.
    - **Model.php**: Base model class.
  - **views/**: Contains view files.
    - **layouts/**: Layout files.
      - **main.php**: Main layout structure.
    - **pages/**: Individual page views.
      - **home.php**: Home page view.
      - **error.php**: Error page view.
  - **utils/**: Utility functions.
    - **helpers.php**: Helper functions for the application.

## Installation

1. Clone the repository:
   ```
   git clone <repository-url>
   ```

2. Navigate to the project directory:
   ```
   cd php-web-app
   ```

3. Install dependencies using Composer:
   ```
   composer install
   ```

4. Configure your database settings in `src/config/database.php`.

5. Set up your web server to point to the `public` directory.

## Usage

Access the application in your web browser at `http://localhost/` (or the appropriate URL based on your server configuration).

## License

This project is licensed under the MIT License.