create database Unicare;

use Unicare;

create table users (
    email VARCHAR(255) PRIMARY KEY,
    password VARCHAR(255) NOT NULL,
    confirmpassword VARCHAR(255) DEFAULT NULL
);

CREATE TABLE contact_us (    
    email VARCHAR(100) PRIMARY KEY,
	name VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);