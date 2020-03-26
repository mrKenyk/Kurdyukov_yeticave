CREATE TABLE categories (
     id INT(11) PRIMARY KEY,
     title varchar(45) NOT NULL,
     alias varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE lots (
     id INT(11) PRIMARY KEY,
     date_create datetime NOT NULL,
     title varchar(45) NOT NULL,
     description text NOT NULL,
     image varchar(100) NOT NULL,
     start_price decimal(10,0) NOT NULL,
     date_end datetime NOT NULL,
     bet_step int(11) NOT NULL,
     user_id int(11) NOT NULL,
     category_id int(11) NOT NULL,
     winner_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE bets (
     id INT(11) PRIMARY KEY,
     date_create datetime NOT NULL,
     price decimal(10,0) NOT NULL,
     user_id int(11) NOT NULL,
     lot_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE users (
     id INT(11) PRIMARY KEY,
     date_register datetime NOT NULL,
     email varchar(100) NOT NULL,
     name varchar(45) NOT NULL,
     password varchar(255) NOT NULL,
     avatar varchar(100) NOT NULL,
     contacts varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE lots
    ADD CONSTRAINT lots_1 FOREIGN KEY (user_id) REFERENCES users (id),
    ADD CONSTRAINT lots_2 FOREIGN KEY (category_id) REFERENCES categories (id),
    ADD CONSTRAINT lots_3 FOREIGN KEY (winner_id) REFERENCES users (id);

ALTER TABLE bets
    ADD CONSTRAINT bets_1 FOREIGN KEY (user_id) REFERENCES users (id),
    ADD CONSTRAINT bets_2 FOREIGN KEY (lot_id) REFERENCES lots (id);
COMMIT;
