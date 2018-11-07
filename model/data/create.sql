CREATE TABLE lunette
(
  numero INTEGER,
  marque STRING,
  modele STRING,
  genre CHARACTER,
  style STRING,
  forme INTEGER,
  couleur STRING,
  materiau STRING,
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
/*
sqlite3 lunette.db

drop table lunette;
drop table forme;
drop table login;
.read create.sql

.separator |
.import produit.txt lunette
.separator |
.import forme.txt forme


.quit
*/
