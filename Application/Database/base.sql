CREATE TABLE IF NOT EXISTS paste (
    idPaste             VARCHAR(40),
    title               VARCHAR(20),
    time                VARCHAR(255),
    paste               TEXT,
  PRIMARY KEY (idPaste)
);
