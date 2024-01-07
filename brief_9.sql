CREATE table company(

    companyID int AUTO_INCREMENT PRIMARY KEY,
    companyName varchar(255) ,
    shortName varchar(10)
);

CREATE table city(
    cityID int AUTO_INCREMENT PRIMARY KEY , 
    cityName varchar(100) 
);


CREATE table bus(

    busID int AUTO_INCREMENT PRIMARY KEY ,
    busNum int ,
    licensePlate varchar(50),
    companyID int ,
    capacity int ,
    FOREIGN KEY (companyID) REFERENCES company(companyID)
);

CREATE TABLE Route (
    routeID INT PRIMARY KEY AUTO_INCREMENT,
    startCityID INT,
    endCityID INT,
    distance VARCHAR(255),
    duration TIME,
    FOREIGN KEY (startCityID) REFERENCES City(cityID),
    FOREIGN KEY (endCityID) REFERENCES City(cityID),
    CONSTRAINT CHECKER CHECK (startCityID != endCityID)
);

CREATE table schedule(

    scheduleID int PRIMARY KEY ,
    arrivalTime date ,
    departureTime date ,
    availableSeats int ,
    busID int ,
    routeID int ,
    FOREIGN KEY (busID) REFERENCES bus(busID),
    FOREIGN KEY (routeID) REFERENCES route(routeID)
);



INSERT INTO company (companyName, shortName, img) VALUES 
('CTM', 'CTM', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/ctm.jpg')),
('TajVoyage', 'TAJ', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/taj.jpg')),
('Bismi Allah Salama', 'BIS', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/bismilah.jpg')),
('SAT First', 'SAT', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgsSAT_First.jpg')),
('Ghazala', 'GHA', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/ghazala.jpg')),
('Al Wissam Addahabi', 'ALW', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/AlWissamAddahabi.jpg')),
('Sotram', 'SOT', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/sotram.jpg')),
('Bab Allah', 'BAB', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/BabAllah.jpg')),
('GloBus Trans', 'GLO', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/GloBus.jpg')),
('Supratours', 'SUP', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/Supratours.jpg')),
('Jana Viajes', 'JAN', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/JanaViajes.jpg')),
('Trans Fadila', 'TRA', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/TransFadila.jpg')),
('Salama Voyages', 'SAL', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/SalamaVoyages.jpg')),
('Itrane Souss', 'ITR', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/ItraneSouss.jpg')),
('Trans Al Yamama', 'TAY', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/TransAlYamama.jpg')),
('Bab Salama', 'BSA', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/BabSalama.jpg')),
('Pullman Du Sud', 'PUL', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/PullmanDuSud.jpg')),
('Trans Annamir', 'TRA', LOAD_FILE('C:/xampp/htdocs/brief_9_smartTravel/smart_travel/imgs/TransAnnamir.jpg'));

