

create database CarRental;

use CarRental;


/* Manager Table*/
CREATE TABLE Manager (
    ManagerID varchar(15) not null,
    F_name varchar(40) not null,
    L_name varchar(40) not null,
    M_Address varchar(100) not null,
    DOB date not null,
    Email varchar(35) CHECK (Email LIKE '%_@_%._%') not null,
 
    CONSTRAINT Manager_PK PRIMARY KEY (ManagerID)
);



/* Manager phone numbers table*/
CREATE TABLE Manager_Tel (
    ManagerID varchar(15) not null,
    TelNo decimal(9,0) not null,

    CONSTRAINT Manager_Tel_PK PRIMARY KEY (TelNo,ManagerID),
    CONSTRAINT Manager_Tel_FK FOREIGN KEY (ManagerID) REFERENCES Manager(ManagerID)
);


/* Report Table */
CREATE TABLE Report (
    Report_ID varchar(15) not null,
	ManagerID varchar(15) not null,
    Report_type varchar(20) not null,
    R_Date date not null,
	Report_description varchar(30) not null,
 
 
    CONSTRAINT Report_PK PRIMARY KEY(Report_ID),
    CONSTRAINT Report_FK FOREIGN KEY(ManagerID) REFERENCES Manager(ManagerID)
);



/* Contact support Table */
CREATE TABLE Contact_Support(
    EmpID varchar (10) not null,
    EmpName char (30) not null,
	NIC varchar(15) not null,
    E_Address varchar(100) not null,
	DOB date not null,
    EmpEmail varchar(35) CHECK (EmpEmail LIKE '%_@_%._%') not null,
 


   CONSTRAINT Contact_Support_PK PRIMARY KEY (EmpID)
);


/* Contact support phone numbers table */
CREATE TABLE Contact_Support_Tel(
     EmpID varchar (10) not null,
     Tel_no decimal (9,0) not null,


     CONSTRAINT Contact_Support_Tel_PK PRIMARY KEY (Tel_no,EmpID),
     CONSTRAINT Contact_Support_Tel_FK FOREIGN KEY (EmpID) References Contact_Support (EmpID)
);


/* Feedback table */
create table Feedback(
    FID varchar (15) NOT NULL,
    UserID varchar(15) NOT NULL,
	EmpID varchar (10) NOT NULL,
    F_Date date NOT NULL,
    Rating float NOT NULL,
    Comment varchar(300),


    constraint Feedback_pk primary key (FID),
    constraint Feedback_FK foreign key(UserID) references Registered_User(UserID),
	constraint Feedback_FK1 foreign key(EmpID) references Contact_Support(EmpID)
);


/* Reservation Table */
create table Reservation(
    ResID varchar(15) NOT NULL,
	AdminID varchar(15) NOT NULL,
    UserID varchar(15) NOT NULL,
	PID varchar(15) NOT NULL,
	CarID varchar(15) NOT NULL,
    ReserveDate date NOT NULL,
    PickupDate date NOT NULL,
	ReturnDate date NOT NULL,
	PickupPlace varchar(100) NOT NULL,

    constraint Reservation_PK primary key (ResID),
    constraint reservation_FK foreign key (AdminID) references Sys_Admin(AdminID),
    constraint reservation_FK1 foreign key (UserID) references Registered_User(UserID),
    constraint reservation_FK2 foreign key (PID) references Package(PID),
    constraint reservation_FK3 foreign key (CarID) references Car(CarID),
    
);

/* Package Table*/
CREATE TABLE Package (
 PID varchar(15) not null,
 Price float not null,
 P_Type varchar(15) not null,
 AdminID varchar(15) not null,
 
 CONSTRAINT Package_PK PRIMARY KEY(PID),
 CONSTRAINT Package_FK FOREIGN KEY(AdminID) REFERENCES Sys_Admin(AdminID)
 
);

