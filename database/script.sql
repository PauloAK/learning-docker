CREATE DATABASE IF NOT EXISTS api_database;

CREATE TABLE users (
    SERIAL id,
    VARCHAR(50) name
);

INSERT INTO users (name) VALUES
('John Doe'),
('Albert Doe'),
('Martin Doe');