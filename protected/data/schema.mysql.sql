CREATE TABLE tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);

INSERT INTO tbl_user (username, password, email) VALUES ('test1', 'pass1', 'test1@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test2', 'pass2', 'test2@example.com');

/* Teatro */
CREATE TABLE tbl_cinema (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
    description VARCHAR(255) NOT NULL
);

INSERT INTO tbl_cinema (name, description) VALUES ('Poblado', 'Te esperamos');
INSERT INTO tbl_cinema (name, description) VALUES ('Mayorca', 'Te esperamos');

/* Salas */
CREATE TABLE tbl_room (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
    description VARCHAR(255) NOT NULL
);

INSERT INTO tbl_room (name, description) VALUES ('Sala 1', '2D');
INSERT INTO tbl_room (name, description) VALUES ('Sala 2', '4D');

/* Compra boletas */
CREATE TABLE tbl_buy (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cinema_id INTEGER NOT NULL,
    room_id INTEGER NOT NULL,
    title VARCHAR(128) NOT NULL,
    movie_time TIME NOT NULL,
    price DOUBLE(15,2) NOT NULL,
    FOREIGN KEY (cinema_id) REFERENCES tbl_cinema(id),
    FOREIGN KEY (room_id) REFERENCES tbl_room(id)
);

