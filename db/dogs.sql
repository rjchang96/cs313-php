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
   , professionalRating INT NOT NULL
   , userRating INT NOT NULL


);

CREATE TABLE users
(
   id SERIAL PRIMARY KEY
   , username VARCHAR(50) UNIQUE NOT NULL
   , password VARCHAR(50) NOT NULL
);

CREATE TABLE comments
(
   id SERIAL PRIMARY KEY
   , content TEXT
   , dog_id INT NOT NULL REFERENCES dog(id)
   , user_id INT NOT NULL REFERENCES users(id)

);

