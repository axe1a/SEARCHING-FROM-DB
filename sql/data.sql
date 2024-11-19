CREATE TABLE nurse (
    nurse_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email VARCHAR(255),
    gender VARCHAR(255),
    home_address VARCHAR(255),
    date_of_birth DATE,
    nationality VARCHAR(255),
    salary VARCHAR(255),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);