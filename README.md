# Welcome to MyProject!

This is a website that i have build for the school i had studied for organising students details anyone can edit this according to their wish.


# Requirements
1. [XAMPP](https://www.apachefriends.org/download.html)
2. **THE SQL COMMAND FOR THE TABLE - **

        CREATE TABLE students (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) DEFAULT NULL,
        dob DATE DEFAULT NULL,
        gender VARCHAR(10) DEFAULT NULL,
        photo VARCHAR(255) DEFAULT NULL,
        email VARCHAR(255) DEFAULT NULL,
        class VARCHAR(50) DEFAULT NULL,
        house VARCHAR(50) DEFAULT NULL,
        admission_number VARCHAR(50) DEFAULT NULL,
        religion VARCHAR(50) DEFAULT NULL,
        aadhar_number VARCHAR(50) DEFAULT NULL,
        caste VARCHAR(50) DEFAULT NULL,
        category VARCHAR(50) DEFAULT NULL,
        permanent_address TEXT,
        mobile_father VARCHAR(20) DEFAULT NULL,
        mobile_mother VARCHAR(20) DEFAULT NULL,
        other_mobile VARCHAR(20) DEFAULT NULL,
        father_name VARCHAR(255) DEFAULT NULL,
        mother_name VARCHAR(255) DEFAULT NULL,
        father_occupation VARCHAR(255) DEFAULT NULL,
        mother_occupation VARCHAR(255) DEFAULT NULL,
        identification_mark1 TEXT,
        identification_mark2 TEXT,
        blood_group VARCHAR(10) DEFAULT NULL,
        hobbies TEXT,
        ambition TEXT,
        favorite_subject1 VARCHAR(50) DEFAULT NULL,
        favorite_subject2 VARCHAR(50) DEFAULT NULL,
        area_interested1 TEXT,
        area_interested2 TEXT
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

```