/*Admin Table */
CREATE TABLE Sys_Admin (
 AdminID varchar(15) not null,
 F_name varchar(40) not null,
 L_name varchar(40) not null,
 A_Address varchar(100) not null,
 DOB date not null,
 Email varchar(35) CHECK (Email LIKE '%_@_%._%') not null,
 
 constraint Sys_Admin_PK PRIMARY KEY (AdminID)
);


/* Admin phone numbers table */
CREATE TABLE Sys_Admin_Tel(
     AdminID varchar (15) not null,
     TelNo decimal (9,0) not null,


     CONSTRAINT Sys_Admin_Tel_PK PRIMARY KEY (AdminID,TelNo),
     CONSTRAINT Sys_Admin_Tel_FK FOREIGN KEY (AdminID) References Sys_Admin (AdminID)
);

/*Table registered user */
CREATE TABLE Registered_User(
     UserID varchar(15) not null,
     F_Name varchar(40) not null,
     L_Name varchar(40) not null,
     HouseNo varchar(30) not null,
     Street varchar(30) not null,
     City varchar(35) not null,
     Country varchar(20) not null,
     DOB date not null,
     NIC varchar(15) not null,
     Gender varchar(10) not null,
     Email varchar(40) CHECK (Email LIKE '%_@_%._%') not null,
	 AdminID varchar(15) not null,

     CONSTRAINT REG_USER_PK PRIMARY KEY(UserID),
     CONSTRAINT Admin_FK FOREIGN KEY(AdminID) REFERENCES Sys_Admin(AdminID)
);

/* Table registered user phone */
CREATE TABLE User_Tel(
     UserID varchar(15) not null,
     TelNo decimal(10,0) not null,


     CONSTRAINT USER_PHONE_PK PRIMARY KEY(UserID,TelNo),
     CONSTRAINT USER_PHONE_FK FOREIGN KEY(UserID) REFERENCES Registered_user(UserID)
);

/* Inquiry table */
CREATE TABLE Inquiry(
    UserID varchar(15) NOT NULL,
    RefNo varchar(10) NOT NULL,
    Inq_Subject varchar(20) NOT NULL,
    Response_Status varchar(10) NOT NULL, 
    EmpID varchar(10) NOT NULL,


    constraint INQUIRY_PK PRIMARY KEY (RefNo,UserID),
    constraint INQUIRY_FK FOREIGN KEY (UserID) REFERENCES Registered_User(UserID)
);


/* Payment table */
CREATE TABLE Payment(
    Payment_ID varchar(15) NOT NULL,
    P_Date date NOT NULL,
    Method varchar(20) NOT NULL,
    Amount float NOT NULL,
    Confirm_Status varchar(20) NOT NULL, 
    ManagerID varchar(15) NOT NULL,
    UserID varchar(15) NOT NULL,
    ResID varchar(15) NOT NULL,


    constraint Payment_PK PRIMARY KEY (Payment_ID),
    constraint Payment_FK1 FOREIGN KEY (ManagerID) REFERENCES Manager(ManagerID),
    constraint Payment_FK2 FOREIGN KEY (UserID) REFERENCES Registered_User(UserID),
    constraint Payment_FK3 FOREIGN KEY (ResID) REFERENCES Reservation(ResID)
);

/* Car table */
CREATE TABLE Car(
     CarID varchar(15) NOT NULL,
     Model varchar(20) NOT NULL,
     Price float NOT NULL,
     Mileage float NOT NULL,
     CarAvailability varchar(10) NOT NULL, 
     Registration_No varchar(15) NOT NULL,
     Manufacture_Year char(4) NOT NULL,
     FuelType varchar(15) NOT NULL,
     Insurance_Type varchar(50) NOT NULL,


     constraint CAR_PK PRIMARY KEY (CarID)
);




