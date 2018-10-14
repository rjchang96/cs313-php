CREATE TABLE breeds
(
   id SERIAL PRIMARY KEY
   , name VARCHAR(50) UNIQUE NOT NULL
   , description VARCHAR(50) NOT NULL
   , temperment VARCHAR(50) NOT NULL
   , hyperAllergenic BOOLEAN NOT NULL
   , foodCost  INT NOT NULL
   , size VARCHAR(50) NOT NULL
   , exercise INT NOT NULL


);