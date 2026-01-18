# Auth API — Laravel + JWT

This project is a RESTful authentication API built with **Laravel** and **JWT**, designed to provide secure user registration, login, token management, and protected routes.

It was developed as part of the **Hacklab Codecon** challenge, with a strong focus on security, architecture, and best practices.

---

## Features

* User registration with password hashing
* User authentication using JWT
* Token refresh and logout
* Protected routes with middleware
* PostgreSQL database
* Fully containerized with Docker

---

## Tech Stack

* **Backend:** Laravel 12+
* **Authentication:** JWT (tymon/jwt-auth)
* **Database:** PostgreSQL
* **Web Server:** Nginx
* **Containerization:** Docker & Docker Compose

---

## Project Structure

```
.
├── app/
├── bootstrap/
├── config/
├── database/
├── docker/
│   ├── nginx/
│   │   └── default.conf
│   └── php/
│       └── Dockerfile
├── public/
├── routes/
│   └── api.php
├── storage/
├── tests/
├── .env
├── docker-compose.yml
├── Dockerfile
└── README.md
```

---

## Setup & Installation

### Clone the repository

```bash
git clone git@github.com:7acini/auth-api.git
cd auth-api
```

---

### Configure environment variables

Copy the example file:

```bash
cp .env.example .env
```

Update database settings:

```env
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=auth_api
DB_USERNAME=postgres
DB_PASSWORD=your_password
```

Generate the application key:

```bash
php artisan key:generate
```

Generate JWT secret:

```bash
php artisan jwt:secret
```

---

### Run with Docker

Build and start containers:

```bash
docker compose up -d --build
```

Install dependencies inside the container:

```bash
docker compose exec app composer install
```

Run migrations:

```bash
docker compose exec app php artisan migrate
```

---

## Authentication Flow

### Register

**POST** `/api/auth/register`

```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "password123",
  "password_confirmation": "password123"
}
```

---

### Login

**POST** `/api/auth/login`

```json
{
  "email": "john@example.com",
  "password": "password123"
}
```

---

### Get authenticated user

**POST** `/api/auth/me`

Header:

```
Authorization: Bearer <token>
```

---

### Refresh token

**POST** `/api/auth/refresh`

---

### Logout

**POST** `/api/auth/logout`

---

## Security Considerations

* Passwords are hashed using **bcrypt**
* JWT tokens are signed and time-limited
* All protected routes require authentication middleware
* Input validation is enforced on all endpoints
* Sensitive data is stored using environment variables

---

## Environment Variables

Key environment variables:

| Variable      | Description                |
| ------------- | -------------------------- |
| APP_ENV       | Application environment    |
| APP_KEY       | Laravel application key    |
| DB_CONNECTION | Database driver            |
| DB_HOST       | Database service name      |
| DB_PORT       | Database port              |
| DB_DATABASE   | Database name              |
| DB_USERNAME   | Database user              |
| DB_PASSWORD   | Database password          |
| JWT_SECRET    | JWT signing key            |
| AUTH_GUARD    | Authentication guard (api) |

---

## API Architecture

* Stateless authentication using JWT
* Layered architecture: Controllers → Services → Models
* Token lifecycle managed via middleware
* Scalable for microservices or SPA backends

---

## License

This project is licensed under the **MIT License**.

---

## Author

Developed by **Guilherme Facini**
GitHub: [@7acini](https://github.com/7acini)