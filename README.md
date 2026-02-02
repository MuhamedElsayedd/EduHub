# EduHub 🎓


EduHub is a backend RESTful API for an **E-Learning Platform** built with **Laravel**.
The system supports authentication, role-based access control, course management, lessons, and student progress tracking.

---

## 🚀 Features

### 🔐 Authentication & Authorization

* User registration & login using **Laravel Sanctum**
* Token-based authentication (API-ready)
* Role management using **Spatie Laravel Permission**
* Default role: **Student**
* Protected routes using `auth:sanctum`

### 👥 Roles

* **Admin**: Full control over the system
* **Teacher**: Can create and manage courses & lessons
* **Student**: Can enroll, view lessons, and track progress

### 📚 Courses

* Each course is created and owned by a **Teacher**
* CRUD operations for courses
* Public course listing

### 📖 Lessons

* Lessons belong to a course
* Only the course teacher can manage lessons

### 📊 Progress Tracking

* Track student progress per lesson
* Mark lessons as completed
* View progress per course

---

## 🧱 Tech Stack

* **Laravel 12**
* **PHP 8+**
* **Laravel Sanctum** (Authentication)
* **Spatie Laravel Permission** (Roles & Permissions)
* **MySQL** (Database)
* **Postman** (API Testing)

---

## 📂 Project Structure

```
app/
 ├── Http/
 │   ├── Controllers/Api
 │   ├── Requests
 ├── Services
 ├── Models
 ├── Helpers
routes/
 ├── api.php
tests/
```

* **Controllers**: Handle HTTP requests
* **Services**: Business logic layer
* **Requests**: Validation layer
* **Helpers**: API response formatting

---

## 🔑 Authentication Flow

1. User registers → assigned `student` role by default
2. User logs in → receives Sanctum token
3. Token is used as `Bearer Token` for protected routes

---

## 📌 API Endpoints

### Auth

| Method | Endpoint           | Description       |
| ------ | ------------------ | ----------------- |
| POST   | /api/auth/register | Register new user |
| POST   | /api/auth/login    | Login user        |
| GET    | /api/auth/me       | Get current user  |
| POST   | /api/auth/logout   | Logout user       |

### Courses

| Method | Endpoint          | Access  |
| ------ | ----------------- | ------- |
| GET    | /api/courses      | Public  |
| POST   | /api/courses      | Teacher |
| PUT    | /api/courses/{id} | Teacher |
| DELETE | /api/courses/{id} | Teacher |

### Lessons

| Method | Endpoint                      | Access        |
| ------ | ----------------------------- | ------------- |
| GET    | /api/courses/{course}/lessons | Authenticated |
| POST   | /api/courses/{course}/lessons | Teacher       |

### Progress

| Method | Endpoint                      | Access  |
| ------ | ----------------------------- | ------- |
| POST   | /api/progress/lesson/{lesson} | Student |
| GET    | /api/progress                 | Student |

---

## 🧪 Testing

* Feature tests using **PHPUnit**
* Authentication, login, and role-based access tested

Run tests:

```bash
php artisan test
```

---

## ⚙️ Installation

```bash
git clone https://github.com/MuhamedElsayedd/EduHub.git
cd EduHub
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

---

## 🧑‍💻 Author

**Muhamed Elsayed**
Backend / Full-Stack Developer
📧 Email: [muhameddelsayed@gmail.com](mailto:muhameddelsayed@gmail.com)
🔗 GitHub: [https://github.com/MuhamedElsayedd](https://github.com/MuhamedElsayedd)

---

## 📜 License

This project is open-source and available under the **MIT License**.
