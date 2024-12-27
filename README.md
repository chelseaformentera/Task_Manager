# Task_Manager
 its a Laravel-based project designed to streamline task management processes.  allows users to create, and manage.
---

## Features
- User authentication (registration, login, and password reset).
- Create, update, and delete tasks.
- Task status tracking (e.g., pending, in-progress, completed).
- Database-driven task storage.

---

## Requirements
- **PHP** >= 8.0
- **Composer**
- **Laravel** >= 9.x
- **Node.js** >= 16.0
- **Database** MySQL (just use MySQL 😎)

if you want to locate the .sql eextension for db its
in the database folder.

---

## Installation

### Step 1: Clone the Repository
```bash
git clone https://github.com/chelseaformentera/Task_Manager.git
cd Task_Manager
```

### Step 2: Install Dependencies
```bash
composer install
npm install
```

### Step 3: Configure Environment
1. Copy the example environment file:
   ```bash
   cp .env.example .env
   ```
2. Update the `.env` file with your database credentials and other configurations.

### Step 4: Generate Application Key
```bash
php artisan key:generate
```

### Step 5: Run Database Migrations
```bash
php artisan migrate
```

### Step 6: Compile Frontend Assets
```bash
npm run dev
```

### Step 8: Run the Application
```bash
php artisan serve
```
Visit `http://127.0.0.1:8000` in your browser.

 or run Laragon/phpMyadmin if you dont know how to use it heres the link (https://www.youtube.com/watch?v=zIbKfg-tIGM)
---
