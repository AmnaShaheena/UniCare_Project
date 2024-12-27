create database Unicare;
use Unicare;
create table users (
    email VARCHAR(255) PRIMARY KEY,
    password VARCHAR(255) NOT NULL,
    confirmpassword VARCHAR(255) DEFAULT NULL
);