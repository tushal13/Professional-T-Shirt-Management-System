
# Professional T-Shirt Management System

The Professional T-Shirt Management System is a sophisticated PHP-based solution designed to streamline the management of T-shirt collections. This comprehensive system offers an array of features, including secure user authentication, seamless CRUD operations, and a well-defined API structure.

## Key Features:

### 1. **User Authentication:**
   - Robust authentication system ensuring secure access to T-shirt management functionalities.
   - Authentication is implemented through a username and password mechanism.

### 2. **CRUD Operations:**
   - Perform Create, Read, Update, and Delete operations on T-shirt records effortlessly.
   - API endpoints are designed to handle each operation with efficiency and reliability.

### 3. **API Endpoints:**
   - Well-defined API endpoints facilitate easy integration with front-end applications or external systems.
   - APIs provide access to T-shirt data while maintaining security through user authentication.

## Getting Started:

### Prerequisites:

To embark on an efficient T-shirt management experience, ensure the following prerequisites are met:

- PHP (version X.X.X)
- MySQL or another compatible database server
- A web server (e.g., Apache, Nginx)

### Installation:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/tushal13/t-shirt-management.git
   cd t-shirt-management
   ```

2. **Configure Database:**
   - Set up your database settings in `config/config.php`.

3. **Web Server Setup:**
   - Configure your web server to point to the project directory.

4. **Permissions:**
   - Ensure the web server has the necessary permissions for seamless operation.

## Authentication:

The authentication system requires the inclusion of `admin_username` and `admin_paw` parameters in requests. Example:

```bash
curl -X POST http://yourdomain.com/authenticate.php -d "admin_username=tushal07&admin_paw=tushal.123@"
```

## API Endpoints:

### 1. Get All T-Shirts:
   - **Endpoint:** `GET /get_tshirts.php`
   - **Authentication Required:** Yes
   - **Parameters:** `admin_username`, `admin_paw`

### 2. Add T-Shirt:
   - **Endpoint:** `POST /add_tshirt.php`
   - **Authentication Required:** Yes
   - **Parameters:** `admin_username`, `admin_paw`, `t_shirt`, `price`, `category`

### 3. Update T-Shirt:
   - **Endpoint:** `PUT /update_tshirt.php`
   - **Authentication Required:** Yes
   - **Parameters:** `admin_username`, `admin_paw`, `id`, `t_shirt`, `price`, `category`

### 4. Delete T-Shirt:
   - **Endpoint:** `DELETE /delete_tshirt.php`
   - **Authentication Required:** Yes
   - **Parameters:** `admin_username`, `admin_paw`, `id`

For comprehensive information, refer to the .

## Security Considerations:

- **Secure Authentication:**
  - Utilize secure authentication mechanisms, such as tokens, especially in a production environment.
- **Input Validation:**
  - Ensure thorough input validation to prevent security vulnerabilities.
- **Database Security:**
  - Securely manage database credentials and utilize prepared statements to prevent SQL injection.

## Contributing:

Contributions to the Professional T-Shirt Management System are welcomed! Please follow the  when submitting pull requests.

## License:

This project is licensed under the [GT License](LICENSE).

## Contact:

For any inquiries, please contact [Tushal Gopani](tushalgopani003@gmail.com).
