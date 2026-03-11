# 🏋️‍♂️ LaraGym: Comprehensive Gym Management System

LaraGym is a robust, full-stack web application designed to streamline gym operations. Built with **PHP** and **MySQL**, it provides a centralized platform for administrators and staff to manage memberships, schedules, and financial transactions efficiently.



---

## 🚀 Key Features

### 🔐 Multi-Level Authentication
* **Admin Dashboard:** Full control over system settings, staff management, and financial reporting.
* **Staff Access:** Focused tools for member check-ins, attendance, and class management.

### 👥 Member Management
* Complete CRUD functionality for member profiles.
* Track membership status (Active, Expired, Pending).
* Automated membership ID generation.

### 📅 Scheduling & Attendance
* **Class Management:** Create and assign trainers to specific workout sessions.
* **Attendance Tracking:** Digital logs for member visits and class participation.

### 💳 Payment Processing
* Generate invoices and track payment history.
* Monitor revenue streams and outstanding balances.

---

## 🛠️ Tech Stack

* **Backend:** PHP (Procedural/OOP)
* **Database:** MySQL
* **Frontend:** HTML5, CSS3, JavaScript (Bootstrap for responsive UI)
* **Server:** XAMPP / WAMP / Apache

---

## 📦 Installation & Setup

1.  **Clone the repository:**
    ```bash
    git clone [https://github.com/raymondoyondi/LaraGym.git](https://github.com/raymondoyondi/LaraGym.git)
    ```

2.  **Database Configuration:**
    * Open your MySQL management tool (e.g., phpMyAdmin).
    * Create a new database named `laragym`.
    * Import the provided `.sql` file located in the `/database` folder.

3.  **Environment Setup:**
    * Move the project folder to your local server directory (e.g., `htdocs` for XAMPP).
    * Update `config.php` (or your database connection file) with your local credentials:
    ```php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'laragym');
    ```

4.  **Run the App:**
    * Start Apache and MySQL in your XAMPP/WAMP control panel.
    * Navigate to `http://localhost/LaraGym` in your browser.

---

## 🗺️ Database Schema



The system relies on a relational structure to ensure data integrity between members, payments, and schedules:
* `members` ↔ `payments` (One-to-Many)
* `classes` ↔ `trainers` (Many-to-One)
* `members` ↔ `attendance` (One-to-Many)

---

## 🤝 Contributing

Contributions make the open-source community an amazing place to learn and create. 
1. Fork the Project.
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`).
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`).
4. Push to the Branch (`git push origin feature/AmazingFeature`).
5. Open a Pull Request.

---

## 📝 License

Distributed under the MIT License. See `LICENSE` for more information.
