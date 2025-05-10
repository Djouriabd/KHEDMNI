CREATE TABLE Client (
    idclient INT AUTO_INCREMENT PRIMARY KEY,
    last_name VARCHAR(100),
    first_name VARCHAR(100),
    age INT,
    address VARCHAR(255),
    phone VARCHAR(20),
    email VARCHAR(100),
    cv_file VARCHAR(255)
);
ALTER TABLE client ADD location VARCHAR(10) ;




CREATE TABLE Company (
    idcompany INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    registration_number VARCHAR(50),
    address VARCHAR(255),
    email VARCHAR(100),
    website VARCHAR(100),
    activity_code VARCHAR(50)
);
INSERT INTO Company (name, registration_number, address, email, website, activity_code)
VALUES 
('Algerie Telecom', 'RC123456', 'Algiers, Didouche Mourad Street', 'contact@algerietelecom.dz', 'www.algerietelecom.dz', '6120'),
('Ooredoo', 'RC654321', 'Algiers, Bab Ezzouar', 'info@ooredoo.dz', 'www.ooredoo.dz', '6130'),
('Djezzy', 'RC789123', 'Algiers, Hydra', 'contact@djezzy.dz', 'www.djezzy.dz', '6140'),
('Mobilis', 'RC456789', 'Algiers, Ben Aknoun', 'support@mobilis.dz', 'www.mobilis.dz', '6150'),
('Sonatrach', 'RC111222', 'Hassi Messaoud, Ouargla', 'contact@sonatrach.dz', 'www.sonatrach.com', '0110');

INSERT INTO Company (name, registration_number, address, email, website, activity_code)
VALUES 
('Naftal', 'RC334455', 'Algiers, Bir Mourad Rais', 'contact@naftal.dz', 'www.naftal.dz', '1920'),
('NATP', 'RC998877', 'Algiers, Kouba', 'info@natp.dz', 'www.natp.dz', '4930'),
('Cevital', 'RC556677', 'Bejaia, Industrial Zone', 'contact@cevital.com', 'www.cevital.com', '1040'),
('AADL', 'RC221100', 'Algiers, El Madania', 'info@aadl.dz', 'www.aadl.dz', '6820'),
('Soummam', 'RC778899', 'Bejaia, Akbou', 'contact@soummam.com', 'www.soummam.com', '1050');



CREATE TABLE Announcement (
    idannonce INT AUTO_INCREMENT PRIMARY KEY,
    announcement_date DATE,
    idclient INT,
    FOREIGN KEY (idclient) REFERENCES Client(idclient)
);
INSERT INTO Announcement (announcement_date) VALUES ('2025-05-10');
INSERT INTO Announcement (announcement_date) VALUES  ('2025-06-01');
INSERT INTO Announcement (announcement_date) VALUES  ('2025-07-15');
INSERT INTO Announcement (announcement_date) VALUES  ('2025-08-14');
INSERT INTO Announcement (announcement_date) VALUES  ('2025-09-11');






CREATE TABLE Internship (
    idstage INT AUTO_INCREMENT PRIMARY KEY,
    field VARCHAR(100),
    type VARCHAR(50),
    idcompany INT,
    FOREIGN KEY (idcompany) REFERENCES Company(idcompany)
);
INSERT INTO Internship (field, type, idcompany) VALUES ('Petroleum Engineering', 'Full-time', 5);
INSERT INTO Internship (field, type, idcompany) 
VALUES
('Computer Science', 'Part-time', 1), 
('Marketing', 'Full-time', 3), 
('Software Engineering', 'Internship', 2), 
('Industrial Maintenance', 'Full-time', 7); 







CREATE TABLE Internship_Announcement (
    idannonce INT,
    idfield INT,
    start_date DATE,
    end_date DATE,
    PRIMARY KEY (idannonce, idfield),
    FOREIGN KEY (idannonce) REFERENCES Announcement(idannonce),
    FOREIGN KEY (idfield) REFERENCES Internship(idstage)
);
INSERT INTO Internship_Announcement (idannonce, idfield, start_date, end_date)
VALUES
(1, 1, '2025-06-01', '2026-06-01'),
(2, 2, '2025-07-01', '2025-11-30'),
(3, 3, '2025-06-15', '2026-01-01'),
(4, 4, '2025-08-01', '2025-12-30'),
(5, 5, '2025-09-01', '2026-02-23');







CREATE TABLE Position (
    idposte INT AUTO_INCREMENT PRIMARY KEY,
    designation VARCHAR(100)
);

ALTER TABLE Position ADD COLUMN idcompany INT,
ADD FOREIGN KEY (idcompany) REFERENCES Company(idcompany);


INSERT INTO Position (designation) VALUES ('Software Developer', 1);
INSERT INTO Position (designation)
VALUES
('Network Engineer', 1),
('Marketing Specialist', 2),    
('Customer Service Rep', 3),    
('HR Assistant', 4),            
('Data Analyst', 5),            
('Mechanical Engineer', 6),     
('Electrical Technician', 7),   
('Graphic Designer', 8),        
('Project Manager', 9);       

SELECT Position.idposte, Position.designation,Company.name AS company_name
FROM Position
JOIN 
    Company ON Position.idcompany = Company.idcompany;

SELECT Company.name AS company_name, COUNT(Position.idposte) AS total_positions
FROM Company
LEFT JOIN 
    Position ON Company.idcompany = Position.idcompany
GROUP BY Company.name;

SELECT Company.name AS company_name, COUNT(Internship_Announcement.idannonce) AS total_announcements
FROM Company
JOIN 
    Internship ON Company.idcompany = Internship.idcompany
JOIN 
    Internship_Announcement ON Internship.idstage = Internship_Announcement.idstage
GROUP BY Company.name;

SELECT field, COUNT(*) AS total_internships
FROM Internship
GROUP BY field;

SELECT COUNT(*) AS total_clients
FROM Client;