/* Car-Admin M:N relationship table */
CREATE TABLE Car_Admin(
     CarID varchar(15) NOT NULL,
     AdminID varchar(15) NOT NULL,


     constraint CAR_ADMIN_PK PRIMARY KEY (CarID,AdminID),
	 constraint CAR_ADMIN_FK1 FOREIGN KEY (CarID) REFERENCES Car(CarID),
	 constraint CAR_ADMIN_FK2 FOREIGN KEY (AdminID) REFERENCES Sys_Admin(AdminID),
);









/* Manager table details */
INSERT INTO Manager VALUES ('M001' , 'Kalum' , 'Liyanage' , '31/10,Thalangama North,Battaramulla' , '1990-10-23' , 'liyanage1990@gmail.com');
INSERT INTO Manager VALUES ('M002' , 'Sithum' , 'Kariyawasam' , 'No 5,Samagi Mawatha,Nugegoda' , '1995-04-08' , 'sithum123@gmail.com');
INSERT INTO Manager VALUES ('M003' , 'Nimal' , 'Perera' , 'No 7/11,Kandy Road,Kurunagala' , '1988-06-21' , 'nperera88@gmail.com');

/* Manager_Tel table details */
INSERT INTO Manager_Tel VALUES ('M001' , 0718509087);
INSERT INTO Manager_Tel VALUES ('M001' , 0768509067);
INSERT INTO Manager_Tel VALUES ('M002' , 0745509087);
INSERT INTO Manager_Tel VALUES ('M002' , 0777357679);
INSERT INTO Manager_Tel VALUES ('M003' , 0774789345);



/* Reports table details */
INSERT INTO Report VALUES ('R001' , 'M001' , 'Revanue Report' , '2024-03-31' , 'Revenues of year 2021');
INSERT INTO Report VALUES ('R002' , 'M001' , 'Monthly Report' , '2024-03-31' , 'Sales of month of July');
INSERT INTO Report VALUES ('R003' , 'M001' , 'Monthly Report' , '2023-03-31' , 'Sales of month of march');
INSERT INTO Report VALUES ('R004' , 'M001' , 'Vehicle Report' , '2024-03-31' , 'Vehicles of year 2023');
INSERT INTO Report VALUES ('R005' , 'M001' , 'Revanue Report' , '2023-03-31' , 'Revenue of year 2022');


/* contact support table details */
INSERT INTO Contact_Support VALUES ('E001', 'Sandun Sooriyabandara', '93124895400V', 'No 8,Kanangara Mawatha,Galle', '1993-02-02', 'sandun93@gmail.com');
INSERT INTO Contact_Support VALUES ('E002', 'Kalpana Liyanage', '95340009610V', 'No 20,Perera Mawatha,Palawatta', '1995-02-25', 'kal56@gmail.com');
INSERT INTO Contact_Support VALUES ('E003', 'Ruwini Kariyawasam', '94187595460V', 'No 27/10,Temple Road,Nittambuwa', '1994-10-30', 'ruwini@gmail.com');
INSERT INTO Contact_Support VALUES ('E004', 'Devin Lanaroll', '97124125904V', 'No 1,Nelum Mawatha,Rajagiriya', '1997-12-06', 'dlanaroll@gmail.com');
INSERT INTO Contact_Support VALUES ('E005', 'Kamal Dharmasena', '88124871742V', 'No 9,Sausiri Mawatha,Pasyala', '1988-05-13', 'dharmasena88@gmail.com');

/* Contact support phone numbers table details */
INSERT INTO Contact_Support_Tel VALUES ('E001' , 0718509086);
INSERT INTO Contact_Support_Tel VALUES ('E001' , 0768509089);
INSERT INTO Contact_Support_Tel VALUES ('E002' , 0745509012);
INSERT INTO Contact_Support_Tel VALUES ('E003' , 0777357645);
INSERT INTO Contact_Support_Tel VALUES ('E003' , 0774789345);
INSERT INTO Contact_Support_Tel VALUES ('E004' , 0715509034);
INSERT INTO Contact_Support_Tel VALUES ('E005' , 0778357621);
INSERT INTO Contact_Support_Tel VALUES ('E005' , 0764789311);


