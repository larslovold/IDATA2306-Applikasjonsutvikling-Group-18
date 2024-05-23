-- Create and select the database
CREATE DATABASE IF NOT EXISTS stayfinder;
USE stayfinder;

-- Drop existing tables if they exist
DROP TABLE IF EXISTS hotel_images;
DROP TABLE IF EXISTS listings;
DROP TABLE IF EXISTS orders;
DROP TABLE IF EXISTS favorites;
DROP TABLE IF EXISTS hotels;
DROP TABLE IF EXISTS users;

-- Create hotels table
CREATE TABLE hotels (
                        hotelID INT AUTO_INCREMENT PRIMARY KEY,
                        name VARCHAR(255) NOT NULL,
                        address VARCHAR(255) NOT NULL,
                        website VARCHAR(255),
                        phone_number VARCHAR(20),
                        location_type VARCHAR(255),
                        room_type_available VARCHAR(255),
                        extra_features VARCHAR(255),
                        description TEXT
);

-- Create hotel_images table
CREATE TABLE hotel_images (
                              imageID INT AUTO_INCREMENT PRIMARY KEY,
                              hotelID INT,
                              image_url VARCHAR(255),
                              FOREIGN KEY (hotelID) REFERENCES hotels (hotelID) ON DELETE CASCADE
);

-- Create listings table
CREATE TABLE listings (
                          listingID INT AUTO_INCREMENT PRIMARY KEY,
                          hotelID INT,
                          agency_name VARCHAR(255),
                          price DOUBLE,
                          availability_dates VARCHAR(255),
                          FOREIGN KEY (hotelID) REFERENCES hotels (hotelID) ON DELETE CASCADE
);

-- Create users table
CREATE TABLE users (
                       userID INT AUTO_INCREMENT PRIMARY KEY,
                       username VARCHAR(255) NOT NULL,
                       email VARCHAR(255) NOT NULL,
                       password VARCHAR(255) NOT NULL,
                       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create favorites table
CREATE TABLE favorites (
                           favoriteID INT AUTO_INCREMENT PRIMARY KEY,
                           userID INT,
                           listingID INT,
                           FOREIGN KEY (userID) REFERENCES users (userID) ON DELETE CASCADE,
                           FOREIGN KEY (listingID) REFERENCES listings (listingID) ON DELETE CASCADE
);

-- Create orders table
CREATE TABLE orders (
                        orderID INT AUTO_INCREMENT PRIMARY KEY,
                        userID INT,
                        listingID INT,
                        order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        status VARCHAR(255),
                        FOREIGN KEY (userID) REFERENCES users (userID) ON DELETE CASCADE,
                        FOREIGN KEY (listingID) REFERENCES listings (listingID) ON DELETE CASCADE
);

-- Insert initial data into hotels table
INSERT INTO hotels (name, address, website, phone_number, location_type, room_type_available, extra_features, description) VALUES
                                                                                                                               ('Andante Hotel', 'City Center Address', 'http://andantehotel.com', '000-000-0001', 'City Center', 'Single', 'Complimentary Wi-Fi, Rooftop Pool, 24-hour Gym Access', 'Description for Andante Hotel'),
                                                                                                                               ('Thon Hotel Ålesund', 'Coastal/Fjord View Address', 'http://thonhotelalesund.com', '000-000-0002', 'Coastal/Fjord View', 'Superior', 'Free Breakfast, Fjord View Rooms, Conference Facilities', 'Description for Thon Hotel Ålesund'),
                                                                                                                               ('Scandic Parken', 'Park Proximity Address', 'http://scandicparken.com', '000-000-0003', 'Park Proximity', 'Standard, Plus, Premium', 'In-house Restaurant, Meeting Rooms, EV Charging Stations', 'Description for Scandic Parken');

-- Insert initial data into hotel_images table
INSERT INTO hotel_images (hotelID, image_url) VALUES
                                                  (1, 'http://localhost/images/andante_hotel.jpg'),
                                                  (2, 'http://localhost/images/thon_hotel_ålesund.jpg'),
                                                  (3, 'http://localhost/images/scandic_parken.jpg');

-- Insert initial data into listings table
INSERT INTO listings (hotelID, agency_name, price, availability_dates) VALUES
                                                                           (1, 'Agency 1', 150, '2024-05-20 to 2024-05-25'),
                                                                           (2, 'Agency 2', 200, '2024-06-15 to 2024-06-20'),
                                                                           (3, 'Agency 3', 180, '2024-07-01 to 2024-07-05');

-- Insert initial data into users table
INSERT INTO users (username, email, password) VALUES
                                                  ('user1', 'user1@example.com', 'password1'),
                                                  ('user2', 'user2@example.com', 'password2');

-- Insert initial data into favorites table
INSERT INTO favorites (userID, listingID) VALUES
                                              (1, 1),
                                              (2, 2);

-- Insert initial data into orders table
INSERT INTO orders (userID, listingID, status) VALUES
                                                   (1, 1, 'Confirmed'),
                                                   (2, 2, 'Pending');
