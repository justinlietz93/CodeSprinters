-- Create User Types table
CREATE TABLE IF NOT EXISTS UserTypes (
    UserTypeId INT PRIMARY KEY AUTO_INCREMENT,
    Type VARCHAR(255) NOT NULL
);

-- Create Users table
CREATE TABLE IF NOT EXISTS Users (
    UserId INT PRIMARY KEY AUTO_INCREMENT,
    UserTypeID INT NOT NULL,
    UserName VARCHAR(30) NOT NULL,
    Password VARCHAR(30) NOT NULL,
    FOREIGN KEY (UserTypeID) REFERENCES UserTypes(UserTypeId)
);

-- Create Race table
CREATE TABLE IF NOT EXISTS Race (
    RaceId INT PRIMARY KEY AUTO_INCREMENT,
    Name NVARCHAR(255) NOT NULL,
    Description TEXT,
    Date DATETIME NOT NULL,
    Kilometers DOUBLE NOT NULL,
    Status VARCHAR(50) NOT NULL
);

-- Create RaceRunners table (junction table between Users and Race)
CREATE TABLE IF NOT EXISTS RaceRunners (
    RaceId INT NOT NULL,
    UserId INT NOT NULL,
    Time DOUBLE,
    FOREIGN KEY (RaceId) REFERENCES Race(RaceId),
    FOREIGN KEY (UserId) REFERENCES Users(UserId),
    PRIMARY KEY (RaceId, UserId)
);

-- Insert default user types
INSERT INTO UserTypes (Type) VALUES 
('Admin'),
('Organizer'),
('Runner');

-- Insert test users (Admin and Runner)
INSERT INTO Users (UserName, Password, UserTypeID) VALUES
('admin@test.com', 'admin123', 1),  -- Admin user
('runner@test.com', 'runner123', 3); -- Test runner 