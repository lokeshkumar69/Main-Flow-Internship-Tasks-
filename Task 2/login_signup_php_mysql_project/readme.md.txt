
# PHP Login & Signup System 🔐

A secure and modern login and signup system built using **PHP**, **MySQL**, **HTML**, and **CSS**. This project includes user authentication with password hashing, error handling, and session management.

---

## 🚀 Features

- User Registration (with email, username, and password)
- Secure Password Hashing
- User Login with Session Management
- Responsive & Modern UI with CSS
- Dashboard page accessible after login
- Logout functionality

---

## 🛠 Technologies Used

- **Frontend:** HTML5, CSS3
- **Backend:** PHP 8+
- **Database:** MySQL
- **Web Server:** Apache (via XAMPP recommended)

---

## 📂 Folder Structure

```
login_project/
├── config.php
├── register.php
├── login.php
├── dashboard.php
├── logout.php
├── style.css
└── user_auth.sql
```

---

## ⚙️ Setup Instructions

1. **Install XAMPP** (https://www.apachefriends.org/)
2. Place the project folder `login_project` inside `htdocs`:
   ```
   C:/xampp/htdocs/login_project/
   ```

3. Start **Apache** and **MySQL** from XAMPP control panel.

4. Open browser and go to:
   ```
   http://localhost/phpmyadmin
   ```

5. Import the `user_auth.sql` file to create the database and users table:
   - Click on **Import** → Choose file → `user_auth.sql` → Go

6. Visit the project:
   ```
   http://localhost/login_project/register.php
   ```

---

## ✅ Default Pages

- `/register.php` → User registration
- `/login.php` → User login
- `/dashboard.php` → Logged-in user dashboard
- `/logout.php` → Destroy session

---

## 📌 Note

- You must have `style.css` in the same directory as your PHP files.
- Make sure your PHP version supports `password_hash()` and `password_verify()`.

---

## 👨‍💻 Author

Made with ❤️ for learning & practice.
