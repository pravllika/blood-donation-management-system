# blood-donation-management-system
# 🩸 Blood Donation Management System (BDMS)

The **Blood Donation Management System** is a full-stack web application designed to streamline donor-recipient communication, automate donation requests, and manage blood inventory in real-time.

---

## 📌 Project Summary

This system connects **donors**, **recipients**, and **organizations** (e.g. hospitals, blood banks) through a secure and responsive web interface. Built using **PHP** and **MySQL**, the app includes features such as real-time matching, automated triggers, stored procedures, and full CRUD support.

---

## 🛠️ Technologies Used

- PHP (Frontend & Logic)
- MySQL (Database)
- MySQL Workbench (ER Design & Forward Engineering)
- HTML, CSS (UI)
- Rowan University Elvis Server (Hosting)

---

## 💡 Features

- Donor and recipient registration & login
- Blood availability search and request submission
- Admin panel to manage stock and generate reports
- Views, stored procedures, triggers, and functions
- Role-based access control and encryption concepts
- Deployed live on Rowan Elvis server

📍 Live Demo:  
🔗 [http://elvis.rowan.edu/~mettuk56/advanceddatabases/finalproject/index.php](http://elvis.rowan.edu/~mettuk56/advanceddatabases/finalproject/index.php)

---

## 📂 Database Overview

- Donor Table: Stores donor info, blood group, donation history
- Recipient Table: Handles blood request records
- BloodInventory Table: Monitors available stock
- Relationships: `Donates`, `Receives`, `Requests` (mapped via FKs)

Normalized to **3NF** and supports:

- Triggers (e.g. log new donor)
- Functions (e.g. count donors)
- Views and audit logs
- Stored procedures (with transactions)

---

## 👩‍💻 Contributions

**Pravallika Mettukuru**  
- Led database design (ERD, normalization, schema)
- Developed PHP forms (Insert/Update)
- Created stored procedures and final documentation
  
## 📄 Reflective Summary

This project reinforced hands-on skills in:
- Entity-relationship modeling
- Database normalization (1NF, 2NF, 3NF)
- Backend logic with triggers/functions
- Frontend integration via PHP
- Full-stack deployment and debugging

---

## 📃 License

This project was developed for academic purposes at Rowan University.
