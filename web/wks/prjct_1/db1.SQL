
CREATE TABLE customer_info (
    customerId SERIAL PRIMARY KEY,
    fname VARCHAR(64) NOT NULL,
    lname VARCHAR(64) NOT NULL,
    c_address INT REFERENCES c_address (customer_address),
    email VARCHAR(128) NOT NULL,
    username VARCHAR(32) NOT NULL UNIQUE,
    password VARCHAR(64) NOT NULL
);

CREATE TABLE customer_address (
    addressId SERIAL PRIMARY KEY,
    customerId INT REFERENCES customer (customerId),
    street_address VARCHAR(128) NOT NULL,
    c_state VARCHAR(32) NOT NULL,
    zip VARCHAR(16) NOT NULL,
    county VARCHAR(32) NOT NULL
);

CREATE TABLE customer_review (
    reviewdId SERIAL PRIMARY KEY,
    customerId INT REFERENCES customer (customerId),
    review VARCHAR(256) NOT NULL,
    review_date DATE NOT NULL
);

CREATE TABLE customer_photos (
    photoId SERIAL PRIMARY KEY,
    customerId INT REFERENCES customer (customerId),
    photo VARCHAR(256) NULL
);