/* Feedback table details */
INSERT INTO Feedback VALUES ('F01', 'U001', 'E001', '2020-12-23', 4.5, 'The service was excellent, but there is room for improvement in the cleanlines');
INSERT INTO Feedback VALUES ('F02', 'U002', 'E002', '2019-03-03', 3.8, 'The staff was friendly, but the wait time was a bit longer than expected');
INSERT INTO Feedback VALUES ('F03', 'U003', 'E003', '2020-04-12', 5.0, 'Absolutely satisfied with the service. Could not ask for more!');
INSERT INTO Feedback VALUES ('F04', 'U004', 'E004', '2021-08-15', 4.2, 'The food quality was great, but the ambiance could be improved');
INSERT INTO Feedback VALUES ('F05', 'U005', 'E005', '2022-11-17', 3.0, 'The experience was average. Nothing extraordinary');


/* Reservation Table details */
INSERT INTO Reservation VALUES ('R001', 'A001', 'U001', 'P01', 'CR001', '2020-12-23', '2020-12-25', '2020-12-26', 'Kaduwela');
INSERT INTO Reservation VALUES ('R002', 'A002', 'U002', 'P02', 'CR002', '2020-04-10', '2020-04-12', '2020-04-14', 'Kandy');
INSERT INTO Reservation VALUES ('R003', 'A003', 'U003', 'P03', 'CR003', '2022-11-18', '2022-11-20', '2022-11-24', 'Kaduwela');
INSERT INTO Reservation VALUES ('R004', 'A004', 'U004', 'P04', 'CR004', '2022-05-03', '2022-05-05', '2022-05-07', 'Kaduwela');
INSERT INTO Reservation VALUES ('R005', 'A005', 'U005', 'P05', 'CR005', '2023-07-14', '2023-07-16', '2023-07-21', 'Kandy');

/* Package Table details */
INSERT INTO Package VALUES ('P01', '18000', 'Friends', 'A001');
INSERT INTO Package VALUES ('P02', '20000', 'Wedding', 'A002');
INSERT INTO Package VALUES ('P03', '15000', 'Solo', 'A003');
INSERT INTO Package VALUES ('P04', '30000', 'Family', 'A004');
INSERT INTO Package VALUES ('P05', '45000', 'Wedding', 'A005');

/*Admin Table details */
INSERT INTO Sys_Admin VALUES ('A001', 'Deepaka', 'Perera', 'No 5,Thalangama North,Battaramulla', '1978-04-07', 'deepaka1978@gmail.com');
INSERT INTO Sys_Admin VALUES ('A002', 'Gamini', 'Jayasinghe', 'No 11,Namal uyana,Malabe', '1979-06-09', 'jayasinghe79@gmail.com'); 
INSERT INTO Sys_Admin VALUES ('A003', 'Nishantha', 'Lokuvithana', 'No 31/11,Thalangama South,Thalawathugoda', '1980-09-20', 'nlokuvithana@gmail.com'); 
INSERT INTO Sys_Admin VALUES ('A004', 'Sujeewa', 'Bandara', 'No 8,Pipe Road,Gampaha', '1989-03-07', 'bandaras@gmail.com'); 
INSERT INTO Sys_Admin VALUES ('A005', 'Kithsiri', 'Abeysinghe', 'No 18/4,Dewala Road,Piliyandala', '1969-04-14', 'abeyk69@gmail.com'); 



/* Admin phone numbers table details */
INSERT INTO  Sys_Admin_Tel VALUES ('A001' , '0718556087');
INSERT INTO  Sys_Admin_Tel VALUES ('A002' , '0769009067');
INSERT INTO  Sys_Admin_Tel VALUES ('A002' , '0745503487');
INSERT INTO  Sys_Admin_Tel VALUES ('A002' , '0777357645');
INSERT INTO  Sys_Admin_Tel VALUES ('A003' , '0714789095');
INSERT INTO  Sys_Admin_Tel VALUES ('A004' , '0777356379');
INSERT INTO  Sys_Admin_Tel VALUES ('A004' , '0774789302');
INSERT INTO  Sys_Admin_Tel VALUES ('A005' , '0747311679');

