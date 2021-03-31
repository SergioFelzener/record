USE RECORD;

DROP TABLE IF EXISTS working_hours, user, chat;

CREATE TABLE users (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL, 
    password VARCHAR(100) NOT NULL, 
    email VARCHAR(50) UNIQUE NOT NULL, 
    start_date DATE NOT NULL,
    end_date DATE,
    is_admin BOOLEAN NOT NULL DEFAULT false
);

CREATE TABLE worrking_hours (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    user_id INT(6),
    work_date DATE NOT NULL,
    time1 TIME,
    time2 TIME,
    time3 TIME,
    time4 TIME,
    worked_time INT,

    FOREIGN KEY (user_id) REFERENCES users(id),
    CONSTRAINT cons_user_day UNIQUE (user_id, work_date)
);

CREATE TABLE chat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT(6),
    name VARCHAR(100) NOT NULL,
    message VARCHAR(255) NOT NULL,

    FOREIGN KEY (user_id) REFERENCES users(id)
);


-- senha é a.
INSERT INTO users(name, password, email, start_date, end_date, is_admin)
VALUES('Admin', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'admin@record.com', '2000-1-1', null, 1);

INSERT INTO users(name, password, email, start_date, end_date, is_admin)
VALUES('Andre', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'andre@record.com', '2002-1-1', null, 0);

INSERT INTO users(name, password, email, start_date, end_date, is_admin)
VALUES('Paulo', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'paulo@record.com', '2003-1-1', null, 0);

INSERT INTO users(name, password, email, start_date, end_date, is_admin)
VALUES('Ana', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'ana@record.com', '2004-1-1', null, 0);

INSERT INTO users(name, password, email, start_date, end_date, is_admin)
VALUES('Fabio', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'fabio@record.com', '2007-1-1', null, 1);

INSERT INTO users(name, password, email, start_date, end_date, is_admin)
VALUES('Junior', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'junior@record.com', '2010-1-1', null, 1);

INSERT INTO users(name, password, email, start_date, end_date, is_admin)
VALUES('Marta', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'marta@record.com', '2000-1-1', null, 0);

INSERT INTO users(name, password, email, start_date, end_date, is_admin)
VALUES('Julia', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'julia@record.com', '2011-1-1', null, 0);

INSERT INTO users(name, password, email, start_date, end_date, is_admin)
VALUES('Rubens', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'rubens@record.com', '2016-1-1', null, 0);

INSERT INTO users(name, password, email, start_date, end_date, is_admin)
VALUES('Sergio', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'sergio@record.com', '2017-1-1', null, 1);

INSERT INTO users(name, password, email, start_date, end_date, is_admin)
VALUES('Daniel', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'daniel@record.com', '2006-1-1', null, 1);