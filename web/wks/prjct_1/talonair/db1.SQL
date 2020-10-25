
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

CREATE TABLE send_message(
    fullname VARCHAR(64) NOT NULL,
    form_phone VARCHAR(16) NOT NULL,
    form_email VARCHAR(128) NULL,
    form_subject VARCHAR(128) NOT NULL,
    form_message TEXT NOT NULL,
    message_ID SERIAL PRIMARY KEY
);





INSERT INTO send_message(
    fullname, form_phone, form_email, form_subject, form_message
) VALUES ('John Doe','480-363-1234','myemail@email.com','TESTING','This is a test!');