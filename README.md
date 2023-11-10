### Project Introduction:

**Laravel Blog API**

The Laravel Blog API is a simple web API project developed to facilitate CRUD (Create, Read, Update, Delete) operations for blog categories and posts. Built on the Laravel framework, this API provides a seamless experience for managing and interacting with blog-related data.

### Getting Started:

#### Prerequisites:

- [PHP](https://www.php.net/) installed
- [Composer](https://getcomposer.org/) for Laravel dependency management

#### Installation:

1. Clone the repository:

    ```bash
    git clone [https://github.com/RanjanNagarkoti/blog.git]
    ```

2. Navigate to the project directory:

    ```bash
    cd blog
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

#### Configuration:

1. Duplicate the `.env.example` file and rename it to `.env`.
2. Configure your database connection details in the `.env` file.

#### Running the Project:

1. Run migrations and seed the database:

    ```bash
    php artisan migrate --seed
    ```

2. Start the Laravel development server:

    ```bash
    php artisan serve
    ```

3. Open your web browser and visit [http://localhost:8000](http://localhost:8000) to access the API.

### API Endpoints:

- **Categories:**
  - List all categories: `GET /api/categories`
  - Show a specific category: `GET /api/categories/{id}`
  - Create a new category: `POST /api/categories`
  - Update a category: `PUT /api/categories/{id}`
  - Delete a category: `DELETE /api/categories/{id}`

- **Blogs:**
  - List all blogs: `GET /api/blogs`
  - Show a specific blog: `GET /api/blogs/{id}`
  - Create a new blog: `POST /api/blogs`
  - Update a blog: `PUT /api/blogs/{id}`
  - Delete a blog: `DELETE /api/blogs/{id}`

### Additional Notes:

- This API uses Laravel Eloquent models for database interactions.
- Feel free to explore the provided [Postman](https://www.postman.com/) collection for sample requests.

### Conclusion:

Happy coding!