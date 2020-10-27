//SQL Server - DONE
CREATE TABLE customer_info (
    customerId int PRIMARY KEY NOT NULL,
    fname VARCHAR(64) NOT NULL,
    lname VARCHAR(64) NOT NULL
);

//SQL Server - DONE
CREATE TABLE customer_login (
    loginId int PRIMARY KEY NOT NULL,
    customerId int REFERENCES customer_info(customerId),
    email VARCHAR(128) NOT NULL,
    username VARCHAR(32) NOT NULL,
    password VARCHAR(64) NOT NULL
);

//SQL Server - DONE
CREATE TABLE customer_address (
    addressId int PRIMARY KEY NOT NULL,
    customerId int REFERENCES customer_info(customerId),
    street_address VARCHAR(128) NOT NULL,
    c_city VARCHAR(64) NOT NULL,
    c_state VARCHAR(32) NOT NULL,
    zip VARCHAR(16) NOT NULL
);

//SQL Server - DONE
CREATE TABLE customer_review (
    reviewdId int PRIMARY KEY NOT NULL,
    customerId INT REFERENCES customer_info(customerId),
    review VARCHAR(256) NOT NULL,
    review_date DATE NOT NULL
);


CREATE TABLE customer_photos (
    photoId SERIAL PRIMARY KEY,
    customerId INT REFERENCES customer (customerId),
    photo VARCHAR(256) NULL
);



//worked
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