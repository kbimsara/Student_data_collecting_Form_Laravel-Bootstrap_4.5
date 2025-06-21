# Student Data Collecting Form (Laravel + Bootstrap 4.5)

A web application for collecting student data, built with Laravel and styled using Bootstrap 4.5. This project demonstrates how to create, validate, and store form data efficiently using modern PHP frameworks and responsive front-end design.

---

## Features

- Student data collection form with validation
- Responsive UI using Bootstrap 4.5
- Data storage using Laravel Eloquent ORM
- Easy-to-customize form fields and validation rules

---

## Installation

1. **Clone the Repository**
```
git clone https://github.com/kbimsara/Student_data_collecting_Form_Laravel-Bootstrap_4.5.git
cd Student_data_collecting_Form_Laravel-Bootstrap_4.5
```

2. **Install Dependencies**
- Make sure you have Composer installed.
- Run:
  ```
  composer install
  ```

3. **Set Folder Permissions**
```
chmod -R 777 storage bootstrap/cache
```

5. **Environment Configuration**
- Copy the example environment file and set your environment variables:
  ```
  cp .env.example .env
  ```
- Generate the application key:
  ```
  php artisan key:generate
  ```
- Update `.env` with your database credentials.

5. **Database Migration**
- Run the migrations to create necessary tables:
  ```
  php artisan migrate
  ```

6. **Serve the Application**
```
php artisan serve
```

- The application will be available at `http://localhost:8000`

---

## Usage

- Access the app in your browser.
- Fill out the student data form and submit.
- Submitted data will be validated and stored in the database.

---

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request with your improvements or bug fixes.

---

## Credits

Developed by [kbimsara]. Inspired by Laravel and Bootstrap open-source projects.

---

> For any questions or support, please open an issue in the repository.

---

**Note:**  
If you encounter issues during setup, ensure your PHP, Composer, and database services are running and your `.env` configuration is correct. For more details on Laravel setup, refer to the [official Laravel documentation](https://laravel.com/docs/).
