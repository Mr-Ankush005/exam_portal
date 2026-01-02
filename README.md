# Online Exam Portal

A simple, role-based **Online Exam Portal** built with **PHP & MySQL**. The system supports **student registration with admin approval**, **course & question management**, **online exams**, and **automatic result calculation**.

---

## 🚀 Features

### 👨‍🎓 Student

* Register for an exam course
* Login after admin approval
* View dashboard (name, email, course)
* Update profile (limited fields)
* Attempt course-wise exam
* View auto-generated result

### 🧑‍💼 Admin

* Login with default credentials
* Approve student registrations
* Create courses
* Set MCQ questions (course-wise)
* Change own password

---

## 🛠 Tech Stack

* **Frontend:** HTML, CSS
* **Backend:** PHP (Procedural)
* **Database:** MySQL
* **Server:** XAMPP / WAMP

---

## 🗄 Database Structure

### Database Name

```
exam_portal
```

### Tables

* `login` – stores admin and approved users
* `student_details` – student registration data
* `courses` – available exam courses
* `questions` – MCQ questions
* `results` – exam results

(Default admin is inserted manually into the `login` table.)

---

## 🔐 Default Admin Login

```
Username: admin
Password: admin
```

---

## 📁 Project Folder Structure

```
exam_portal/
│
├── index.php
├── db.php
├── login.php
├── login_process.php
├── logout.php
│
├── register.php
├── register_process.php
├── registration_success.php
│
├── admin_dashboard.php
├── check_registration.php
├── approve_user.php
├── create_course.php
├── set_question.php
├── admin_update_profile.php
│
├── user_dashboard.php
├── user_update_profile.php
├── exam_portal.php
├── submit_exam.php
├── result.php
│
└── README.md
```

---

## 🔄 Application Flow

1. Student registers → Status = `N`
2. Admin logs in → Approves student
3. Student data inserted into `login` table
4. Student logs in → Access user dashboard
5. Student gives exam → Result stored & shown

---

## ⚠️ Important Rules

* Only admin can approve students
* Students cannot change email, course, or status
* One login page for both admin and users
* Exam is course-based

---

## 📝 How to Run

1. Install **XAMPP/WAMP**
2. Start **Apache** and **MySQL**
3. Import the SQL file into phpMyAdmin
4. Place project inside `htdocs` folder
5. Open browser and visit:

```
http://localhost/exam_portal/index.php
```

---

## 📌 Future Enhancements

* Timer-based exam
* Random questions
* Pass/Fail logic
* Certificate generation
* Admin result analytics

---

## 👨‍💻 Author

Developed as an academic project for learning **PHP, MySQL, CRUD operations, and session-based authentication**.

---

## ✅ License

This project is for **educational purposes only**.
