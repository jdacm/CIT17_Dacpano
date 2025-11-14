CREATE DATABASE IF NOT EXISTS crud_db;
USE crud_db;

CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL
);


INSERT INTO users (name, email, phone) VALUES
('JV Hernandez', 'jv.hernandez@gmail.com', '+639171234001'),
('Ryan Aparato', 'ryan.aparato@gmail.com', '+639171234002'),
('Feli Jacob', 'feli.jacob@outlook.com', '+639171234003'),
('Kenneth Hidalgo', 'kenneth.hidalgo@gmail.com', '+639171234004'),
('Tristan Belingon', 'tristan.belingon@outlook.com', '+639171234005'),
('Ayisha Baterina', 'ayisha.baterina@gmail.com', '+639171234006'),
('Sofia Isidro', 'sofia.isidro@outlook.com', '+639171234007'),
('Kheil D. Great', 'kheil.great@gmail.com', '+639171234008'),
('Miguel Santos', 'miguel.santos@outlook.com', '+639171234009'),
('Angela Reyes', 'angela.reyes@gmail.com', '+639171234010'),
('Luis Cruz', 'luis.cruz@outlook.com', '+639171234011'),
('Maria dela Cruz', 'maria.delacruz@gmail.com', '+639171234012'),
('Jose Ramirez', 'jose.ramirez@outlook.com', '+639171234013'),
('Carla Fernandez', 'carla.fernandez@gmail.com', '+639171234014'),
('Mark Villanueva', 'mark.villanueva@outlook.com', '+639171234015'),
('Nicole Tan', 'nicole.tan@gmail.com', '+639171234016'),
('Renz Lim', 'renz.lim@outlook.com', '+639171234017'),
('Jasmine Ong', 'jasmine.ong@gmail.com', '+639171234018'),
('Edgar Bautista', 'edgar.bautista@outlook.com', '+639171234019'),
('Patricia Mendoza', 'patricia.mendoza@gmail.com', '+639171234020');
