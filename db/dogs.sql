CREATE TABLE breeds
(
   id SERIAL PRIMARY KEY
   , name VARCHAR(50) UNIQUE NOT NULL
   , description VARCHAR(50) NOT NULL
   , P_temperment VARCHAR(50) NOT NULL
   , hyperAllergenic BOOLEAN NOT NULL
   , P_cost  INT NOT NULL
   , size VARCHAR(50) NOT NULL
   , P_exercise INT NOT NULL
   , professionalRating INT NOT NULL
   , overallUserRating INT NOT NULL
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
   , breeds_id INT NOT NULL REFERENCES breeds(id)
   , user_id INT NOT NULL REFERENCES users(id)

);

CREATE TABLE userRating
(
   id SERIAL PRIMARY KEY
   , breeds_id INT NOT NULL REFERENCES breeds(id)
   , user_id INT NOT NULL REFERENCES users(id)
   , temperment INT NOT NULL
   , exercise INT NOT NULL
   , cost INT NOT NULL
);

