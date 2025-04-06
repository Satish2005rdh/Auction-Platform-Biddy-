CREATE TABLE Admin (
    AdminID INT AUTO_INCREMENT PRIMARY KEY,
    AdminName VARCHAR(255) NOT NULL,
    AdminPassword VARCHAR(255) NOT NULL,
    AdminEmail VARCHAR(255) NOT NULL UNIQUE
);


CREATE TABLE Product (
    ProductID INT AUTO_INCREMENT PRIMARY KEY,
    Image VARCHAR(255),               
    ProductName VARCHAR(255) NOT NULL,
    Description TEXT,                 
    Price DECIMAL(10, 2) NOT NULL,    
    ProductStatus ENUM('Available', 'Out of Stock', 'Discontinued') NOT NULL, 
    CategoryName VARCHAR(255),        
    UserName VARCHAR(255),            
    Quantity INT NOT NULL,            
    StartDate DATE,                 
    EndDate DATE,              
    Buyer VARCHAR(255)                
);


CREATE TABLE User (
    UserID INT AUTO_INCREMENT PRIMARY KEY,      
    Name VARCHAR(255) NOT NULL,               
    UserName VARCHAR(255) NOT NULL UNIQUE,  
    Password VARCHAR(255) NOT NULL,           
    Email VARCHAR(255) NOT NULL UNIQUE,         
    Phone VARCHAR(20),                          
    Gender ENUM('Male', 'Female', 'Other') NOT NULL, 
    DOB DATE,                                   
    Address TEXT,                               
    Photo VARCHAR(255)                          
);



CREATE TABLE aNotification (
    NotificationID INT AUTO_INCREMENT PRIMARY KEY,  
    UserName VARCHAR(255) NOT NULL,                 
    Seen BOOLEAN DEFAULT FALSE,                     
    Message TEXT NOT NULL,                          
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP   
);


CREATE TABLE Notification (
    NotificationID INT AUTO_INCREMENT PRIMARY KEY, 
    UserName VARCHAR(255) NOT NULL,                 
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP   
);
