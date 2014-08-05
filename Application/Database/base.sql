CREATE TABLE IF NOT EXISTS user (
    idUser                 INTEGER,
    login                  VARCHAR(255),
    email                  VARCHAR(255),
    password               VARCHAR(255),
    groupe                 INTEGER,
    time                   INTEGER,
  PRIMARY KEY (idUser)
);

CREATE TABLE IF NOT EXISTS groupe (
    idGroupe             INTEGER,
    label                VARCHAR(20),
  PRIMARY KEY (idGroupe)
);


CREATE TABLE IF NOT EXISTS paste (
    idPaste             VARCHAR(40),
    title               VARCHAR(20),
    refUser             INTEGER,
    time                VARCHAR(255),
    paste               TEXT,
  PRIMARY KEY (idPaste)
);

DELETE FROM user;
DELETE FROM groupe;
DELETE FROM paste;

INSERT INTO user (idUser, login, email, password, groupe, time) VALUES (1, 'anonymous' , 'ano@nymo.us', '0a92fab3230134cca6eadd9898325b9b2ae67998', 3, 1407147081);
INSERT INTO user (idUser, login, email, password, groupe, time) VALUES (2, 'admin' , 'admin@ark.im', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1407147082);
INSERT INTO user (idUser, login, email, password, groupe, time) VALUES (3, 'thehawk' , 'thehawk@hoa-project.net', 'e0618d16d4264938a2f4095855117f3371ea05c2', 2, 1407147092);

INSERT INTO groupe (idGroupe, label) VALUES (1, 'Administrateur');
INSERT INTO groupe (idGroupe, label) VALUES (2, 'Utilisateur');
INSERT INTO groupe (idGroupe, label) VALUES (3, 'Guest');
