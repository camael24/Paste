CREATE TABLE IF NOT EXISTS user (
    idUser                 INTEGER,
    login                  VARCHAR(255),
    email                  VARCHAR(255),
    password               VARCHAR(255),
    group                  INTEGER,
    time                   INTEGER,
  PRIMARY KEY (idUser)
);

CREATE TABLE IF NOT EXISTS group (
    idGroup             INTEGER,
    label               VARCHAR(20),
  PRIMARY KEY (idGroup)
);


CREATE TABLE IF NOT EXISTS paste (
    idPaste             INTEGER,
    title               VARCHAR(20),
    refUser             INTEGER,
    time                VARCHAR(255),
    paste               TEXT
  PRIMARY KEY (idPaste)
);

DELETE FROM user;
DELETE FROM group;
DELETE FROM paste;

INSERT INTO user (idUser, login, email, password, group, time) VALUES (null, 'admin' , 'admin@ark.im', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1407147082);
INSERT INTO user (idUser, login, email, password, group, time) VALUES (null, 'thehawk' , 'thehawk@hoa-project.net', 'e0618d16d4264938a2f4095855117f3371ea05c2', 2, 1407147092);

INSERT INTO group (idGroup, label) VALUES (1, 'Administrateur');
INSERT INTO group (idGroup, label) VALUES (2, 'Utilisateur');