/* Registered user table details */
INSERT INTO Registered_User VALUES
('U001', 'Kamala', 'Samanthi', 'No.76/8', 'Main Street', 'Battaramulla', 'Sri Lanka', '2000-09-25', '200056789012', 'Female', 'samanthik@gmail.com','A001'),
('U002', 'Pasan', 'Darshana', 'No.56/2', '1st lane', 'Kandy', 'Sri Lanka', '2001-10-20', '2001543210456', 'Male', 'pasandarshana@gmail.com','A002'),
('U003', 'Sachini', 'Jayalath', 'No.36/8', 'Nugegoda road', 'Nugegoda', 'Sri Lanka', '1998-03-08', '1998890123012', 'Female', 'SachiniJ@gmail.com','A003'),
('U004', 'Rose', 'Siriwardana', 'No.5/14', 'Gemunupura lane', 'Malabe', 'Sri Lanka', '1995-12-30', '1995123012345', 'Female', 'Rose123@gmail.com','A004'),
('U005', 'Sithum', 'Lakshan', 'No.367/3', '3rd lane', 'Badulla', 'Sri Lanka', '1985-07-25', '198589012345', 'Male', 'sithumlak@gmail.com','A005');


/* Registerd user phone numbers table details */
INSERT INTO User_Tel VALUES
('U001',0768907654),
('U001',0762345163),
('U002',0776846859),
('U003',0775647387),
('U003',0749805442);

/* Inquiry table details */
INSERT INTO Inquiry VALUES
('U001','I1','Product inquiry','pending','E001'),
('U003','I2','Payment inquiry','replied','E002'),
('U002','I3','Account inquiry','replied','E003'),
('U004','I3','Insurance inquiry','pending','E005'),
('U005','I4','Package inquiry','replied','E004');

/* payment table details */
INSERT INTO Payment VALUES
('#1','2023-04-15','Credit card', 18000.00,'successful','M001','U001','R001'),
('#2','2023-06-25','Paypal', 6500.00,'successful','M002','U002','R002'),
('#3','2024-01-05','Credit card', 10000.00,'successful','M003','U003','R003'),
('#4','2024-04-29','Debit card', 12000.00,'paid','M002','U004','R004'),
('#5','2024-04-30','Bank transfer', 15000.00,'processing','M003','U005','R005');


/* car table details */
INSERT INTO Car VALUES   
('CR001','Suzuki Alto','6000',200.00,'yes','NW-KV-1256',2010,'Petrol','Full (AIA Insurance)'),
('CR002','Suzuki Every','8000',200.00,'no','WP-CAR-7632',2008,'Petrol','Full (Allianz Insurance)'),
('CR003','Suzuki Wagon R','6500',200.00,'yes','CP-CAQ-7896',2015,'Petrol','Full (AIA Insurance)'),
('CR004','Toyota Prius','10000',200.00,'yes','NW-KW-4531',2012,'Petrol','Full (AIA Insurance)'),
('CR005','Toyota KDH','12000',200.00,'no','WP-CAP-8943',2009,'Diesel','Full (Allianz Insurance)');

/* Car-Admin M:N relationship table details */

INSERT INTO Car_Admin VALUES
('CR001','A001'),
('CR002','A001'),
('CR003','A002'),
('CR003','A003'), 
('CR002','A003'); 







select * from Car;
select * from Car_Admin;
select * from Contact_Support;
select * from Contact_Support_Tel;
select * from Feedback;
select * from Inquiry;
select * from Manager;
select * from Manager_Tel;
select * from Package;
select * from Payment;
select * from Registered_User;
select * from User_Tel;
select * from Report;
select * from Reservation;
select * from Sys_Admin;
select * from Sys_Admin_Tel;





