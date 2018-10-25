CREATE TABLE lunette
(
  numero INTEGER,
  marque STRING,
  modèle STRING,
  genre CHARACTER,
  style STRING,
  forme INTEGER,
  couleur STRING,
  materiaux STRING,
  prix INTEGER,
  FOREIGN KEY(forme) REFERENCES forme(id)
);

CREATE TABLE forme
(
  id INTEGER PRIMARY KEY,
  nom STRING
);

CREATE TABLE login
(
  login STRING,
  motdp STRING
);
